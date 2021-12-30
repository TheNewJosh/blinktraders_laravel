<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "user-management-client-account.php"; 
            $page_title = "User Management"; 
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
                    <h4 class="big-font-size">Clients accounts</h4>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Balance</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>gh</td>
                                <td>user</td>
                                <td>df@gml</td>
                                <td>nig</td>
                                <td>o5</td>
                                <td>frr</td>
                                <td>ghh</td>
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
                                          <a class="force-color-black" href="{{ route('userManagementClientAccountManage') }}">
                                              <i class="fas fa-cog mr-2"></i>
                                              Manage account
                                            </a><br>
                                            <?php if(1 == 1){ ?>
                                          <a class="force-color-black" href="#">
                                              <i class="far fa-envelope mr-2"></i>Block
                                            </a><br>
                                            <?php }else{ ?>
                                                <a class="force-color-black" href="#">
                                                  <i class="far fa-envelope mr-2"></i>Unblock
                                                </a><br>
                                            <?php } ?>
                                            <a class="force-color-black" href="{{ route('userManagementClientAccountSendMail') }}">
                                              <i class="far fa-envelope mr-2"></i>Send email
                                            </a><br>
                                            <a class="force-color-black" href="#">
                                              <i class="far fa-envelope mr-2"></i>Delete account
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
            
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "sucessBlck"){
                window.onload = (event) => {
                   bs4pop.notice('User Account Updated', {position: 'topright', type: 'success'})
                }
            }
        </script>
        
    </body>
</html>