<style>
    body{
        font-family: 'Lato', sans-serif;
    }
</style>
<div class="d-flex justify-content-between mt-4 display-none-area">
    <div class="ml-5"><h2 class="force-color-black"><?= $page_title ?></h2></div>
    <div class="nav-item nav-item-border-b dropdown">
        <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="dashnav-link-text"><i class="far fa-user-circle force-color-black"></i></span>
        </a>
        <div class="dropdown-menu dash-head-drop" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item force-color-pale-white force-color-hoer" href="{{ route('account') }}">Account</a>
          <a class="dropdown-item force-color-red force-color-hoer" href="{{ route('logout', ['user_id' => auth()->user()->id]) }}">Logout</a>
        </div>
      </div>
</div>

<nav class="navbar navbar-expand-lg fixed-top nav-bg display-none-area-desk account-nav-div">
    <div>
        <a class="navbar-brand" href="/"><span class="logo-text force-color-white"><?= $page_title ?></span></a>
    </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="fas fa-bars fa-1x force-color-white"></span>
  </button>
  <div class="collapse navbar-collapse force-bg-white drop-height-anyone" id="navbarNavDropdown">
    <div class="hamburger-menu-head d-flex d-lg-none force-bg-white border-line-bottom">
        <div>
            <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.png') }}" alt="BlinkTrader" /> <span class="logo-text">BlinkTraders</span></a>
        </div>
      <div class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-times force-color-blue"></i>
      </div>
    </div>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item nav-item-border-b">
        <a class="nav-link force-color-black" href="{{ route('masterclass') }}">
            <span class="nav-link-text"><i class="fas fa-user-graduate mr-4"></i>Masterclass</span>
        </a>
      </li>
         <li class="nav-item nav-item-border-b">
        <a class="nav-link force-color-black" href="{{ route('security') }}">
            <span class="nav-link-text"><i class="fas fa-shield-alt mr-4"></i>Security</span>
        </a>
      </li>
        <li class="nav-item nav-item-border-b">
        <a class="nav-link force-color-black" href="{{ route('kyc') }}">
            <span class="nav-link-text"><i class="far fa-address-card mr-4"></i>KYC</span>
        </a>
      </li>
      <li class="nav-item nav-item-border-b">
        <a class="nav-link force-color-black" href="{{ route('account') }}">
            <span class="nav-link-text"><i class="fas fa-exchange-alt mr-4"></i>Account</span>
        </a>
      </li>
      <li class="nav-item nav-item-border-b">
        <a class="nav-link force-color-red" href="{{ route('logout', ['user_id' => auth()->user()->id]) }}">
            <span class="nav-link-text"><i class="fas fa-sign-out-alt mr-4"></i>Logout</span>
        </a>
      </li>
    </ul>
  </div>
</nav>