<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "copytrade.php"; 
            $page_title = "Copy trade"; 
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
                    <div class="row d-flex justify-content-between px-4 py-2">
                        <h4 class="big-font-size">Transaction table</h4>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>MT4 ID</th>
                                <th>Equity</th>
                                <th>MT4 Password</th>
                                <th>Broker</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($copyTrade->count())
                          {{ $i=1 }}
                          @foreach ($copyTrade as $cpt)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$cpt->user->name}}</td>
                                <td>{{$cpt->mt4bal}}</td>
                                <td>{{$cpt->mt4id}}</td>
                                <td>{{$cpt->mt4bal}}</td>
                                <td>{{$cpt->password}}</td>
                                <td>{{$cpt->broker}}</td>
                                <td>{{$cpt->status}}</td>
                                <td>{{$cpt->created_at}}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                </td>
                            </tr>
                            {{ $i++ }}
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
        </script>
        
    </body>
</html>