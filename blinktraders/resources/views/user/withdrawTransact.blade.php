<!DOCTYPE html>
<html lang="en">
    <head>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
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
                        <img src="{{ asset('img/payment-gateway') }}/{{$payment_id->upload_icon}}" class="coin-icon" /> {{$payment_id->name}}
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
                            <span class="big-font-size mr-2">Input amount to withdraw</span>
                            <input type="number" id="amt-transact-input" placeholder="10.0" class="amt-transact-input mr-2" />
                            <span class="big-font-size text-center">USD</span>
                            <br><br>
                            <span class="big-font-size mr-2">Wallet address for withdrawal</span><br>
                            <input type="text" id="wallet-address-transact-input" name="wallet_address" class="input-withdarl"/> <br><br>
                            
                            <span class="big-font-size mr-2">Withdraw from</span><br>
                            <div class="row">
                                <div class="col-lg-4 col-xs-12 withdraw_sour" data-value="0">
                                    <label for="button-1-m" class="btn btn-outline-primary force-color-black force-smaller-text">
                                        <span class=""><b>Account Balance</b></span>
                                        <span>${{$trn_sum_ava}}</span><br>
                                        <span>Withdraw from your main balance</span>
                                        <input type="radio" id="button-1-m" name="withdraw_sour" value="0" checked />
                                    </label>
                                </div>
                                <div class="col-lg-4 col-xs-12 withdraw_sour" data-value="1">
                                    <label for="button-2-m" class="btn btn-outline-primary force-color-black force-smaller-text">
                                        <span class=""><b>Trading Profit</b></span>
                                        <span>${{$trn_sum_pro}}</span><br>
                                        <span>Withdraw from your trading balance</span>
                                        <input type="radio" id="button-2-m" value="1" name="withdraw_sour"/>
                                    </label>
                                </div>
                                <div class="col-lg-4 col-xs-12 withdraw_sour" data-value="2">
                                    <label for="button-3-m" class="btn btn-outline-primary force-color-black force-smaller-text">
                                        <span class=""><b>Referral Earnings</b></span>
                                        <span>${{$trn_sum_ref}}</span><br>
                                        <span>Withdraw from your referral earnings</span>
                                        <input type="radio" id="button-3-m" value="2" name="withdraw_sour" />
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
        
        <!-- Mobile Start  -->
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
            <img src="{{ asset('img/payment-gateway') }}/{{$payment_id->upload_icon}}" class="coin-icon" /> {{$payment_id->name}}            </span>
            <span>
            <span id="amount-coin-m"></span>
            </span>
        </div>
        <div>
            <br>
            <span class="big-font-size mr-2">Wallet address for withdrawal</span><br>
            <input type="text" id="wallet-address-transact-input-m" class="input-withdarl"/> <br>  
        </div>
        <div class="deposit-res-px-5">
            <div class="">
                <div class="withdraw_sour-m" data-value="0">
                    <label for="button-1" class="btn btn-outline-primary force-color-black force-smaller-text-m">
                        <span class=""><b>Account Balance</b></span>
                        <span>${{$trn_sum_ava}}</span><br>
                        <span>Withdraw from your main balance</span>
                        <input type="radio" id="button-1" name="withdraw_bal" value="1" checked />
                    </label>
                </div>
                <div class="withdraw_sour-m" data-value="1">
                    <label for="button-2" class="btn btn-outline-primary force-color-black force-smaller-text-m">
                        <span class=""><b>Trading Profit</b></span>
                        <span>${{$trn_sum_pro}}</span><br>
                        <span>Withdraw from your trading balance</span>
                        <input type="radio" id="button-2" value="2" name="withdraw_bal" />
                    </label>
                </div>
                <div class="withdraw_sour-m" data-value="2">
                    <label for="button-3" class="btn btn-outline-primary force-color-black force-smaller-text-m">
                        <span class=""><b>Referral Earnings</b></span>
                        <span>${{$trn_sum_ref}}</span><br>
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
            <img src="{{ asset('img/payment-gateway') }}/{{$payment_id->upload_icon}}" class="coin-icon" /> {{$payment_id->name}}            </span>
            <span id="amount-coin-m-2"></span>
        </div>
        <div class="deposit-res-px-5">
            <div class="master-deposit-div-wk">
               
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
                    <span>Coin</span>
                    <span id="amount-coin">--</span>
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
            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModalConfirmWithdrawInput" data-dismiss="modal">Confirm withdraw</button>
        </div>
    </div>
  </div>
</div>

