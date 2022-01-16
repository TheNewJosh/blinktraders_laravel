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
                    
                    <div class="mt-5 mb-5 deposit-res-px-5">
                        <div class="force-bg-gray master-deposit-div-wk px-4 py-2">
                            <div class="text-center"><br><br><br>
                                <h2>Congratulations</h2><br>
                                <p>Your KYC has been submited sucessfully. Confirmation message will be sent to you in due time</p>
                                <br><a href="{{ route('dashboard')}}" class="btn btn-primary px-5">Go to dashboard</a><br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>


        @include('user.layouts.footer')

    </body>
</html>