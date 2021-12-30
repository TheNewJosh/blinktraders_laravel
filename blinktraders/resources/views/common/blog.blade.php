<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders </title>
        @include('layouts.meta') 
        <?php
            $page = "blog.php";
        ?>
    </head>
    <body>   
        @include('layouts.header')  
        <main class="main">
            <section class="hero-banner-head-blog"></section>
            <div class="hero-banner-head-mobile"></div>
            <div class="row blog-container">
                <div class="col-lg-4 col-xs-12">
                    <img src="{{ asset('img/blog-banner.png') }}" class="blog-img-banner" />
                    <div class="blog-content-text">
                        <div class="justify-row-space mt-2">
                            <span>October 12, 2021</span>
                            <span class="blog-left-tag">INVESTMENT</span>
                        </div>
                        <div class="mt-4">
                            <p class="blog-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                <br><a href="#" class="">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <img src="{{ asset('img/blog-banner.png') }}" class="blog-img-banner" />
                    <div class="blog-content-text">
                        <div class="justify-row-space mt-2">
                            <span>October 12, 2021</span>
                            <span class="blog-left-tag">INVESTMENT</span>
                        </div>
                        <div class="mt-4">
                            <p class="blog-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                <br><a href="#" class="">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <img src="{{ asset('img/blog-banner.png') }}" class="blog-img-banner" />
                    <div class="blog-content-text">
                        <div class="justify-row-space mt-2">
                            <span>October 12, 2021</span>
                            <span class="blog-left-tag">INVESTMENT</span>
                        </div>
                        <div class="mt-4">
                            <p class="blog-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                <br><a href="#" class="">Read more</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        @include('layouts.footer')
        
        
        
    </body>
</html>