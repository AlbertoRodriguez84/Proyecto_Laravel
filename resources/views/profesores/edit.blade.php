<x-layouts.layout>
    <h1 class="text-4xl text-red-600 font-bold flex justify-center">Editar profesores</h1>
    <div class="flex justify-center p-5 bg-gray-200">
        <form id="editForm" method="POST" action="{{ route('profesores.update', $profesor->id) }}" class="bg-white p-7 rounded-3xl">
            @method('PUT')
            @csrf
            <input type="hidden" name="page" value="{{ $page }}" />

            <x-input-label for="nombre">Nombre</x-input-label>
            <x-text-input name="nombre" value="{{ $profesor->nombre }}" />
            @if($errors->get("nombre"))
                @foreach($errors->get("nombre") as $error)
                    <div class="text-sm text-red-600">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <x-input-label for="DNI">DNI</x-input-label>
            <x-text-input name="DNI" value="{{ $profesor->DNI }}" />

            <x-input-label for="email">Email</x-input-label>
            <x-text-input name="email" value="{{ $profesor->email }}"/>
            @if($errors->get("email"))
                @foreach($errors->get("email") as $error)
                    <div class="text-sm text-red-600">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <x-input-label for="edad">Edad</x-input-label>
            <x-text-input name="edad" value="{{ $profesor->edad }}" />
            @if($errors->get("edad"))
                @foreach($errors->get("edad") as $error)
                    <div class="text-sm text-red-600">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <h1>Datos del tutor</h1>
            {{$profesor->profesor->nombre}}<br/>
            {{$profesor->profesor->email}}<br/>
            <br>
            <button class="btn btn-primary mt-10" type="button" onclick="confirmacionGuardado()">Guardar</button>
            <a href="{{ route('profesores.edit', ['profesor' => $profesor->id, 'page' => $page]) }}" class="btn btn-primary mx-2 mt-10">Editar</a>
        </form>
    </div>
</x-layouts.layout>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function confirmacionGuardado() {
        Swal.fire({
            title: '¿Estás seguro?',
            text: '¡Estás a punto de guardar los cambios!',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, guardar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('editForm').submit();
            }
        });
    }
</script>
