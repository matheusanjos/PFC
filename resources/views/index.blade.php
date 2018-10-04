<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>{{ config('app.name') }}</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    <div id="site" class="container">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="{{ url('/') }}" class="navbar-brand">
                        <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}" id="logo" class="grow">
                    </a>
                </div>

                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#itemsCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="itemsCollapse" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="dropdown-divider" id="lineColor"></li>
                        <li class="nav-item active">
                            <a href="http://www.dataautomacao.com.br" id="itemLink" class="nav-link grow">Data Automação</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="main">
            <div id="content" class="container-fluid">
                <label>Esteja sempre no controle.</label>
                <br>
                <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modalLogin">Login</button>
            </div>
        </div>
    </div>

    @component('components.modal-login')
    @endcomponent

</body>
</html>
