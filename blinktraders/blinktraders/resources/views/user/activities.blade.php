<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <?php 
            $page = "activities.php"; 
            $page_title = "Activities";
            $mi1 = $mi2 = $mi3 = $mi4 = $mi5 = $mi6 = $mi7 = $mi8 = "";
            $smi5 = "footer-sticky-menu-active";
            $smi1 = $smi3 = $smi4 = $smi2 = "";
            $typStatus = ["Pending", "Approved", "Decline"];
            $trnType = ["Deposit", "Withdraw"];
            $broker = ["KOT4X", "HUGO’S WAY"];

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
                    <div class="space-mobile"></div>
                    <div class="mt-5 mb-5 deposit-res-px-5">
                        <div class="master-deposit-div-wk-pd">
                        <div class="row">
                            @if($transaction->count())
                                @foreach($transaction as $trn)
                                <a href="#" class="col-lg-5 col-xs-12 justify-space-between force-bg-white mb-4 deposit-activity border-curve-5 modal-a" id="click-modal-display" data-toggle="modal" data-target="#myModal"
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
                                    <div class="">
                                        @if($trn->transact_type == 0)
                                            <span><i class="far fa-arrow-alt-circle-down force-color-green"></i></span>
                                        @endif
                                        @if($trn->transact_type == 1)
                                            <span><i class="far fa-arrow-alt-circle-up force-color-red"></i></span>
                                        @endif
                                        <span class="force-color-black big-font-size">{{$trnType[$trn->transact_type]}}</span>
                                        <br><span class="small-font-size ml-3">{{$trn->created_at->toFormattedDateString()}}</span>
                                    </div>
                                    <div class="">
                                        @if($trn->transact_type == 0)
                                            <h4 class="force-color-black big-font-size text-right">+{{$trn->amount}}</h4>
                                        @endif
                                        @if($trn->transact_type == 1)
                                            <h4 class="force-color-black big-font-size text-right">-{{$trn->amount}}</h4>
                                        @endif
                                        <span class="small-font-size ml-2 text-right"><sp class="text-uppercase">{{$trn->coin_amount}}{{$trn->paymentGateway->coin_short}}</sp></span>
                                    </div>
                                </a>
                                @endforeach
                            @endif

                            @if($investPackTransaction->count())
                                @foreach($investPackTransaction as $inpt)
                                <a href="#" class="col-lg-5 col-xs-12 justify-space-between force-bg-white mb-4 deposit-activity border-curve-5 modal-a" id="click-modal-display-inv" data-toggle="modal" data-target="#myModalInvest"
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
                                   data-progression="{{UserAvailableBalance::getAvailableProfitPercentageEnd($inpt->id)}}"
                                   >
                                    <div class="">
                                        <span><img src="{{ asset('img/invest-plan/') }}/{{$inpt->investPlan->icon}}" class="coin-icon mt-3"></span>
                                        <span class="force-color-black big-font-size">{{$inpt->investPlan->name}}</span>
                                        <br><span class="small-font-size ml-3">${{$inpt->amount}} INVESTED</span>
                                    </div>
                                    <div class="">
                                        <h4 class="force-color-black big-font-size text-right">${{UserAvailableBalance::getAvailableProfitID($inpt->id)}}</h4>
                                        <span class="small-font-size ml-2 text-right"><sp class="text-uppercase">{{UserAvailableBalance::getAvailableProfitPercentage($inpt->id)}}%</sp></span>
                                    </div>
                                </a>
                                @endforeach
                            @endif

                            @if($copyTrade->count())
                                @foreach($copyTrade as $cpt)
                                <a href="#" class="col-lg-5 col-xs-12 justify-space-between force-bg-white mb-4 deposit-activity border-curve-5 modal-a" id="click-modal-display-cpt" data-toggle="modal" data-target="#myModalCopyTrade"
                                   data-id="{{$cpt->id}}"
                                   data-mt4id="{{$cpt->mt4id}}"
                                   data-broker="{{$broker[$cpt->broker]}}"
                                   data-mt4bal="{{$cpt->mt4bal}}"
                                   data-amount="{{$cpt->amount}}"
                                   data-status="{{$cpt->status}}"
                                   data-date_created="{{$cpt->created_at->toFormattedDateString()}}"
                                   data-time_created="{{$cpt->created_at->toTimeString()}}"
                                   data-date_update="{{$cpt->updated_at->toFormattedDateString()}}"
                                   data-time_update="{{$cpt->updated_at->toTimeString()}}"
                                   >
                                    <div class="">
                                        <span><span><i class="far fa-arrow-alt-circle-up force-color-red"></i></span></span>
                                        <span class="force-color-black big-font-size">Copy Trade</span>
                                        <br><span class="small-font-size ml-3">#{{$cpt->mt4id}}</span>
                                    </div>
                                    <div class="">
                                        <h4 class="force-color-black big-font-size text-right">${{$cpt->amount}}</h4>
                                        <span class="small-font-size ml-2 text-right"><sp class="text-uppercase">{{$broker[$cpt->broker]}}</sp></span>
                                    </div>
                                </a>
                                @endforeach
                            @endif

                            @if($masterClass->count())
                                @foreach($masterClass as $mcs)
                                <a href="#" class="col-lg-5 col-xs-12 justify-space-between force-bg-white mb-4 deposit-activity border-curve-5 modal-a" id="click-modal-display-mcs" data-toggle="modal" data-target="#myModalMasterClass"
                                   data-id="{{$mcs->id}}"
                                   data-amount="{{$mcs->amount}}"
                                   data-status="{{$mcs->status}}"
                                   data-date_created="{{$mcs->created_at->toFormattedDateString()}}"
                                   data-time_created="{{$mcs->created_at->toTimeString()}}"
                                   data-date_update="{{$mcs->updated_at->toFormattedDateString()}}"
                                   data-time_update="{{$mcs->updated_at->toTimeString()}}"
                                   >
                                    <div class="">
                                        <span><span><i class="far fa-arrow-alt-circle-up force-color-red"></i></span></span>
                                        <span class="force-color-black big-font-size">Master Class</span>
                                        <br><span class="small-font-size ml-3">{{$mcs->created_at->toFormattedDateString()}}</span>
                                    </div>
                                    <div class="">
                                        <h4 class="force-color-black big-font-size text-right">${{$mcs->amount}}</h4>
                                        <span class="small-font-size ml-2 text-right">Billed Monthly</span>
                                    </div>
                                </a>
                                @endforeach
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
<!-- The Modal Edit -->
<div class="modal ffoo" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Activities</h5>
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

