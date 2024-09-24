@extends('frontend.main_master')

@section('content')

    <!-- Page Header Start -->
    <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        data-wow-delay="0.1s"
    >
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                CARREIRAS
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Trabalhe Conosco
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                     <div class="row g-4 align-items-center">
                         <div class="col-sm-6">
                             <img class="img-fluid" src="img/team-1.jpg" alt="" />
                         </div>
                         <div class="col-sm-6">
                             <h3 class="mb-0">Full Name</h3>
                             <p>Head of Sales</p>
                             <h6>Contact Details</h6>
                             <p>
                                 Lorem ipsum dolor sit amet conse elit sed eiu smod lab ore.
                             </p>
                             <p class="mb-0">Call: +012 345 6789</p>
                             <p class="mb-0">Email: sales@example.com</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                     <div class="row g-4 align-items-center">
                         <div class="col-sm-6">
                             <img class="img-fluid" src="img/team-2.jpg" alt="" />
                         </div>
                         <div class="col-sm-6">
                             <h3 class="mb-0">Full Name</h3>
                             <p>Head of Marketing</p>
                             <h6>Contact Details</h6>
                             <p>
                                 Lorem ipsum dolor sit amet conse elit sed eiu smod lab ore.
                             </p>
                             <p class="mb-0">Call: +012 345 6789</p>
                             <p class="mb-0">Email: sales@example.com</p>
                         </div>
                     </div>
                 </div> -->
                <div
                    class="col-lg-6 wow fadeInUp"
                    data-wow-delay="0.1s"
                    style="min-height: 450px"
                >
                    <div class="position-relative h-100">
                        <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px">
                            <img class="position-absolute w-100 h-100"
                                 src="{{ asset('frontend/img/banners/carousel-2.jpg') }}" alt=""
                                 style="object-fit: cover">
                            <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                                 style="width: 200px; height: 200px">
                                <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                                    <h1 class="text-white">25</h1>
                                    <h2 class="text-white">Anos</h2>
                                    <h5 class="text-white mb-0">de Experiência</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">ER ProServ</h6>
                        <h1 class="display-6 mb-0">
                            Faça parte da equipe!
                        </h1>
                    </div>
                    <p class="mb-4">
                        {{ $settings['pagina_contato_info'] }}
                    </p>
                    <form action="{{ route('storecareer') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light"
                                        id="name"
                                        name="name"
                                        placeholder="Nome"
                                        required
                                    />
                                    <label for="name">Nome</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select  class="form-control border-0 bg-light" id="type_service" name="type_service" required>
                                        <option value="" selected>Escolha uma Opção</option>
                                        @foreach($careers as $career)
                                        <option value="{{ $career->name }}>{{ $career->name }}</option>
                                        @endforeach
                                    </select>
                                        <!-- <option value="Engenheiro Mecânico">Engenheiro Mecânico</option>
                                        <option value="Engenheiro Elétrico">Engenheiro Elétrico</option>
                                        <option value="Engenheiro Civil">Engenheiro Civil</option>
                                        <option value="Engenheiro Automação">Engenheiro Automação</option>
                                        <option value="Analista de Manutenção">Analista de Manutenção</option>
                                        <option value="Analista de Projetos">Analista de Projetos</option>
                                        <option value="Analista de Sistemas">Analista de Sistemas</option>
                                        <option value="Coordenador de Manutenção">Coordenador de Manutenção</option>
                                        <option value="Gerente de Manutenção">Gerente de Manutenção</option>
                                        <option value="Planejador de Manutenção">Planejador de Manutenção</option>
                                        <option value="Programador de Manutenção">Programador de Manutenção</option>
                                        <option value="Técnico em Refrigeração">Técnico em Refrigeração</option>
                                        <option value="Técnico em Mecânica">Técnico em Mecânica</option>
                                        <option value="Técnico em Eletrotécnica">Técnico em Eletrotécnica</option>
                                        <option value="Técnico em Automação">Técnico em Automação</option>
                                        <option value="Arquiteto">Arquiteto</option>
                                        <option value="Artífice de Manutenção">Artífice de Manutenção</option>
                                        <option value="Supervisor de Manutenção">Supervisor de Manutenção</option>
                                        <option value="Supervisor de Limpeza">Supervisor de Limpeza</option>
                                        <option value="Supervisor de Jardinagem">Supervisor de Jardinagem</option>
                                        <option value="Jardineiro">Jardineiro</option>
                                        <option value="Pedreiro">Pedreiro</option>
                                        <option value="Servente">Servente</option>
                                        <option value="Mestre de obras">Mestre de obras</option>
                                        <option value="Auxiliar de elétrica">Auxiliar de elétrica</option>
                                        <option value="Auxiliar de mecânica">Auxiliar de mecânica</option>
                                        <option value="Auxiliar de automação">Auxiliar de automação</option>
                                        <option value="Auxiliar de refrigeração">Auxiliar de refrigeração</option>
                                        <option value="Desenvolvedor de sistemas">Desenvolvedor de sistemas</option>
                                        <option value="Copeiro">Copeiro</option>
                                        <option value="Pintor">Pintor</option>
                                        <option value="Eng. de Segurança do Trabalho">Eng. de Segurança do Trabalho</option>
                                        <option value="Técnico em Segurança do Trabalho">Técnico em Segurança do Trabalho</option>
                                        <option value="Comprador">Comprador</option>
                                        <option value="Assistente administrativo">Assistente administrativo</option>
                                        <option value="Técnico em Edificações">Técnico em Edificações</option>
                                        <option value="Analista de TI">Analista de TI</option>
                                        <option value="Técnico de TI">Técnico de TI</option>
                                        <option value="Engenheiro de Software">Engenheiro de Software</option>
                                        <option value="Engenheiro de TI">Engenheiro de TI</option>
                                        <option value="Bombeiro hidráulico">Bombeiro hidráulico</option>
                                        <option value="Designer Gráfico">Designer Gráfico</option>
                                        <option value="Auxiliar administrativo">Auxiliar administrativo</option>
                                        <option value="Auxiliar de limpeza">Auxiliar de limpeza</option>
                                        <option value="Engenheiro de Manutenção">Engenheiro de Manutenção</option>
                                        <option value="Engenheiro de Projetos">Engenheiro de Projetos</option>
                                        <option value="Engenheiro de Planejamento">Engenheiro de Planejamento</option>
                                        <option value="Analista de Meio Ambiente">Analista de Meio Ambiente</option>
                                        <option value="Técnico de Meio Ambiente">Técnico de Meio Ambiente</option>
                                        <option value="Engenheiro de Meio Ambiente">Engenheiro de Meio Ambiente</option>
                                        <option value="Técnico em CFTV">Técnico em CFTV</option>
                                        <option value="Manutenção Predial">Manutenção Predial</option>
                                        <option value="Outros">Outros</option> -->

                                    <!--
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light"
                                        id="type_service"
                                        name="type_service"
                                        placeholder="Especialização"
                                    /> -->
                                    <label for="type_service">Especialização</label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light"
                                        id="address"
                                            name="address"
                                        placeholder="Endereço"
                                        required
                                    />
                                    <label for="address">Endereço</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light"
                                        id="phone"
                                        name="phone"
                                        placeholder="Telefone"
                                        required
                                        onkeydown="phoneMaskBrazil()" maxlength="15"
                                    />
                                    <label for="phone">Telefone</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light"
                                        id="zipcode"
                                        name="zipcode"
                                        placeholder="CEP"
                                        required
                                    />
                                    <label for="zipcode">CEP</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light"
                                        id="state"
                                        name="state"
                                        placeholder="Estado"
                                        required
                                    />
                                    <label for="state">Estado</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light"
                                        id="city"
                                        name="city"
                                        placeholder="Município"
                                        required
                                    />
                                    <label for="city">Município</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                    <textarea
                        class="form-control border-0 bg-light"
                        placeholder="Resumo Profissional"
                        id="resume"
                        name="resume"
                        style="height: 150px"
                        required
                    ></textarea>
                                    <label for="resume">Resumo Profissional</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">
                                    Aplique Agora!
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
<script>
    function phoneMaskBrazil() {
        var key = window.event.key;
        var element = window.event.target;
        var isAllowed = /\d|Backspace|Tab/;
        if(!isAllowed.test(key)) window.event.preventDefault();

        var inputValue = element.value;
        inputValue = inputValue.replace(/\D/g,'');
        inputValue = inputValue.replace(/(^\d{2})(\d)/,'($1) $2');
        inputValue = inputValue.replace(/(\d{4,5})(\d{4}$)/,'$1-$2');

        element.value = inputValue;
    }
</script>
@endsection
