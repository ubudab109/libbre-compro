<div class="container mb-5" style="background-color: #000; padding-top: 40px;">
    <section id="whyUs">
        <div class="row mt-5">
            <div class="col-lg-5 mr-1 col-md-12 mb-3 col-text-responsive">
                <img class="img-fluid" src="{{asset('/assets/img/why_us.png')}}" alt="about_us.png">
            </div>
            <div class="col-lg-6 col-md-12 col-text-responsive">
                <h1 class="text-white mt-3">
                    @lang('landing.why_us.title')
                </h1>
                <div class="divider blue-divider animated slideInLeft"></div>
                <p class="text-white paragraph-title mb-4 font-weight-300 animated slideInRight">
                    @lang('landing.why_us.desc')
                </p>

                <ul class="list-check" style="text-align: left;">
                    <li class="text-white font-weight-200">@lang('landing.why_us.list.one')</li>
                    <li class="text-white font-weight-200">@lang('landing.why_us.list.two')</li>
                    <li class="text-white font-weight-200">@lang('landing.why_us.list.three')</li>
                </ul>
            </div>
        </div>
    </section>
</div>