<div class="container-fluid mb-5" style="background-color: #1D1D1D; padding-top: 40px;">
    <section id="our-team">
        <div class="container">
            <div class="row">
                <h5 class="section-title text-center">@lang('landing.our_team.title')</h5>
                <div class="underline"></div>
                <h3 class="text-center text-white font-weight-500 mt-3">@lang('landing.our_team.sub_title')</h3>
                <p class="text-white text-center font-weight-300 mt-3 mb-5">
                    @lang('landing.our_team.desc')
                </p>
                <div class="row justify-content-center">
                    <div class="owl-carousel owl-theme mt-5 mb-3" id="teamCarousel">
                        <x-team-card-component picture="{{asset('/assets/img/team/rafi.png')}}"
                            name="Rafi Khoiri Isnan S.Tr.Par.,BBA" position="Founder & CEO"></x-team-card-component>
                        <x-team-card-component picture="{{asset('/assets/img/team/modi.png')}}"
                            name="Modina Rimolfa S.Sn " position="Creative Director"></x-team-card-component>
                        <x-team-card-component picture="{{asset('/assets/img/team/ratih.png')}}"
                            name="Ratih Aryani S.Sn" position="Marketing Manager"></x-team-card-component>
                        <x-team-card-component picture="{{asset('/assets/img/team/daus.png')}}"
                            name="M. Rizky Firdaus S.Kom" position="Software Engineer Manager"></x-team-card-component>
                        <x-team-card-component picture="{{asset('/assets/img/team/nelwin.png')}}"
                            name="Nelwin A.Md.Akun" position="Finance Manager"></x-team-card-component>
                        <x-team-card-component picture="{{asset('/assets/img/team/ariandy.png')}}"
                            name="Ariandy Utama S.Sn" position="Brand Strategic Manager"></x-team-card-component>
                        <x-team-card-component picture="{{asset('/assets/img/team/syvana.png')}}"
                            name="Syvana Cucu Yunita.S S.Kom" position="Junior Software Engineer">
                        </x-team-card-component>
                        <x-team-card-component picture="{{asset('/assets/img/team/pais.png')}}"
                            name="Musyaffa Salman S.Kom" position="Junior Software Engineer">
                        </x-team-card-component>
                        <x-team-card-component picture="{{asset('/assets/img/team/khansa.png')}}"
                            name="Khansa Fakhirah Rifli S.Kom" position="Junior Software Engineer">
                        </x-team-card-component>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>