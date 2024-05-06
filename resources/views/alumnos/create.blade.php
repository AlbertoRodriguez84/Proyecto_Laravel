<x-layouts.layout>
    <h1 class="text-4xl text-red-600 font-bold flex justify-center">Alta nuevos alumnos</h1>
    <div class="flex justify-center p-5 bg-gray-200">
        <form method="POST" action="{{ route('alumnos.store') }}" class="bg-white p-7 rounded-3xl">
            @csrf
            <x-input-label for="nombre">Nombre</x-input-label>
            <x-text-input name="nombre" value="{{ old('nombre') }}"/>
            @if($errors->get("nombre"))
                @foreach($errors->get("nombre") as $error)
                    <div class="text-sm text-red-600">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <x-input-label for="DNI">DNI</x-input-label>
            <x-text-input name="DNI" value="{{ old('DNI') }}"/>

            <x-input-label for="email">Email</x-input-label>
            <x-text-input name="email" value="{{ old('email') }}"/>
            @if($errors->get("email"))
                @foreach($errors->get("email") as $error)
                    <div class="text-sm text-red-600">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <x-input-label for="edad">Edad</x-input-label>
            <x-text-input name="edad" value="{{ old('edad') }}"/>
            @if($errors->get("edad"))
                @foreach($errors->get("edad") as $error)
                    <div class="text-sm text-red-600">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <br>
            <button class="btn btn-primary mt-10" type="submit">Guardar</button>
            <a href="{{ route('alumnos.index') }}" class="btn btn-primary mx-2 mt-10">Cancelar</a>

        </form>
    </div>
</x-layouts.layout>
