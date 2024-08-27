<nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
    <div class="position-sticky py-4 px-3 sidebar-sticky">
        <ul class="nav flex-column h-100">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">
                    <i class="bi-house-fill me-2"></i>
                    Overview
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ '/banner' }}">
                    <i class="bi-wallet me-2"></i>
                    {{ __('Banners') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ '/perfil' }}">
                    <i class="bi-person me-2"></i>
                    {{ __('Perfil') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ '/admin/configuracoes' }}">
                    <i class="bi-gear me-2"></i>
                    {{ __('Configurações') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ '/admin/servicos' }}">
                    <i class="bi-server me-2"></i>
                    {{ __('Serviços') }}
                </a>
            </li>

            <li class="nav-item featured-box mt-lg-5 mt-4 mb-4">
                <img src="images/credit-card.png" class="img-fluid" alt="">

                <a class="btn custom-btn" href="#">Upgrade</a>
            </li>

            <form method="POST" action="{{ route('logout') }}" class="nav-item border-top mt-auto pt-2">
                @csrf
            <li>
                <a class="nav-link"  href="{{ route('logout')  }}"  onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="bi-box-arrow-left me-2"></i>
                    {{ __('Log Out') }}
                </a>
            </li>
            </form>
        </ul>
    </div>
</nav>
