<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "deposit-log.php"; 
            $page_title = "Deposit"; 
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
                        <h4 class="big-font-size">Deposit logs</h4>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Method</th>
                                <th>Equivalent</th>
                                <th>Reference</th>
                                <th>Charge</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>fg</td>
                                <td>vf</td>
                                <td>gh</td>
                                <td>45</td>
                                <td>fg</td>
                                <td>23</td>
                                <td>fg</td>
                                <td>r55</td>
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
                                          <a class="force-color-black" href="components/actions-aaa-table.php?aproval-deposit=yes&status=1&id=">
                                              <i class="fas fa-cog mr-2"></i>
                                              Approve request
                                            </a><br>
                                          <a class="force-color-black" href="components/actions-aaa-table.php?aproval-deposit=yes&status=2&id=">
                                              <i class="far fa-envelope mr-2"></i>Decline Request
                                            </a><br>
                                            <?php if(1 != 1){ ?>
                                            <a class="force-color-black" href="components/actions-aaa-table.php?delete-deposit=yes&id=">
                                              <i class="far fa-envelope mr-2"></i>Delete
                                            </a>
                                            <?php } ?>
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
            
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "sucess"){
                window.onload = (event) => {
                   bs4pop.notice('Transaction Processed', {position: 'topright', type: 'success'})
                }
            }
            if(msg === "sucessDel"){
                window.onload = (event) => {
                   bs4pop.notice('Transaction Deleted', {position: 'topright', type: 'success'})
                }
            }
        </script>
        
    </body>
</html>