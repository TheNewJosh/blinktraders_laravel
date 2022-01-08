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
            @if ($blog->count())
                @foreach ($blog as $blg)
                    <div class="col-lg-4 col-xs-12">
                        <img src="{{asset('img/blog') }}/{{$blg->thumbnail}}" class="blog-img-banner" />
                        <div class="blog-content-text">
                            <div class="justify-row-space mt-2">
                                <span>{{$blg->updated_at->diffForHumans()}}</span>
                                <span class="blog-left-tag">{{$blg->title}}</span>
                            </div>
                            <div class="mt-4">
                                {{$blg->content}}
                                <br><a href="{{ route('blogRead', ['article_id' => $blg->id])}}" class="">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            </div>
        </main>
        
        @include('layouts.footer')
        
        
        
    </body>
</html>