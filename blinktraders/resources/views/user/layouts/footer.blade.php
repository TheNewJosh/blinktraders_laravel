<div class="footer-sticky-menu-div display-none-area-desk">
    <ul class="footer-sticky-menu-ul">
        <li class="footer-sticky-menu-li">
            <a href="{{ route('dashboard') }}" class="footer-sticky-menu-a <?= $smi1 ?>">
                <span class="footer-sticky-menu-icon"><i class="far fa-chart-bar"></i></span><br>
                <span class="footer-sticky-menu-text">Portfolio</span>
            </a>
        </li>
        <li class="footer-sticky-menu-li">
            <a href="{{ route('deposit') }}" class="footer-sticky-menu-a <?= $smi2 ?>">
                <span class="footer-sticky-menu-icon"><i class="far fa-money-bill-alt"></i></span><br>
                <span class="footer-sticky-menu-text">Deposit</span>
            </a>
        </li>
        <li class="footer-sticky-menu-li">
            <a href="{{ route('invest') }}" class="footer-sticky-menu-a <?= $smi3 ?>">
                <span class="footer-sticky-menu-icon"><i class="fas fa-university"></i></span><br>
                <span class="footer-sticky-menu-text">Invest</span>
            </a>
        </li>
        <li class="footer-sticky-menu-li">
            <a href="{{ route('withdraw') }}" class="footer-sticky-menu-a <?= $smi4 ?>">
                <span class="footer-sticky-menu-icon"><i class="fas fa-hand-holding-usd"></i></span><br>
                <span class="footer-sticky-menu-text">Withdraw</span>
            </a>
        </li>
        <li class="footer-sticky-menu-li">
            <a href="{{ route('activities') }}" class="footer-sticky-menu-a <?= $smi5 ?>">
                <span class="footer-sticky-menu-icon"><i class="fas fa-exchange-alt"></i></span><br>
                <span class="footer-sticky-menu-text">Activies</span>
            </a>
        </li>
    </ul>
</div>
<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalVerifyAcc">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="pr-2 pt-2">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span><i class="fas fa-exclamation-circle force-color-blue" style="font-size:50px;"></i></span><br><br>
            <span class="big-font-size">Your account is not yet verified.</span><br><br>
            <span>Please complete the KYC to upgrade your account for better transactions.</span><br><br>
          
            <a href="https://mail.google.com/mail/u/0/#inbox" class="btn btn-primary">Verify Account</a>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('js/jquery-3-4-1.min.js') }}"></script>

<!--<script src="../../assets/js/aos.js"></script>-->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ asset('js/main-user.js') }}" type="application/javascript"></script>

<script src="{{ asset('js/bs4pop.js') }}"></script>

<script type="text/javascript">
    @if(auth()->user()->email_verify == 0)
        $(window).on('load', function() {
            $('#myModalVerifyAcc').modal('show');
        });
    @endif
</script>

<script>
    var msg = new URL(window.location.href).searchParams.get("msg");
    if(msg === "sucessLogin"){
        window.onload = (event) => {
           bs4pop.notice('Login successfully', {position: 'topright', type: 'success'})
        };
    }
</script>