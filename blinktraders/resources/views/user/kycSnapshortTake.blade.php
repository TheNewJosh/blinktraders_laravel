<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "kyc-snapshort-take.php"; 
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
                            <div class="d-flex justify-content-between">
                                <span class="force-color-black big-font-size">
                                    Snapshot
                                </span>
                                <span class="force-color-blue small-font-size">
                                    Step 1
                                </span>
                            </div>
                            <div class="row px-5 py-2">
                                <div class="text-center">
                                    <span class="big-font-size">
                                        Hold your phone at eye level and make sure your face is entered in the oval shape for the snapshot
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary px-5">Take snapshot</button>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        @include('user.layouts.footer')
        
        
        
    </body>
</html>