<div class="modal ffoo" id="myModalCopyTrade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Copy Trade</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row d-flex justify-content-between px-4">
            <span class="col col-lg-10 big-font-size" id="amount-cpt"></span>
            <span class="col col-lg-2" id="status-cpt"></span>
        </div>
        <div class="mt-4">
            <span class="small-font-size">MT4 Account ID </span><br>
            <span class="big-font-size" id="mt4id"></span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Broker</span><br>
            <span class="big-font-size" id="broker"></span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">MT4 Equity/Balance</span><br>
            <span class="big-font-size" id="mt4bal"></span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Date</span><br>
            <span class="big-font-size" id="create_datetime-cpt"></span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Updated</span><br>
            <span class="big-font-size" id="update_datetime-cpt"></span>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal ffoo" id="myModalMasterClass">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Master Class</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row d-flex justify-content-between px-4">
            <span class="col col-lg-10 big-font-size" id="amount-mcs"></span>
            <span class="col col-lg-2" id="status-mcs"></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Date</span><br>
            <span class="big-font-size" id="create_datetime-mcs"></span><br>
            <span class="text-input-up"><input type="text" class="pro-select-input" readonly /></span>
        </div>
        <div class="mt-2">
            <span class="small-font-size">Updated</span><br>
            <span class="big-font-size" id="update_datetime-mcs"></span>
        </div>
      </div>
    </div>
  </div>
</div>
    @include('user.layouts.footer')
        
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
          $(document).ready(function(){
                
                $(document).on('click', '#click-modal-display-inv', function(){
                  document.querySelector("#profit-inv").innerHTML = "$" + $(this).attr("data-profit");
                  document.querySelector("#amount-inv").innerHTML = "$" + $(this).attr("data-amount");
                  document.querySelector("#invest_plan-inv").innerHTML = $(this).attr("data-invest_plan");
                  document.querySelector("#create_datetime-inv").innerHTML = $(this).attr("data-date_created") + " @ " + $(this).attr("data-time_created");
                  document.querySelector("#update_datetime-inv").innerHTML = $(this).attr("data-end_date") + " @ " + $(this).attr("data-time_update");
                     
                    var progression = $(this).attr("data-progression");
                    if(progression == "Ended"){
                        document.querySelector("#status-inv").innerHTML = '<sp class="badge badge-success pt-1">'+progression+'</sp>';
                    }else{
                        document.querySelector("#status-inv").innerHTML = '<sp class="badge badge-warning pt-1">'+progression+'</sp>'; 
                    }
                 }); 
             });            
        </script>

        <script>
          $(document).ready(function(){
                
                $(document).on('click', '#click-modal-display-cpt', function(){
                  document.querySelector("#mt4id").innerHTML = "#" + $(this).attr("data-mt4id");
                  document.querySelector("#broker").innerHTML = $(this).attr("data-broker");
                  document.querySelector("#mt4bal").innerHTML = $(this).attr("data-mt4bal");
                  document.querySelector("#amount-cpt").innerHTML = "$" + $(this).attr("data-amount");
                  document.querySelector("#create_datetime-cpt").innerHTML = $(this).attr("data-date_created") + " @ " + $(this).attr("data-time_created");
                  document.querySelector("#update_datetime-cpt").innerHTML = $(this).attr("data-date_update") + " @ " + $(this).attr("data-time_update");
                     
                    if($(this).attr("data-status") == 1){
                        document.querySelector("#status-cpt").innerHTML = '<sp class="badge badge-success pt-1">Approved</sp>'
                    }else if($(this).attr("data-status") == 2){
                        document.querySelector("#status-cpt").innerHTML = '<sp class="badge badge-danger pt-1">Decline</sp>'
                    }else{
                        document.querySelector("#status-cpt").innerHTML = '<sp class="badge badge-warning pt-1">Pending</sp>'
                    }
                 }); 
             });            
        </script>
        
        <script>
          $(document).ready(function(){
                
                $(document).on('click', '#click-modal-display-mcs', function(){
                  document.querySelector("#amount-mcs").innerHTML = "$" + $(this).attr("data-amount");
                  document.querySelector("#create_datetime-mcs").innerHTML = $(this).attr("data-date_created") + " @ " + $(this).attr("data-time_created");
                  document.querySelector("#update_datetime-mcs").innerHTML = $(this).attr("data-date_update") + " @ " + $(this).attr("data-time_update");
                     
                    if($(this).attr("data-status") == 1){
                        document.querySelector("#status-mcs").innerHTML = '<sp class="badge badge-success pt-1">Approved</sp>'
                    }else if($(this).attr("data-status") == 2){
                        document.querySelector("#status-mcs").innerHTML = '<sp class="badge badge-danger pt-1">Decline</sp>'
                    }else{
                        document.querySelector("#status-mcs").innerHTML = '<sp class="badge badge-warning pt-1">Pending</sp>'
                    }
                 }); 
             });            
        </script>
        
    </body>
</html>