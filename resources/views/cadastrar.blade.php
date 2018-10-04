@extends('layouts.header')

@section('content')
<div id="content">

    <h3 class="text-center">Cadastrar Clientes</h3>

    <form action="{{ url('/retorno') }}" method="post">
        @csrf
        <div class="form-group px-5 py-4">
            {{ Session::get('msg') }}

            <br>

            Nome
            <input type="text" class="form-control" name="nome" required>
            <br>
            Cnpj
            <input type="text" class="form-control" name="cnpj" maxlength="18" onkeydown="javascript: fMasc( this, mCNPJ );" required>
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
