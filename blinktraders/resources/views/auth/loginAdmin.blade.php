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
                                        <h2 class="force-color-black">Login</h2>
                                        <p>Welcome back let's get you in.</p>
                                        <br><br>
                                    </div>
                                    <div class="px-2">
                                        <form action="{{ route('loginAdmin') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label class="force-color-black">Email Address</label>
                                                <input type="email" name="email" class="form-control input-outline" value="{{ old('email') }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="force-color-black">Password</label>
                                                <input type="password" name="password" class="form-control input-outline" value="{{ old('password') }}" required>
                                            </div>
                                            <div class="cover">
                                                <button type="submit" class="btn btn-primary btn-lg text-center" name="submit_login_btn">Login</button>
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
            @if (session('status'))
                window.onload = (event) => {
                bs4pop.notice('{{ session('status') }}', {position: 'topright', type: 'danger'})
                };
            @endif
        </script>
        
    </body>
</html>