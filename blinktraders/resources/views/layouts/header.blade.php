<?php    
    $page = basename($_SERVER['PHP_SELF']); 
    
    $mi1 = $mi2 = $mi3 = $mi4 = "";
    
    if($page == "index.php"){
        $mi1 = "active-nav";
    }

    if($page == "blog.php"){
        $mi2 = "active-nav";
    }

    if($page == "advance-search.php"){
        $mi3 = "active-nav";
    }

    if($page == "register.php"){
        $mi4 = "active-nav";
    }
?>
    <nav class="navbar navbar-expand-lg fixed-top nav-bg">
        <div>
            <a class="navbar-brand" href="index.php"><img src="{{ asset('img/logo.png') }}" alt="BlinkTrader" /> <span class="logo-text">BlinkTraders</span></a>
        </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars fa-1x force-color-blue"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="hamburger-menu-head d-flex d-lg-none">
        <div class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-times force-color-white"></i>
        </div>
        <div class="ml-auto">
            <a href="#"><i class="fas fa-phone force-color-white mr-2"></i></a>
            <a href="#"><i class="far fa-envelope force-color-white ml-2"></i></a>
        </div>
        </div>
        <ul class="navbar-nav ml-auto">
        <li class="nav-item nav-item-border-b">
            <a class="nav-link <?= $mi1 ?>" href="/">
                <span class="nav-link-text">home</span>
            </a>
        </li>
        <li class="nav-item nav-item-border-b dropdown">
            <a class="nav-link <?= $mi2 ?> dropdown-toggle d-flex justify-content-between" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="nav-link-text">blog</span>
                <span class="nav-link-text"><i class="fa fa-chevron-down force-color-white icon-rotates d-lg-none ml-auto" aria-hidden="true"></i></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Blog</a>
            <a class="dropdown-item" href="blog.php">investment</a>
            <a class="dropdown-item" href="#">trading</a>
            <a class="dropdown-item" href="#">motivation</a>
            </div>
        </li>
        <li class="nav-item nav-item-border-b dropdown">
            <a class="nav-link <?= $mi3 ?> dropdown-toggle d-flex justify-content-between" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="nav-link-text">service</span>
                <span class="nav-link-text"><i class="fa fa-chevron-down force-color-white icon-rotates d-lg-none" aria-hidden="true"></i></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="service-crypto-investment.php">crypto investment</a>
            <a class="dropdown-item" href="service-forex.php">forex trading</a>
            <a class="dropdown-item" href="service-stock.php">stock trading</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link <?= $mi4 ?> dropdown-toggle d-flex justify-content-between" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="nav-link-text">account</span>
                <span class="nav-link-text"><i class="fa fa-chevron-down force-color-white icon-rotates d-lg-none ml-auto" aria-hidden="true"></i></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ route('login') }}">login</a>
            <a class="dropdown-item" href="{{ route('register') }}">register</a>
            </div>
        </li>
        </ul>
    </div>
    </nav>
