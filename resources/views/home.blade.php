@extends('frontend.main_master')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('frontend/img/banners/carousel-1.jpg') }}" alt="Image"/>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <h3
                                        class="text-light text-uppercase mb-3 animated slideInDown"
                                    >
                                        Seja bem vindo a
                                    </h3>
                                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                                        ER ProServ

                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('frontend/img/banners/carousel-2.jpg') }}" alt="Image"/>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <h5
                                        class="text-light text-uppercase mb-3 animated slideInDown"
                                    >
                                        ER Proserv
                                    </h5>
                                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                                        Uma Empresa com foco em Facilities
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('frontend/img/banners/carousel-3.jpg') }}" alt="Image"/>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <h5
                                        class="text-light text-uppercase mb-3 animated slideInDown"
                                    >
                                        ER Proserv
                                    </h5>
                                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                                        Prestação de Serviço com Tecnologia e Sustentabilidade
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('frontend/img/banners/carousel-4.jpg') }}" alt="Image"/>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-10">
                                    <h5
                                        class="text-light text-uppercase mb-3 animated slideInDown"
                                    >
                                        ER Proserv
                                    </h5>
                                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                                        Manutenção Elétrica, Hidráulica, Refrigeração, Serviço geral.
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#header-carousel"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#header-carousel"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">ER ProServ</h6>
                        <h1 class="display-6 mb-0">
                            Especialização com foco em tecnologia e inovação
                        </h1>
                    </div>
                    <p class="mb-5">
                        Na ER ProServ, somos mais do que uma empresa de prestação de serviços de manutenção para comércios, Empresas e Industrias. Somos parceiros dedicados ao sucesso e à satisfação dos nossos clientes. Com anos de experiência no mercado, nossa equipe de profissionais altamente qualificados.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <i
                                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                ></i>
                                <h6 class="mb-0">Gestão de Facilities</h6>
                            </div>
                            <span
                            >Com foco em refrigeração, elétrica, hidráulica, pintura, alvenaria, DryWall, gesso e outros. Manutenções preventiva, corretiva e preditiva;</span
                            >
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <i
                                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                ></i>
                                <h6 class="mb-0">Engenharia e Manutenção</h6>
                            </div>
                            <span
                            >Estimativa dos custos de manutenção e avaliação de alternativas;
