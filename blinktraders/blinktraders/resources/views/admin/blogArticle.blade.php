<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "blog-article.php"; 
            $page_title = "Blog"; 
            $type = ['Unpublish', 'Publish']
        ?>
        @include('layouts.meta')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" />
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
                <div class="main-content-body force-bg-white px-1 py-3" id="mrda-margin-move">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>View</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($blog->count())
                            @foreach ($blog as $blg)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset('img/blog') }}/{{$blg->thumbnail}}" class="force-img-avatar-table-icon" /></td>
                                <td>{{$blg->title}}</td>
                                <td>{{$blg->blogCategory->name}}</td>
                                <td>23</td>
                                <td>{{$type[$blg->status]}}</td>
                                <td>{{$blg->created_at->toFormattedDateString()}}</td>
                                <td>{{$blg->updated_at->diffForHumans()}}</td>
                                <td>
                                    <div class="dropdown-adm">
                                        <a href="#" class="link-adm dropdown-toggle text-center" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="icon-r-adm">
                                                <span class="force-color-black">
                                                    <i class="fa fa-chevron-right icon-rotates"></i>
                                                </span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu admin-drop-menu-tb" aria-labelledby="navbarDropdownMenuLink">
                                            @if($blg->status == 1)
                                            <form action="{{ route('blogArticle') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$blg->id}}">
                                                <input type="hidden" name="status" value="0">
                                                <button type="submit" class="button-deposit-log"><i class="fas fa-cog mr-2"></i> Unpublish</button>
                                            </form>
                                            @endif

                                            @if($blg->status == 0)
                                            <form action="{{ route('blogArticle') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$blg->id}}">
                                                <input type="hidden" name="status" value="1">
                                                <button type="submit" class="button-deposit-log"><i class="fas fa-cog mr-2"></i> publish</button>
                                            </form>
                                            @endif

                                          <a class="force-color-black" href="{{ route('blogPostNewUpdate', ['blog_id' => $blg->id]) }}">
                                              <i class="far fa-envelope mr-2"></i>Edit
                                            </a><br>
                                            <form action="{{ route('blogArticleDestroy') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$blg->id}}">
                                                <input type="hidden" name="status" value="1">
                                                <button type="submit" class="button-deposit-log"><i class="fas fa-cog mr-2"></i> Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type="application/javascript"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js" type="application/javascript"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );

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
            
            @if(session('statusSuccessDelete'))
                window.onload = (event) => {
                   bs4pop.notice('Article Deleted', {position: 'topright', type: 'success'})
                };
            @endif
        </script>
        
    </body>
</html>