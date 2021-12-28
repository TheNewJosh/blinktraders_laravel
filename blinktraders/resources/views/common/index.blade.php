<!DOCTYPE html>
<html>
    <head>
        @extends('layouts.meta') 
    </head>
    <body>   
        @extends('layouts.header')     
        <main class="main">
            <section class="hero-banner-head">
                <div class="hero-banner-head-mobile"></div>
                <div class="row hero-banner-cards">
                    <div class="card col-lg-4 col-xs-12 force-bg-black">
                        <div class="card-body text-center">
                        <h2 class="hero-icon-i"><i class="fas fa-tv force-color-white"></i></h2>
                        <h5 class="card-title force-color-white">Data Storage</h5>
                        <p class="card-text force-color-white">Client’s personal investment data is stored in logical pools over physical storage that spans multiple servers and this guarantees safety of funds and 100% uptime.</p>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-xs-12 force-bg-blue">
                        <div class="card-body text-center">
                        <h2 class="hero-icon-i"><i class="fas fa-globe-africa force-color-white"></i></h2>
                        <h5 class="card-title force-color-white">Ease Of Investment Deposit</h5>
                        <p class="card-text force-color-white">This featurse allows smooth and easy processing of investment funds into clients' account. Our platform supports multiple media for investment funding.</p>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-xs-12 force-bg-white">
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
                        <img src="{{ asset('img/intro1.png') }}" class="about-section-content-img" style="width:100%;" />
                    </div>
                    <div class="col-lg-6 col-xs-12 about-section-content-mc">
                        <b>Investment Advisory Offering To Your Needs</b><br>
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
                    <p class="force-color-pale-white">Satisfying your financial needs</p><br><br>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
            </section>
            <section>
                <div class="row about-section-content">
                    <div class="card col-xs-12 col-lg-4 force-bg-black">
                        <div class="card-body text-center">
                        <h5 class="card-title force-color-white">Strategy</h5>
                        <p class="card-text force-color-white">Once we understand what is important to you, we will analyse the information you have provided us with and assess your current situation.</p>
                        </div>
                    </div>
                    <div class="card col-xs-12 col-lg-4 force-bg-blue">
                        <div class="card-body text-center">
                        <h5 class="card-title force-color-white">Implementation</h5>
                        <p class="card-text force-color-white">Once any revisions have been made, we will organise a Checkpoint Meeting’, where we will agree the final financial strategy with you and start implementing it.</p>
                        </div>
                    </div>
                    <div class="card col-xs-12 col-lg-4 force-bg-white">
                        <div class="card-body text-center">
                        <h5 class="card-title force-color-black">Evaluation</h5>
                        <p class="card-text force-color-black">We will review your progress towards your long-term financial objectives, to maximise the likelihood of you ‘staying on track’.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pricing-div">
                <div class="row about-section-content">
                    <div class="col-xs-12 col-lg-3">
                        <div class="card force-bg-white px-2">
                            <div class="card-body text-center">
                            <h5 class="card-title force-color-black">Starter</h5>
                                <h2 class="force-color-blue">10%</h2>
                                <b class="force-color-blue">DAILY</b><br><br>
                                <p class="force-color-black">$1000 - $4,999</p>
                                <p class="force-color-black">24/7 support</p>
                                <p class="force-color-black">Referral Bonus 5%</p><br><br>
                                <a href="#" class="btn btn-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                        <div class="card force-bg-black px-2">
                            <div class="card-body text-center">
                            <h5 class="card-title force-color-white">Standard</h5>
                                <h2 class="force-color-blue">12%</h2>
                                <b class="force-color-blue">DAILY</b><br><br>
                                <p class="force-color-white">$5000 - $19,999</p>
                                <p class="force-color-white">24/7 support</p>
                                <p class="force-color-white">Referral Bonus 5%</p><br><br>
                                <a href="#" class="btn btn-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                        <div class="card force-bg-white px-2">
                            <div class="card-body text-center">
                            <h5 class="card-title force-color-black">Premium</h5>
                                <h2 class="force-color-blue">15%</h2>
                                <b class="force-color-blue">DAILY</b><br><br>
                                <p class="force-color-black">$20,000 - $49,999</p>
                                <p class="force-color-black">24/7 support</p>
                                <p class="force-color-black">Referral Bonus 5%</p><br><br>
                                <a href="#" class="btn btn-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                        <div class="card force-bg-black px-2">
                            <div class="card-body text-center">
                            <h5 class="card-title force-color-white">Starter</h5>
                                <h2 class="force-color-blue">20%</h2>
                                <b class="force-color-blue">DAILY</b><br><br>
                                <p class="force-color-white">$50,000 - unlimited</p>
                                <p class="force-color-white">24/7 support</p>
                                <p class="force-color-white">Referral Bonus 5%</p><br><br>
                                <a href="#" class="btn btn-primary">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-5 mb-5">
                <div class="text-center">
                    <h5 class="force-color-blue">QUALITY</h5>
                    <h2 class="force-color-black">Services We Provide</h2>
                </div>
                <div class="row about-section-content">
                    <div class="col-xs-12 col-lg-4">
                        <div class="card px-2">
                            <img class="card-img-top" src="{{ asset('img/services1.png') }}" alt="Card image cap">
                            <div class="card-body">
                            <b class="force-color-black">Crypto Currency Investment</b><br><br>
                            <p class="card-text force-color-pale-white">Bitcoin trading is a unique platform for trading bitcoin against other cryptocurrencies just like one would do for forex trading…</p>
                                <a href="#" class="force-color-black force-a"><b>Read more</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="card px-2">
                            <img class="card-img-top" src="{{ asset('img/services1.png') }}" alt="Card image cap">
                            <div class="card-body">
                            <b class="force-color-black">Forex Trading</b><br><br>
                            <p class="card-text force-color-pale-white">The Foreign Exchange market, also called FOREX or FX, is the global market for currency trading. With a daily volume of more than $5.3 trillion.…</p>
                                <a href="#" class="force-color-black force-a"><b>Read more</b></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="card px-2">
                            <img class="card-img-top" src="{{ asset('img/services1.png') }}" alt="Card image cap">
                            <div class="card-body">
                            <b class="force-color-black">Banking Investment</b><br><br>
                            <p class="card-text force-color-pale-white">Banking Investment Here at Zito Capital we provide online brokerage services for over 1000 customer accounts and processes over 3,000 trades per day.…</p>
                                <a href="#" class="force-color-black force-a"><b>Read more</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="inline-hero-banner-3">
                <div class="inline-hero-banner-3-mobile">
                    <div class="text-center"><br><br>
                        <h5 class="force-color-white">TESTIMONIAL</h5>
                        <h2 class="force-color-white">What Our Clients Say About Us</h2>
                    </div>
                </div>
                <div class="row about-section-content">
                    <div class="col-xs-12 col-lg-4">
                        <div class="card force-bg-black">
                            <div class="card-body text-center">
                            <h2 class="hero-icon-i"><i class="fas fa-user force-color-pale-white"></i></h2>
                            <h2 class="card-title force-color-white">Seamus Hodges</h2>
                            <h5 class="force-color-blue">STOCK EXPERT</h5>
                            <p class="card-text force-color-white">Zito Capital understands the anxieties that come with investing and at each meeting manages to reassure the client so that they leave feeling positive about the future</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="card force-bg-black">
                            <div class="card-body text-center">
                            <h2 class="hero-icon-i"><i class="fas fa-user force-color-pale-white"></i></h2>
                            <h2 class="card-title force-color-white">Ayra Little</h2>
                            <h5 class="force-color-blue">FINANCIAL ANALYST</h5>
                            <p class="card-text force-color-white">Zito Capital makes you feel important and gives you the info you need at the level you can understand. Sound advice even if it is not what you expected.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4">
                        <div class="card force-bg-black">
                            <div class="card-body text-center">
                            <h2 class="hero-icon-i"><i class="fas fa-user force-color-pale-white"></i></h2>
                            <h2 class="card-title force-color-white">Huey Sloan</h2>
                            <h5 class="force-color-blue">MARKETING ANALYST</h5>
                            <p class="card-text force-color-white">Zito Capital gave me a very comprehensive view of my investments. He also provided me with a fantastic picture of what income I would have on retirement.</p>
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

        @extends('layouts.footer')

        <script>
            $(document).ready(function(){
                $(".owl-carousel").owlCarousel({
                    items: 3,
                    nav: true,
                    loop: true,
                    lazyLoad: true,
                    responsive: {
                    0: {
                        items: 1
                    },
                    310: {
                        items: 2
                    },
                    610: {
                        items: 3
                    }
                    }
                });
            });
        </script>
    </body>
</html>

