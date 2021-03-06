<?php        
    if($page == "index.php"){
        $mi1 = "active-sidebar-link";
    }

    if($page == "deposit.php" || $page == "deposit-transact.php" || $page == "deposit-code.php"){
        $mi2 = "active-sidebar-link";
    }

    if($page == "invest.php" || $page == "invest-copy-trader-transact.php" || $page == "invest-pack-transact.php"){
        $mi3 = "active-sidebar-link";
    }

    if($page == "withdraw.php" || $page == "withdraw-transact.php"){
        $mi4 = "active-sidebar-link";
    }

    if($page == "activities.php"){
        $mi5 = "active-sidebar-link";  
    }

    if($page == "masterclass.php"){
        $mi6 = "active-sidebar-link";
    }

    if($page == "security.php"){
        $mi7 = "active-sidebar-link";
    }

    if($page == "kyc.php" || $page == "kyc-snapshort-intro.php" || $page == "kyc-snapshort-take.php"){
        $mi8 = "active-sidebar-link";
    }
?>

<div class="sidebar-div">
    <a href="{{ route('home') }}"><img src="{{ asset('img/dashb-icon.svg') }}" /></a>
    <div class="sidebar-link-div">
        <div class="sidebar-link <?= $mi1 ?>">
            <a href="{{ route('dashboard') }}" class="sidebar-link-a">
                <span><i class="far fa-chart-bar"></i></span><br>
                <span>Portfolio</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi2 ?>">
            <a href="{{ route('deposit') }}" class="sidebar-link-a">
                <span><i class="far fa-money-bill-alt"></i></span><br>
                <span>Deposit</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi3 ?>">
            <a href="{{ route('invest') }}" class="sidebar-link-a">
                <span><i class="fas fa-university"></i></span><br>
                <span>Investment</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi4 ?>">
            <a href="{{ route('withdraw') }}" class="sidebar-link-a">
                <span><i class="fas fa-hand-holding-usd"></i></span><br>
                <span>Withdraw</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi5 ?>">
            <a href="{{ route('activities') }}" class="sidebar-link-a">
                <span><i class="fas fa-exchange-alt"></i></span><br>
                <span>Activies</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi6 ?>">
            <a href="{{ route('masterclass') }}" class="sidebar-link-a">
                <span><i class="fas fa-user-graduate"></i></span><br>
                <span>Masterclass</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi7 ?>">
            <a href="{{ route('security') }}" class="sidebar-link-a">
                <span><i class="fas fa-shield-alt"></i></span><br>
                <span>Security</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi8 ?>">
            <a href="{{ route('kyc') }}" class="sidebar-link-a">
                <span><i class="far fa-address-card"></i></span><br>
                <span>KYC</span>
            </a>
        </div>
    </div>
</div>
<style>
    .crisp-client .cc-kv6t .cc-1xry .cc-unoo .cc-7doi {
    width: 60px!important;
    height: 60px!important;
    display: block!important;
    border-radius: 60px!important;
    box-shadow: 0 4px 10px 0 rgba(0,0,0,.04)!important;
    transition: transform .15s ease-in-out!important;
    position: fixed !important;
    bottom: 60px!important;
    right: 5px!important;
    cursor: pointer!important;
    display: flex!important;
    align-items: center!important;
    justify-content: center!important'
    transform: translateY(70px);
    display: flex !important;
}
</style>

<script type="text/javascript"> window.$crisp=[];window.CRISP_WEBSITE_ID="63388e25-0e81-45ee-b67b-668ce26a4c98";(function(){ d=document;s=d.createElement("script"); s.src="https://client.crisp.chat/l.js"; s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})(); </script>
