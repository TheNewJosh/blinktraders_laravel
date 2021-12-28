<!DOCTYPE html>
<html lang="en">
    <head>
        @extends('layouts.meta') 
    </head>
    <body>   
        @extends('layouts.header')
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
                                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="">
                                            <div class="form-group">
                                                <label class="force-color-black">Email Address</label>
                                                <input type="email" name="username_email_phone" class="form-control input-outline" value="<?= $username_email_phone ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="force-color-black">Password</label>
                                                <input type="password" name="password" class="form-control input-outline" value="<?= $password ?>" required>
                                            </div>
                                            <div class="cover">
                                                <button type="submit" class="btn btn-primary btn-lg text-center" name="submit_login_btn">Login</button>
                                                <p>
                                                    <br>
                                                    <span class="force-color-pale-white">Don't have an account? </span>
                                                    <span><a href="register.php" class="force-color-blue">Register</a></span><br>
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
        
        @extends('layouts.footer')
        
        <script>
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "sucess"){
                window.onload = (event) => {
                   bs4pop.notice('Account created', {position: 'topright', type: 'success'})
                };
            }
            
            <?php if($message_err != ""){ ?>
            window.onload = (event) => {
               bs4pop.notice('<?= $message_err ?>', {position: 'topright', type: 'danger'})
            };
            <?php } ?>
        </script>
        
    </body>
</html>