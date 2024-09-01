<!-- Spinner Start -->
<div
    id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
>
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div
                class="h-100 d-inline-flex align-items-center border-start border-end px-3"
            >
                <small class="fa fa-phone-alt me-2"></small>
                <small>@isset($settings['telefone']) {{  $settings['telefone'] }}@endisset</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center border-end px-3">
                <small class="far fa-envelope-open me-2"></small>
                <small>@isset($settings['email']){{  $settings['email'] }}@endisset</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center border-end px-3">
                <small class="far fa-clock me-2"></small>
                <small>@isset($settings['horario']){{  $settings['horario'] }}@endisset</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-square border-end border-start" href="{{  $settings['facebook'] }}"
                ><i class="fab fa-facebook-f"></i
                    ></a>
                <a class="btn btn-square border-end" href="{{  $settings['twitter'] }}"
                ><i class="fab fa-twitter"></i
                    ></a>
                <a class="btn btn-square border-end" href="{{  $settings['linkedin'] }}"
                ><i class="fab fa-linkedin-in"></i
                    ></a>
                <a class="btn btn-square border-end" href="{{  $settings['instagram'] }}"
                ><i class="fab fa-instagram"></i
                    ></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