<!-- Mobile End -->
        
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
      <form action="{{ route('withdrawTransactStore') }}" method="post" class="modal-body text-center">
        @csrf
            <input type="hidden" id="amount-snt" name="amount"/>
            <input type="hidden" id="charges-snt" name="charges"/>
            <input type="hidden" id="coin_amount-snt" name="coin_amount"/>
            <input type="hidden" name="payment_gateway_id" value="{{$payment_id->id}}"/>
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}"/>
            <input type="hidden" id="wallet_address" name="wallet_address"/>
            <input type="hidden" id="withdraw_source" name="withdraw_source" value="0"/>
            <input type="hidden" name="percent" value="{{$system_configuration->withdraw_charge}}"/>
            <input type="hidden" name="trn_sum_ava" value="{{$trn_sum_ava}}"/>
            <input type="hidden" name="trn_sum_pro" value="{{$trn_sum_pro}}"/>
            <input type="hidden" name="trn_sum_ref" value="{{$trn_sum_ref}}"/>
            <div class="row">
                <br><br>
                <div class="flex justify-center " id="OTPInput">
                    
                </div>
                <span class="text-center" id="message-span"></span>
            </div>
          <br><br>
            <button type="submit" class="btn btn-primary" id="complete-pin-id">Okay</button>
        </form>
    </div>
  </div>
</div>

<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalSuccessProfit">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body text-center">
      <div class="alert-box">
        <i class="fas fa-exclamation-triangle mr-2 force-color-green"></i> 
        <span style="font-size:12px;" class="force-color-green">TO LINK / SYNCHRONIZE YOUR PAYOUT WALLET ADDRESS FOR AUTOMATED PAYOUTS, YOU HAVE TO PAY 20%({{$trn_sum_pro}}USD) CHARGE ON YOUR TRADING PROFIT TO THIS WALLET ADDRESS.</span>
      </div>
      <br><br>
      <div class="text-center">
          <img src="{{ asset('img/payment-gateway') }}/{{$payment_id->upload_qr_img}}" class="backcode-size-img" />
      </div>
      <div class="text-center">
          <div>
              <br><br>
              <span class="big-font-size text-left">Wallet address</span><br>
              
              <span>
                  <input type="text" value="{{$payment_id->wallet_address}}" id="inputfield"  class="input-withd" readonly />
              </span>
          </div>
      </div>
      <br>
      <div class="text-center">
          <button type="button" onclick="getTextCopied()" id="buttontext" class="btn btn-outline-primary mr-2 mt-4">Copy address</button>
          <button type="button" id="shareButton" class="btn btn-primary mt-4 display-none-area-desk">Share address</button>
          <button type="submit" class="btn btn-primary" data-dismiss="modal">Okay</button>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalSuccess">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="force-color-green" style="font-size:50px;"><i class="far fa-check-circle"></i></span><br>
            <span class="big-font-size">Successful!</span><br>
            <span class="small-font-size text-center">Account balance withdrawal successful</span><br><br>
      </div>
    </div>
  </div>
</div>

<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalNoInvestPlan">
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

    </div>
  </div>
</div>

<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalNoAvaBal">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="force-color-red" style="font-size:50px;"><i class="far fa-window-close"></i></span><br>
            <span class="big-font-size">Unsuccessful</span><br>
            <span class="small-font-size text-center">Insufficient balance. Please fund your account to proceed.</span><br><br>
      </div>
    </div>
  </div>
</div>

<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalErrorPin">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="force-color-red" style="font-size:50px;"><i class="far fa-window-close"></i></span><br>
            <span class="big-font-size">Sorry!</span><br>
            <span class="small-font-size text-center">Wrong Pin Please reset your pin</span><br><br>
      </div>
    </div>
  </div>
</div>

<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalError">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="force-color-red" style="font-size:50px;"><i class="far fa-window-close"></i></span><br>
            <span class="big-font-size">Sorry!</span><br>
            <span class="small-font-size text-center">An Error Occur</span><br><br>
      </div>
    </div>
  </div>
</div>
        
