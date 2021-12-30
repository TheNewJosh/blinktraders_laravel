<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <?php 
            $page = "withdraw-transact.php"; 
            $page_title = "Withdraw";
            $mi1 = $mi2 = $mi3 = $mi4 = $mi5 = $mi6 = $mi7 = $mi8 = "";
            $smi4 = "footer-sticky-menu-active";
            $smi1 = $smi2 = $smi3 = $smi5 = "";
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
                        <img src="{{ asset('img/payment-gateway/icon_agric1638313563.9616.png') }}" class="coin-icon" /> Bitcoin
                    </h4>
                    
                    <!--         Mobile view start           -->
                    <div class="display-none-area-desk mt-4">
                        <span class="big-font-size">Input amount to withdraw</span><br>
                        <div class="justify-column-space height-deposit-space">
                            <div class="card force-bg-gray input-deposit-card-div">
                              <div class="card-body text-center input-deposit-transt-dis">
                                <input type="number" id="amt-transact-input-m" placeholder="0.00" class="input-deposit-transt-no">
                                  <br>
                                  <b class="big-font-size">USD</b>
                              </div>
                              <div class="balance-border-fill"></div>
                            </div>
                            <button type="button" id="amt-transact-input-m" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">Continue</button>
                        </div>
                    </div>
                    <!--         Mobile view end           -->
                    
                    <div class="mt-5 mb-5 deposit-res-px-5 display-none-area">
                        <div class="force-bg-gray master-deposit-div-wk px-4 py-2">
                        <input type="hidden" id="amount-snt" name="amount"/>
                        <input type="hidden" id="cdt" name="cdt" value="1"/>
                        <input type="hidden" id="user_id" name="user_id" value="1"/>
                            <span class="big-font-size mr-2">Input amount to withdraw</span>
                            <input type="number" id="amt-transact-input" placeholder="10.0" class="amt-transact-input mr-2" />
                            <span class="big-font-size text-center">USD</span>
                            <br><br>
                            <span class="big-font-size mr-2">Wallet address for withdrawal</span><br>
                            <input type="text" id="wallet-address-transact-input" class="input-withdarl"/> <br><br>
                            
                            <span class="big-font-size mr-2">Withdraw from</span><br>
                            <div class="row">
                                <div class="col-lg-4 col-xs-12">
                                    <label for="button-1" class="btn btn-outline-primary force-color-black force-smaller-text">
                                        <span class=""><b>Account Balance</b></span>
                                        <span>$12.00</span><br>
                                        <span>Withdraw from your main balance</span>
                                        <input type="radio" id="button-1" name="withdraw_bal" value="1" checked />
                                    </label>
                                </div>
                                <div class="col-lg-4 col-xs-12">
                                    <label for="button-2" class="btn btn-outline-primary force-color-black force-smaller-text">
                                        <span class=""><b>Trading Profit</b></span>
                                        <span>$12.00</span><br>
                                        <span>Withdraw from your trading balance</span>
                                        <input type="radio" id="button-2" value="2" name="withdraw_bal" />
                                    </label>
                                </div>
                                <div class="col-lg-4 col-xs-12">
                                    <label for="button-3" class="btn btn-outline-primary force-color-black force-smaller-text">
                                        <span class=""><b>Referral Earnings</b></span>
                                        <span>$12.00</span><br>
                                        <span>Withdraw from your referral earnings</span>
                                        <input type="radio" id="button-3" value="3" name="withdraw_bal" />
                                    </label>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary px-5" data-toggle="modal" data-target="#myModalConfirmWithdraw">Withdraw</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalConfirmWithdraw">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="pr-2 pt-2">
          <span class="big-font-size ml-4">Review</span>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
            <div class="in-box-depot-modal">
                <div class="d-flex justify-content-between">
                    <span>Amount</span>
                    <span id="amount">--</span>
                </div><br>
                <div class="d-flex justify-content-between">
                    <span>Charge</span>
                    <span id="charge">--</span>
                </div><br>
                <div class="d-flex justify-content-between">
                    <span>Total</span>
                    <span id="total">--</span>
                </div>
            </div>
          <br><br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalConfirmWithdrawInput" data-dismiss="modal">Confirm withdraw</button>
      </div>
    </div>
  </div>
</div>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalConfirmWithdrawInput">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="pr-2 pt-4">
          <h4 class="big-font-size text-center">Input withdrarwal PIN</h4>
<!--
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
-->
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
            <div class="row">
                <br><br>
                <div class="row px-5">
                    <div class="col col-lg-3 col-xs-3 px-2">
                        <input type="password" class="pin-input-cl" id="pin-1" />
                    </div>
                    <div class="col col-lg-3 col-xs-3 px-2">
                        <input type="password" class="pin-input-cl" id="pin-2" />
                    </div>
                    <div class="col col-lg-3 col-xs-3 px-2">
                        <input type="password" class="pin-input-cl" id="pin-3" />
                    </div>
                    <div class="col col-lg-3 col-xs-3 px-2">
                        <input type="password" class="pin-input-cl" id="pin-4" />
                    </div>
                </div>
                <span class="text-center" id="message-span"></span>
            </div>
          <br><br>
            <button type="button" class="btn btn-primary" id="complete-pin-id">Continue</button>
      </div>
    </div>
  </div>
