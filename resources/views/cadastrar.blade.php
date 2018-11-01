@extends('layouts.header')

@section('content')
<div id="content">

    <h3 class="text-center">Cadastrar Clientes</h3>

    <form action="/cadastrar" method="post">
        @csrf
        <div class="form-group px-5 py-4">

            @if (session('alert'))
            <div class="alert alert-success alert-dismissible fade show mx-auto" role="alert">
                <div class="row vertical-align">
                    <div class="col-xs-1 mx-3 text-center vertical-align">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="col-xs-11">
                        <strong>{{ session('alert') }}</strong>
                    </div>
                    <button type="button" class="close my-1 vertical-align" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            @endif

            <br>

            Nome Fantasia
            <input type="text" class="form-control" name="nomeFantasia" required>
            <br>
            Razão Social
            <input type="text" class="form-control" name="razaoSocial" required>
            <br>
            Cnpj
            <input type="text" class="form-control" name="cnpj" maxlength="18" onkeydown="javascript: fMasc( this, mCNPJ );" required>
            <br>
            Segmento
            <input type="text" class="form-control" name="segmento" required>
            <br>
            Email
            <input type="email" class="form-control" name="email" required>
            <br>
            Telefone
            <input type="text" class="form-control" name="telefone" maxlength="14" onkeydown="javascript: fMasc( this, mTel );">

            <br>
            <div id="formButton">
                <button type="submit" class="btn">
                    <i class="fas fa-user-plus"></i>
                    Cadastrar
                </button>
            </div>

        </div>

    </form>

</div>

<script src="{{ asset('js/formatar-input.js') }}" defer></script>

@endsection
