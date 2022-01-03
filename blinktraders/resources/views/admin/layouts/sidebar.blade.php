<?php        
    $mi1 = $mi2 = $mi3 = $mi4 = $mi5 = $mi6 = $mi7 = $mi8 = $mi9 = "";
    $mi2_s = $mi3_s = $mi4_s = $mi5_s = $mi6_s = $mi7_s = $mi8_s = $mi9_s =  "";
    $mi2_l1 = $mi2_l2 = $mi3_l1 = $mi3_l2 = $mi4_l1 = $mi4_l2 = $mi4_l3 = $mi4_l4 = $mi4_l5 = $mi5_l1 = $mi5_l2 = $mi5_l3 = $mi5_l4 = $mi8_l1 = $mi8_l2 = $mi8_l3 = $mi9_l1 = $mi9_l2 =  $mi9_l3 = "";
    
    if($page == "index.php"){
        $mi1 = "active-link-adm";
    }

    if($page == "user-management-client-account.php" || $page == "user-management-promotional.php" || $page == "user-management-client-account-manage.php" || $page == "user-management-client-account-send-mail.php"){
        $mi2 = "active-link-adm";
        $mi2_s = "show";
        $page_title = "User Management";
        if($page == "user-management-client-account-manage.php"){
            $page_title = "Manage Account";
        }
        
        if($page == "user-management-client-account.php" || $page == "user-management-client-account-manage.php" || $page == "user-management-client-account-send-mail.php"){
            $mi2_l1 = "admin-drop-menu-active";
        }
        if($page == "user-management-promotional.php"){
            $mi2_l2 = "admin-drop-menu-active";
        }
    }

    if($page == "system-config-settings.php" || $page == "system-config-account-info.php"){
        $mi3 = "active-link-adm";
        $mi3_s = "show";
        $page_title = "System Configuration";
        
        if($page == "system-config-settings.php"){
            $mi3_l1 = "active-link-adm";
        }
        if($page == "system-config-account-info.php"){
            $mi3_l2 = "active-link-adm";
        }
    }

    if($page == "deposit-paymentgate.php" || $page == "deposit-log.php"){
        $mi4 = "active-link-adm";
        $mi4_s = "show";
        $page_title = "Deposit";
        
        if($page == "deposit-paymentgate.php"){
            $mi4_l1 = "active-link-adm";
        }
        if($page == "deposit-log.php"){
            $mi4_l2 = "active-link-adm";
        }
    }

    if($page == "withdraw-log.php"){
        $mi5 = "active-link-adm";
        $mi5_s = "show";
        $page_title = "Withradaw System";
        
        if($page == "withdraw-log.php"){
            $mi5_l1 = "active-link-adm";
        }
    }

    if($page == "invest-plan.php" || $page == "invest-plan-transact.php"){
        $mi9 = "active-link-adm";
        $mi9_s = "show";
        
        if($page == "invest-plan.php"){
            $mi9_l1 = "active-link-adm";
        }

        if($page == "invest-plan-transact.php"){
            $mi9_l2 = "active-link-adm";
        }
    }

    if($page == "masterclass.php"){
        $mi6 = "active-link-adm";
        $page_title = "Masterclass";
    }

    if($page == "copytrade.php"){
        $mi7 = "active-link-adm";
        $page_title = "Copy trade";
    }

    if($page == "blog-post-new.php" || $page == "blog-article.php" || $page == "blog-post-new-update.php" || $page == "blog-category.php"){
        $mi8 = "active-link-adm";
        $mi8_s = "show";
        $page_title = "Blog";
        
        if($page == "blog-post-new.php"){
            $mi8_l1 = "active-link-adm";
        }
        if($page == "blog-article.php" || $page == "blog-post-new-update.php"){
            $mi8_l2 = "active-link-adm";
        }
        if($page == "blog-category.php"){
            $mi8_l3 = "active-link-adm";
        }
    }
?>

