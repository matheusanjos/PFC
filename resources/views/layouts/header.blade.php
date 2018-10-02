<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>{{ config('app.name') }}</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    <div id="site">
        <nav class="navbar navbar-expand navbar-dark">
            <div class="container-fluid">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a href="#" id="navbarDropdown" class="nav-link active dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-cog"></i>
                                Configurações
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                {{ __('Sair') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>

            </div>
        </nav>

        <div class="main">
            @include('layouts.sidebar')

            @yield('content')
        </div>
    </div>

</body>
</html>
