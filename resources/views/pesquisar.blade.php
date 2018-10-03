@extends('layouts.header')

@section('content')
<div id="content">

    <h3 class="text-center">Pesquisa de Clientes</h3>

    <div>

        {{ Auth::clientes()->email }}

    </div>

    <form id="searchForm" action="{{ url('/home')}}" method="POST" class="mt-5 p-5">
        {{ csrf_field() }}
        <div class="form-group col-md-8">
            <label class="distancia" for="">Razão Social</label>
            <input type="text" class="form-control">
        </div>

        <br>

        {{-- <div class="form-group col-md-8">
            <label for="">CNPJ</label>
            <input type="text" class="form-control">
        </div>

        <br>

        <div class="form-group col-md-8">

            <label for="">Sistema</label>

            <br>

            <div class="form-check form-check-inline">
                <label>
                    <input type="checkbox" class="form-check-input">
                    <span class="cr"><i class="fas fa-check"></i></span>
                    <p>Syspdv</p>
                </label>
            </div>

            <div class="form-check form-check-inline">
                <label>
                    <input type="checkbox" class="form-check-input">
                    <span class="cr"><i class="fas fa-check"></i></span>
                    <p>Eclética</p>
                </label>
            </div>

            <div class="form-check form-check-inline">
                <label>
                    <input type="checkbox" class="form-check-input">
                    <span class="cr"><i class="fas fa-check"></i></span>
                    <p>ACSN</p>
                </label>
            </div>

        </div>

        <br> --}}

        <div id="formButton">

            <button type="submit" class="btn">
                <i class="fas fa-search"></i>
                Pesquisar
            </button>

        </div>

    </form>

</div>
@endsection
