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
                           class="aside-mrnu-div border-line-bottom d-flex justify-content-between">
                            <span>Forex trading</span>
                            <span><i class="fa fa-chevron-right"></i></span>
                        </a>
                    </div>
                    <div class="pr-5">
                        <a href="{{ route('serviceStock') }}" class="aside-mrnu-div d-flex justify-content-between active-blog">
                            <span>Stock trading</span>
                            <span><i class="fa fa-chevron-right icon-rotate"></i></span>
                        </a>
                    </div>
                  </div>
                  <div class="col-lg-8 col-xs-12" id="main">
                      <div class="main-div">
                          <h2 class="force-color-black">Stock Trading</h2>
                          <p class="force-color-black">We provide online brokerage services for over 1000 customer accounts and processes over 3,000 trades per day. With our history in the stock market we have overtime been able to position ourselves properly so that we are now able to predict market trends with th aid of tools like D Ameritrade's thinkorswim which is home to an impressive array of tools.

</p>
                          <div class="force-bg-black py-5 px-5">
                              <p class="force-color-pale-white">
                                In the process of searching for a well-rounded broker, finding the right mix is no easy task. Trade costs, trade platforms, tools, research, and customer service all are important to investors. We are here to end that search and make stock broking less complex and very profitable
                              </p>
                          </div>
                          <p class="force-color-black"><br>Whether it be company profiling, advanced earnings analysis, plotting FRED data, charting social sentiment, backtesting and replaying historical markets tick by tick, viewing economic and corporate calendars, creating and conducting real-time stock scans, sharing charts and workspace layouts, or performing advanced options analysis, the rabbit hole goes as far as any trader's imagination will take them.

Focusing on two more recent innovations, adding Federal Reserve Economic Data (FRED) and the new earnings analysis tool, investors can begin to appreciate the endless brain hub stationed at thinkorswim’s Chicago office. Starting with FRED, a publicly accessible US Government database of over 400,000 economic data points; think GDP, CPI, treasury rates, median household income, etc. FRED data is used by institutional investors, hedge funds, and other sophisticated trading operations. In its never-ending quest to level the playing field, the thinkorswim team decided to download all the data, process it, build a custom interface to graph it, and brought it to all TD Ameritrade clients

</p>
                       </div>
                  </div>
              </div>
            </div>
        </main>
        
        @include('layouts.footer')
        
        
        
    </body>
</html>