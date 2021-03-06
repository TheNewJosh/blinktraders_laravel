<!DOCTYPE html>
<html>
    <head>
        <title>Blink Traders </title>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        @include('layouts.meta')
        <?php
            $page = "index.php";
            use App\Models\InvestPlan;
            $investPlan = InvestPlan::where('status', 1)->get()
        ?>
        <style>
            .sprocket-quotes-image {
    border-radius: 100%;
    border: none;
    max-width: 95px;
    float: none;
    margin-right: 0;
    overflow: hidden;
}
.too-quotes {
    position: relative;
    overflow: visible;
}
        </style>
    </head>
    <body>   
        @include('layouts.header')     
        <main class="main">
            <section class="hero-banner-head">
                <div class="hero-banner-head-mobile">
                <div class="hero-text-heading-banner-m">
                    <h4 class="force-color-white">Investment  you can <br> Trust.</h4><br>
                    <a href="{{ route('register')}}" class="btn btn-primary">Get Started</a>
                </div>
                </div>
                <div class="hero-text-heading-banner">
                    <h2 class="force-color-white">Investment  you can <br> Trust.</h2><br>
                    <a href="{{ route('register')}}" class="btn btn-primary">Get Started</a>
                </div>
                <div class="row hero-banner-cards">
                    <div class="card col-lg-4 col-xs-12 force-bg-black card-extend-padding">
                        <div class="card-body text-center">
                        <h2 class="hero-icon-i"><i class="fas fa-tv force-color-white"></i></h2>
                        <h5 class="card-title force-color-white">Data Storage</h5>
                        <p class="card-text force-color-white">Client’s personal investment data is stored in logical pools over physical storage that spans multiple servers and this guarantees safety of funds and 100% uptime.</p>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-xs-12 force-bg-blue card-extend-padding">
                        <div class="card-body text-center">
                        <h2 class="hero-icon-i"><i class="fas fa-globe-africa force-color-white"></i></h2>
                        <h5 class="card-title force-color-white">Ease Of Investment Deposit</h5>
                        <p class="card-text force-color-white">This featurse allows smooth and easy processing of investment funds into clients' account. Our platform supports multiple media for investment funding.</p>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-xs-12 force-bg-white card-extend-padding">
                        <div class="card-body text-center">
                        <h2 class="hero-icon-i"><i class="fas fa-cloud-upload-alt force-color-blue"></i></h2>
                        <h5 class="card-title force-color-black">Customer Insights</h5>
                        <p class="card-text force-color-black">In today's economy, we are aware of uncertainties, hence, we provide fastest trading cash-outs and withdrawal exit options! No delays in order executions and lags in user interface.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="space-section"></section>
            <section class="about-section">
                <div class="row about-section-content">
                    <div class="col-lg-6 col-xs-12">
                        <img src="{{ asset('img/intro1.png') }}" class="about-section-content-img imm-img-about" />
                    </div>
                    <div class="col-lg-6 col-xs-12 about-section-content-mc imm-content-about"><br>
                        <b class="imm-heading-about">Investment Advisory Offering To Your Needs</b><br>
                        <p>
                            We put your investments in new highly remunerative innovative projects, which offers great returns along. Today our company has a professional team to develop a business. We are constantly diversifying our investment portfolio and building stronger connections worldwide.
                        </p>
                        <a href="#" class="btn btn-dark">Read more</a>
                    </div>
                </div>
            </section>
            <section class="inline-hero-banner">
                <div class="text-center"><br><br>
                    <h5 class="force-color-white">BUSINESS</h5><br>
                    <h2 class="force-color-white">Let’s Start To Discover Our Benefits &amp; Features</h2><br>
                    <p class="force-color-pale-white">Satisfying your financial needs</p><br>
                    <a href="{{ route('register')}}" class="btn btn-primary">Get Started</a>
                </div>
            </section>
            <section>
                <div class="row about-section-content force-width-100-about-new">
                    <div class="card col-xs-12 col-lg-4 force-bg-black force-width-100-about-new-uni">
                        <div class="card-body text-center">
                        <h5 class="card-title force-color-white">Strategy</h5>
                        <p class="card-text force-color-white">Once we understand what is important to you, we will analyse the information you have provided us with and assess your current situation.</p>
                        </div>
                    </div>
                    <div class="card col-xs-12 col-lg-4 force-bg-blue force-width-100-about-new-uni">
                        <div class="card-body text-center">
                        <h5 class="card-title force-color-white">Implementation</h5>
                        <p class="card-text force-color-white">Once any revisions have been made, we will organise a Checkpoint Meeting’, where we will agree the final financial strategy with you and start implementing it.</p>
                        </div>
                    </div>
                    <div class="card col-xs-12 col-lg-4 force-bg-white force-width-100-about-new-uni">
                        <div class="card-body text-center">
                        <h5 class="card-title force-color-black">Evaluation</h5>
                        <p class="card-text force-color-black">We will review your progress towards your long-term financial objectives, to maximise the likelihood of you ‘staying on track’.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pricing-div"> 
                <div class="about-section-content">      
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper swiper-wrapper-space">
                        @if ($investPlan->count())
                            @foreach ($investPlan as $inp)
                            <div class="swiper-slide card-plan-item">
                                <div class="force-bg-color-card px-2 py-4 swiper-slide-f">
                                    <div class="text-center">
                                    <h5 class="force-color-card-plan">{{$inp->name}}</h5>
                                        <h2 class="force-color-blue">{{$inp->percent}}%</h2>
                                        <b class="force-color-blue">{{$inp->percent_ref}}</b><br><br>
                                        <p class="force-color-card-plan-item">${{$inp->min_amount}} - ${{$inp->max_amount}}</p>
                                        <p class="force-color-card-plan-item">24/7 support</p>
                                        <p class="force-color-card-plan-item">Referral Bonus {{$inp->percent_referral}}%</p><br><br>
                                        <a href="{{ route('register')}}" class="btn btn-primary">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
            <section class="mt-2 mb-2">
                <div class="text-center">
                    <h5 class="force-color-blue">QUALITY</h5>
                    <h2 class="force-color-black">Services We Provide</h2>
                </div>
                <div class="about-section-content">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="px-1 py-2">
                                <img class="card-img-top" src="{{ asset('img/services1.png') }}" alt="Card image cap">
                                <div class="card-body">
                                <b class="force-color-black">Crypto Currency Investment</b><br><br>
                                <p class="card-text force-color-pale-white">Bitcoin trading is a unique platform for trading bitcoin against other cryptocurrencies just like one would do for forex trading…</p>
                                    <a href="{{ route('serviceCryptoInvestment')}}" class="force-color-black force-a"><b>Read more</b></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="px-1 py-2">
                                <img class="card-img-top" src="{{ asset('img/services2.png') }}" alt="Card image cap">
                                <div class="card-body">
                                <b class="force-color-black">Forex Trading</b><br><br>
                                <p class="card-text force-color-pale-white">The Foreign Exchange market, also called FOREX or FX, is the global market for currency trading. With a daily volume of more than $5.3 trillion.…</p>
                                    <a href="{{ route('serviceForex')}}" class="force-color-black force-a"><b>Read more</b></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="px-1 py-2">
                                <img class="card-img-top" src="{{ asset('img/services3.png') }}" alt="Card image cap">
                                <div class="card-body">
                                <b class="force-color-black">Banking Investment</b><br><br>
                                <p class="card-text force-color-pale-white">Banking Investment Here at Blinktraders we provide online brokerage services for over 1000 customer accounts and processes over 3,000 trades per day.…</p>
                                    <a href="{{ route('serviceStock')}}" class="force-color-black force-a"><b>Read more</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
            <section class="inline-hero-banner-4">
                <div class="">
                    <div class="text-center"><br><br>
                        <h5 class="force-color-white">TESTIMONIAL</h5>
                        <h2 class="force-color-white">What Our Clients Say About Us</h2>
                    </div>
                </div>
                <div class="about-section-content">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper swiper-wrapper-space">
                            <div class="swiper-slide swiper-slide-2">
                                <div class="card force-bg-black px-1">
                                    <div class="card-body text-center">
                                    <img src="/img/testimonial-1.png" class="sprocket-quotes-image" alt="image">
                                    <h2 class="card-title force-color-white">Seamus Hodges</h2>
                                    <h5 class="force-color-blue">STOCK EXPERT</h5>
                                    <p class="card-text force-color-white">Blinktraders understands the anxieties that come with investing and at each meeting manages to reassure the client so that they leave feeling positive about the future</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-2">
                                <div class="card force-bg-black px-1">
                                    <div class="card-body text-center">
                                   <img src="/img/testimonial-2.png" class="sprocket-quotes-image" alt="image">
                                    <h2 class="card-title force-color-white">Ayra Little</h2>
                                    <h5 class="force-color-blue">FINANCIAL ANALYST</h5>
                                    <p class="card-text force-color-white">Blinktraders makes you feel important and gives you the info you need at the level you can understand. Sound advice even if it is not what you expected.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-2">
                                <div class="card force-bg-black px-1">
                                    <div class="card-body text-center">
                                    <img src="/img/testimonial-3.png" class="sprocket-quotes-image" alt="image">
                                    <h2 class="card-title force-color-white">Huey Sloan</h2>
                                    <h5 class="force-color-blue">MARKETING ANALYST</h5>
                                    <p class="card-text force-color-white">Blinktraders gave me a very comprehensive view of my investments. He also provided me with a fantastic picture of what income I would have on retirement.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="force-bg-blue">
                <div class="row about-section-content">
                    <div class="col-xs-12 col-lg-3">
                        <div class="py-3 text-center">
                            <span class="force-color-white stat-b-text">1000</span><br>
                            <span class="force-color-white">Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                        <div class="py-3 text-center">
                            <span class="force-color-white stat-b-text">550</span><br>
                            <span class="force-color-white">Projects Completed</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                        <div class="py-3 text-center">
                            <span class="force-color-white stat-b-text">40</span><br>
                            <span class="force-color-white">Qualified Staffs</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                        <div class="py-3 text-center">
                            <span class="force-color-white stat-b-text">50</span><br>
                            <span class="force-color-white">Awards Won</span>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        @include('layouts.footer')

        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 'auto',
                spaceBetween: 15,
                centeredSlides: true,
                centeredSlidesBounds: true,
                centerInsufficientSlides: true,
                grabCursor: false,
                loop: false,
                pagination: {
                el: ".swiper-pagination",
                clickable: true,
                },
            });
        </script>
    </body>
</html>

