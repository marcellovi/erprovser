
<!-- Footer Start -->
<div
    class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn"
    data-wow-delay="0.1s"
>
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h1 class="text-white mb-4">
                    <i class="fa fa-building text-primary me-3"></i>ProServ
                </h1>
                <p>
                    {{  $settings['rodape_descricao'] }}
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-primary me-1" href="{{ $settings['facebook'] }}"
                    ><i class="fab fa-facebook-f"></i
                        ></a>
                    <a class="btn btn-square btn-outline-primary me-0" href="{{ $settings['linkedin'] }}"
                    ><i class="fab fa-linkedin-in"></i
                        ></a>
                    <a class="btn btn-square btn-outline-primary me-1" href="{{ $settings['instagram'] }}"
                    ><i class="fab fa-instagram"></i
                        ></a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Endereço</h4>
                <p>
                    <i class="fa fa-map-marker-alt me-3"></i>{{  $settings['endereco'] }}
                </p>
                <p><i class="fa fa-phone-alt me-3"></i>{{  $settings['telefone'] }}</p>
                <p><i class="fa fa-envelope me-3"></i>{{  $settings['email'] }}</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Links Rápidos</h4>
                <a class="btn btn-link" href="{{ '/quemsomos' }}">Quem Somos</a>
                <a class="btn btn-link" href="{{ '/contato' }}">Trabalhe Conosco</a>
                <a class="btn btn-link" href="{{ '/contato' }}">Suporte</a>
                <a class="btn btn-link" href="{{ '/servicos' }}">Serviços</a>

            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Inscreva-se</h4>
                <p>Saiba mais sobre o nosso trabalho e serviços.</p>
                <div class="position-relative mx-auto" style="max-width: 400px">
                    <input
                        class="form-control bg-transparent w-100 py-3 ps-4 pe-5"
                        type="text"
                        placeholder="Seu email"
                    />
                    <button
                        type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                    >
                        Assine
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">ProServ</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a target="_blank" href="bigbits.com.br">BigBits</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
