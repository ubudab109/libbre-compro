<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a href="#home" class="navbar-brand p-0">
                {{-- <h1 class="text-white">AI<span class="text-dark">.</span>Tech</h1> --}}
                <img src="{{asset('assets/img/logo_header.png')}}" width="150" alt="">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto" style="background-color: #000;">
                    <a href="#home" class="nav-item nav-link active">@lang('landing.menu.home')</a>
                    <a href="#about" class="nav-item nav-link">@lang('landing.menu.about_us')</a>
                    <a href="#services" class="nav-item nav-link">@lang('landing.menu.service')</a>
                    <a href="#portfolio" class="nav-item nav-link">@lang('landing.menu.portfolio')</a>
                    <a href="#contactUs" class="nav-item nav-link">@lang('landing.menu.contact')</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">@lang('landing.menu.lang')</a>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="{{ route('lang.switch', 'id') }}" class="dropdown-item">Bahasa</a>
                            <a href="{{ route('lang.switch', 'en') }}" class="dropdown-item">English</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


<!-- Hero Start -->
<div class="container-fluid hero-header">
    <div class="container">
        <section id="home">
            <div class="row mb-5 hero-row mt-5">
                <div class="col-lg-12 text-center">
                    <div class="text-orange mb-3 small-title">
                        @lang('landing.header.welcome')
                    </div>
                    <h1 class="display-4 text-white high-title mb-4">
                        @lang('landing.header.creative')
                    </h1>
                    <p class="text-white paragraph-title mb-4">
                        "Transforming the Food & Beverage industry with Creativity and Innovation for F&B Business"
                    </p>
                </div>
                <div class="col-12 text-center img-hero-banner">
                    <img class="img-fluid img-center" src="{{asset('/assets/img/img_ai.png')}}" width="420"
                        alt="banner.png">
                </div>
            </div>
            {{-- <div class="img-banner-container">
                <img class="img-fluid hero-banner" src="{{asset('/assets/img/hero_banner.png')}}" alt="">
                <div class="row"></div>
            </div> --}}
        </section>
    </div>
    <div class="row p-4 justify-content-center row-marquee" style="background: #1D1D1D">
        <div class="col-12 text-center">
            <div class="cont">
                <div class="scorri">
                    <div class="tithome d-flex px-5" style="justify-content: space-between;">
                        <div class="text-marque text-orange">
                            Food & beverage
                        </div>
                        <div class="text-marque icon mt-2 text-orange">
                        </div>

                        <div class="text-marque text-orange">
                            Creative
                        </div>
                        <div class="text-marque icon mt-2 text-orange">
                        </div>

                        <div class="text-marque text-orange">
                            Technology
                        </div>
                        <div class="text-marque icon mt-2 text-orange">
                        </div>
                        <div class="text-marque text-orange">
                            Innovation
                        </div>
                        <div class="text-marque icon mt-2 text-orange">
                        </div>
                        <div class="text-marque text-orange">
                            Integrate
                        </div>
                        <div class="text-marque icon mt-2 text-orange">
                        </div>
                    </div>
                </div>
            </div>
            {{-- <marquee behavior="" direction="left">

            </marquee> --}}
        </div>
    </div>
</div>