<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "kyc.php"; 
            $page_title = "KYC";
            $mi1 = $mi2 = $mi3 = $mi4 = $mi5 = $mi6 = $mi7 = $mi8 = "";
            $smi1 = $smi2 = $smi3 = $smi4 = $smi5 = "";
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
                        Your account is not yet verified
                        <span class="force-bg-red px-2 py-2 small-font-size border-curve-5">UNVERIFIED</span>
                    </h4>
                    <div class="mt-5 mb-5 deposit-res-px-5">
                        <div class="force-bg-gray master-deposit-div-wk px-4 py-2">
                            <h6 class="force-color-black">Please complete your KYC to upgrade your account for better transactions.</h6>
                            <div class="row px-2 py-5">
                                <div class="col col-lg-4 mt-2">
                                    <a href="{{ route('kycSnapshortIntro') }}" class="card no-border-line card-a-c">
                                      <div class="card-body text-center">
                                          <h5 class="force-color-black">Step 1</h5><br>
                                          <span class="force-color-blue invest-fa-icon">
                                            <i class="fas fa-user-plus"></i>
                                          </span><br><br><br>
                                        <h5 class="force-color-black">Snapshot</h5>
                                      </div>
                                    </a>
                                </div>
                                <div class="col col-lg-4 mt-2">
                                    <div class="card no-border-line">
                                      <div class="card-body text-center">
                                          <h5 class="force-color-black">Step 2</h5><br>
                                          <span class="force-color-blue invest-fa-icon">
                                            <i class="far fa-file"></i>
                                          </span><br><br><br>
                                        <h5 class="force-color-black">Upload Document</h5>
                                      </div>
                                    </div>
                                </div>
                                <div class="col col-lg-4 mt-2">
                                    <div class="card no-border-line">
                                      <div class="card-body text-center">
                                          <h5 class="force-color-black">Step 3</h5><br>
                                          <span class="force-color-blue invest-fa-icon">
                                            <i class="fas fa-home"></i>
                                          </span><br><br><br>
                                        <h5 class="force-color-black">Proof Of Address</h5>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary px-5">Start</button>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        @include('user.layouts.footer')
        
        
        
    </body>
</html>