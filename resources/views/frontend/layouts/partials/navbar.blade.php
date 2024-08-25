<?php
   $urlActive = explode('/',url()->current());

?>

<!-- Navbar Start -->
<nav
    class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
>
    <a href="{{ URL('/') }}" class="navbar-brand d-flex align-items-center">
        <img src="{{ asset('frontend/img/logo.png') }}" width="200px" alt="ER Proserv">
        <!--
        <h1 class="m-0">
            <i class="fa fa-building text-primary me-3"></i>ERProServ
        </h1>-->
    </a>
    <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-3 py-lg-0">
            <a href="{{ URL('/') }}" class="nav-item nav-link <?php echo (sizeof($urlActive) <=3 ) ? 'active' : ''; ?>">Home</a>
            <a href="{{ URL('/quemsomos') }}" class="nav-item nav-link <?php echo (end($urlActive) === 'quemsomos') ? 'active' : ''; ?>">Quem Somos</a>
            <a href="{{ URL('/servicos') }}" class="nav-item nav-link <?php echo (end($urlActive) === 'servicos') ? 'active' : ''; ?>">Serviços</a>
            <a href="{{ URL('/contato') }}" class="nav-item nav-link <?php echo (end($urlActive) === 'contato') ? 'active' : ''; ?>">Contato</a>
            <a href="{{ URL('/trabalheconosco') }}" class="nav-item nav-link echo <?php echo (end($urlActive) === 'trabalheconosco') ? 'active' : ''; ?>">Trabalhe Conosco</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

