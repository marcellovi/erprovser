@extends('frontend.main_master')

@section('content')

    <!-- Page Header Start -->
    <div
        class="container-fluid page-header py-5 mb-5 wow fadeIn"
        data-wow-delay="0.1s"
    >
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">
                Contato
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">
                        Fale Conosco
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
                        <iframe
                            class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235199.37769647368!2d-43.61079040052678!3d-22.913729486694745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bde559108a05b%3A0x50dc426c672fd24e!2sRio%20de%20Janeiro%2C%20State%20of%20Rio%20de%20Janeiro%2C%20Brazil!5e0!3m2!1sen!2sus!4v1723779115287!5m2!1sen!2sus"
                            frameborder="0"
                            style="min-height: 450px; border: 0"
                            allowfullscreen=""
                            aria-hidden="false"
                            tabindex="0"
                        ></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">Contato</h6>
                        <h1 class="display-6 mb-0">
                            Entre em contato e trabalhe conosco!
                        </h1>
                    </div>
                    <p class="mb-4">
                        The contact form is currently inactive. Get a functional and
                        working contact form with Ajax & PHP in a few minutes. Just copy
                        and paste the files, add a little code and you're done.
                        <a href="https://htmlcodex.com/contact-form">Download Now</a>.
                    </p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light"
                                        id="name"
                                        placeholder="Your Name"
                                    />
                                    <label for="name">Nome</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input
                                        type="email"
                                        class="form-control border-0 bg-light"
                                        id="email"
                                        placeholder="Your Email"
                                    />
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control border-0 bg-light"
                                        id="subject"
                                        placeholder="Subject"
                                    />
                                    <label for="subject">Assunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                    <textarea
                        class="form-control border-0 bg-light"
                        placeholder="Leave a message here"
                        id="message"
                        style="height: 150px"
                    ></textarea>
                                    <label for="message">Mensagem</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection
