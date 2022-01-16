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
            <section class="hero-banner-head" ></section>
            <div class="hero-banner-head-mobile" ></div>
            
            <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
<coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,litecoin,ripple,tether,solana,dogecoin,bitcash,tron" currency="usd" background-color="#090101" locale="en" font-color="#5f3ffd"></coingecko-coin-price-marquee-widget>

            <div class="blog-content-div">
              <div class="row">
                  <div class="col-lg-4"  id="sticky-sidebar">
                  @if ($blogCategory->count())
                    @foreach ($blogCategory as $blc)
                    <div class="pr-5">
                        <a href="{{ route('blog', ['category_id' => $blc->id]) }}" class="aside-mrnu-div border-line-bottom d-flex justify-content-between">
                            <span>{{$blc->name}}</span>
                            <span><i class="fa fa-chevron-right"></i></span>
                        </a>
                    </div>
                    
                        @endforeach
                    @endif
                    
                  </div>
                  
                  
                  <div class="col-lg-8 col-xs-12" id="main">
                      <div class="blog-img-banner1" style="background-image: url({{ asset('img/blog')}}/{{$blog->thumbnail}});"></div>
                      <div class="blog-img-banner1-mobile" style="background-image: url({{ asset('img/blog')}}/{{$blog->thumbnail}});"></div>
                      <div class="main-div">
                          <h2 class="blog-head-text">{{ $blog->title}}</h2>
                          {!!html_entity_decode($blog->content)!!}
                       </div>
                  </div>
                  
              </div>
              
            </div>
            <script src="https://widgets.coingecko.com/coingecko-coin-price-static-headline-widget.js"></script>
<coingecko-coin-price-static-headline-widget  coin-ids="bitcoin,ethereum,ripple,binancecoin,solana" currency="usd" locale="en" background-color="#121111"></coingecko-coin-price-static-headline-widget>
        </main>
        
        @include('layouts.footer')
        
        
        
    </body>
</html>