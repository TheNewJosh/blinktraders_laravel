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
            <section class="hero-banner-head" style="background-image: url({{ asset('img/blog')}}/{{$blog->thumbnail}});"></section>
            <div class="hero-banner-head-mobile" style="background-image: url({{ asset('img/blog')}}/{{$blog->thumbnail}});"></div>
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
                      <div class="main-div">
                          <h2 class="force-color-black">{{ $blog->title}}</h2>
                          {!!html_entity_decode($blog->content)!!}
                       </div>
                  </div>
              </div>
            </div>
        </main>
        
        @include('layouts.footer')
        
        
        
    </body>
</html>