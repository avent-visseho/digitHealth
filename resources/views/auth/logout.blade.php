@extends('layouts.default')

@section('content')
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="" class="d-block auth-logo">
                                        <img src="{{ asset('src/assets/images/logo-sm.svg') }}" alt=""
                                            height="28"> <span class="logo-txt">DigitHealth</span>
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <div class="avatar-xl mx-auto">
                                            <div class="avatar-title bg-soft-light text-primary h1 rounded-circle">
                                                <i class="bx bxs-user"></i>
                                            </div>
                                        </div>

                                        <div class="mt-4 pt-2">
                                            <h5>Vous êtes déconnecté(e)</h5>
                                            <p class="text-muted font-size-15">Merci d'avoir utilisé <span
                                                    class="fw-semibold text-dark">DigitHealth</span></p>
                                            <div class="mt-4">
                                                <a href="{{ route('login') }}"
                                                    class="btn btn-primary w-100 waves-effect waves-light">Se connecter</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p class="text-muted mb-0">Vous n'avez pas encore de compte ? <a
                                                href="{{ route('login') }}" class="text-primary fw-semibold">
                                                Inscrivez-vous</a> </p>
                                    </div>
                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> DigitHealth<i class="mdi mdi-heart text-danger"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
                <div class="col-xxl-9 col-lg-8 col-md-7">
                    <div class="auth-bg pt-md-5 p-4 d-flex">
                        <div class="bg-overlay bg-primary"></div>
                        <ul class="bg-bubbles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <!-- end bubble effect -->
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-7">
                                <div class="p-0 p-sm-4 px-xl-0">
                                    <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div
                                            class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                            <button type="button" data-bs-target="#reviewcarouselIndicators"
                                                data-bs-slide-to="0" class="active" aria-current="true"
                                                aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#reviewcarouselIndicators"
                                                data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#reviewcarouselIndicators"
                                                data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <!-- end carouselIndicators -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="testi-contain text-white">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                    <h4 class="mt-4 fw-medium lh-base text-white">“L'intelligence
                                                        artificielle ne remplacera pas les médecins, elle les rendra plus
                                                        puissants.”
                                                    </h4>
                                                    <div class="mt-4 pt-3 pb-5">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ asset('src/assets/images/users/avatar-1.jpg') }}"
                                                                    class="avatar-md img-fluid rounded-circle"
                                                                    alt="...">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3 mb-4">
                                                                <h5 class="font-size-18 text-white">Eric Topol,
                                                                </h5>
                                                                <p class="mb-0 text-white-50">cardiologue et directeur du
                                                                    Scripps Research Translational Science Institute</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="testi-contain text-white">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                    <h4 class="mt-4 fw-medium lh-base text-white">“L'avenir de la médecine
                                                        est un avenir où les humains et les machines travaillent ensemble
                                                        pour améliorer la santé de tous”</h4>
                                                    <div class="mt-4 pt-3 pb-5">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ asset('src/assets/images/users/avatar-2.jpg') }}"
                                                                    class="avatar-md img-fluid rounded-circle"
                                                                    alt="...">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3 mb-4">
                                                                <h5 class="font-size-18 text-white">Fei-Fei Li,
                                                                </h5>
                                                                <p class="mb-0 text-white-50">informaticienne et directrice
                                                                    du Stanford AI Institute for Human-Centered AI.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="testi-contain text-white">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                    <h4 class="mt-4 fw-medium lh-base text-white">“L'IA a le potentiel de
                                                        révolutionner la médecine en améliorant la précision des
                                                        diagnostics, en personnalisant les traitements et en rendant les
                                                        soins de santé plus accessibles.”</h4>
                                                    <div class="mt-4 pt-3 pb-5">
                                                        <div class="d-flex align-items-start">
                                                            <img src="{{ asset('src/assets/images/users/avatar-3.jpg') }}"
                                                                class="avatar-md img-fluid rounded-circle" alt="...">
                                                            <div class="flex-1 ms-3 mb-4">
                                                                <h5 class="font-size-18 text-white">Sundar Pichai,</h5>
                                                                <p class="mb-0 text-white-50">PDG de Google
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end carousel-inner -->
                                    </div>
                                    <!-- end review carousel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>
@endsection
