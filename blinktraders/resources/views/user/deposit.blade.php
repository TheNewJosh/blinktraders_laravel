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
                        @if ($paymentGateway->count())
                          @foreach ($paymentGateway as $pgw)
                            <div class="amount-span-border px-4">
                                <a href="{{ route('depositTransact', ['payment_id' => $pgw->id]) }}" class="force-bg-white justify-space-between depost-px-4">
                                    <div class="row">
                                        <div class="mr-3">
                                            <img src="{{ asset('img/payment-gateway') }}/{{$pgw->upload_icon}}" class="coin-icon">
                                        </div>
                                        <div class="">
                                            <h4 class="force-color-black big-font-size">{{$pgw->name}}</h4>
                                            <span class="small-font-size force-color-black">
                                                ${{$pgw->price}}
                                            </span>
                                            @if($pgw->change < 0)
                                            <span class="force-color-red">
                                                
                                                    {{$pgw->change}}%
                                            </span>
                                            @endif
                                            @if($pgw->change > 0)
                                            <span class="force-color-green">
                                                
                                                    +{{$pgw->change}}%
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="">
                                        <span><i class="fa fa-chevron-right icon-coin-angle mt-2"></i></span>
                                    </div>
                                </a>
                            </div> 
                            @endforeach
                        @endif                          
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        @include('user.layouts.footer')
        
        
        
    </body>
</html>