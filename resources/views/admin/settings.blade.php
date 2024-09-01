@extends('admin.admin')

@section('title')
    Configurações
@endsection

@section('content')

    <div class="title-group mb-3">
        <h1 class="h2 mb-0">Configurações</h1>
    </div>

    <div class="row my-4">
        <div class="col-lg-7 col-12">
            <div class="custom-block bg-white">
                <!-- Tabs Header -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="true">Perfil</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="password-tab" data-bs-toggle="tab" data-bs-target="#password-tab-pane" type="button" role="tab" aria-controls="password-tab-pane" aria-selected="false">Senha</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="socialmedia-tab" data-bs-toggle="tab" data-bs-target="#socialmedia-tab-pane" type="button" role="tab" aria-controls="socialmedia-tab-pane" aria-selected="false">Social Media</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings-tab-pane" type="button" role="tab" aria-controls="settings-tab-pane" aria-selected="false">Configurações</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <!-- Profile -->
                    <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <h6 class="mb-4">Perfil Usuário</h6>

                        <form class="custom-form profile-form" action="#" method="post" role="form">
                            <input class="form-control" type="text" name="profile-name" id="profile-name" placeholder="John Doe">

                            <input class="form-control" type="email" name="profile-email" id="profile-email" placeholder="Johndoe@gmail.com">

                            <div class="input-group mb-1">
                                <img src="images/profile/senior-man-white-sweater-eyeglasses.jpg" class="profile-image img-fluid" alt="">

                                <input type="file" class="form-control" id="inputGroupFile02">
                            </div>

                            <div class="d-flex">
                                <button type="button" class="form-control me-3">
                                    Reset
                                </button>

                                <button type="submit" class="form-control ms-2">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Password -->
                    <div class="tab-pane fade" id="password-tab-pane" role="tabpanel" aria-labelledby="password-tab" tabindex="0">
                        <h6 class="mb-4">Password</h6>

                        <form class="custom-form password-form" action="#" method="post" role="form">
                            <input type="password" name="password" id="password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Current Password" required="">

                            <input type="password" name="confirm_password" id="confirm_password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="New Password" required="">

                            <input type="password" name="confirm_password" id="confirm_password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Confirm Password" required="">

                            <div class="d-flex">
                                <button type="button" class="form-control me-3">
                                    Reset
                                </button>

                                <button type="submit" class="form-control ms-2">
                                    Update Password
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Social Media -->
                    <div class="tab-pane fade" id="socialmedia-tab-pane" role="tabpanel" aria-labelledby="socialmedia-tab" tabindex="0">
                        <h6 class="mb-4">Social Media</h6>

                        <form class="custom-form notification-form" action="#" method="post" role="form">

                            @foreach($settings as $setting )

                                @if($setting['name'] === 'facebook')
                                    <input type="text" name="facebook" id="facebook" class="form-control"
                                           placeholder="facebook" value="{{ $setting->value  }}">
                                @endif

                                @if($setting['name'] === 'twitter')
                                    <input type="text" name="twitter" id="twitter" class="form-control" placeholder="twitter"
                                            value="{{ $setting->value  }}">
                                @endif

                                @if($setting['name'] === 'linkedin')
                                    <input type="text" name="linkedin" id="linkedin" class="form-control"
                                           placeholder="linkedin" value="{{ $setting->value  }}">
                                @endif

                                @if($setting['name'] === 'instagram')
                                    <input type="text" name="instagram" id="instagram" class="form-control" placeholder="instagram"
                                           value="{{ $setting->value  }}">
                                @endif

                            @endforeach


                            <div class="d-flex mt-4">
                                <button type="submit" class="form-control ms-2">
                                    Update Password
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Settings -->
                    <div class="tab-pane fade" id="settings-tab-pane" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
                        <h6 class="mb-4">Configurações</h6>

                        <form class="custom-form password-form" action="#" method="post" role="form">
                            @foreach($settings as $setting )

                            @if($setting['name'] === 'telefone')
                                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="telefone" value="{{ $setting->value  }}">
                            @endif

                                @if($setting['name'] === 'email')
                            <input type="email" name="email" id="email" class="form-control" placeholder="email" required="true" value="{{ $setting->value  }}">
                                @endif

                            @endforeach
                            <div class="d-flex">
                                <button type="button" class="form-control me-3">
                                    Reset
                                </button>

                                <button type="submit" class="form-control ms-2">
                                    Update Password
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-5 col-12">
            <div class="custom-block custom-block-contact">
                <h6 class="mb-4">Precisa de Ajuda?</h6>

                <p>
                    <strong>WhatsApp:</strong>
                    <a href="tel: 1 377-688-9569" class="ms-2">
                        +1 (337)
                        688-9569
                    </a>
                </p>

                <a href="https://wa.me/13376889569" class="btn custom-btn custom-btn-bg-white mt-3">
                    Supporte
                </a>
            </div>
        </div>
    </div>



@endsection

