<div class="container" style="background-color: #000;">
    <section id="about">
        <div class="row">
            <h5 class="section-title text-center">About Us</h5>
            <div class="underline"></div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-5 mr-1 col-md-12 mb-3 col-text-responsive">
                <img class="img-fluid" src="{{asset('/assets/img/robot.png')}}" alt="about_us.png">
            </div>
            <div class="col-lg-6 col-md-12 col-text-responsive align-content-center">
                <h1 class="text-white mt-3">
                    Kami Menghadirkan Integrasi Kreatif pada industri F&B
                </h1>
                <div class="divider blue-divider animated slideInLeft"></div>
                <p class="text-white paragraph-title mb-4 animated slideInRight">
                    <b>Libbre Creative Integrate</b> adalah agensi kreatif yang menggabungkan kreativitas dan
                    inovasi
                    teknologi dalam industri Food & Beverage Indonesia. Berdiri sejak 2023, kami menawarkan layanan
                    <b>
                        branding, pemasaran digital, pengembangan web, dan produksi media, serta berperan sebagai
                        konsultan bisnis dan pengembang perangkat lunak.
                    </b>
                </p>

                <p class="text-white paragraph-title mb-4 animated slideInRight">
                    Dibalik layanan kami, terdapat semangat inovasi yang memandu langkah kami. Kami tidak hanya
                    mengikuti tren, tapi juga mendorong.
                </p>
                <a href="" class="btn btn-primary-custom pt-2 px-5 me-3 animated slideInRight">See More</a>
            </div>
        </div>
    </section>

    <section id="services" style="margin-top: 100px;">
        <div class="row">
            <h5 class="section-title text-center">Services</h5>
            <div class="underline"></div>
        </div>
        <div class="row mt-5">
            <ul class="nav nav-tabs text-white tabServices mb-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-services active" id="service-offerings-tab" data-bs-toggle="tab"
                        data-bs-target="#service-offerings" type="button" role="tab"
                        aria-controls="service-offerings" aria-selected="true">
                        SERVICE OFFERINGS
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-services" id="comprehensive-service-tab" data-bs-toggle="tab"
                        data-bs-target="#comprehensive-service" type="button" role="tab"
                        aria-controls="comprehensive-service" aria-selected="false">
                        COMPREHENSIVE SERVICE
                    </button>
                </li>
            </ul>

            <p class="text-white paragraph-title mb-1 animated slideInRight text-center">
                Kami menawarkan layanan branding, pemasaran digital, pengembangan web, dan produksi media khusus
                industri Food & Beverage. dengan mengadopsi AI sebagai tools untuk meningkatkan efisiensi dan
                kreativitas. Sebagai mitra strategis, kami membantu merencanakan dan melaksanakan strategi yang
                berkelanjutan.
            </p>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="service-offerings" role="tabpanel"
                    aria-labelledby="service-offerings">
                    {{-- dsini is --}}
                    <div class="owl-carousel owl-theme mt-5 mb-3" id="serviceCarousel">
                        <div class="item service">
                            <div class="card card-service h-100">
                                <div class="card-body">
                                    <img class="img-center"
                                        src="{{asset('/assets/img/svg/web-development-svgrepo-com.svg')}}"
                                        width="70" alt="icon.png">
                                    <div class="col-12 text-center mt-4">
                                        <h5 class="text-white text-bold mb-3">Web Development</h5>
                                        <p class="text-justify text-white">
                                            Layanan Pengembangan Website Komprehensif kami dirancang untuk membantu bisnis Anda memiliki kehadiran online yang profesional, responsif, dan efektif. Kami menyediakan solusi pengembangan website yang mencakup semua aspek, mulai dari desain hingga implementasi dan pemeliharaan, memastikan website Anda tidak hanya menarik secara visual tetapi juga fungsional dan user-friendly.
                                        </p>
                                        <div class="icon-right">
                                            <img src="{{asset('/assets/img/iconbutton.png')}}" width="35" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item service">
                            <div class="card card-service h-100">
                                <div class="card-body">
                                    <img class="img-center"
                                        src="{{asset('/assets/img/svg/monitor-edit-svgrepo-com.svg')}}" width="70"
                                        alt="icon.png">
                                    <div class="col-12 text-center mt-4">
                                        <h5 class="text-white text-bold mb-3">Branding</h5>
                                        <p class="text-justify text-white">
                                            Layanan branding adalah serangkaian layanan yang bertujuan untuk membangun, memperkuat, dan mempertahankan identitas merek suatu perusahaan atau produk. Layanan ini dapat mencakup berbagai aspek, seperti desain logo, pembuatan slogan, pengembangan strategi pemasaran, dan pengelolaan citra merek.
                                        </p>
                                        <div class="icon-right">
                                            <img src="{{asset('/assets/img/iconbutton.png')}}" width="35" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item service">
                            <div class="card card-service h-100">
                                <div class="card-body">
                                    <img class="img-center"
                                        src="{{asset('/assets/img/svg/digital-marketing-promotion-advertising-svgrepo-com.svg')}}"
                                        width="70" alt="icon.png">
                                    <div class="col-12 mt-4">
                                        <h5 class="text-white text-center mb-3">Digital Marketing</h5>
                                        <p class="text-justify text-white">
                                            Layanan Digital Marketing Terpadu kami dirancang untuk membantu bisnis Anda mencapai dan melibatkan audiens secara efektif melalui berbagai saluran digital. Dengan memanfaatkan internet dan teknologi digital terbaru, kami menyediakan solusi pemasaran yang komprehensif untuk menarik, mempertahankan, dan mengubah prospek menjadi pelanggan setia.
                                        </p>
                                        <div class="icon-right">
                                            <img src="{{asset('/assets/img/iconbutton.png')}}" width="35" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item service">
                            <div class="card card-service h-100">
                                <div class="card-body">
                                    <img class="img-center"
                                        src="{{asset('/assets/img/svg/cinema-clapperboard-media-svgrepo-com.svg')}}"
                                        width="70" alt="icon.png">
                                    <div class="col-12 mt-4">
                                        <h5 class="text-white text-center mb-3">Media Production</h5>
                                        <p class="text-justify text-white">
                                            Video Production, Photo Production, Graphic design, Web design, Audio Production, Graphic Animation
                                        </p>
                                        <div class="icon-right">
                                            <img src="{{asset('/assets/img/iconbutton.png')}}" width="35" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- udah --}}
                </div>
                <div class="tab-pane fade" id="comprehensive-service" role="tabpanel"
                    aria-labelledby="comprehensive-service">

                    <div class="owl-carousel owl-theme mt-5 mb-3" id="comprehensiveService">
                        <div class="item">
                            <div class="card card-service h-100">
                                <div class="card-body">
                                    <img class="img-center"
                                        src="{{asset('/assets/img/svg/food-stall-stand-svgrepo-com.svg')}}"
                                        width="70" alt="icon.png">
                                    <div class="col-12 text-center mt-4">
                                        <h5 class="text-white text-bold mb-3">FnB Consultan Business</h5>
                                        <p class="text-center text-white">
                                            Market Analysis and Customer Research, Concept and Menu Development,
                                            Operational Planning, Market and Branding Strategy, Financial
                                            Management,
                                            Monitoring and Evaluation, Interior Design and Layout, Human Resource
                                            Management,
                                            Legal and Compliance, Technology and Innovation
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
    </section>
</div>