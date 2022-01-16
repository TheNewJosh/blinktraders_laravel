<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <?php 
            $page = "withdraw-transact.php"; 
            $page_title = "Withdraw";
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
                    <h4 class="force-color-black text-center force-small-text">
                        <img src="{{ asset('img/payment-gateway') }}/{{$transactions_id->paymentGateway->upload_icon}}" class="coin-icon" /> {{$transactions_id->paymentGateway->name}}
                    </h4>
                    <div class="mt-5 mb-5 deposit-res-px-5">
                        <div class="master-deposit-div-wk">
                            <div class="alert-box" style="font-size:10px;">
                             <i class="fas fa-exclamation-triangle mr-2 force-color-green"></i> TO LINK / SYNCHRONIZE YOUR PAYOUT WALLET ADDRESS FOR AUTOMATED PAYOUTS, YOU HAVE TO PAY 20%({{$charge}}USD) CHARGE ON YOUR TRADING PROFIT TO THIS WALLET ADDRESS.
                            </div>
                            <br><br>
                            <div class="text-center">
                                <img src="{{ asset('img/payment-gateway') }}/{{$transactions_id->paymentGateway->upload_qr_img}}" class="backcode-size-img" />
                            </div>
                            <div class="text-center">
                                <div>
                                    <br><br>
                                    <span class="big-font-size text-left">Wallet address</span><br>
                                    
                                    <span>
                                        <input type="text" value="{{$transactions_id->paymentGateway->wallet_address}}" id="inputfield"  class="input-withd" readonly />
                                    </span>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="button" onclick="getTextCopied()" id="buttontext" class="btn btn-outline-primary mr-2 mt-4">Copy address</button>
                                <button type="button" id="shareButton" class="btn btn-primary mt-4 display-none-area-desk">Share address</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        @include('user.layouts.footer')
        
        <script>
            function getTextCopied() {
              // body...
              var inputfield=document.getElementById('inputfield');

              inputfield.select();
              inputfield.setSelectionRange(0,999999);

              document.execCommand("copy");
              document.getElementById('buttontext').innerHTML="Copied";
             }
        </script>
        <script>
            var shareButton = document.querySelector('#shareButton');
            shareButton.addEventListener('click', () =>{
                if(navigator.share){
                    navigator.share({
                        title: `${title}`,
                        url: `${url}`
                    }).then(() =>{
                        console.log("Thanks")
                    }).catch(console.error)
                }else{
                    console.log("Desktop")
                }
            })
        </script>
        <script>
            window.onload = (event) => {
                bs4pop.notice('Transaction Drafted', {position: 'topright', type: 'success'})
            };
        </script>
    </body>
</html>