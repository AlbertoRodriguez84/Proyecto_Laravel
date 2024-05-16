<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('search');

        if ($query) {
            $alumnos = Alumno::where('nombre', 'LIKE', '%' . $query . '%')
                ->orWhere('DNI', 'LIKE', '%' . $query . '%')
                ->orWhere('email', 'LIKE', '%' . $query . '%')
                ->paginate(8);
        } else {
            $alumnos = Alumno::paginate(8);
        }

        return view('alumnos.index', compact('alumnos'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("alumnos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        $datos = $request->validated();
        $alumno = new Alumno($datos);
        $alumno->save();
        session()->flash("status", "Se ha creado el alumno $alumno->nombre");
        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $page = request()->input('page') ?? 1;
        //dd($page); // Para verificar si el valor de la página es correcto
        return view("alumnos.edit", compact("alumno", "page"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        $datos = $request->validated();
        $alumno->update($datos);
        session()->flash("status", "Se ha actualizado el alumno $alumno->id");
        $page = $request->input('page') ?? 1;
        return redirect()->route('alumnos.index', ['page' => $page]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $page = request()->input('page') ?? 1;
        session()->flash("status", "Se ha borrado el alumno $alumno->nombre");
        $alumno->delete();
        return redirect()->route('alumnos.index', ['page' => $page]);
    }
}
