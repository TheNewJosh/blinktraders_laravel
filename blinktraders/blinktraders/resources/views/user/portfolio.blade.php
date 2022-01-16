<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <?php 
            $page = "index.php"; 
            $page_title = "Portfolio";
            $mi1 = $mi2 = $mi3 = $mi4 = $mi5 = $mi6 = $mi7 = $mi8 = "";
            $smi1 = "footer-sticky-menu-active";
            $smi5 = $smi2 = $smi4 = $smi3 = "";
            $typStatus = ["Pending", "Approved", "Decline"];
            $trnType = ["Deposit", "Withdraw"];
            use App\Services\UserAvailableBalance;
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
                    <div class="label-div display-none-area-desk justify-space-between">
                        <span class="label-span label-active-span" id="balance-label">Balance</span>
                        <span class="label-span" id="profit-label">Profit</span>
                        <span class="label-span" id="referral-label">Referral</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-3" id="balance-card">
                            <div class="card border border-primary force-bg-gray balance-card-div">
                              <div class="card-body text-center">
                                <h5 class="card-title force-color-black">${{$userAvailableBalance}}</h5><br><br>
                                  <p class="force-color-black">Available Balance</p>
                              </div>
                              <div class="balance-border-fill"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 show-none" id="profit-card">
                            <div class="card border border-primary force-bg-gray balance-card-div">
                              <div class="card-body text-center">
                                <h5 class="card-title force-color-black">${{$userAvailableBalanceProfit}}</h5><br><br>
                                  <p class="force-color-black">Available Profit</p>
                              </div>
                                <div class="balance-border-fill"></div>
                            </div>
                        </div>
                        <div class="col-lg-3 show-none" id="referral-card">
                            <div class="card border border-primary force-bg-gray balance-card-div">
                              <div class="card-body text-center">
                                <h5 class="card-title force-color-black">${{$userAvailableBalanceReferral}}</h5><br><br>
                                  <p class="force-color-black">Referral Earnings</p>
                              </div>
                                <div class="balance-border-fill"></div>
                            </div>
                        </div>
                    </div>
                    <!--        Mobile  Start          -->
                    <div class="mt-5 mb-5 display-none-area-desk" id="balance-area">
                        @if ($paymentGateway->count())
                          @foreach ($paymentGateway as $pgw)
                            <div class="amount-span-border px-4">
                                <div class="force-bg-white justify-space-between">
                                    <div class="row">
                                        <div class="mr-3">
                                            <img src="{{ asset('img/payment-gateway') }}/{{$pgw->upload_icon}}" class="coin-icon mt-3">
                                        </div>
                                        <div class="">
                                            <b class="force-color-black small-font-size small-font-size-mobile">{{$pgw->name}}</b><br>
                                            <span class="small-font-size small-font-size-mobile force-color-black">
                                                ${{$pgw->price}}
                                            </span>
                                            @if($pgw->change < 0)
                                            <span class="mall-font-size small-font-size-mobile force-color-red">
                                                
                                                    {{$pgw->change}}%
                                            </span>
                                            @endif
                                            @if($pgw->change > 0)
                                            <span class="mall-font-size small-font-size-mobile force-color-green">
                                                
                                                    +{{$pgw->change}}%
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="amount-span small-font-size-mobile mt-2">
                                        <span>
                                            @if($user->transactions->where('payment_gateway_id', $pgw->id)->count() >= 1)
                                                {{
                                                    $user->transactions->where('payment_gateway_id', $pgw->id)->where('transact_type', 0)->where('status', 1)->sum('amount')
                                                    -
                                                    $user->transactions->where('payment_gateway_id', $pgw->id)->where('transact_type', 1)->where('status', 1)->sum('amount')
                                                }}{{$pgw->coin_short}}
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    
                    <div class="mt-5 mb-5 display-none-area-desk show-none" id="profit-area">
                        @if ($investPackTransaction->count())
                          @foreach ($investPackTransaction as $inpt)
                            <div class="amount-span-border px-4" id="click-modal-display-inv" data-toggle="modal" data-target="#myModalInvest"
                                data-id="{{$inpt->id}}"       
                                data-invest_plan="{{$inpt->investPlan->name}}"
                                data-reference_id="{{$inpt->reference_id}}"
                                data-percentage="{{$inpt->percentage}}"
                                data-duration="{{$inpt->duration}}"
                                data-profit="{{UserAvailableBalance::getAvailableProfitID($inpt->id)}}"
                                data-status="{{$inpt->status}}"
                                data-amount="{{$inpt->amount}}"
                                data-total="{{UserAvailableBalance::getAvailableProfitID($inpt->id)}}"
                                data-end_date="{{$inpt->end_date}}"
                                data-date_created="{{$inpt->created_at->toFormattedDateString()}}"
                                data-time_created="{{$inpt->created_at->toTimeString()}}"
                                data-date_update="{{$inpt->updated_at->toFormattedDateString()}}"
                                data-time_update="{{$inpt->updated_at->toTimeString()}}"
                            >
                                <div class="force-bg-white justify-space-between">
                                    <div class="row">
                                        <div class="mr-3">
                                            <img src="{{ asset('img/invest-plan/') }}/{{$inpt->investPlan->icon}}" class="coin-icon mt-3">
                                        </div>
                                        <div class="">
                                            <b class="force-color-black small-font-size small-font-size-mobile">{{$inpt->investPlan->name}}</b><br>
                                            <span class="small-font-size small-font-size-mobile force-color-black">
                                            ${{$inpt->amount}} INVESTED
                                            </span>
                                        </div>
                                    </div>
                                    <div class="amount-span small-font-size-mobile mt-2">
                                        <span>${{UserAvailableBalance::getAvailableProfitID($inpt->id)}}</span><br>
                                            <span class="force-color-green small-font-size-mobile">
                                            {{UserAvailableBalance::getAvailableProfitPercentage($inpt->id)}}%
                                            </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                    
                    <div class="mt-2 py-4 border-curve-5 display-none-area-desk show-none" id="referral-area">
                            <div class="force-bg-white py-4 px-2 border-curve-5 amount-span-border">
                                Referral Link <br><br>
                                Automatically top up your account balance by sharing your referral link, Earn a percentage of whatever plan your referred user buys.
                                
                                <br><br>
                                
                                <div class="row px-4">
                                <span class="col-xs-8"> <input type="text" id="inputfieldm" class="form-under-line mr-2" value="{{ route('register') }}?id={{$user->id}}&user={{md5($user->username)}}" readonly style="width:200px;" /></span>
                                <span class="col-xs-2" onclick="getTextCopiedM()" id="buttontextm">
                                    <i class="far fa-clone"></i>
                                </span>
                            </div>
                                
                            </div><br>
                            <div class="force-bg-white py-4 px-4 border-curve-5 amount-span-border">
                                Referrals<br><br>
                                @if($user_ref->count())
                                    @foreach($user_ref as $tref)
                                    <div class="row border-line-bottom mt-2">
                                        <div class="col col-lg-8 text-left row">
                                            <span><img src="{{ asset('img/circle-gray.svg') }}" /></span>
                                            <span class="ml-2">
                                                <b class="force-color-black big-font-size">Deposit</b><br>
                                                <sp class="small-font-size">{{$tref->name}}</sp>
                                            </span>
                                        </div>
                                        <div class="col col-lg-4 text-right">
                                            <sp class="small-font-size">{{$tref->created_at->toFormattedDateString()}}</sp>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    <!--        Mobile  End          -->


                    <div class="row pofolio-activities display-none-area">
                        <div class="col col-lg-8 force-bg-gray py-4 border-curve-5">
                            <h4 class="force-color-black">Activity</h4>
                            <div class="row">
                            @if($transaction->count())
                                @foreach($transaction as $trn)
                                <a href="#" class="col col-lg-5 row force-bg-white mb-4 ml-5 py-2 px-4 border-curve-5 modal-a" id="click-modal-display" data-toggle="modal" data-target="#myModal"
                                   data-id="{{$trn->id}}"       
                                   data-amount="{{$trn->amount}}"
                                   data-charges="{{$trn->charges}}"
                                   data-pg_id="{{$trn->coin_amount}}{{$trn->paymentGateway->coin_short}}"
                                   data-coin_name="{{$trn->paymentGateway->name}}"
                                   data-reference_id="{{$trn->reference_id}}"
                                   data-date_created="{{$trn->created_at->toFormattedDateString()}}"
                                   data-time_created="{{$trn->created_at->toTimeString()}}"
                                   data-date_update="{{$trn->updated_at->toFormattedDateString()}}"
                                   data-time_update="{{$trn->updated_at->toTimeString()}}"
                                   data-status="{{$trn->status}}"
                                   >
                                    <div class="col col-lg-1">
                                        @if($trn->transact_type == 0)
                                            <span><i class="far fa-arrow-alt-circle-down force-color-green"></i></span>
                                        @endif
                                        @if($trn->transact_type == 1)
                                            <span><i class="far fa-arrow-alt-circle-up force-color-red"></i></span>
                                        @endif
                                    </div>
                                    <div class="col col-lg-4 text-left">
                                        <h4 class="force-color-black big-font-size">{{$trnType[$trn->transact_type]}}</h4>
                                        <span class="small-font-size">{{$trn->created_at->toFormattedDateString()}}</span>
                                    </div>
                                    <div class="col col-lg-6 text-right">
                                        @if($trn->transact_type == 0)
                                            <h4 class="force-color-black big-font-size text-right">+{{$trn->amount}}</h4>
                                        @endif
                                        @if($trn->transact_type == 1)
                                            <h4 class="force-color-black big-font-size text-right">-{{$trn->amount}}</h4>
                                        @endif
                                        <span class="small-font-size"><sp class="text-uppercase">{{$trn->coin_amount}}{{$trn->paymentGateway->coin_short}}</sp></span>
                                    </div>
                                </a>
                                @endforeach
                            @endif
                            </div>
                        </div>
                        <div class="col col-lg-3 force-bg-gray py-4 ml-4 border-curve-5 show-none">
                            <div class="force-bg-white py-4 px-4 border-curve-5">
                                Referral Link <br><br>
                                Automatically top up your account balance by sharing your referral link, Earn a percentage of whatever plan your referred user buys.
                                
                                <br><br>
                                
                                <div class="row">
                                <span class="col col-lg-10"> <input type="text" id="inputfield" class="form-under-line mr-5" value="{{ route('register') }}?id={{$user->id}}&user={{md5($user->username)}}" readonly style="width:100%;" /></span>
                                <span class="col-xs-2" onclick="getTextCopied()" id="buttontext">
                                    <i class="far fa-clone"></i>
                                </span>
                            </div>
                                
                            </div><br>
                            <div class="force-bg-white py-4 px-4 border-curve-5">
                                Referrals<br><br>
                                @if($user_ref->count())
                                    @foreach($user_ref as $tref)
                                    <div class="row border-line-bottom mt-2">
                                        <div class="col col-lg-8 text-left row">
                                            <span><img src="{{ asset('img/circle-gray.svg') }}" /></span>
                                            <span class="ml-2">
                                                <b class="force-color-black big-font-size">Deposit</b><br>
                                                <sp class="small-font-size">{{$tref->name}}</sp>
                                            </span>
                                        </div>
                                        <div class="col col-lg-4 text-right">
                                            <sp class="small-font-size">{{$tref->created_at->toFormattedDateString()}}</sp>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>                        
                    </div>
                </div>
            </section>
        </main>
        
