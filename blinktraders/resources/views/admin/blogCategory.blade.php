<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "blog-category.php"; 
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
                <div class="main-content-body"  id="mrda-margin-move">
                    <div class="force-bg-white px-1 pt-2 pb-5 mb-5">
                        <h4 class="big-font-size tabel-heading-h">Create Category</h4>
                        <div class="mt-4 px-5 py-4">
                            <div class="row">
                                <span class="col col-lg-2">Category:</span>
                                <span class="col col-lg-10"><input type="text" class="pro-select-input" /></span>
                            </div>
                            <div class="mt-2">
                                <button type="button" class="btn btn-primary float-right">Submit <i class="fas fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="force-bg-white px-1 py-3">
                        <div class="row d-flex justify-content-between px-4 py-2">
                            <h4 class="big-font-size">Category</h4>
                        </div>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>INVESTING</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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