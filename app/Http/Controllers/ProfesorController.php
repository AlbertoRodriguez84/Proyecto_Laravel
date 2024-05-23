<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
use Illuminate\Http\Request;
class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('search');

        if ($query) {
            $profesores = Profesor::where('nombre', 'LIKE', '%' . $query . '%')
                ->orWhere('DNI', 'LIKE', '%' . $query . '%')
                ->orWhere('email', 'LIKE', '%' . $query . '%')
                ->withCount('alumnos')
                ->paginate(8);
        } else {
            $profesores = Profesor::withCount('alumnos')->paginate(8);
        }

        return view('profesores.index', compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("profesores.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesorRequest $request)
    {
        $datos = $request->validated();
        $profesor = new Profesor($datos);
        $profesor->save();
        session()->flash("status", "Se ha creado el profesor $profesor->nombre");
        return redirect()->route('profesores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesorRequest $request, Profesor $profesor)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {

    }
}
