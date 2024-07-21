<div class="container mb-5" style="background-color: #000; padding-top: 40px;">
    <section id="portfolio">
        <div class="row">
            <h5 class="section-title text-center">@lang('landing.portfolio.title')</h5>
            <div class="underline"></div>
            <span class="text-center text-white mt-3 section-sub-title">@lang('landing.portfolio.sub_title')</span>
        </div>
        <div class="row mt-5">
            <div class="owl-carousel owl-theme mt-3 mb-3" id="portfolioServices">
                @foreach ($portfolios as $item)
                <div class="item">
                    <div class="card card-portfolio">
                        <img src="{{json_decode($item['images'])[0]}}" class="card-img-top" alt="banner.jpg">
                        <div class="card-body text-white py-4">
                            <h5 class="card-title text-white">{{$item['title']}}</h5>
                            <p class="card-text mt-3" style="font-weight: 300;">
                                {{$item['description']}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>