@include('user.layouts.footer')
        
        <script>
        $(document).ready(function(){
            $('#amt-transact-input').change(function(){
                    var input_amt =  $('#amt-transact-input').val();
                    var charges_db = {{$system_configuration->withdraw_charge}};
                    var charges = (charges_db/100) * input_amt;
                    var total = Number(input_amt) + Number(charges);
                    var coin_amt = Number(total) / Number({{$payment_id->price}});

                    document.querySelector('#amount-snt').value = input_amt;
                    document.querySelector('#charges-snt').value = charges;
                    document.querySelector('#coin_amount-snt').value = coin_amt;

                    document.querySelector('#amount').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(input_amt);
                    document.querySelector('#amount-coin').innerHTML = new Intl.NumberFormat('en-US').format(coin_amt) + "{{$payment_id->coin_short}}";
                    document.querySelector('#charge').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(charges);
                    document.querySelector('#total').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(total); 
            });

            $('#amt-transact-input-m').change(function(){
                    var input_amt =  $('#amt-transact-input-m').val();
                    var charges_db = {{$system_configuration->withdraw_charge}};
                    var charges = (charges_db/100) * input_amt;
                    var total = Number(input_amt) + Number(charges);
                    var coin_amt = Number(total) / Number({{$payment_id->price}});

                    document.querySelector('#amount-snt').value = input_amt;
                    document.querySelector('#charges-snt').value = charges;
                    document.querySelector('#coin_amount-snt').value = coin_amt;
                    
                    document.querySelector('#amount-m').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(input_amt);
                    document.querySelector('#amount-coin-m').innerHTML = new Intl.NumberFormat('en-US').format(coin_amt) + "{{$payment_id->coin_short}}";
                    document.querySelector('#amount-coin-m-2').innerHTML = new Intl.NumberFormat('en-US').format(coin_amt) + "{{$payment_id->coin_short}}";
                    document.querySelector('#charge-m').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(charges);
                    document.querySelector('#total-m').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(total); 
            });

            $('#wallet-address-transact-input').change(function(){
                document.querySelector('#wallet_address').value = $('#wallet-address-transact-input').val();
            });
            
            $('#wallet-address-transact-input-m').change(function(){
                document.querySelector('#wallet_address').value = $('#wallet-address-transact-input-m').val();
            });

            $(document).on('click', '.withdraw_sour', function(){
                document.querySelector('#withdraw_source').value = $(this).attr("data-value");
            });
            
            $(document).on('click', '.withdraw_sour-m', function(){
                document.querySelector('#withdraw_source').value = $(this).attr("data-value");
            });

            });
        </script>
        <script>    
          @if(session('statusError'))
              $(window).on('load', function() {
                  $('#myModalError').modal('show');
              });
          @endif

          @if(session('statusErrorPin'))
              $(window).on('load', function() {
                  $('#myModalErrorPin').modal('show');
              });
          @endif
          
          @if(session('statusErrorNoInvestPlan'))
              $(window).on('load', function() {
                  $('#myModalNoInvestPlan').modal('show');
              });
          @endif
          
          @if(session('statusErrorNoAvaBal'))
              $(window).on('load', function() {
                  $('#myModalNoAvaBal').modal('show');
              });
          @endif

          @if(session('statusSuccess'))
              $(window).on('load', function() {
                  $('#myModalSuccess').modal('show');
              });
          @endif
          
          @if(session('statusSuccessProfit'))
              $(window).on('load', function() {
                  $('#myModalSuccessProfit').modal('show');
              });
          @endif
                    
      </script>
      <script>
            function getTextCopied() {
              // body...
              var inputfield=document.getElementById('inputfield');

              inputfield.select();
              inputfield.setSelectionRange(0,999999);

              document.execCommand("copy");
              document.getElementById('buttontext').innerHTML="Copied";
             }
        </script>

<script>
    /* This creates all the OTP input fields dynamically. Change the otp_length variable  to change the OTP Length */
const $otp_length = 4;

const element = document.getElementById('OTPInput');
for (let i = 0; i < $otp_length; i++) {
  let inputField = document.createElement('input'); // Creates a new input element
  inputField.className = "w-12 h-12 bg-gray-100 border-gray-100 outline-none focus:bg-gray-200 m-2 text-center rounded focus:border-blue-400 focus:shadow-outline";
  // Do individual OTP input styling here;
  inputField.style.cssText = "color: transparent; text-shadow: 0 0 0 gray;"; // Input field text styling. This css hides the text caret
  inputField.id = 'otp-field' + i; // Don't remove
  inputField.name = 'pin' + i; // Don't remove
  inputField.maxLength = 1; // Sets individual field length to 1 char
  element.appendChild(inputField); // Adds the input field to the parent div (OTPInput)
}

/*  This is for switching back and forth the input box for user experience */
const inputs = document.querySelectorAll('#OTPInput > *[id]');
for (let i = 0; i < inputs.length; i++) {
  inputs[i].addEventListener('keydown', function(event) {
    if (event.key === "Backspace") {

      if (inputs[i].value == '') {
        if (i != 0) {
          inputs[i - 1].focus();
        }
      } else {
        inputs[i].value = '';
      }

    } else if (event.key === "ArrowLeft" && i !== 0) {
      inputs[i - 1].focus();
    } else if (event.key === "ArrowRight" && i !== inputs.length - 1) {
      inputs[i + 1].focus();
    } else if (event.key != "ArrowLeft" && event.key != "ArrowRight") {
      inputs[i].setAttribute("type", "text");
      inputs[i].value = ''; // Bug Fix: allow user to change a random otp digit after pressing it
      setTimeout(function() {
        inputs[i].setAttribute("type", "password");
      }, 1000); // Hides the text after 1 sec
    }
  });
  inputs[i].addEventListener('input', function() {
    inputs[i].value = inputs[i].value.toUpperCase(); // Converts to Upper case. Remove .toUpperCase() if conversion isnt required.
    if (i === inputs.length - 1 && inputs[i].value !== '') {
      return true;
    } else if (inputs[i].value !== '') {
      inputs[i + 1].focus();
    }
  });

}
/*  This is to get the value on pressing the submit button
  *   In this example, I used a hidden input box to store the otp after compiling data from each input fields
  *   This hidden input will have a name attribute and all other single character fields won't have a name attribute
  *   This is to ensure that only this hidden input field will be submitted when you submit the form */

document.getElementById('otpSubmit').addEventListener("click", function() {
  const inputs = document.querySelectorAll('#OTPInput > *[id]');
  let compiledOtp = '';
  for (let i = 0; i < inputs.length; i++) {
    compiledOtp += inputs[i].value;
  }
  document.getElementById('otp').value = compiledOtp;
  return true;
});
</script>
        
    </body>
</html>