<nav class="h-15vv bg-nav flex flex-row justify-start items-center space-x-2 p-3">
    <a href="{{ route('main') }}" class="btn btn-primary" href="">Inicio</a>
    <a href="{{ route('dwes') }}" class="btn btn-success">DWEC</a>
    @auth
        <a href="{{route("alumnos.index")}}" class=" btn btn-secondary" href="">Alumnos</a>
        <a href="{{route("profesores.index")}}" class=" btn btn-warning" href="">Profesores</a>
    @endauth
</nav>



