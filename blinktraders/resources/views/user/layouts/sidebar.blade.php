<?php        
    if($page == "index.php"){
        $mi1 = "active-sidebar-link";
        $smi1 = "footer-sticky-menu-active";
    }

    if($page == "deposit.php" || $page == "deposit-transact.php" || $page == "deposit-code.php"){
        $mi2 = "active-sidebar-link";
         $smi2 = "footer-sticky-menu-active";
        $page_title = "Deposit";
    }

    if($page == "invest.php" || $page == "invest-copy-trader-transact.php" || $page == "invest-pack-transact.php"){
        $mi3 = "active-sidebar-link";
         $smi3 = "footer-sticky-menu-active";
        $page_title = "Investment";
    }

    if($page == "withdraw.php" || $page == "withdraw-transact.php"){
        $mi4 = "active-sidebar-link";
         $smi4 = "footer-sticky-menu-active";
        $page_title = "Withdraw";
    }

    if($page == "activities.php"){
        $mi5 = "active-sidebar-link";
         $smi5 = "footer-sticky-menu-active";
        $page_title = "Activities";
    }

    if($page == "masterclass.php"){
        $mi6 = "active-sidebar-link";
        $page_title = "Master Class";
    }

    if($page == "security.php"){
        $mi7 = "active-sidebar-link";
        $page_title = "Security";
    }

    if($page == "kyc.php" || $page == "kyc-snapshort-intro.php" || $page == "kyc-snapshort-take.php"){
        $mi8 = "active-sidebar-link";
        $page_title = "KYC";
    }
?>

<div class="sidebar-div">
    <a href="/"><img src="{{ asset('img/dashb-icon.svg') }}" /></a>
    <div class="sidebar-link-div">
        <div class="sidebar-link <?= $mi1 ?>">
            <a href="index.php" class="sidebar-link-a">
                <span><i class="far fa-chart-bar"></i></span><br>
                <span>Portfolio</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi2 ?>">
            <a href="deposit.php" class="sidebar-link-a">
                <span><i class="far fa-money-bill-alt"></i></span><br>
                <span>Deposit</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi3 ?>">
            <a href="invest.php" class="sidebar-link-a">
                <span><i class="fas fa-university"></i></span><br>
                <span>Investment</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi4 ?>">
            <a href="withdraw.php" class="sidebar-link-a">
                <span><i class="fas fa-hand-holding-usd"></i></span><br>
                <span>Withdraw</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi5 ?>">
            <a href="activities.php" class="sidebar-link-a">
                <span><i class="fas fa-exchange-alt"></i></span><br>
                <span>Activies</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi6 ?>">
            <a href="masterclass.php" class="sidebar-link-a">
                <span><i class="fas fa-user-graduate"></i></span><br>
                <span>Masterclass</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi7 ?>">
            <a href="security.php" class="sidebar-link-a">
                <span><i class="fas fa-shield-alt"></i></span><br>
                <span>Security</span>
            </a>
        </div>
        <div class="sidebar-link <?= $mi8 ?>">
            <a href="kyc.php" class="sidebar-link-a">
                <span><i class="far fa-address-card"></i></span><br>
                <span>KYC</span>
            </a>
        </div>
    </div>
</div>
