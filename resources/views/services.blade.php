@extends('frontend.main_master')

@section('content')

    <!-- Page Header Start -->
    <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        data-wow-delay="0.1s"
    >
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                SERVIÇOS
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Nossos Serviços
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Nossos serviços</h6>
                        <h1 class="display-8 mb-2">
                            Gestão de Facilities com tecnologia e sustentabilidade
                        </h1>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('frontend/img/service-1.jpg') }}" alt=""/>
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Manutenção Predial / Residencial</h5>
                            <p>
                                Inspeção de elementos estruturais, realização de pinturas de fachadas, instação de DryWall, Gesso, manutenção geral
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('frontend/img/service-2.jpg') }}" alt=""/>
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Serviço de Refrigeração</h5>
                            <p>
                                Especializados em manutenção e instalação de sistemas de refrigeração, incluindo ar condicionado, câmaras frigoríficas e balcões frigoríficos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('frontend/img/service-3.jpg') }}" alt=""/>
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Limpeza e restauração de Caixa d’água</h5>
                            <p>
                                Avaliação da integridade estrutural para identificar fissuras, infiltrações ou danos. Remoção de sedimentos, sujeira e desinfecção para garantir a qualidade da água armazenada.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('frontend/img/service-4.jpg') }}" alt=""/>
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Manutenção Elétrica</h5>
                            <p>
                                Serviços especializados em manutenção elétrica, incluindo inspeção e reparo de sistemas elétricos, atualização de painéis e fiação, e instalação de dispositivos de segurança.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('frontend/img/service-5.jpg') }}" alt=""/>
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Manutenção Hidráulica</h5>
                            <p>
                                Especializados em manutenção hidráulica predial, residencial e industrial, incluindo reparo de vazamentos, desentupimento de tubulações e instalação de sistemas de água. Inspeções para garantir a eficiência e prevenir problemas futuros.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light overflow-hidden h-100">
                        <img class="img-fluid" src="{{ asset('frontend/img/service-6.jpg') }}" alt=""/>
                        <div class="service-text position-relative text-center h-100 p-4">
                            <h5 class="mb-3">Equipe de Limpeza</h5>
                            <p>
                                Serviços de limpeza de interiores, manutenção de áreas comuns e tratamento de pisos. Realizamos higienização de banheiros e cozinhas, além de limpeza de janelas e fachadas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


@endsection
