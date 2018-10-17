@extends('layouts.header')

@section('content')
<div id="content">

    <h3 class="text-center">Cadastrar Funcionários</h3>

    <form action="{{ url('/retorno') }}" method="post">
        @csrf
        <div class="form-group px-5 py-4">
            {{ Session::get('msg') }}

            <br>

            Nome
            <input type="text" class="form-control" name="nome" required>
            <br>
            Email
            <input type="email" class="form-control" name="email" required>
            <br>
            Senha
            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="senha" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <br>
            Confirmar Senha
            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="confirmar-senha" required>
        
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
