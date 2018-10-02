@extends('layouts.header')

@section('content')
<div id="content">

    <h3 class="text-center">Cadastrar Clientes</h3>

    <form action="clientes" method="post">

        @csrf

        CNPJ:
        <input type="text" name="cnpj">
        <br>
        Email:
        <input type="email" name="email">
        <br>
        Telefone:
        <input type="number" name="telefone">
        <br>
        <input type="submit" value="cadastrar">

    </form>

</div>
@endsection
