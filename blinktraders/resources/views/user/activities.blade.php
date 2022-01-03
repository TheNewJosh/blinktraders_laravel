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
                                        <span><i class="far fa-arrow-alt-circle-down force-color-green"></i></span>
                                        <span class="force-color-black big-font-size">{{$trnType[$trn->transact_type]}}</span>
                                        <br><span class="small-font-size ml-3">{{$trn->created_at->toFormattedDateString()}}</span>
                                    </div>
                                    <div class="">
                                        <h4 class="force-color-black big-font-size text-right">+{{$trn->amount}}</h4>
                                        <span class="small-font-size ml-2 text-right"><sp class="text-uppercase">{{$trn->coin_amount}}{{$trn->paymentGateway->coin_short}}BTC</sp></span>
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
        
    </body>
</html>