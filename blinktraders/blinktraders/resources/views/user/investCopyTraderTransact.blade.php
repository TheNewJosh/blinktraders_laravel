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
                                
                                <!-- <input type="hidden" name="user_id" value="" > -->
                                <div class="form-group">
                                    <label class="force-color-black">MT4 Account ID </label>
                                    <input type="text" name="mt4id" id="mt4id" value="{{old('mt4id')}}" class="form-control input-outline force-bg-white">
                                    @error('mt4id')
                                        <span class="force-color-red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="force-color-black">Broker</label>
                                    <select class="form-control input-outline force-bg-white" id="broker" name="broker">
                                        <option value="0" @if(old('broker') == '0') selected @endif >KOT4X</option>
                                        <option value="1" @if(old('broker') == '1') selected @endif >HUGO’S WAY</option>
                                    </select>
                                    @error('broker')
                                        <span class="force-color-red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="force-color-black">MT4 Equity/Balance </label>
                                    <input type="text" class="form-control input-outline force-bg-white" name="mt4bal" id="mt4bal" value="{{old('mt4bal')}}">
                                    @error('mt4bal')
                                        <span class="force-color-red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="force-color-black">MT4 Password</label>
                                    <input type="text" class="form-control input-outline force-bg-white" name="password" id="password" value="{{old('password')}}">
                                    @error('password')
                                        <span class="force-color-red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="cover">
                                    <button type="submit" class="btn btn-primary btn-lg text-center" id="proceed-submit" data-toggle="modal" data-target="#myModalConfirmInvest">Proceed</button>
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
        <form  action="{{ route('investCopyTraderTransact') }}" method="post" class="modal-body text-center">
            @csrf
            <input type="hidden" name="mt4id" id="mt4id-snt">
            <input type="hidden" name="broker" id="broker-snt">
            <input type="hidden" name="mt4bal" id="mt4bal-snt">
            <input type="hidden" name="password" id="password-snt">
            <p class="text-center">Pay trade replicating server subscription $949 (billed monthly)</p>
          <br><br>
            <button type="submit" class="btn btn-primary">Proceed</button>
        </form>
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
            <span>
                <i class="far fa-check-circle force-color-green" style="font-size:50px;"></i>
            </span><br><br>
            <span class="big-font-size">Trade subscription was successfully paid</span><br><br>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
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
            <span class="small-font-size text-center">You are unable to perform this transaction because you do not have any previous transactions with us.
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
        $('#proceed-submit').click(function(){
                document.querySelector('#mt4id-snt').value = $('#mt4id').val();
                document.querySelector('#broker-snt').value = $('#broker').val();
                document.querySelector('#mt4bal-snt').value = $('#mt4bal').val();
                document.querySelector('#password-snt').value = $('#password').val();
                
            });
    });
</script>
        
<script>    
    @if(session('statusError'))
        $(window).on('load', function() {
            $('#myModalError').modal('show');
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
</script>
        
    </body>
</html>