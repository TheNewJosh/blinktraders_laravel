<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <?php 
            $page = "invest.php"; 
            $page_title = "Invest";
            $mi1 = $mi2 = $mi3 = $mi4 = $mi5 = $mi6 = $mi7 = $mi8 = "";
            $smi3 = "footer-sticky-menu-active";
            $smi1 = $smi2 = $smi4 = $smi5 = "";
        ?>
    </head>
    <body>
        <main class="main-dash row main-bottom">
            <section class="col col-lg-1 display-none-area">
                @include('user.layouts.sidebar')
            </section>
            <section class="heading-dash col col-lg-11">
                <div class="head-border-bottom">
                    @include('user.layouts.header')
                </div>
                <div class="pofolio-div">
                    <div class="space-mobile"></div>
                    <h4 class="force-color-black force-small-text">Select Investment Type</h4>
                    <div class="mt-5 mb-5 deposit-res-px-5">
                        <div class="master-deposit-div-wk force-bg-gray pb-4 pt-2">
                            <div class="row px-4 border-curve-5">
                                <div class="col col-lg-6 mt-2">
                                    <div class="card no-border-line">
                                      <div class="card-body text-center">
                                          <span class="force-color-blue invest-fa-icon">
                                            <i class="fas fa-clone"></i>
                                          </span><br><br>
                                        <h5 class="force-color-black">Copy Trade</h5><br><br>
                                        <p class="small-font-size">Use Our Trade Replicating Server For Weekly Profit Of $1000</p><br><br>
                                          <a href="{{ route('investCopyTraderTransact') }}" class="btn btn-outline-primary">Continue</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col col-lg-6 mt-2">
                                    <div class="card no-border-line">
                                      <div class="card-body text-center">
                                          <span class="force-color-blue invest-fa-icon">
                                            <i class="fas fa-dollar-sign"></i>
                                          </span><br><br>
                                        <h5 class="force-color-black">Investment Pack</h5><br><br>
                                        <p class="small-font-size">Choose Any Of Our High Rewarding Investing Packs.</p><br><br>
                                          <a href="{{ route('investPackTransact') }}" class="btn btn-outline-primary">Continue</a>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        @include('user.layouts.footer')
        
        
        
    </body>
</html>