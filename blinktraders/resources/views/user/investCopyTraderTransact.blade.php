<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <?php 
            $page = "invest-copy-trader-transact.php"; 
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
                        Copy Trade
                    </h4>
                    <div class="mt-5 mb-5 deposit-res-px-5">
                        <div class="master-deposit-div-wk force-bg-gray pt-2">
                            <div class="text-center">
                                <span class="big-font-size force-small-text">Link your MT4 to our trade replicating server for weekly profit of $1000</span>
                            </div>
                            <div class="form-invest-input">
                                <div class="form-group">
                                    <label class="force-color-black">MT4 Account ID </label>
                                    <input type="text" class="form-control input-outline force-bg-white">
                                </div>
                                <div class="form-group">
                                    <label class="force-color-black">Broker</label>
                                    <select class="form-control input-outline force-bg-white">
                                        <option>New</option>
                                        <option>New</option>
                                        <option>New</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="force-color-black">MT4 Equity/Balance </label>
                                    <input type="text" class="form-control input-outline force-bg-white">
                                </div>
                                <div class="form-group">
                                    <label class="force-color-black">MT4 Password</label>
                                    <input type="password" class="form-control input-outline force-bg-white">
                                </div>
                                <div class="cover">
                                    <button type="submit" class="btn btn-primary btn-lg text-center" data-toggle="modal" data-target="#myModalConfirmInvest">Proceed</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalConfirmInvest">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="pr-2 pt-2">
          <h2 class="big-font-size text-center">Make a payment</h2>
<!--
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
-->
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
            <p class="text-center">Pay trade replicating server subscription $949 (billed monthly)</p>
          <br><br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalConfirmInvestInpt" data-dismiss="modal">Proceed</button>
      </div>
    </div>
  </div>
</div>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalConfirmInvestInpt">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->

      <!-- Modal body -->
      <div class="modal-body text-center">
            <span>
                <i class="far fa-check-circle force-color-green" style="font-size:50px;"></i>
            </span><br><br>
            <span class="big-font-size">Trade subscription was successfully paid</span><br><br>
            <button type="button" class="btn btn-primary">Ok</button>
      </div>
    </div>
  </div>
</div>
        
@include('user.layouts.footer')
        
        
        
    </body>
</html>