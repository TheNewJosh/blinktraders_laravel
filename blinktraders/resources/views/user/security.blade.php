<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <?php 
            $page = "security.php"; 
            $page_title = "Security";
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
                    <div class="deposit-res-px-5">
                        <p class="force-color-black force-small-text">Create PIN for transactions</p>
                        <div class="force-bg-gray master-deposit-div-wk px-4 py-2">
                            <form action="{{ route('securityPin') }}" method="post" enctype="multipart/form-data" class="pr-5">
                            @csrf
                              <div class="form-group">
                                <label for="exampleInputEmail1">PIN</label>
                                <input type="password" class="form-control border border-dark" placeholder="Enter Pin" name="pin" value="">
                                @error('pin')
                                    <span class="force-color-red">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Confirm PIN</label>
                                <input type="password" class="form-control border border-dark" placeholder="Confirm Pin" name="pin_confirmation" value="">
                                @error('confirm_pin')
                                    <span class="force-color-red">{{ $message }}</span>
                                @enderror
                              </div>
                              <button type="submit" class="btn btn-primary" name="submit_pin_btn">Create PIN</button>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5 mb-5 deposit-res-px-5">
                        <p class="force-color-black force-small-text">Edit Password</p>
                        <div class="force-bg-gray master-deposit-div-wk px-4 py-2">
                            <form action="{{ route('securityPassword') }}" method="post" enctype="multipart/form-data" class="pr-5">
                            @csrf
                              <div class="form-group">
                                <label for="exampleInputEmail1">Old Password</label>
                                <input type="password" class="form-control border border-dark" placeholder="Enter Old password" name="old_password" value="">
                                @error('old_password')
                                    <span class="force-color-red">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">New Password</label>
                                <input type="password" class="form-control border border-dark" placeholder="New Password" name="password" value="">
                                @error('password')
                                    <span class="force-color-red">{{ $message }}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" class="form-control border border-dark" placeholder="Confirm Password" name="password_confirmation" value="">
                                @error('confirm_password')
                                    <span class="force-color-red">{{ $message }}</span>
                                @enderror
                              </div>
                              <button type="submit" class="btn btn-primary" name="submit_password_btn" >Update Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        @include('user.layouts.footer')
        
        <script>
            @if(session('statusError'))
                $(window).on('load', function() {
                    $('#myModal').modal('show');
                });
            
                window.onload = (event) => {
                   bs4pop.notice('Input error', {position: 'topright', type: 'danger'})
                };
            @endif

            @if(session('statusSuccess'))
                window.onload = (event) => {
                   bs4pop.notice('Saved', {position: 'topright', type: 'success'})
                };
            @endif
        </script>
        
    </body>
</html>