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
                <h1 class="text-orange mt-3">
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
                        <x-our-service-component
                            image="{{asset('/assets/img/svg/web-development-svgrepo-com.svg')}}"
                            serviceName="Web Development"
                            desc="Layanan Pengembangan Website Komprehensif kami dirancang untuk membantu bisnis Anda memiliki kehadiran online yang profesional, responsif, dan efektif."
                            modal="#website-service-modal"
                        ></x-our-service-component>

                        <x-our-service-component
                            image="{{asset('/assets/img/svg/monitor-edit-svgrepo-com.svg')}}"
                            serviceName="Branding"
                            desc="Layanan branding yang komprehensif dan inovatif khusus untuk industri Food and Beverage (F&B). Kami memahami bahwa identitas merek yang kuat adalah kunci sukses dalam pasar yang kompetitif."
                            modal="#branding-service-modal"
                        ></x-our-service-component>

                        <x-our-service-component
                            image="{{asset('/assets/img/svg/digital-marketing-promotion-advertising-svgrepo-com.svg')}}"
                            serviceName="Digital Marketing"
                            desc="Layanan Digital Marketing Terpadu kami dirancang untuk membantu bisnis Anda mencapai dan melibatkan audiens secara efektif melalui berbagai saluran digital."
                            modal="#digital-service-modal"
                        ></x-our-service-component>

                        <x-our-service-component
                            image="{{asset('/assets/img/svg/cinema-clapperboard-media-svgrepo-com.svg')}}"
                            serviceName="Media Production"
                            desc="Layanan produksi media yang dirancang untuk meningkatkan daya tarik visual dan citra merek bisnis food and beverage (F&B) Anda."
                            modal="#media-service-modal"
                        ></x-our-service-component>
                    </div>
                    {{-- udah --}}
                </div>
                <div class="tab-pane fade" id="comprehensive-service" role="tabpanel"
                    aria-labelledby="comprehensive-service">

                    <div class="owl-carousel owl-theme mt-5 mb-3" id="comprehensiveService">
                        <x-our-service-component
                            image="{{asset('/assets/img/svg/food-stall-stand-svgrepo-com.svg')}}"
                            serviceName="FnB Consultan Business"
                            desc="Kami menyediakan layanan konsultasi bisnis yang komprehensif, dirancang khusus untuk industri food and beverage (F&B). Kami mengintegrasikan pendekatan inovatif dan pengalaman mendalam untuk membantu bisnis berkembang."
                            modal="#fnb-service-modal"
                        ></x-our-service-component>
                    </div>

                </div>

            </div>
            
    </section>
</div>