</div>
        
<!-- Modal -->
<div class="modal fade foo" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog card-modal-open-m" role="document">
    <div class="modal-content card-modal-open">
      <div class="text-center pt-4">
        <span class="modal-title">Choose withdrawal type</span>
        <button type="button" class="close px-5" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span class="big-font-size">Deposit Method</span><br><br>
        <div class="force-color-black text-center force-small-text justify-space-between">
            <span>
                <img src="{{ asset('img/payment-gateway/icon_agric1638313563.9616.png') }}" class="coin-icon" /> Bitcoin
            </span>
            <span>
                000066BTC
            </span>
        </div>
        <div>
            <br>
            <span class="big-font-size mr-2">Wallet address for withdrawal</span><br>
            <input type="text" id="wallet-address-transact-input" class="input-withdarl"/> <br>  
        </div>
        <div class="deposit-res-px-5">
            <div class="">
                <div class="">
                    <label for="button-1" class="btn btn-outline-primary force-color-black force-smaller-text-m">
                        <span class=""><b>Account Balance</b></span>
                        <span>$12.00</span><br>
                        <span>Withdraw from your main balance</span>
                        <input type="radio" id="button-1" name="withdraw_bal" value="1" checked />
                    </label>
                </div>
                <div class="">
                    <label for="button-2" class="btn btn-outline-primary force-color-black force-smaller-text-m">
                        <span class=""><b>Trading Profit</b></span>
                        <span>$12.00</span><br>
                        <span>Withdraw from your trading balance</span>
                        <input type="radio" id="button-2" value="2" name="withdraw_bal" />
                    </label>
                </div>
                <div class="">
                    <label for="button-3" class="btn btn-outline-primary force-color-black force-smaller-text-m">
                        <span class=""><b>Referral Earnings</b></span>
                        <span>$12.00</span><br>
                        <span>Withdraw from your referral earnings</span>
                        <input type="radio" id="button-3" value="3" name="withdraw_bal" />
                    </label>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" name="submit_deposit_btn" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalWM" data-dismiss="modal">Next</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
        
<!-- Modal -->
<div class="modal fade foo" id="exampleModalWM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog card-modal-open-m" role="document">
    <div class="modal-content card-modal-open">
      <div class="text-center pt-4">
        <span class="modal-title">Review</span>
        <button type="button" class="close px-5" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span class="big-font-size">Withdrawal Method</span><br><br>
        <div class="force-color-black text-center force-small-text justify-space-between">
            <span>
                <img src="{{ asset('img/payment-gateway/icon_agric1638313563.9616.png') }}" class="coin-icon" /> Bitcoin
            </span>
            <span>
                000066BTC
            </span>
        </div>
        <div class="deposit-res-px-5">
            <div class="master-deposit-div-wk">
            <input type="hidden" id="amount-snt-m" name="amount"/>
            <input type="hidden" id="charges-snt-m" name="charges"/>
            <input type="hidden" id="coin-amount-snt-m" name="coin_amount"/>
            <input type="hidden" name="cdt" value="1"/>
            <input type="hidden" name="user_id" value="1"/>
                <div class="in-box-depot">
                    <div class="d-flex justify-content-between">
                        <span>Amount</span>
                        <span id="amount-m">--</span>
                    </div><br>
                    <div class="d-flex justify-content-between">
                        <span>Charge</span>
                        <span id="charge-m">--</span>
                    </div><br>
                    <div class="d-flex justify-content-between">
                        <span>Total</span>
                        <span id="total-m">--</span>
                    </div>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" name="submit_deposit_btn" class="btn btn-primary" data-toggle="modal" data-target="#myModalConfirmWithdrawInput">Withdrawal</button>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
        
@include('user.layouts.footer')
        
        <script>
        $(document).ready(function(){
            $('#amt-transact-input').change(function(){
                    var input_amt =  $('#amt-transact-input').val();
                    var charges_db = 10;
                    var charges = (charges_db/100) * input_amt;
                    var total = input_amt + charges;

                    document.querySelector('#amount-snt').value = total;
                    document.querySelector('#amount').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(input_amt);
                    document.querySelector('#charge').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(charges);
                    document.querySelector('#total').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(total); 
            });

            $('#complete-pin-id').click(function(){
                     var pin1 =  $('#pin-1').val();
                     var pin2 =  $('#pin-2').val();
                     var pin3 =  $('#pin-3').val();
                     var pin4 =  $('#pin-4').val();

                     var amount =  $('#amount-snt').val();
                     var cdt =  $('#cdt').val();
                     var user_id =  $('#user_id').val();
                     var wallet_address =  $('#wallet-address-transact-input').val();

                    $.ajax({
                        url: "components/actions-withdraw-transact-add.php", 
                        method:"POST",
                        data:{submit_withdraw_btn:"submit_withdraw_btn", amount:amount, cdt:cdt, user_id:user_id},
                        dataType: "json",
                        success: function(data){
                            if(data.status == 0){
                               document.querySelector('#message-span').innerHTML = data.message;
                               
                            }else{
                                window.location.href = "index.php?msg=withdraw";
                            }                    
                        }
                    });

                });

            });
        </script>
        
    </body>
</html>