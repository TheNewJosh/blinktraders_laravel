<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "system-config-account-info.php"; 
            $page_title = "System Configuration"; 
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
                <div class="main-content-body force-bg-white px-1 pt-2 pb-5" id="mrda-margin-move">
                    <h4 class="big-font-size tabel-heading-h">Account information</h4>
                    <form action="{{ route('systemConfigAccountInfoUpdate') }}" method="post" class="mt-4 px-5 py-4">
                        @csrf    
                        <input type="hidden" name="id" value="{{$user->id}}" />
                        <div class="row mt-5">
                            <span class="col col-lg-3">Username </span>
                            <span class="col col-lg-9"><input type="text" class="pro-select-input" name="username" value="{{ $user->username }}" /></span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-3">Password</span>
                            <span class="col col-lg-9"><input type="password" name="password" class="pro-select-input" /></span>
                        </div>
                           
                        <div class="mt-2">
                            <button type="submit" name="submit" class="btn btn-primary float-right">Update <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </form>
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
        <script>
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