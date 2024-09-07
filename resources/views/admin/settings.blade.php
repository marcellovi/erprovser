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
                        <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings-tab-pane" type="button" role="tab" aria-controls="settings-tab-pane" aria-selected="false">Info. Empresa</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <!-- Profile -->
                    <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <h6 class="mb-4">Perfil Usuário</h6>

                        <form class="custom-form profile-form"  action="{{ route('admin.update') }}"  method="post" role="form">
                            @csrf
                            @method('patch')

                            <input class="form-control" type="text" name="name" id="profile-name" placeholder="Seu Nome" value="{{ $user->name }}">

                            <input class="form-control" type="email" name="email" id="profile-email" placeholder="seu_email@gmail.com"  value="{{ $user->email  }}">

                            <div class="d-flex">

                                <button type="submit" class="form-control ms-2">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Password -->
                    <div class="tab-pane fade" id="password-tab-pane" role="tabpanel" aria-labelledby="password-tab" tabindex="0">
                        <h6 class="mb-4">Password</h6>
                        <form class="custom-form password-form" action="{{ route('admin.password') }}" method="post" role="form">
                            @csrf
                            @method('put')
                            <input type="password" name="current_password" id="update_password_current_password"  class="form-control" placeholder="Current Password" required="">
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="" />

                            <input type="password" name="password" id="update_password_password"  class="form-control" placeholder="New Password" required="">
                            <small><x-input-error :messages="$errors->updatePassword->get('password')"  /></small>

                            <input type="password" name="password_confirmation" id="update_password_password_confirmation"  class="form-control" placeholder="Confirm Password" required="">
                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-3" />

                            <div class="d-flex">

                                <button type="submit" class="form-control ms-2">
                                    Update Password
                                </button>
                                @if (session('status') === 'password-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600"
                                    >{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </div>
                    <!-- Social Media -->
                    <div class="tab-pane fade" id="socialmedia-tab-pane" role="tabpanel" aria-labelledby="socialmedia-tab" tabindex="0">
                        <h6 class="mb-4">Social Media</h6>

                        <form class="custom-form notification-form" action="{{ route('admin.socialmedia') }}" method="post" role="form">
                            @csrf
                            @method('patch')
                            @foreach($settings as $setting )

                                @if($setting['name'] == 'facebook')
                                    <input type="text" name="facebook" id="facebook" class="form-control"
                                           placeholder="facebook" value="{{ $setting->value  }}">
                                @endif

                                @if($setting['name'] == 'twitter')
                                    <input type="text" name="twitter" id="twitter" class="form-control" placeholder="twitter"
                                            value="{{ $setting->value  }}">
                                @endif

                                @if($setting['name'] == 'linkedin')
                                    <input type="text" name="linkedin" id="linkedin" class="form-control"
                                           placeholder="linkedin" value="{{ $setting->value  }}">
                                @endif

                                @if($setting['name'] == 'instagram')
                                    <input type="text" name="instagram" id="instagram" class="form-control" placeholder="instagram"
                                           value="{{ $setting->value  }}">
                                @endif

                            @endforeach


                            <div class="d-flex mt-4">
                                <button type="submit" class="form-control ms-2">
                                    Update Social Media
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Settings -->
                    <div class="tab-pane fade" id="settings-tab-pane" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
                        <h6 class="mb-4">ER ProServ - Info.</h6>

                        <form class="custom-form password-form" action="{{ route('admin.infoempresa') }}" method="post" role="form">
                            @csrf
                            @method('patch')

                            @foreach($settings as $setting )

                            @if($setting['name'] === 'telefone')
                                <input type="text" name="telefone" id="telefone" class="form-control" placeholder="telefone" required="true" value="{{ $setting->value  }}">
                            @endif

                                @if($setting['name'] === 'email')
                            <input type="email" name="email" id="email" class="form-control" placeholder="email" required="true" value="{{ $setting->value  }}">
                                @endif

                            @endforeach
                            <div class="d-flex">

                                <button type="submit" class="form-control ms-2">
                                    Update Info.
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

