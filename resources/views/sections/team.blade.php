<div class="container-fluid mb-5" style="background-color: #1D1D1D; padding-top: 40px;">
    <section id="our-team">
        <div class="container">
            <div class="row">
                <h5 class="section-title text-center">Our Team</h5>
                <div class="underline"></div>
                <h3 class="text-center text-white font-weight-500 mt-3">Meet Our Expert Team</h3>
                <p class="text-white text-center font-weight-300 mt-3 mb-5">
                    Lorem ipsumNeque porro quisquam est qui do lorem ipsum quia dolor sit amet, Neque porro elit NeDque
                    porro Lorem ipsum Neque porro Neque porro
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
                    {{--
                    <div class="col-xl-6 col-lg-8 col-md-12 my-3">
                        <div class="card card-flex-row bg-black">
                            <img class="card-img-left example-card-img-responsive"
                                src="{{asset('/assets/img/team/rizky.png')}}" />
                            <div class="card-body pt-6">
                                <h4 class="text-white font-weight-700">M. Rizky Firdaus</h4>
                                <h5 class="text-white font-weight-300">Lead Software Engineer</h5>
                                <div class="underline-white"></div>
                                <p class="text-white font-weight-300">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's
                                </p>
                                <div class="icon-card">
                                    <img class="mr-1" src="{{asset('/assets/img/svg/instagram.svg')}}" alt="">
                                    <img src="{{asset('/assets/img/svg/linkedin.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-12 my-3">
                        <div class="card card-flex-row bg-black">
                            <img class="card-img-left example-card-img-responsive"
                                src="{{asset('/assets/img/team/ari.png')}}" />
                            <div class="card-body pt-6">
                                <h4 class="text-white font-weight-700">Ariandy Utama</h4>
                                <h5 class="text-white font-weight-300">Brand Strategic Manager</h5>
                                <div class="underline-white"></div>
                                <p class="text-white font-weight-300">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's
                                </p>
                                <div class="icon-card">
                                    <img class="mr-1" src="{{asset('/assets/img/svg/instagram.svg')}}" alt="">
                                    <img src="{{asset('/assets/img/svg/linkedin.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-12 my-3">
                        <div class="card card-flex-row bg-black">
                            <img class="card-img-left example-card-img-responsive"
                                src="{{asset('/assets/img/team/pais.png')}}" />
                            <div class="card-body pt-6">
                                <h4 class="text-white font-weight-700">Musyaffa Salman</h4>
                                <h5 class="text-white font-weight-300">Junior Software Engineer</h5>
                                <div class="underline-white"></div>
                                <p class="text-white font-weight-300">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's
                                </p>
                                <div class="icon-card">
                                    <img class="mr-1" src="{{asset('/assets/img/svg/instagram.svg')}}" alt="">
                                    <img src="{{asset('/assets/img/svg/linkedin.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-12 my-3">
                        <div class="card card-flex-row bg-black">
                            <img class="card-img-left example-card-img-responsive"
                                src="{{asset('/assets/img/team/nelwin-removebg-preview.png')}}" />
                            <div class="card-body pt-6">
                                <h4 class="text-white font-weight-700">Nelwin</h4>
                                <h5 class="text-white font-weight-300">Financial Manager</h5>
                                <div class="underline-white"></div>
                                <p class="text-white font-weight-300">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's
                                </p>
                                <div class="icon-card">
                                    <img class="mr-1" src="{{asset('/assets/img/svg/instagram.svg')}}" alt="">
                                    <img src="{{asset('/assets/img/svg/linkedin.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
</div>