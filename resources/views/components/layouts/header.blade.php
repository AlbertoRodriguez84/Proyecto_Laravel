<!--<header class="h-15v bg-header p-5 flex justify-between items-center">
    <img class="max-h-full" src="{{ asset('images/Logo.png') }}" alt="Logo">
    <h1 class="text-5xl text-white" >Proyecto Laravel</h1>
    <div>
        <a href="/login" class="btn btn-outline-warning">Entrar</a>
        <a href="/register" class="btn btn-outline-warning">Registro</a>
    </div>
</header>
> -->
<header class="h-15v bg-header p-5 flex justify-between items-center">
    <img class="max-h-full" src="{{ asset('images/Logo.png') }}" alt="Logo">
    <h1 class="text-5xl text-white">Proyecto de Laravel</h1>
    <div class="flex items-center">

        @guest

            <a href="/login" class="btn btn-primary mr-2">Acceso</a>
            <a href="/register" class="btn btn-secondary mr-2">Registro</a>
        @endguest

        @auth

            <h1 class="text-2xl text-white mr-4">{{ auth()->user()->name }}</h1>
            <form action="{{ route("logout") }}" method="POST">
                @csrf
                <input class="btn btn-glass" type="submit" value="Salir">
            </form>
        @endauth
    </div>
</header>
