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
                                <a href="#" class="col col-lg-5 row force-bg-white mb-4 ml-5 py-2 px-4 border-curve-5 modal-a" id="click-modal-display" data-toggle="modal" data-target="#myModal"
                                   data-id="1"       
                                   data-amount="100.00"
                                   data-charges="10"
                                   data-pg_id="000066BTC"
                                   data-coin_name="Bitcoin"
                                   data-reference_id="q112"
                                   data-date_created="02-02-2002"
                                   data-time_created="11: 20: 01"
                                   data-date_update="02-02-2002"
                                   data-time_update="11: 20: 01"
                                   data-status="1"
                                   >
                                    <div class="col col-lg-1">
                                        <i class="far fa-arrow-alt-circle-down force-color-green"></i>
                                    </div>
                                    <div class="col col-lg-4 text-left">
                                        <h4 class="force-color-black big-font-size">Deposit</h4>
                                        <span class="small-font-size">02-02-2002</span>
                                    </div>
                                    <div class="col col-lg-6 text-right">
                                        <h4 class="force-color-black big-font-size">+$200</h4>
                                        <span class="small-font-size"><sp class="text-uppercase">000066BTC</sp></span>
                                    </div>
                                </a>
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
                    }else{
                        document.querySelector("#status").innerHTML = '<sp class="badge badge-warning pt-1">Pending</sp>'
                    }
                 }); 
             });            
        </script>
        
    </body>
</html>