<!-- The Modal Edit -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Withdraw</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row d-flex justify-content-between px-4">
            <span class="col col-lg-10 big-font-size" id="pg_id"></span>
            <span class="col col-lg-2" id="status"></span>
        </div>
        <div class="mt-4">
            <span class="small-font-size">Reference ID</span><br>
            <span class="big-font-size" id="reference_id"></span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Date</span><br>
            <span class="big-font-size" id="create_datetime"></span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Amount</span><br>
            <span class="big-font-size" id="amount"></span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Charge</span><br>
            <span class="big-font-size" id="charges"></span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Method</span><br>
            <span class="big-font-size" id="coin_name"></span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Updated</span><br>
            <span class="big-font-size" id="update_datetime"></span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal ffoo" id="myModalInvest">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Investment Earning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row d-flex justify-content-between px-4">
            <span class="col col-lg-10 big-font-size" id="profit-inv"></span>
            <span class="col col-lg-2" id="status-inv"></span>
        </div>
        <div class="mt-4">
            <span class="small-font-size">Invested Amount</span><br>
            <span class="big-font-size" id="amount-inv"></span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Investment Pack</span><br>
            <span class="big-font-size" id="invest_plan-inv"></span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Date</span><br>
            <span class="big-font-size" id="create_datetime-inv"></span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Updated</span><br>
            <span class="big-font-size" id="update_datetime-inv"></span>
        </div>
      </div>
    </div>
  </div>
