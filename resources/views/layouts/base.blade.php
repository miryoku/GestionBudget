<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

@if(Auth::check())

    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="#">Active</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <button class="btn btn-outline-secondary ml-2" type="submit">Deconnexion</button>
        </form>

    </nav>

@else

   <div class="col-12 text-end">
            <a class="btn btn-outline-secondary ml-2" href="{{route('login')}}">Connexion</a>
            <a class="btn btn-outline-secondary ml-2" href="{{route('register')}}">S'inscrire</a>
   </div>


@endif


<div class="container-fluid">
    @yield('content')
</div>
</body>
</html>