Identificação e reporte dos riscos em termos de segurança associados à manutenção. </span
                            >
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <i
                                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                ></i>
                                <h6 class="mb-0">Gestão tecnológica</h6>
                            </div>
                            <span
                            >Desenvolvimento e implementação de software com ênfase em gestão, para apoio nas tomadas de decisões e planos de contingencia.</span
                            >
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <i
                                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                                ></i>
                                <h6 class="mb-0">Consultoria e Gestão</h6>
                            </div>
                            <span
                            >Voltada para levar a nossos clientes uma gestão de curto, médio e longo prazo. Trazendo soluções inovadoras com parceria, compromisso e sinergia.</span
                            >
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="position-relative overflow-hidden ps-5 pt-5 h-100"
                        style="min-height: 400px"
                    >
                        <img
                            class="position-absolute w-100 h-100"
                            src="{{ asset('frontend/img/feature.jpg') }}"
                            alt=""
                            style="object-fit: cover"
                        />
{{--                        <div--}}
{{--                            class="position-absolute top-0 start-0 bg-white pe-3 pb-3"--}}
{{--                            style="width: 200px; height: 200px"--}}
{{--                        >--}}
{{--                            <div--}}
{{--                                class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3"--}}
{{--                            >--}}
{{--                                <h1 class="text-white">25</h1>--}}
{{--                                <h2 class="text-white">Anos</h2>--}}
{{--                                <h5 class="text-white mb-0">de Experiência</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Facts Start -->
    <div class="container-fluid my-5 p-0">
        <div class="row g-0">
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/fact-1.jpg') }}" alt=""/>
                    <div class="facts-overlay">
                        <h1 class="display-1">01</h1>
                        <h4 class="text-white mb-3">Profissionais Experientes</h4>
                        <p class="text-white">
                            Nossa equipe é composta por especialistas com vasta experiência no setor, garantindo serviços de alta qualidade e soluções eficazes para qualquer desafio de manutenção.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/fact-2.jpg') }}" alt=""/>
                    <div class="facts-overlay">
                        <h1 class="display-1">02</h1>
                        <h4 class="text-white mb-3">Tecnologia de Ponta</h4>
                        <p class="text-white">
                            Utilizamos as mais recentes tecnologias para otimizar nossos processos, proporcionando resultados superiores com menor custo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/fact-3.jpg') }}" alt=""/>
                    <div class="facts-overlay">
                        <h1 class="display-1">03</h1>
                        <h4 class="text-white mb-3">Eficiência e Economia</h4>
                        <p class="text-white">
                            Acreditamos que a excelência não precisa ser cara. Nossos métodos inovadores e eficientes garantem que você obtenha o melhor valor pelo seu investimento.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="position-relative">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/fact-4.jpg') }}" alt=""/>
                    <div class="facts-overlay">
                        <h1 class="display-1">04</h1>
                        <h4 class="text-white mb-3">Software de Gestão</h4>
                        <p class="text-white">
                            Equipe especializada em desenvolvimento de softwares em gestão, para facilitar o trabalho dos gestores.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

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

    <!-- Appointment Start
    <div
        class="container-fluid appointment my-5 py-5 wow fadeIn"
        data-wow-delay="0.1s"
    >
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-white text-uppercase mb-2">Trabalhe Conosco</h6>
                        <h1 class="display-6 text-white mb-0">
                            Faça parte da equipe!
                        </h1>
                    </div>
                    <p class="text-white mb-0">
                        {{ $settings['pagina_contato_info'] }}
                    </p><br>

                </div>
                <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control bg-dark border-0"
                                        id="gname"
                                        placeholder="Gurdian Name"
                                    />
                                    <label for="gname">Nome</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input
                                        type="email"
                                        class="form-control bg-dark border-0"
                                        id="gmail"
                                        placeholder="Gurdian Email"
                                    />
                                    <label for="gmail">Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control bg-dark border-0"
                                        id="cname"
                                        placeholder="Child Name"
                                    />
                                    <label for="cname">Cel./Tel.</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control bg-dark border-0"
                                        id="cage"
                                        placeholder="Child Age"
                                    />
                                    <label for="cage">Tipo Serviço</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                    <textarea
                        class="form-control bg-dark border-0"
                        placeholder="Leave a message here"
                        id="message"
                        style="height: 100px"
                    ></textarea>
                                    <label for="message">Descreva suas area de trabalho</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">
                                   Aplique Agora
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     Appointment End -->

    <!-- Team Start
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4">
                        <h6 class="text-body text-uppercase mb-2">Our Team</h6>
                        <h1 class="display-6 mb-0">Our Expert Worker</h1>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <p class="mb-0">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                        diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                        lorem sit clita duo justo magna dolore erat amet
                    </p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid" src="{{ asset('frontend/img/team-1.jpg') }}" alt=""/>
                        <div class="team-text bg-white p-4">
                            <h5>Full Name</h5>
                            <span>Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <img class="img-fluid" src="{{ asset('frontend/img/team-2.jpg') }}" alt=""/>
                        <div class="team-text bg-white p-4">
                            <h5>Full Name</h5>
                            <span>Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <img class="img-fluid" src="{{ asset('frontend/img/team-3.jpg') }}" alt=""/>
                        <div class="team-text bg-white p-4">
                            <h5>Full Name</h5>
                            <span>Engineer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     Team End -->

    <!-- Testimonial Start
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Testimonial</h6>
                        <h1 class="display-6 mb-0">What Our Happy Clients Say!</h1>
                    </div>
                    <p class="mb-4">
                        Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                        ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                        dolore erat amet
                    </p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-users fa-2x text-primary flex-shrink-0"></i>
                                <h1 class="ms-3 mb-0">123+</h1>
                            </div>
                            <h5 class="mb-0">Happy Clients</h5>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0"></i>
                                <h1 class="ms-3 mb-0">123+</h1>
                            </div>
                            <h5 class="mb-0">Projects Done</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <img
                                class="img-fluid mb-4"
                                src="{{ asset('frontend/img/testimonial-1.jpg') }}"
                                alt=""
                            />
                            <p class="fs-5">
                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                et labore et tempor diam tempor erat.
                            </p>
                            <div
                                class="bg-primary mb-3"
                                style="width: 60px; height: 5px"
                            ></div>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item">
                            <img
                                class="img-fluid mb-4"
                                src="{{ asset('frontend/img/testimonial-2.jpg') }}"
                                alt=""
                            />
                            <p class="fs-5">
                                Dolores sed duo clita tempor justo dolor et stet lorem kasd
                                labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                                et labore et tempor diam tempor erat.
                            </p>
                            <div
                                class="bg-primary mb-3"
                                style="width: 60px; height: 5px"
                            ></div>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Testimonial End -->


@endsection