</div>
        
    @include('user.layouts.footer')

        <script>
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "successDeposit"){
                window.onload = (event) => {
                   bs4pop.notice('Transaction Await Approval', {position: 'topright', type: 'warning'})
                };
            }
        </script>
        
        <script>
          $(document).ready(function(){
                
                $(document).on('click', '#click-modal-display', function(){
                  document.querySelector("#amount").innerHTML = $(this).attr("data-pg_id") + " at US$" + $(this).attr("data-amount");
                  document.querySelector("#charges").innerHTML = "$" + $(this).attr("data-charges");
                  document.querySelector("#coin_name").innerHTML = $(this).attr("data-coin_name");
                  document.querySelector("#pg_id").innerHTML = $(this).attr("data-pg_id");
                  document.querySelector("#reference_id").innerHTML = $(this).attr("data-reference_id");
                  document.querySelector("#create_datetime").innerHTML = $(this).attr("data-date_created") + " @ " + $(this).attr("data-time_created");
                  document.querySelector("#update_datetime").innerHTML = $(this).attr("data-date_update") + " @ " + $(this).attr("data-time_update");
                     
                    if($(this).attr("data-status") == 1){
                        document.querySelector("#status").innerHTML = '<sp class="badge badge-success pt-1">Approved</sp>'
                    }else if($(this).attr("data-status") == 2){
                        document.querySelector("#status").innerHTML = '<sp class="badge badge-danger pt-1">Decline</sp>'
                    }else{
                        document.querySelector("#status").innerHTML = '<sp class="badge badge-warning pt-1">Pending</sp>'
                    }
                 }); 
             });            
        </script>
        <script>
            function getTextCopied() {
              // body...
              var inputfield=document.getElementById('inputfield');

              inputfield.select();
              inputfield.setSelectionRange(0,999999);

              document.execCommand("copy");
              document.getElementById('buttontext').innerHTML='<i class="fas fa-check force-color-green"></i>';
             }
        </script>
        <script>
            function getTextCopiedM() {
              // body...
              var inputfield=document.getElementById('inputfieldm');

              inputfield.select();
              inputfield.setSelectionRange(0,999999);

              document.execCommand("copy");
              document.getElementById('buttontextm').innerHTML='<i class="fas fa-check force-color-green"></i>';
             }
        </script>
        <script>
            $(document).ready(function(){
                
                $(document).on('click', '#balance-label', function(){                
                    document.querySelector('#profit-label').classList.remove("label-active-span");
                    document.querySelector('#profit-card').classList.add("show-none");
                    document.querySelector('#profit-area').classList.add("show-none");
                    
                    document.querySelector('#referral-label').classList.remove("label-active-span");
                    document.querySelector('#referral-card').classList.add("show-none");
                    document.querySelector('#referral-area').classList.add("show-none");
                    
                    document.querySelector('#balance-label').classList.add("label-active-span");
                    document.querySelector('#balance-card').classList.remove("show-none");
                    document.querySelector('#balance-area').classList.remove("show-none");
                });
                
                $(document).on('click', '#profit-label', function(){                
                    document.querySelector('#balance-label').classList.remove("label-active-span");
                    document.querySelector('#balance-card').classList.add("show-none");
                    document.querySelector('#balance-area').classList.add("show-none");
                    
                    document.querySelector('#referral-label').classList.remove("label-active-span");
                    document.querySelector('#referral-card').classList.add("show-none");
                    document.querySelector('#referral-area').classList.add("show-none");
                    
                    document.querySelector('#profit-label').classList.add("label-active-span");
                    document.querySelector('#profit-card').classList.remove("show-none");
                    document.querySelector('#profit-area').classList.remove("show-none");
                });
                
                $(document).on('click', '#referral-label', function(){                
                    document.querySelector('#balance-label').classList.remove("label-active-span");
                    document.querySelector('#balance-card').classList.add("show-none");
                    document.querySelector('#balance-area').classList.add("show-none");
                    
                    document.querySelector('#profit-label').classList.remove("label-active-span");
                    document.querySelector('#profit-card').classList.add("show-none");
                    document.querySelector('#profit-area').classList.add("show-none");
                    
                    document.querySelector('#referral-label').classList.add("label-active-span");
                    document.querySelector('#referral-card').classList.remove("show-none");
                    document.querySelector('#referral-area').classList.remove("show-none");
                });
                
            })
        </script>
        
        <script type="text/javascript">
            @if(auth()->user()->kyc_verify == 0)
                $(window).on('load', function() {
                    $('#myModalVerifyAcc').modal('show');
                });
            @endif
        </script>

        <script>
          $(document).ready(function(){
                
                $(document).on('click', '#click-modal-display-inv', function(){
                  document.querySelector("#profit-inv").innerHTML = "$" + $(this).attr("data-profit");
                  document.querySelector("#amount-inv").innerHTML = "$" + $(this).attr("data-amount");
                  document.querySelector("#invest_plan-inv").innerHTML = $(this).attr("data-invest_plan");
                  document.querySelector("#create_datetime-inv").innerHTML = $(this).attr("data-date_created") + " @ " + $(this).attr("data-time_created");
                  document.querySelector("#update_datetime-inv").innerHTML = $(this).attr("data-end_date") + " @ " + $(this).attr("data-time_update");
                     
                    var today = new Date();
                    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                    var dateTime = Date.parse(date+' '+time)/1000;
                    var db_end_date = Date.parse($(this).attr("data-end_date"))/1000 ;

                    if( db_end_date <= dateTime){
                        document.querySelector("#status-inv").innerHTML = '<sp class="badge badge-success pt-1">Ended</sp>';
                    }else{
                        document.querySelector("#status-inv").innerHTML = '<sp class="badge badge-warning pt-1">In Progress</sp>';
                    }
                 }); 
             });            
        </script>
        
    </body>
</html>