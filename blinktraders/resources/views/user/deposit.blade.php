<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <?php 
            $page = "deposit.php"; 
            $page_title = "Deposit";
            $mi1 = $mi2 = $mi3 = $mi4 = $mi5 = $mi6 = $mi7 = $mi8 = "";
            $smi2 = "footer-sticky-menu-active";
            $smi1 = $smi3 = $smi4 = $smi5 = "";
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
                    <h4 class="force-color-black force-small-text">Select deposit method</h4>
                    <div class="mb-5 deposit-res-px-5">
                        <div class="master-deposit-div-wk">
                            <div class="amount-span-border px-4">
                                <a href="{{ route('depositTransact') }}" class="force-bg-white justify-space-between depost-px-4">
                                    <div class="row">
                                        <div class="mr-3">
                                            <img src="{{ asset('img/payment-gateway/icon_agric1638313563.9616.png') }}" class="coin-icon">
                                        </div>
                                        <div class="">
                                            <h4 class="force-color-black big-font-size">Bitcoin</h4>
                                            <span class="small-font-size force-color-black">
                                            02-02-2002
                                            </span>
                                            <span class="force-color-green">
                                                -16.4555
                                            </span>
                                        </div>
                                    </div>
                                    <div class="">
                                        <span><i class="fa fa-chevron-right icon-coin-angle mt-2"></i></span>
                                    </div>
                                </a>
                            </div>                           
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        @include('user.layouts.footer')
        
        
        
    </body>
</html>