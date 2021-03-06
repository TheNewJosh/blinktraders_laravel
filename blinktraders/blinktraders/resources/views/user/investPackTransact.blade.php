<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
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
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper swiper-wrapper-space">
                                @if ($investPlan->count())
                                  @foreach ($investPlan as $inp)
                                    <div class="swiper-slide">      
                                        <div class="card force-bg-white border-curve-5">
                                          <div class="card-body text-center">
                                            <h5 class="card-title force-color-black border-line-bottom pb-2">{{$inp->name}}</h5>
                                              <h2 class="force-color-blue">{{$inp->percent}}%</h2>
                                              <b class="force-color-blue">{{$inp->percent_ref}}</b><br><br>
                                              <p class="force-color-black">${{$inp->min_amount}} - ${{$inp->max_amount}}</p>
                                              <p class="force-color-black">24/7 support</p>
                                              <p class="force-color-black">Referral Bonus {{$inp->percent_referral}}%</p><br><br>
                                              <a href="#" class="btn btn-outline-primary"
                                              data-id="{{$inp->id}}"
                                              data-status="{{$inp->status}}"
                                              data-percent="{{$inp->percent}}"
                                              data-duration="{{$inp->duration}}"
                                              data-min_amount="{{$inp->min_amount}}"
                                              data-max_amount="{{$inp->max_amount}}"
                                              data-percent_referral="{{$inp->percent_referral}}"
                                              data-toggle="modal" data-target="#myModalCalc" id="investCalc">Calculate</a>
                                          </div>
                                        </div>
                                    </div>
                                  @endforeach
                                @endif
                                </div>
                                <div class="swiper-pagination"></div>
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
                <input type="hidden" id="calc-perctage"/>
                <input type="number" id="amt-transact-input" placeholder="0.00" class="input-deposit-transt-no">
                  <br>
                  <b class="big-font-size">USD</b>
              </div>
              <div class="balance-border-fill"></div>
            </div>
          <br><br>
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#myModalConfirmInvestInpt" id="ConfirmInvestInpt" data-dismiss="modal">Calculate</button>
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
            <span class="big-font-size text-center" id="invest-profit-r">$0</span><br><br>
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
          <span class="big-font-size">Successful<br><sp id="range-price-pack"></sp></span>
          <span class="force-color-blue big-font-size" id="percentage-success">-</span>
      </div>
      <!-- Modal body -->
      <form action="{{ route('investPackTransact') }}" method="post" class="modal-body text-center">
      @csrf
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}"/>
        <input type="hidden" name="user_ref" value="{{auth()->user()->referral_user}}"/>
        <input type="hidden" id="invest_plan_id" name="invest_plan_id"/>
        <input type="hidden" id="percentage" name="percentage"/>
        <input type="hidden" id="duration" name="duration"/>
        <input type="hidden" id="profit" name="profit"/>
        <input type="hidden" id="amount" name="amount"/>
        <input type="hidden" id="max_amount" name="max_amount"/>
        <input type="hidden" id="min_amount" name="min_amount"/>
        <input type="hidden" id="percent_referral" name="percent_referral"/>
        <input type="hidden" id="total" name="total"/>
        <input type="hidden" id="status-plan" name="status_plan"/>
        <span class="big-font-size">Input amount to invest</span><br>
        <span class="big-font-size text-center"><input type="number" id="amount-cal" name="amount" placeholder="0.0" class="input-spcing-buyp" readonly /></span><br><br>
        <button type="submit" class="btn btn-outline-primary">Buy pack</button>
      </form>
    </div>
  </div>
</div>
        
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalSuccess">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body text-center">
            <span class="force-color-green" style="font-size:50px;"><i class="far fa-check-circle"></i></span><br>
            <span class="big-font-size">Your investment is successful</span><br><br><br>
      </div> 
    </div>
  </div>
</div>

<!-- The Modal trigger account not verify -->
<div class="modal" id="statusErrorNoInvestPlan">
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
<div class="modal" id="myModalOutRange">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="force-color-red" style="font-size:50px;"><i class="far fa-window-close"></i></span><br>
            <span class="big-font-size">Unsuccessful</span><br>
            <span class="small-font-size text-center">Input at least minimum deposit</span><br><br>
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

<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalErrorStatusPlan">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="force-color-red" style="font-size:50px;"><i class="far fa-window-close"></i></span><br>
            <span class="big-font-size">Sorry!</span><br>
            <span class="small-font-size text-center">Sorry this plan is no longer available. Our numbers of investors is increasing rapidly and we are trying to optimize our  
Please opt in for any other investment plan.</span><br><br>
      </div>
    </div>
  </div>
</div>
        
@include('user.layouts.footer')
        
        
        <script>
          $(document).on('click', '#investCalc', function(){
            document.querySelector("#invest_plan_id").value = $(this).attr("data-id");
            document.querySelector("#calc-perctage").value = $(this).attr("data-percent");
            document.querySelector("#duration").value = $(this).attr("data-duration");
            document.querySelector("#min_amount").value = $(this).attr("data-min_amount");
            document.querySelector("#max_amount").value = $(this).attr("data-max_amount");
            document.querySelector("#percent_referral").value = $(this).attr("data-percent_referral");
            document.querySelector("#status-plan").value = $(this).attr("data-status");

            document.querySelector("#range-price-pack").innerHTML = "$" + $(this).attr("data-max_amount") + "- $" + $(this).attr("data-min_amount");
          });

            $('#ConfirmInvestInpt').click(function(){
                    var calcPercent =  $('#calc-perctage').val();
                    var duration = $('#duration').val();
                    var amtTransactInput = $('#amt-transact-input').val();
                    var calProfit = ((calcPercent/100) * amtTransactInput);
                    var calProfitDis = ((calcPercent/100) * amtTransactInput) * duration;
                    var total = Number(amtTransactInput) + Number(calProfit) * duration;

                    document.querySelector('#percentage').value = calcPercent;
                    document.querySelector('#profit').value = calProfit;
                    document.querySelector('#amount-cal').value = amtTransactInput;
                    document.querySelector('#amount').value = amtTransactInput;
                    document.querySelector('#total').value = total;

                    document.querySelector('#invest-profit-r').innerHTML = "$ " + new Intl.NumberFormat('en-US').format(calProfitDis);
                    document.querySelector('#percentage-success').innerHTML = calcPercent + "%"; 
            });
        </script>
        <script>    
          @if(session('statusError'))
              $(window).on('load', function() {
                  $('#myModalError').modal('show');
              });
          @endif

          @if(session('statusErrorOutRange'))
              $(window).on('load', function() {
                  $('#myModalOutRange').modal('show');
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
          
          @if(session('statusErrorStatusPlan'))
              $(window).on('load', function() {
                  $('#myModalErrorStatusPlan').modal('show');
              });
          @endif

          @if(session('statusSuccess'))
              $(window).on('load', function() {
                  $('#myModalSuccess').modal('show');
              });
          @endif
      </script>
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 'auto',
                spaceBetween: 15,
                centeredSlides: true,
                centeredSlidesBounds: true,
                centerInsufficientSlides: true,
                grabCursor: false,
                loop: false,
                pagination: {
                el: ".swiper-pagination",
                clickable: true,
                },
            });
        </script>
    </body>
</html>