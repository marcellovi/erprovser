<header class="navbar sticky-top flex-md-nowrap">
    <div class="col-md-3 col-lg-3 me-0 px-3 fs-6">
        <a class="navbar-brand" href="{{ __('/dashboard') }}">
            <i class="bi-box"></i>
            Admin - Dashboard
        </a>
    </div>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav me-lg-2">
        <div class="nav-item text-nowrap d-flex align-items-center">
            <div class="dropdown ps-3">
                <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="navbarLightDropdownMenuLink">
                    <i class="bi-bell"></i>
                    <span class="position-absolute start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                </a>

                <ul class="dropdown-menu dropdown-menu-lg-end notifications-block-wrap bg-white shadow" aria-labelledby="navbarLightDropdownMenuLink">
                    <small>Notifications</small>

                    <li class="notifications-block border-bottom pb-2 mb-2">
                        <a class="dropdown-item d-flex  align-items-center" href="#">
                            <div class="notifications-icon-wrap bg-success">
                                <i class="notifications-icon bi-check-circle-fill"></i>
                            </div>

                            <div>
                                <span>Your account has been created successfuly.</span>

                                <p>12 days ago</p>
                            </div>
                        </a>
                    </li>

                    <li class="notifications-block border-bottom pb-2 mb-2">
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="notifications-icon-wrap bg-info">
                                <i class="notifications-icon bi-folder"></i>
                            </div>

                            <div>
                                <span>Please check. We have sent a Daily report.</span>

                                <p>10 days ago</p>
                            </div>
                        </a>
                    </li>

                    <li class="notifications-block">
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="notifications-icon-wrap bg-danger">
                                <i class="notifications-icon bi-question-circle"></i>
                            </div>

                            <div>
                                <span>Account verification failed.</span>

                                <p>1 hour ago</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="dropdown ps-1">
                <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-three-dots-vertical"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-social bg-white shadow">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-4">
                                <a class="dropdown-item text-center" href="#">
                                    <img src="{{ asset('admin/images/social/search.png') }}" class="profile-image img-fluid" alt="">
                                    <span class="d-block">Google</span>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-4 col-4">
                                <a class="dropdown-item text-center" href="#">
                                    <img src="{{ asset('admin/images/social/spotify.png') }}" class="profile-image img-fluid" alt="">
                                    <span class="d-block">Spotify</span>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-4 col-4">
                                <a class="dropdown-item text-center" href="#">
                                    <img src="{{ asset('admin/images/social/telegram.png') }}" class="profile-image img-fluid" alt="">
                                    <span class="d-block">Telegram</span>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-4 col-4">
                                <a class="dropdown-item text-center" href="#">
                                    <img src="{{ asset('admin/images/social/snapchat.png') }}" class="profile-image img-fluid" alt="">
                                    <span class="d-block">Snapchat</span>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-4 col-4">
                                <a class="dropdown-item text-center" href="#">
                                    <img src="{{ asset('admin/images/social/tiktok.png') }}" class="profile-image img-fluid" alt="">
                                    <span class="d-block">Tiktok</span>
                                </a>
                            </div>

                            <div class="col-lg-4 col-md-4 col-4">
                                <a class="dropdown-item text-center" href="#">
                                    <img src="{{ asset('admin/images/social/youtube.png') }}" class="profile-image img-fluid" alt="">
                                    <span class="d-block">Youtube</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown px-3">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('admin/images/medium-shot-happy-man-smiling.jpg') }}" class="profile-image img-fluid" alt="">
                </a>
                <ul class="dropdown-menu bg-white shadow">
                    <li>
                        <div class="dropdown-menu-profile-thumb d-flex">
                            <img src="{{ asset('admin/images/medium-shot-happy-man-smiling.jpg') }}" class="profile-image img-fluid me-3" alt="">

                            <div class="d-flex flex-column">
                                <small>{{ ucfirst(Auth::user()->name) }}</small>
                             </div>
                        </div>
                    </li>

                    <li>
                        <a class="dropdown-item" href="{{ __('/configuracoes') }}">
                            <i class="bi-gear me-2"></i>
                            Perfil & Config.
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" target="_blank" href="https://wa.me/13376889569">
                            <i class="bi-question-circle me-2"></i>
                            Ajuda
                        </a>
                    </li>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="border-top mt-3 pt-2 mx-4">
                            <a class="dropdown-item ms-0 me-0" href="{{ route('logout')  }}"  onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="bi-box-arrow-left me-2"></i>
                            {{ __('Log Out') }}
                            </a>
                        </li>
                    </form>

                </ul>
            </div>
        </div>
    </div>
</header>
