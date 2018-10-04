@extends('layouts.header')

@section('content')
<div id="content">

    <h3 class="text-center">Pesquisa de Clientes</h3>

    <form id="searchForm" action="{{ url('/pesquisar')}}" method="POST" class="p-5">
        @csrf

        <div class="input-group">
            <input type="search" class="form-control mr-1" name="busca" role="search">

            <div id="formButton">
                <button type="submit" class="btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

    </form>

    <div id="resultados" class="px-5">

    @if(isset($details))
        <p>Resultados de pesquisa para <b> {{ $query }} </b> são: </p>

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Cnpj</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($details as $user)
                    <tr>
                        <td>{{ $user->id_cliente }}</td>
                        <td>{{ $user->nome }}</td>
                        <td>{{ $user->cnpj }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->telefone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @elseif(isset($message))
        <p> {{ $message }} </p>

    @endif

    </div>



</div>
@endsection
