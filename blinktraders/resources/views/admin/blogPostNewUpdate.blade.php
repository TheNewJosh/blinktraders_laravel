<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "blog-post-new-update.php"; 
            $page_title = "Blog"; 
        ?>
        @include('layouts.meta')
    </head>
    <body class="body-main-adm">
        <main class="main-dash row d-flex justify-content-between">
            <section class="col col-lg-1" id="toggle-bar-menu-area">
            @include('admin.layouts.sidebar')
            </section>
            <section class="col col-lg-11">
                <div class="fixed-top top-area-div">
                    <div class="head-border-bottom-ads"></div>
                    <div class="heading-adm-fixed" id="toggle-bar-menu-head">
                    @include('admin.layouts.header')
                    </div>
                </div>
                <form action="{{ route('blogPostNewUpdateStore') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$blog_id->id}}">
                <input type="hidden" name="img_hd" value="{{$blog_id->thumbnail}}">
                <div class="main-content-body force-bg-white px-1 pt-2 pb-5"  id="mrda-margin-move">
                    
                    <h4 class="big-font-size tabel-heading-h">Edit post</h4>
                    
                    <div class="mt-4 px-5 py-4">
                        <div class="row">
                            <span class="col col-lg-2">Title:</span>
                            <span class="col col-lg-10"><input type="text" class="pro-select-input" name="title" value="{{$blog_id->title}}" /><br>
                <span class="force-color-red"></span></span>
                        </div>
                        <div class="row mt-4">
                            <span class="col col-lg-2">Description:</span>
                            <span class="col col-lg-10"><input type="text" class="pro-select-input" name="short_detail" value="{{$blog_id->short_detail}}" /><br>
                <span class="force-color-red"></span></span>
                        </div>
                        <div class="row mt-4">
                            <span class="col col-lg-2">Category: </span>
                            <span class="col col-lg-10">
                                <select class="pro-select-input" name="category_id">
                                @if ($blogCategory->count())
                                    @foreach ($blogCategory as $blc)
                                        <option value="{{$blc->id}}" @if($blog_id->blog_category_id == $blc->id) selected @endif >{{$blc->name}}</option>
                                    @endforeach
                                @endif
                                </select>
                <span class="force-color-red"></span>
                              </span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-2">Thumbnail:</span>
                            <span class="col col-lg-10"><input type="file" class="pro-select-input" name="thumbnail" accept="jpg, jpeg, png, svg, gif" />
                            <br>
                <span class="force-color-red"></span>
                        </span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-2">Content</span>
                            <span class="col col-lg-10">
                              <div class="form-group">
                                 <textarea id="textarea" name="content">{{$blog_id->content}}</textarea>
                              </div>
                <span class="force-color-red"></span>
                            </span>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary float-right" name="send_blog_btn">Send <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </form>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        <script src="https://cdn.tiny.cloud/1/0bafku73iwl16lvy29rbw1ndewfrm8fc90bly3tnv1s8nqoz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
            selector: 'textarea',
            });

            @if(session('statusError'))
                window.onload = (event) => {
                   bs4pop.notice('Input Error', {position: 'topright', type: 'danger'})
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