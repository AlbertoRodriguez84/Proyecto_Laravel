<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
<<<<<<< HEAD
use Illuminate\Http\Request;
=======

>>>>>>> a0f4dec62b98284b165806f7ac4da911dd88915f
class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
<<<<<<< HEAD
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
=======
    public function index()
    {
        //
>>>>>>> a0f4dec62b98284b165806f7ac4da911dd88915f
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        return view("profesores.create");
=======
        //
>>>>>>> a0f4dec62b98284b165806f7ac4da911dd88915f
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesorRequest $request)
    {
<<<<<<< HEAD
        $datos = $request->validated();
        $profesor = new Profesor($datos);
        $profesor->save();
        session()->flash("status", "Se ha creado el profesor $profesor->nombre");
        return redirect()->route('profesores.index');
=======
        //
>>>>>>> a0f4dec62b98284b165806f7ac4da911dd88915f
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
<<<<<<< HEAD
=======
        //
>>>>>>> a0f4dec62b98284b165806f7ac4da911dd88915f
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesorRequest $request, Profesor $profesor)
    {
<<<<<<< HEAD

=======
        //
>>>>>>> a0f4dec62b98284b165806f7ac4da911dd88915f
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
<<<<<<< HEAD

=======
        //
>>>>>>> a0f4dec62b98284b165806f7ac4da911dd88915f
    }
}
