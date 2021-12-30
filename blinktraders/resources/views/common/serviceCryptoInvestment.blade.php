<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders </title>
        @include('layouts.meta') 
        <?php
            $page = "service.php";
        ?>
    </head>
    <body>   
        @include('layouts.header')  
        <main class="main">
            <section class="hero-banner-head"></section>
            <div class="hero-banner-head-mobile"></div>
            <div class="blog-content-div">
              <div class="row">
                  <div class="col-lg-4"  id="sticky-sidebar">
                    <div class="pr-5">
                        <a href="{{ route('serviceCryptoInvestment') }}" class="aside-mrnu-div border-line-bottom d-flex justify-content-between active-blog">
                            <span>Crypto Currency Investment</span>
                            <span><i class="fa fa-chevron-right icon-rotate"></i></span>
                        </a>
                    </div>
                    <div class="pr-5">
                        <a href="{{ route('serviceForex') }}" class="aside-mrnu-div border-line-bottom d-flex justify-content-between">
                            <span>Forex trading</span>
                            <span><i class="fa fa-chevron-right"></i></span>
                        </a>
                    </div>
                    <div class="pr-5">
                        <a href="{{ route('serviceStock') }}" class="aside-mrnu-div d-flex justify-content-between">
                            <span>Stock trading</span>
                            <span><i class="fa fa-chevron-right"></i></span>
                        </a>
                    </div>
                  </div>
                  <div class="col-lg-8 col-xs-12" id="main">
                      <div class="main-div">
                          <h2 class="force-color-black">Crypto Currency Investment</h2>
                          <p class="force-color-black">Bitcoin trading is a unique platform for trading bitcoin against other cryptocurrencies just like one would do for forex trading. Just like forex trading it dependent on one’s ability to predict trends and price shift. The major advantage that bitcoin trading has over regular stock and forex trading is that fact that prices are extremely volatile hence there are multiple opportunities for profit in just the course of a day</p>
                          <div class="force-bg-black py-5 px-5">
                              <p class="force-color-pale-white">
                                While long term traders prefer to hold their bitcoin positions for extended periods of time, day traders have discovered that Bitcoin is lucrative for many reasons:
                              </p>
                              <ul>
                                    <li class="force-color-pale-white">Crypto trading is more volatile than stock trading.</li>
                                    <li class="force-color-pale-white">Bitcoin is traded 24 hours per day 7 days a week.</li>
                                    <li class="force-color-pale-white">Bitcoin allows for big trades with low overhead.</li>
                                    <li class="force-color-pale-white">Bitcoin is the most liquid form of cryptocurrency.</li>
                                    <li class="force-color-pale-white">Multiple trading opportunities will emerge within a 24 hour period.</li>
                              </ul>
                          </div>
                       </div>
                  </div>
              </div>
            </div>
        </main>
        
        @include('layouts.footer')
        
        
        
    </body>
</html>