<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <?php 
            $page = "invest-pack-transact.php"; 
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
                    <h4 class="force-color-black force-small-text">
                        Investment Packs
                    </h4>
                    <div class="mt-5 mb-5 deposit-res-px-5">
                        <div class="master-deposit-div-wk force-bg-gray px-4 py-1">
                            <section class="pricing-div">
                                <div class="row px-2">
                                    <div class="col col-lg-3">
                                        <div class="card force-bg-white border-curve-5">
                                          <div class="card-body text-center">
                                            <h5 class="card-title force-color-black border-line-bottom pb-2">Starter Pack</h5>
                                              <h2 class="force-color-blue">10%</h2>
                                              <b class="force-color-blue">DAILY</b><br><br>
                                              <p class="force-color-black">$1000 - $4,999</p>
                                              <p class="force-color-black">24/7 support</p>
                                              <p class="force-color-black">Referral Bonus 5%</p><br><br>
                                              <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalCalc">Calculate</a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-3">
                                        <div class="card force-bg-white border-curve-5">
                                          <div class="card-body text-center">
                                            <h5 class="card-title force-color-black border-line-bottom pb-2">Standard Pack</h5>
                                              <h2 class="force-color-blue">12%</h2>
                                              <b class="force-color-blue">DAILY</b><br><br>
                                              <p class="force-color-black">$5000 - $19,999</p>
                                              <p class="force-color-black">24/7 support</p>
                                              <p class="force-color-black">Referral Bonus 5%</p><br><br>
                                              <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalCalc">Calculate</a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-3">
                                        <div class="card force-bg-white border-curve-5">
                                          <div class="card-body text-center">
                                            <h5 class="card-title force-color-black border-line-bottom pb-2">Premium Pack</h5>
                                              <h2 class="force-color-blue">15%</h2>
                                              <b class="force-color-blue">DAILY</b><br><br>
                                              <p class="force-color-black">$20,000 - $49,999</p>
                                              <p class="force-color-black">24/7 support</p>
                                              <p class="force-color-black">Referral Bonus 5%</p><br><br>
                                              <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalCalc">Calculate</a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col col-lg-3">
                                        <div class="card force-bg-white border-curve-5">
                                          <div class="card-body text-center">
                                            <h5 class="card-title force-color-black border-line-bottom pb-2">Enterprize Pack</h5>
                                              <h2 class="force-color-blue">20%</h2>
                                              <b class="force-color-blue">DAILY</b><br><br>
                                              <p class="force-color-black">$50,000 - unlimited</p>
                                              <p class="force-color-black">24/7 support</p>
                                              <p class="force-color-black">Referral Bonus 5%</p><br><br>
                                              <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalCalc">Calculate</a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalCalc">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="pr-2 pt-4">
          <h2 class="big-font-size text-center">Input amount to calculate</h2>
<!--
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
-->
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
          <br>
            <div class="card force-bg-gray input-deposit-card-div">
              <div class="card-body text-center input-deposit-transt-dis">
                <input type="number" id="amt-transact-input-m" placeholder="0.00" class="input-deposit-transt-no">
                  <br>
                  <b class="big-font-size">USD</b>
              </div>
              <div class="balance-border-fill"></div>
            </div>
          <br><br>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalConfirmInvestInpt" data-dismiss="modal">Calculate</button>
      </div>
    </div>
  </div>
</div>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalConfirmInvestInpt">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
        <div class="pr-2 pt-4">
          <h2 class="big-font-size text-center">Successful</h2>
<!--
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
-->
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="big-font-size">Your investment profit will amount to</span><br>
            <span class="big-font-size text-center">$0</span><br><br>
            <button type="button" data-toggle="modal" data-target="#myModalCalcBuy" class="btn btn-outline-primary" data-dismiss="modal">Buy pack</button>
      </div>
    </div>
  </div>
</div>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalCalcBuy">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
        <div class="px-5 pt-4 row d-flex justify-content-between">
          <span class="big-font-size">Successful<br>$1000 - $4,999</span>
          <span class="force-color-blue big-font-size">10%</span>
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="big-font-size">Input amount to invest</span><br>
            <span class="big-font-size text-center"><input type="number" placeholder="0.0" class="input-spcing-buyp" /></span><br><br>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalCalcBuyMss" data-dismiss="modal">Buy pack</button>
      </div>
    </div>
  </div>
</div>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalCalcBuyMss">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="force-color-red" style="font-size:50px;"><i class="far fa-window-close"></i></span><br>
            <span class="big-font-size">Sorry!</span><br>
            <span class="small-font-size text-center">You are unable to withdraw because you do not have any previous transactions with us.
Please opt in for an investment pack</span><br><br>
      </div>
        
        <div class="modal-body text-center">
            <span class="force-color-green" style="font-size:50px;"><i class="far fa-check-circle"></i></span><br>
            <span class="big-font-size">Your investment is successful</span><br><br><br>
      </div>
        
        <div class="modal-body text-center">
            <span class="force-color-red" style="font-size:50px;"><i class="far fa-window-close"></i></span><br>
            <span class="big-font-size">Unsuccessful!</span><br>
            <span class="small-font-size text-center">Input at least minimum deposit</span><br><br>
      </div>
        
    </div>
  </div>
</div>
        
@include('user.layouts.footer')
        
        
        
    </body>
</html>