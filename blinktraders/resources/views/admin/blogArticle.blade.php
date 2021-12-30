<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "blog-article.php"; 
            $page_title = "Blog"; 
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
                            <tr>
                                <td>1</td>
                                <td><img src="../../assets/img/banner1.png" class="force-img-avatar-table-icon" /></td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
                                <td>$320,800</td>
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
                                          <a class="force-color-black" href="">
                                              <i class="fas fa-cog mr-2"></i>
                                              Unpublish
                                            </a><br>
                                          <a class="force-color-black" href="{{ route('blogPostNewUpdate') }}">
                                              <i class="far fa-envelope mr-2"></i>Edit
                                            </a><br>
                                            <a class="force-color-black" href="">
                                              <i class="far fa-envelope mr-2"></i>Delete
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
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
        </script>
        
    </body>
</html>