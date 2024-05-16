<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page = request()->page;
        $alumnos = Alumno::paginate(8);
        return view('alumnos.index', compact('alumnos', 'page'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("alumnos.create");
        //
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
        return view ("alumnos.edit", compact("alumno"));
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {
        $datos= $request -> input();
        $alumno-> update($datos);
        session()->flash ("status", "Se ha actualizado el alumno $alumno->id");
        return redirect() -> route('alumnos.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        session()->flash("status","Se ha borrado el alumno $alumno->nombre");
        $alumno->delete();
        return redirect() -> route('alumnos.index');
        //
    }
}
