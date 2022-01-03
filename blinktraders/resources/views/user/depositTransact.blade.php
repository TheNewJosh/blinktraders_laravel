<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <?php 
            $page = "deposit-transact.php"; 
            $page_title = "Deposit";
            $mi1 = $mi2 = $mi3 = $mi4 = $mi5 = $mi6 = $mi7 = $mi8 = "";
            $smi2 = "footer-sticky-menu-active";
            $smi1 = $smi3 = $smi4 = $smi5 = "";
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
                    <h4 class="force-color-black text-center force-small-text border-space-mobile">
                        <img src="{{ asset('img/payment-gateway') }}/{{$payment_id->upload_icon}}" class="coin-icon" /> {{$payment_id->name}}
                    </h4>
                    
                    <!--         Mobile view start           -->
                    <div class="display-none-area-desk mt-4">
                        <span class="big-font-size">Input amount to deposit</span><br>
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
                        <form action="{{ route('depositTransactStore') }}" method="post" enctype="multipart/form-data" class="master-deposit-div-wk">
                        @csrf
                        <input type="hidden" id="amount-snt" name="amount"/>
                        <input type="hidden" id="charges-snt" name="charges"/>
                        <input type="hidden" id="coin-amount-snt" name="coin_amount"/>
                        <input type="hidden" name="payment_gateway_id" value="{{$payment_id->id}}"/>
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}"/>
                        <input type="hidden" name="wallet_address" value="{{$payment_id->wallet_address}}"/>
                        <input type="hidden" name="percent" value="{{$system_configuration->deposit_charge}}"/>
                            <h4 class="big-font-size text-center">Input amount to deposit</h4><br>
                            <div class="text-center">
                                <input type="number" id="amt-transact-input" placeholder="10.0" class="amt-transact-input input-cal-transact" required /><br>
                                <span class="big-font-size text-center">USD</span>
                            </div>
                            <div class="in-box-depot">
                                <div class="d-flex justify-content-between">
                                    <span>Amount</span>
                                    <span id="amount">--</span>
                                </div><br>
                                <div class="d-flex justify-content-between">
                                    <span>Coin Amount</span>
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
                            <br>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-primary">Calculate</a>
                                <button type="submit" name="submit_deposit_btn" class="btn btn-primary">Deposit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>

<!-- Modal -->
<div class="modal fade foo" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog card-modal-open-m" role="document">
    <div class="modal-content card-modal-open">
      <div class="text-center pt-4">
        <span class="modal-title">Review</span>
        <button type="button" class="close px-5" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span class="big-font-size">Deposit Method</span><br><br>
        <div class="force-color-black text-center force-small-text justify-space-between">
            <span>
                <img src="{{ asset('img/payment-gateway') }}/{{$payment_id->upload_icon}}" class="coin-icon" /> {{$payment_id->name}}
            </span>
            <span id="amount-coin-m"></span>
        </div>
        <div class="deposit-res-px-5">
            <form action="{{ route('depositTransactStore') }}" method="post" enctype="multipart/form-data" class="master-deposit-div-wk">
            @csrf
                <input type="hidden" id="amount-snt-m" name="amount"/>
                <input type="hidden" id="charges-snt-m" name="charges"/>
                <input type="hidden" id="coin-amount-snt-m" name="coin_amount"/>
                <input type="hidden" name="payment_gateway_id" value="{{$payment_id->id}}"/>
                <input type="hidden" name="user_id" value="{{auth()->user()->id}}"/>
                <input type="hidden" name="wallet_address" value="{{$payment_id->wallet_address}}"/>
                <input type="hidden" name="percent" value="{{$system_configuration->deposit_charge}}"/>
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
                    <button type="submit" name="submit_deposit_btn" class="btn btn-primary">Deposit</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
        
@include('user.layouts.footer')
        
        <script>
            $('#amt-transact-input').change(function(){
                    var input_amt =  $('#amt-transact-input').val();
                    var charges_db = {{$system_configuration->deposit_charge}};
                    var charges = (charges_db/100) * input_amt;
                    var total = Number(input_amt) + Number(charges);
                    var coin_amt = Number(total) / Number({{$payment_id->price}});

                    document.querySelector('#amount-snt').value = total;
                    document.querySelector('#charges-snt').value = coin_amt;
                    document.querySelector('#coin-amount-snt').value = total;
                    document.querySelector('#amount').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(input_amt);
                    document.querySelector('#amount-coin').innerHTML = new Intl.NumberFormat('en-US').format(coin_amt) + "{{$payment_id->coin_short}}";
                    document.querySelector('#charge').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(charges);
                    document.querySelector('#total').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(total); 
            });
        </script>
        <script>
            $('#amt-transact-input-m').change(function(){
                    var input_amt =  $('#amt-transact-input-m').val();
                    var charges_db = {{$system_configuration->deposit_charge}};
                    var charges = (charges_db/100) * input_amt;
                    var total = Number(input_amt) + Number(charges);
                    var coin_amt = Number(total) / Number({{$payment_id->price}});

                    document.querySelector('#amount-snt-m').value = total;
                    document.querySelector('#charges-snt-m').value = charges;
                    document.querySelector('#coin-amount-snt-m').value = coin_amt;
                    document.querySelector('#amount-m').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(input_amt);
                    document.querySelector('#amount-coin-m').innerHTML = new Intl.NumberFormat('en-US').format(coin_amt) + "{{$payment_id->coin_short}}";
                    document.querySelector('#charge-m').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(charges);
                    document.querySelector('#total-m').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(total); 
            });
        </script>
        <script>
            @if(session('statusdepositPaymentgate'))
                window.onload = (event) => {
                    bs4pop.notice('Error Occur', {position: 'topright', type: 'danger'})
                };
            @endif
        </script>
    </body>
</html>