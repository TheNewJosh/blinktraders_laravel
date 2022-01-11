<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "user-management-promotional.php"; 
            $page_title = "User Management"; 
        ?>
        @include('layouts.meta')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                <div class="main-content-body force-bg-white px-1 pt-2 pb-5" id="mrda-margin-move">
                    <h4 class="big-font-size tabel-heading-h">Promotional email</h4>
                    <div class="mt-4 px-5 py-4">
                        <div class="row">
                            <span class="col col-lg-2">To</span>
                            <span class="col col-lg-10">
                                <select class="js-example-basic-multiple pro-select-input" name="states[]" multiple="multiple">
                                @if ($user->count())
                                    @foreach ($user as $usr)
                                  <option value="{{$usr->id}}">{{$usr->email}}</option>
                                  @endforeach
                                @endif
                                </select>
                                <div class="pro-select-input"></div>
                            </span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-2">Subject</span>
                            <span class="col col-lg-10"><input type="text" class="pro-select-input" /></span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-2">Body</span>
                            <span class="col col-lg-10"><textarea type="text" class="pro-select-input"></textarea> </span>
                        </div>
                        <div class="mt-2">
                            <button type="button" class="btn btn-primary float-right">Send <i class="fas fa-paper-plane"></i></button>
                        </div>
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
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
        </script>
    </body>
</html>