<div class="container mb-5" style="background-color: #000; padding-top: 40px;">
    <section id="portfolio">
        <div class="row">
            <h5 class="section-title text-center">Portfolio</h5>
            <div class="underline"></div>
            <span class="text-center text-white mt-3 section-sub-title">Our Work</span>
        </div>
        <div class="row mt-5">
            <div class="owl-carousel owl-theme mt-3 mb-3" id="portfolioServices">
                @for ($i = 0; $i < 6; $i++) 
                    <div class="item">
                        <div class="card card-portfolio">
                            <img src="{{asset('/assets/img/portfolio1_lg.jpg')}}" class="card-img-top" alt="banner.jpg">
                            <div class="card-body text-white py-4">
                                <h5 class="card-title text-white">Lorem Ipsum</h5>
                                <p class="card-text mt-3" style="font-weight: 300;">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's
                                </p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
</div>