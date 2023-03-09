<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body>
<div id="app">
    <header class="h-17vh bg-blue-200 border-2 p-5
                flex flex-row justify-between content-center">
        <img src="{{asset("img/logo.png")}}" alt="">
        <h1>Tremendo examen Manuel, soy Mario</h1>
        @guest
            <div>
                <a href="login">Login</a>
                <a href="register">Register</a>
            </div>
        @endguest
        @auth
            Conectado como {{auth()->User()->name}}
            <form action="logout" method="post">
                @csrf
                <input type="submit" value="Logout">
            </form>
        @endauth
    </header>
    <nav class="h-12vh bg-emerald-300 border-2 px-10
                flex flex-row justify-between content-center">
        <a class="h-1" href="{{route("alumnos.index")}}">Mostrar Alumnos</a>
    </nav>
    <main class="bg-red-300 border-2 justify-between ">
        @yield('contenido')
    </main>
    <footer class="h-12vh bg-yellow-300 border-2
                flex flex-row justify-between content-center">
        @copyright con fosquitos
    </footer>
</div>
</body>
</html>
