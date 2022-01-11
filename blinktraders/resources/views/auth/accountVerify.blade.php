<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders </title>
        @include('layouts.meta') 
        <?php
            $page = "account.php";
        ?>
    </head>
    <body>   
        @include('layouts.header')
        <main class="main">
            <div class="bg-img-page">
                <section class="min-vh-100">
                    <div id="cover-caption">
                        <div class="container">
                            <div class="row text-white">
                                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4">
                                    <div class="cover">
                                        <h2 class="force-color-black">Account verification</h2>
                                        <p class="force-color-black"><br>A verification code has been sent to your email.<br>Check your spam if you did not see the inbox.<br>Input code to verify your email address <br><br></p>
                                        
                                    </div>
                                    <div class="px-2">
                                        <form action="{{ route('accountVerify') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="user_id" <?php if(isset($_GET['id'])){ ?> value="<?= $_GET['id'] ?>" <?php }else{ ?> value="{{ old('user_id') }}" <?php } ?> >
                                            <div class="form-group">
                                                <label class="force-color-black"><b>verification code</b></label>
                                                <input type="email" name="verify_code" class="form-control input-outline" value="{{ old('verify_code') }}" required>
                                                @error('verify_code')
                                                    <span class="force-color-red">{{ $message }}</span>
                                                @enderror
                                                <br>
                                            </div>
                                            <div class="cover">
                                                <button type="submit" class="btn btn-primary btn-lg text-center" name="submit_login_btn">verify</button>
                                                <p>
                                                    <br>
                                                    <span class="force-color-pale-white">Don't have an account? </span>
                                                    <span><a href="{{ route('register') }}" class="force-color-blue">Register</a></span><br>
                                                    <span class="force-color-pale-white"><a href="#">Forgot Password?</a></span>
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        
        @include('layouts.footer')
        
        <script>            
            @if($errors->any())
                window.onload = (event) => {
                bs4pop.notice('Error Occur', {position: 'topright', type: 'danger'})
                };
            @endif

            @if(session('statusLoginSuccess'))
                window.onload = (event) => {
                bs4pop.notice('Successfully Register', {position: 'topright', type: 'success'})
                };
            @endif
        </script>
        
    </body>
</html>