<div class="sidebar-div-adm">
    <div class="text-center heading-dash-adm">
        <b class="force-color-white">BLINK TRADERS</b>
    </div>
    <div class="sidebar-link-div-adm">
        <div>
            <a href="{{ route('dashboardAdmin') }}" class="py-2 px-2 link-adm <?= $mi1 ?>">
                <span class="force-color-white mr-2"><i class="fas fa-home"></i></span>
                <span class="force-color-white">Dashboard</span>
            </a>
        </div>
        <div class="dropdown-adm <?= $mi2_s ?>">
            <a href="#" class="py-2 px-2 link-adm d-flex justify-content-between dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div>
                    <span class="force-color-white mr-2"><i class="fas fa-user-plus"></i></span>
                    <span class="force-color-white">User Management</span>
                </div>
                <div class="icon-r-adm">
                    <span class="force-color-white"><i class="fa fa-chevron-right icon-rotates"></i></span>
                </div>
            </a>
            <div class="dropdown-menu admin-drop-menu <?= $mi2_s ?>" aria-labelledby="navbarDropdownMenuLink">
              <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi2_l1 ?>" href="{{ route('userManagementClientAccount') }}">
                  <i class="far fa-user mr-2"></i>
                  Clients Account
                </a><br>
              <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi2_l2 ?>" href="{{ route('userManagementPromotional') }}">
                  <i class="far fa-envelope mr-2"></i>Promotional Mail
                </a>
            </div>
        </div>
        <div class="dropdown-adm <?= $mi3_s ?>">
            <a href="#" class="py-2 px-2 link-adm d-flex justify-content-between dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div>
                    <span class="force-color-white mr-2"><i class="fas fa-wrench"></i></span>
                    <span class="force-color-white">System Configuration</span>
                </div>
                <div class="icon-r-adm">
                    <span class="force-color-white"><i class="fa fa-chevron-right icon-rotates"></i></span>
                </div>
            </a>
            <div class="dropdown-menu admin-drop-menu <?= $mi3_s ?>" aria-labelledby="navbarDropdownMenuLink">
              <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi3_l1 ?>" href="{{ route('systemConfigSettings', ['adm_id' => 1]) }}">
                  <i class="fas fa-cog mr-2"></i>
                  Settings
                </a><br>
              <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi3_l2 ?>" href="{{ route('systemConfigAccountInfo', ['user' => auth()->user()->id]) }}">
                  <i class="far fa-envelope mr-2"></i>Acount information
                </a>
            </div>
        </div>
        <div class="dropdown-adm <?= $mi4_s ?>">
            <a href="#" class="py-2 px-2 link-adm d-flex justify-content-between dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div>
                    <span class="force-color-white mr-2"><i class="far fa-money-bill-alt"></i></span>
                    <span class="force-color-white">Deposit System</span>
                </div>
                <div class="icon-r-adm">
                    <span class="force-color-white"><i class="fa fa-chevron-right icon-rotates"></i></span>
                </div>
            </a>
            <div class="dropdown-menu admin-drop-menu <?= $mi4_s ?>" aria-labelledby="navbarDropdownMenuLink">
              <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi4_l1 ?>" href="{{ route('depositPaymentgate') }}">
                  <i class="far fa-user mr-2"></i>
                  Payment gateways
                </a><br>
              <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi4_l2 ?>" href="{{ route('depositLog') }}">
                  <i class="far fa-envelope mr-2"></i>Deposit logs
                </a><br>
                <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi4_l3 ?>" href="#">
                  <i class="far fa-user mr-2"></i>
                  Pending deposits
                </a><br>
              <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi4_l4 ?>" href="#">
                  <i class="far fa-envelope mr-2"></i>Approved deposits
                </a><br>
                <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi4_l5 ?>" href="#">
                  <i class="far fa-envelope mr-2"></i>Declined deposits
                </a>
            </div>
        </div>
        <div class="dropdown-adm <?= $mi5_s ?>">
            <a href="#" class="py-2 px-2 link-adm d-flex justify-content-between dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div>
                    <span class="force-color-white mr-2"><i class="fas fa-wrench"></i></span>
                    <span class="force-color-white">Withdraw System</span>
                </div>
                <div class="icon-r-adm">
                    <span class="force-color-white"><i class="fa fa-chevron-right icon-rotates"></i></span>
                </div>
            </a>
            <div class="dropdown-menu admin-drop-menu <?= $mi5_s ?>" aria-labelledby="navbarDropdownMenuLink">
              <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi5_l1 ?>" href="{{ route('withdrawLog') }}">
                  <i class="fas fa-cog mr-2"></i>
                  Withdraw log
                </a><br>
              <a class="force-color-white ml-4 py-1 px-2 small-font-size" href="#">
                  <i class="far fa-envelope mr-2"></i>Unpaid withdraw
                </a><br>
                <a class="force-color-white ml-4 py-1 px-2 small-font-size" href="#">
                  <i class="fas fa-cog mr-2"></i>
                  Approved withdraw
                </a><br>
              <a class="force-color-white ml-4 py-1 px-2 small-font-size" href="#">
                  <i class="far fa-envelope mr-2"></i>Declined withdraw
                </a>
            </div>
        </div>
        <div class="dropdown-adm <?= $mi9_s ?>">
            <a href="#" class="py-2 px-2 link-adm d-flex justify-content-between dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div>
                    <span class="force-color-white mr-2"><i class="fas fa-wrench"></i></span>
                    <span class="force-color-white">Investment</span>
                </div>
                <div class="icon-r-adm">
                    <span class="force-color-white"><i class="fa fa-chevron-right icon-rotates"></i></span>
                </div>
            </a>
            <div class="dropdown-menu admin-drop-menu <?= $mi9_s ?>" aria-labelledby="navbarDropdownMenuLink">
              <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi9_l1 ?>" href="{{ route('investPlan') }}">
                  <i class="fas fa-cog mr-2"></i>
                  Plan
                </a><br>
              <a class="force-color-white ml-4 py-1 px-2 small-font-size" href="#">
                  <i class="far fa-envelope mr-2"></i>Completed
                </a><br>
                <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi9_l2 ?>" href="{{ route('investPlanTransact') }}">
                  <i class="fas fa-cog mr-2"></i>
                  Pending
                </a><br>
            </div>
        </div>
        <div>
            <a href="{{ route('masterclassAdmin') }}" class="py-2 px-2 link-adm <?= $mi6 ?>">
                <span class="force-color-white mr-2"><i class="fas fa-home"></i></span>
                <span class="force-color-white">Masterclass</span>
            </a>
        </div>
        <div>
            <a href="{{ route('copyTrade') }}" class="py-2 px-2 link-adm <?= $mi7 ?>">
                <span class="force-color-white mr-2"><i class="fas fa-home"></i></span>
                <span class="force-color-white">Copy Trade</span>
            </a>
        </div>
        <div class="dropdown-adm <?= $mi8_s ?>">
            <a href="#" class="py-2 px-2 link-adm d-flex justify-content-between dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div>
                    <span class="force-color-white mr-2"><i class="fas fa-wrench"></i></span>
                    <span class="force-color-white">News Section</span>
                </div>
                <div class="icon-r-adm">
                    <span class="force-color-white"><i class="fa fa-chevron-right icon-rotates"></i></span>
                </div>
            </a>
            <div class="dropdown-menu admin-drop-menu <?= $mi8_s ?>" aria-labelledby="navbarDropdownMenuLink">
              <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi8_l1 ?>" href="{{ route('blogPostNew') }}">
                  <i class="fas fa-pencil-alt mr-2"></i>
                    New post
                </a><br>
                <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi8_l2 ?>" href="{{ route('blogArticle') }}">
                  <i class="far fa-newspaper mr-2"></i>
                    Articles
                </a><br>
                <a class="force-color-white ml-4 py-1 px-2 small-font-size <?= $mi8_l3 ?>" href="{{ route('blogCategory') }}">
                  <i class="fas fa-bars mr-2"></i>
                    Categories
                </a><br>
            </div>
        </div>
    </div>
</div>
