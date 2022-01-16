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
                        <a href="{{ route('serviceCryptoInvestment') }}" class="aside-mrnu-div border-line-bottom d-flex justify-content-between">
                            <span>Crypto Currency Investment</span>
                            <span><i class="fa fa-chevron-right"></i></span>
                        </a>
                    </div>
                    <div class="pr-5">
                        <a href="{{ route('serviceForex') }}"
                           class="aside-mrnu-div border-line-bottom d-flex justify-content-between active-blog">
                            <span>Forex trading</span>
                            <span><i class="fa fa-chevron-right icon-rotate"></i></span>
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
                          <h2 class="force-color-black">Forex Trading</h2>
                          <p class="force-color-black">The Foreign Exchange market, also called FOREX or FX, is the global market for currency trading. With a daily volume of more than $5.3 trillion, it is the biggest and most exciting financial market in the world. Whether you sell EUR 100 to buy US dollars at the airport or a bank exchanges 100 million US dollars for Japanese yen with another bank, both are FOREX deals. The players on the FOREX market range from huge financial organizations, managing billions, to individuals trading a few hundred dollars.
</p>
                          <div class="force-bg-black py-5 px-5">
                              <p class="force-color-pale-white">
                                On the FOREX market one currency is exchanged for another. The single most important thing with respect to FOREX market is the exchange rate between two currencies (a currency pair).
                              </p>
                          </div>
                       </div>
                  </div>
              </div>
            </div>
        </main>
        
        @include('layouts.footer')
        
        
        
    </body>
</html>