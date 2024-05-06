<x-layouts.layout>
    <h1 class="text-4xl text-red-600 font-bold flex flex-row justify-center">Alta nuevos alumnos</h1>
    <div class="flex flex-row justify-center p-5 bg-gray-200 ">

        <form method="POST" action="{{ route('alumnos.store') }}" method="POST" class="bg-white p-7 rounded-3xl">
            @csrf
            <x-input-label for="nombre">
                Nombre
            </x-input-label>
            <x-text-input name="nombre" />
            <x-input-label for="DNI">
                DNI
            </x-input-label>
            <x-text-input name="DNI" />
            <x-input-label for="email">
                Email
            </x-input-label>
            <x-text-input name="email" />
            <x-input-label for="edad">
                Edad
            </x-input-label>
            <x-text-input name="edad" />
            <br/>
            <button class="btn btn-primary mx-2 mt-10 p-100 " type="submit" value="Guardar">Guardar</button>
            <a href="{{ route('alumnos.index') }}" class="btn btn-primary mx-2 mt-10">Cancelar</a>


        </form>
    </div>
</x-layouts.layout>
