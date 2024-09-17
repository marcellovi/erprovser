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

        <!-- New Table -->
        <div class="col-lg-12 col-12">
            <div class="custom-block bg-white">
                <h5 class="mb-4">Profissionais</h5>

                <div class="table-responsive">
                    <table id="data_careers" class="account-table table-striped table-bordered">
                        <thead >
                        <tr>
                            <th scope="col" style="text-align: center">Data</th>
                            <th scope="col" style="text-align: center">Nome</th>
                            <th scope="col" style="text-align: center">Area de Atuação</th>
                            <th scope="col" style="text-align: center">Telefone</th>
                            <th scope="col" style="text-align: center">Estado</th>
                            <th scope="col" style="text-align: center">+ Detalhes</th>
                           <th scope="col" style="text-align: center">Status</th>

                        </tr>
                        </thead>

                        <tbody>

                        @foreach($careers as $career)
                            <tr>
                                <td scope="row">{{ date('Y/m/d',strtotime($career->created_at)) }}</td>
                                <td scope="row">{{ $career->name }}</td>
                                <td scope="row">{{ $career->type_service }}</td>
                                <td scope="row">{{ $career->phone }}</td>
                                <td scope="row">{{ $career->state }}</td>
                                <td scope="row">
                                    <div style="text-align: center;">
                                    <a class="text-black" href="/vermais/{{ $career->id }}">
                                            <i class="bi-eye-fill"></i> ver +
                                        </a>&nbsp&nbsp&nbsp&nbsp

                                        <!-- /careers/del/{{ $career->id }} -->
                                        <a class="text-black"  href="#">
                                            <i class="bi-trash"></i> del.
                                        </a>
                                    </div>

                                </td>

                                <td scope="row">
                                    <div style="text-align: center;">
                                    @if($career->active)
                                        <a class="nav-link" href="/careers/{{ $career->id }}/{{ $career->active }}" title="Clique para Inativar Profissional" >
                                        <span class="badge text-bg-success">
                                                        Ativo
                                            @else
                                                <a class="nav-link" href="/careers/{{ $career->id }}/{{ $career->active }}" title="Clique para Ativar Profissional">
                                                <span class="badge text-bg-danger">
                                                        Inativo
                                                    @endif
                                                </span></a>
                                        </div>
                                </td>
                            </tr>
                        @endforeach

<!--
                        <tr>
                            <td scope="row">July 5, 2023</td>
                            <td scope="row">10:00 PM</td>
                            <td scope="row">Shopping</td>
                            <td scope="row">
                                info
                            </td>
                            <td class="text-danger" scope="row">
                                <span class="me-1">-</span>
                                $100.00
                            </td>
                            <td scope="row">
                                <a class="nav-link" href="/dashboard">
                                    <i class="bi-eye-fill"></i> Ver +
                                </a>
                            </td>
                            <td scope="row">
                                                    <span class="badge text-bg-danger">
                                                        Inativo
                                                    </span>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">July 2, 2023</td>

                            <td scope="row">10:42 AM</td>

                            <td scope="row">Food Delivery</td>

                            <td scope="row">Mobile Reload</td>

                            <td class="text-success" scope="row">
                                <span class="me-1">+</span>
                                $250
                            </td>

                            <td scope="row">$5,600.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">June 24, 2023</td>

                            <td scope="row">10:48 PM</td>

                            <td scope="row">Shopee</td>

                            <td scope="row">QR Code</td>

                            <td class="text-danger" scope="row">
                                <span class="me-2">-</span>$380
                            </td>

                            <td scope="row">$5,300.00</td>

                            <td scope="row">
                                                    <span class="badge text-bg-dark">
                                                        Cancelled
                                                    </span>
                            </td>
                        </tr>
-->
                        </tbody>
                    </table>
                </div>
                {{ $careers->links() }}
             <!-- <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">Prev</span>
                            </a>
                        </li>

                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav> -->
            </div>
        </div>
        <!-- End New Table -->


        <div class="col-lg-12 col-12">

            <!-- Your Balance Start -->
            <div class="custom-block custom-block-balance">
                <small>Total de Profissionais</small>

                <h2 class="mt-2 mb-3">{{ count($careers) }} cadastrados</h2>

                <div class="custom-block-numbers d-flex align-items-center">
                    <p>Total de Ativos : <span>{{ $careers->where('active',1)->count() }}</span></p>
                    <p>Total de Inativos : <span>{{ $careers->where('active',0)->count() }}</span></p>
                </div>

                <div class="d-flex">
                    <!--
                    <div>
                        <small>Valid Date</small>
                        <p>12/2028</p>
                    </div>

                    <div class="ms-auto">
                        <small>Card Holder</small>
                        <p>Thomas</p>
                    </div> -->
                </div>
            </div>
            <!-- Your Balance End -->

        </div>


    </div>
@endsection
