<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "user-management-client-account-manage.php"; 
            $page_title = "User Management"; 
        ?>
        @include('layouts.meta')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link href="{{ asset('css/toggle-switch.css') }}" rel="stylesheet" type="text/css" />
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
                <div class="main-content-body px-1 pt-2 pb-5 row">
                    <div class="col col-lg-8 px-4">
                        <div class="force-bg-white">
                            <h4 class="big-font-size tabel-heading-h">Update account information</h4>
                            <form action="" method="post" enctype="multipart/form-data" class="mt-4 px-5 py-4">
                                <input type="hidden" name="user_use" value="" />
                                <input type="hidden" name="get_us_username" value="" />
                                <input type="hidden" name="get_us_email" value="" />
                                <input type="hidden" name="get_us_phone" value="" />
                                <input type="hidden" name="us_date_time_reg" value="" />
                                <input type="hidden" name="date_time_login" value="" />
                                <input type="hidden" name="date_time_update" value="" />
                                <input type="hidden" name="mac_address" value="" />
                                <input type="hidden" name="snapshot" value="" />
                                <input type="hidden" name="front_snapshot" value="" />
                                <input type="hidden" name="back_snapshot" value="" />
                                <input type="hidden" name="proof_snap" value="" />
                                <div class="row">
                                    <span class="col col-lg-3">Username </span>
                                    <span class="col col-lg-9">
                                        <input type="text" name="us_username" value="" class="pro-select-input" />
                                        <br>
                                        <sp class="force-color-red"></sp>
                                    </span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Full Name </span>
                                    <span class="col col-lg-9">
                                        <input type="text" name="us_full_name" value=""  class="pro-select-input" />
                                        <br>
                                        <sp class="force-color-red"></sp>
                                    </span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Email </span>
                                    <span class="col col-lg-9"><input type="email" name="us_email" value=""  class="pro-select-input" />
                                        <br>
                                        <sp class="force-color-red"></sp>
                                    </span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Number </span>
                                    <span class="col col-lg-9"><input type="tel" name="us_phone" value=""  class="pro-select-input" />
                                        <br>
                                    <sp class="force-color-red"></sp>
                                    </span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Address</span>
                                    <span class="col col-lg-9"><input type="text" name="address" value=""  class="pro-select-input" />
                                        <br>
                                        <sp class="force-color-red"></sp>
                                    </span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Country</span>
                                    <span class="col col-lg-9"><input type="text" name="country" value=""  class="pro-select-input" />
                                        <br>
                                        <sp class="force-color-red"></sp>
                                    </span>
                                    
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Zip Code</span>
                                    <span class="col col-lg-9"><input type="text" name="zip_code" value=""  class="pro-select-input" />
                                        <br>
                                        <sp class="force-color-red"></sp>                                 
                                    </span>
                                    
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Password</span>
                                    <span class="col col-lg-9"><input type="password" name="us_password" value="" class="pro-select-input" /></span>
                                    <span class="force-color-red"></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Balance</span>
                                    <span class="col col-lg-9"><input type="number" name="balance_money" value="" class="pro-select-input" readonly /></span>
                                    <span class="force-color-red"></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Profit</span>
                                    <span class="col col-lg-9"><input type="number" name="profit" value="" class="pro-select-input" readonly /></span>
                                    <span class="force-color-red"></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Referal earning</span>
                                    <span class="col col-lg-9"><input type="number" name="referal" value="" class="pro-select-input" readonly /></span>
                                    <span class="force-color-red"></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Status </span>
                                    <span class="col col-lg-9">
                                        Email verification
                                        <span class="transact-toggle-switch">
                                            <label class="toggle-switch">
                                                <input type="hidden" name="email_notify" value="0" />
                                                <input type="checkbox" id="toggle-switch-input-1" name="email_notify" value="1" <?php if(1 == 1){echo "checked";} ?> class="toggle-switch-input" />
                                                <label for="toggle-switch-input-1" class="toggle-switch-label"></label>
                                            </label>
                                        </span>
                                        <sp class="ml-1">
                                            Phone verification
                                        <span class="transact-toggle-switch">
                                            <label class="toggle-switch">
                                                <input type="hidden" name="phone_notify" value="0" />
                                                <input type="checkbox" id="toggle-switch-input-9" name="phone_notify" value="1"  class="toggle-switch-input" />
                                                <label for="toggle-switch-input-9" class="toggle-switch-label"></label>
                                            </label>
                                        </span>
                                        </sp>
                                        <sp class="ml-1">
                                            Upgrade account
                                        <span class="transact-toggle-switch">
                                            <label class="toggle-switch">
                                                <input type="hidden" name="upgrade_acct_notify" value="0" />
                                                <input type="checkbox" id="toggle-switch-input-2"  name="upgrade_acct_notify" value="1" class="toggle-switch-input" />
                                                <label for="toggle-switch-input-2" class="toggle-switch-label"></label>
                                            </label>
                                        </span>
                                        </sp>
                                    </span>
                                </div>

                                <div class="mt-2 mb-5">
                                    <button type="submit" name="submit_admin_update_btn" class="btn btn-primary float-right">Update <i class="fas fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col col-lg-4 px-4">
                        <div class="force-bg-white px-4 py-4">
                            <div class="row">
                                <span class="col col-lg-4 small-font-size">Joined: </span>
                                <span class="col col-lg-8 small-font-size"> Last</span>
                            </div>
                            <div class="row">
                                <span class="col col-lg-4 small-font-size">Login: </span>
                                <span class="col col-lg-8 small-font-size"> Last</span>
                            </div>
                            <div class="row">
                                <span class="col col-lg-4 small-font-size">Updated: </span>
                                <span class="col col-lg-8 small-font-size"> IP</span>
                            </div>
                            <div class="row">
                                <span class="col col-lg-4 small-font-size">Address: </span>
                                <span class="col col-lg-8 small-font-size"></span>
                            </div>
                        </div>
                        <div class="force-bg-white py-4 mt-5">
                            <h4 class="big-font-size tabel-heading-h">KYC</h4>
                            <div class="tabel-heading-h">
                                <div class="px-4 py-2">
                                    <b class="small-font-size">Snapshot</b><br><br>
                                    <img src="{{ asset('img/user/') }}" class="force-img-avatar-circle" />
                                </div>
                            </div>
                            <div class="tabel-heading-h">
                                <div class="px-4 py-2">
                                    <b class="small-font-size">Document</b><br><br>
                                    <div class="row">
                                        <div class="col col-lg-6">
                                            <span class="small-font-size">Front snap</span><br>
                                            <img src="{{ asset('assets/img/user/') }}" class="force-img-avatar-triangle" />
                                        </div>
                                        <div class="col col-lg-6">
                                            <span class="small-font-size">Back snap</span><br>
                                            <img src="{{ asset('assets/img/user/') }}" class="force-img-avatar-triangle" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="px-4 py-2">
                                    <b class="small-font-size">Proof of Adress</b><br><br>
                                    <div class="row">
                                        <div class="col col-lg-6">
                                            <span class="small-font-size">Snap</span><br>
                                            <img src="{{ asset('assets/img/user/') }}" class="force-img-avatar-triangle" />
                                        </div>
<!--
                                        <div class="col col-lg-6">
                                            <span class="small-font-size">Back snap</span>
                                            <img src="{{ asset('assets/img/banner1.png" class="force-img-avatar-triangle" />
                                        </div>
-->
                                    </div>
                                </div>
                            </div>
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
        <script>
            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "sucess"){
                window.onload = (event) => {
                   bs4pop.notice('Saved', {position: 'topright', type: 'success'})
                };
            }
        </script>
    </body>
</html>