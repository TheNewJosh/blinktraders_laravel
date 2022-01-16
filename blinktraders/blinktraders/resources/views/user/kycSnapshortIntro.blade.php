<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "kyc-snapshort-intro.php"; 
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
                    @if(auth()->user()->kyc_verify == 0)
                    <h4 class="force-color-black force-small-text">
                        Your account is not yet verified
                        <span class="force-bg-red px-2 py-2 small-font-size border-curve-5">UNVERIFIED</span>
                    </h4>
                    @endif
                    @if(auth()->user()->kyc_verify == 1)
                    <h4 class="force-color-black force-small-text">
                        Your account is verified
                        <span class="force-bg-green px-2 py-2 small-font-size border-curve-5">VERIFIED</span>
                    </h4>
                    @endif
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
                            <div class="row px-2 py-5">
                                <div class="col col-lg-6">
                                    <div class="mb-4">
                                        <input type="checkbox" checked />
                                        <span class="big-font-size ml-2">Keep your face visible</span><br>
                                        <span class="small-font-size">All parts of your face should be visible to te camera.</span>
                                    </div>
                                    <div class="mb-4">
                                        <input type="checkbox" checked />
                                        <span class="big-font-size ml-2">No head or face coverings</span><br>
                                        <span class="small-font-size">If you have glasses, a scarf or any other covering on, please remove.</span>
                                    </div>
                                    <div class="mb-4">
                                        <input type="checkbox" checked />
                                        <span class="big-font-size ml-2">Use good lighting</span><br>
                                        <span class="small-font-size">Please take your video in an area that isn’t dark.</span>
                                    </div>
                                </div>
                                <div class="col col-lg-6">
                                    <img src="{{ asset('img/phone-short.png') }}" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                            <a href="{{ route('kycSnapshortTake') }}" class="btn btn-primary px-5">Take snapshot</a>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        @include('user.layouts.footer')
        
    </body>
</html>