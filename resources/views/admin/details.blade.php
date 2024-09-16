@extends('admin.admin')

@section('title')
    My Title
@endsection

@section('content')
    <div class="title-group mb-3">
        <h1 class="h2 mb-0">Area Administrativa</h1>

        <small class="text-muted">Oi <b>{{ ucfirst(Auth::user()->name) }}</b>, Bem-Vindo!</small>
    </div>

    <div class="row my-4">

        <div class="col-lg-12 col-12">

            <!-- Your Balance Start -->
            <div class="custom-block custom-block-balance">
                <h3>Detalhes do Profissional</h3>
                <br>
                <div class="custom-block-numbers d-flex align-items-center">

                    <div class="nav-item">
                       <h7>Data do Cadastro :<small> {{ $career->created_at }}</small></h7> <br>
                        <h7>Nome : <small>{{ $career->name }}</small></h7><br>
                            <h7>Especializacao : <small>{{ $career->type_service }}</small></h7><br>
                                <h7> Telefone / Endereco :<small> {{ $career->phone }} / {{ $career->address }}</small></h7><br>
                                    <h7>Estado / Municipio / Cep : <small>{{ $career->state }} / {{ $career->city }} / {{ $career->zipcode }}</small></h7><br>
                                        <h7>Resumo Profissional : <br><small>{{ $career->resume }}</h7></small>

                    </div>
                </div>

                <div class="d-flex">
                    <!--
                    <div>
                        <small>Valid Date</small>
                        <p>12/2028</p>
                    </div> -->

                    <div class="ms-auto">

                            <a class="nav-link" href="/dashboard">
                                <i class="bi-back"></i> Voltar
                            </a>

                    </div>
                </div>
            </div>
            <!-- Your Balance End -->

        </div>


    </div>
@endsection
