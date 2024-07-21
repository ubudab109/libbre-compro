<div class="container" style="background-color: #000;">
    <section id="about">
        <div class="row">
            <h5 class="section-title text-center">@lang('landing.about_us.title')</h5>
            <div class="underline"></div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-5 mr-1 col-md-12 mb-3 col-text-responsive">
                <img class="img-fluid" src="{{asset('/assets/img/robot.png')}}" alt="about_us.png">
            </div>
            <div class="col-lg-6 col-md-12 col-text-responsive align-content-center">
                <h1 class="text-orange mt-3">
                    @lang('landing.about_us.desc_one')
                </h1>
                <div class="divider blue-divider animated slideInLeft"></div>
                <p class="text-white paragraph-title mb-4 animated slideInRight">
                    <b>Libbre Creative Integrate</b> @lang('landing.about_us.desc_two')
                    <b>
                        @lang('landing.about_us.desc_three')
                    </b>
                </p>

                <p class="text-white paragraph-title mb-4 animated slideInRight">
                    @lang('landing.about_us.desc_four')
                </p>
                <button data-bs-toggle="modal" data-bs-target="#seeMore"
                    class="btn btn-primary-custom pt-2 px-5 me-3 animated slideInRight mb-3">@lang('landing.about_us.see_more')</button>
                @if ($compro->value)
                    <button data-bs-toggle="modal" data-bs-target="#modalFileSend"
                        class="btn btn-primary-custom pt-2 px-5 me-3 animated slideInRight mb-3">
                        <svg width="40px" height="30px" viewBox="0 2 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            stroke="#ffffff">

                            <g id="SVGRepo_bgCarrier" stroke-width="0" />

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M17 17H17.01M17.4 14H18C18.9319 14 19.3978 14 19.7654 14.1522C20.2554 14.3552 20.6448 14.7446 20.8478 15.2346C21 15.6022 21 16.0681 21 17C21 17.9319 21 18.3978 20.8478 18.7654C20.6448 19.2554 20.2554 19.6448 19.7654 19.8478C19.3978 20 18.9319 20 18 20H6C5.06812 20 4.60218 20 4.23463 19.8478C3.74458 19.6448 3.35523 19.2554 3.15224 18.7654C3 18.3978 3 17.9319 3 17C3 16.0681 3 15.6022 3.15224 15.2346C3.35523 14.7446 3.74458 14.3552 4.23463 14.1522C4.60218 14 5.06812 14 6 14H6.6M12 15V4M12 15L9 12M12 15L15 12"
                                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>

                        </svg>
                        Our Company Profile
                    </button>
                @endif
            </div>
        </div>
    </section>

    <section id="services" style="margin-top: 100px;">
        <div class="row">
            <h5 class="section-title text-center">@lang('landing.services.title')</h5>
            <div class="underline"></div>
        </div>
        <div class="row mt-5">
            <ul class="nav nav-tabs text-white tabServices mb-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-services active" id="service-offerings-tab" data-bs-toggle="tab"
                        data-bs-target="#service-offerings" type="button" role="tab" aria-controls="service-offerings"
                        aria-selected="true">
                        @lang('landing.services.acc.service_offerings')
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link nav-tab-services" id="comprehensive-service-tab" data-bs-toggle="tab"
                        data-bs-target="#comprehensive-service" type="button" role="tab"
                        aria-controls="comprehensive-service" aria-selected="false">
                        @lang('landing.services.acc.comprehensive_offerings')
                    </button>
                </li>
            </ul>

            <p class="text-white paragraph-title mb-1 animated slideInRight text-center">
                @lang('landing.services.desc')
            </p>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="service-offerings" role="tabpanel"
                    aria-labelledby="service-offerings">
                    {{-- dsini is --}}
                    <div class="owl-carousel owl-theme mt-5 mb-3" id="serviceCarousel">
                        <x-our-service-component image="{{asset('/assets/img/svg/web-development-svgrepo-com.svg')}}"
                            serviceName="landing.services.data.web_development"
                            desc="landing.services.data.desc_web_development" modal="#website-service-modal">
                        </x-our-service-component>

                        <x-our-service-component image="{{asset('/assets/img/svg/monitor-edit-svgrepo-com.svg')}}"
                            serviceName="landing.services.data.branding" desc="landing.services.data.desc_branding"
                            modal="#branding-service-modal"></x-our-service-component>

                        <x-our-service-component
                            image="{{asset('/assets/img/svg/digital-marketing-promotion-advertising-svgrepo-com.svg')}}"
                            serviceName="landing.services.data.digital_marketing"
                            desc="landing.services.data.desc_digital_marketing" modal="#digital-service-modal">
                        </x-our-service-component>

                        <x-our-service-component
                            image="{{asset('/assets/img/svg/cinema-clapperboard-media-svgrepo-com.svg')}}"
                            serviceName="landing.services.data.media_production"
                            desc="landing.services.data.desc_media_production" modal="#media-service-modal">
                        </x-our-service-component>
                    </div>
                    {{-- udah --}}
                </div>
                <div class="tab-pane fade" id="comprehensive-service" role="tabpanel"
                    aria-labelledby="comprehensive-service">

                    <div class="owl-carousel owl-theme mt-5 mb-3" id="comprehensiveService">
                        <x-our-service-component image="{{asset('/assets/img/svg/food-stall-stand-svgrepo-com.svg')}}"
                            serviceName="landing.services.data.fnb" desc="landing.services.data.desc_fnb"
                            modal="#fnb-service-modal"></x-our-service-component>
                    </div>

                </div>

            </div>

    </section>
</div>