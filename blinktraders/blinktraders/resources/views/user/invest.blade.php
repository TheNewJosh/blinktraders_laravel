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
        <style type="text/css">
#mobileshow { 
display:none; 
}
@media screen and (max-width: 500px) {
#mobileshow { 
display:block; }
}
</style>
   
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
                <div class="pofolio-div display-none-600-max">
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

<!-- Modal -->
<div class="modal-base">
<div class="modal-body" id="mobileshow">
        <div class="deposit-res-px-5">
            <div class="master-deposit-div-wk">
               <a href="{{ route('investCopyTraderTransact') }}" class="invest-mb-modal justify-no-space-between">
                    <span><i class="fas fa-clone mmmmv-icon-invest"></i></span>
                    <span class="ml-4">
                        <b class="head-incmm-span">Copy Trade</b>
                        <p class="head-incmm-p">Copy trading gives you access to our trading bot and it is suitable for Forex traders who are looking to get off the chart but still make profits.</p>
                    </span>
                </a>
               <a href="{{ route('investPackTransact') }}" class="invest-mb-modal justify-no-space-between mt-4">
                    <span><i class="fas fa-dollar-sign mmmmv-icon-invest"></i></span>
                    <span class="ml-4">
                        <b class="head-incmm-span">Investment Pack</b>
                        <p class="head-incmm-p">Investment packs gives you access to a prepared group of profitable stocks, crypto, indexes and Argo firms  which pays different high rewards ROI in form of dividends to you as an investor depending on the pack you selected.</p>
                    </span>
                </a>
            </div>
        </div>
      </div>
</div>
<div class="modal foo" id="exampleModalWM-copytrade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">


  <div class="modal-dialog card-modal-open-m" role="document">
    <div class="modal-content card-modal-open">
        <div class="text-right">
            <a href="" class="dismiss-a" data-dismiss="modal"><i class="fas fa-times-circle"></i></a>
        </div>
      <div class="text-center pt-1">
        <span class="modal-title">Select investment type</span>
      </div>
      <div class="modal-body">
        <div class="deposit-res-px-5">
            <div class="master-deposit-div-wk">
               <a href="{{ route('investCopyTraderTransact') }}" class="invest-mb-modal justify-no-space-between">
                    <span><i class="fas fa-clone mmmmv-icon-invest"></i></span>
                    <span class="ml-4">
                        <b class="head-incmm-span">Copy Trade</b>
                        <p class="head-incmm-p">Use our trade replicating server for weekly profit of $1000</p>
                    </span>
                </a>
               <a href="{{ route('investPackTransact') }}" class="invest-mb-modal justify-no-space-between mt-4">
                    <span><i class="fas fa-dollar-sign mmmmv-icon-invest"></i></span>
                    <span class="ml-4">
                        <b class="head-incmm-span">Investment Pack</b>
                        <p class="head-incmm-p">Choose any of our high rewarding investing packs.</p>
                    </span>
                </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
        @include('user.layouts.footer')

        <script>
            if(window.screen.width < 600){
                $(window).on('load', function() {
                  $('#exampleModalWM-copytrade').modal('show'); 
              });
            }
        </script>
        
        
        
        
        
    </body>
</html>