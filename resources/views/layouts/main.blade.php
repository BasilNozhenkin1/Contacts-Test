<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Стартовая страница</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bd-coming-soon.css') }}">
</head>

<body class="min-vh-100 d-flex flex-column">

<header>
    <div class="container">
        <nav class="navbar navbar-dark bg-transparenet">
            <a class="navbar-brand" href="{{ route('main.page.index') }}">
                Тестовое
            </a>
            <a class="navbar-text" href="{{ route('contact.index') }}">Личные контакты</a>
            <a class="btn btn-primary" href="{{ route('login') }}">Вход</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input class="btn btn-danger" type="submit" value="Выйти">
            </form>
        </nav>

    </div>
</header>

<main class="my-auto">
    <div class="container">
        @yield('content')
    </div>
</main>
</body>

</html>
