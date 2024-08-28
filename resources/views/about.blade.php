@extends('frontend.main_master')

@section('content')

    <!-- Page Header Start -->
    <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        data-wow-delay="0.1s"
    >
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Sobre Nós</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Quem Somos
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="position-relative overflow-hidden ps-5 pt-5 h-100"
                        style="min-height: 400px"
                    >
                        <img
                            class="position-absolute w-100 h-100"
                            src="{{ asset('frontend/img/about.jpg') }}"
                            alt=""
                            style="object-fit: cover"
                        />
                        <div
                            class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                            style="width: 200px; height: 200px"
                        >
                            <div
                                class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3"
                            >
                                <h1 class="text-white">25</h1>
                                <h2 class="text-white">Anos</h2>
                                <h5 class="text-white mb-0">de Experiência</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="border-start border-5 border-primary ps-4 mb-5">
                            <h6 class="text-body text-uppercase mb-2">ER ProServ</h6>
                            <h2 class="display-6 mb-0">
                                Soluções para Residencias, Empresas, Comércios e Industrias
                            </h2>
                        </div>
                        <p>
                            Na ER ProServ, somos mais do que uma empresa de prestação de serviço, manutenção e gestão. Somos parceiros dedicados ao sucesso e à satisfação dos nossos clientes.
                        </p>
                        <p class="mb-4">
                            Com anos de experiência no mercado, nossa equipe de profissionais altamente qualificados, possui um vasto conhecimento em Tecnologia e prestação de serviço, desenvolvendo soluções de gestão com auxilio de tecnologia e expertise.
                        </p>
                        <div class="border-top mt-4 pt-4">
                            <div class="row g-4">
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                                    <i
                                        class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                    ></i>
                                    <h6 class="mb-0">Profissionais Experientes</h6>
                                </div>
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                                    <i
                                        class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                    ></i>
                                    <h6 class="mb-0">Tecnologia de Ponta</h6>
                                </div>
                                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                                    <i
                                        class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                    ></i>
                                    <h6 class="mb-0">Eficiência e Economia</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
