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
            <input type="name" class="form-control" name="nome">
            <br>
            Cnpj
            <input type="text" class="form-control" name="cnpj">
            <br>
            Email
            <input type="email" class="form-control" name="email">
            <br>
            Telefone
            <input type="number" class="form-control" name="telefone">

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
@endsection
