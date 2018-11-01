@extends('layouts.header')

@section('content')
<div id="content">

    <h3 class="text-center">Pesquisa de Clientes</h3>

    <form id="searchForm" action="{{ url('/pesquisar')}}" method="POST" class="pt-5 px-5">
        @csrf

        <div class="input-group">
            <input id="busca" type="search" class="form-control mr-1" name="busca" role="search">
        </div>

    </form>

    <div class="p-5 table-responsive-sm">

        <table id="tabelaClientes" class="table table-sm table-hover mx-auto text-nowrap" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome Fantasia</th>
                    <th>Razão Social</th>
                    <th>CNPJ</th>
                    <th>Segmento</th>
                    <th>Detalhes</th>
                </tr>
            </thead>

            <tbody id="dadosClientes">
                @foreach ($clientes as $c)
                <tr>
                    <td class="ordem"></td>
                    <td>{{ $c->nome_fantasia }}</td>
                    <td>{{ $c->razao_social }}</td>
                    <td>{{ $c->cnpj }}</td>
                    <td>{{ $c->segmento_mercado }}</td>
                    <td>
                        <button class="btn btn-info btn-xs" data-title="info">
                            <span class="fas fa-info"></span>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

<script src="{{ asset('js/busca.js') }}" defer></script>
@endsection
