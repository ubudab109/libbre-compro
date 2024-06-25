<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a href="#home" class="navbar-brand">
                {{-- <h1 class="text-white">AI<span class="text-dark">.</span>Tech</h1> --}}
                <img src="{{asset('assets/img/logo_19218.png')}}" width="140" alt="">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto" style="background-color: #000;">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About Us</a>
                    <a href="#services" class="nav-item nav-link">Services</a>
                    <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                    <a href="#contactUs" class="nav-item nav-link">Contact Us</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Language</a>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="feature.html" class="dropdown-item">Bahasa</a>
                            <a href="team.html" class="dropdown-item">English</a>
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
            <div class="row mb-5 hero-row">
                <div class="col-lg-12 text-center">
                    <div class="text-orange mb-3 small-title animated slideInRight">
                        WELCOME TO LIBBRE CREATIVE INTEGRATE
                    </div>
                    <h1 class="display-4 text-white high-title mb-4 animated slideInRight">
                        WE ARE CREATIVE INTEGRATE AGENCY
                    </h1>
                    <p class="text-white paragraph-title mb-4 animated slideInRight">
                        "Transforming the Food & Beverage Industry
                        with Creativity and Innovation, we Helping For F&B Businnes"
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
                    <div class="tithome d-flex px-5" style="justify-content: space-evenly;">
                        <div class="text-marque text-orange">
                            Food N beverage
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
                    </div>
                </div>
            </div>
            {{-- <marquee behavior="" direction="left">

            </marquee> --}}
        </div>
    </div>
</div>