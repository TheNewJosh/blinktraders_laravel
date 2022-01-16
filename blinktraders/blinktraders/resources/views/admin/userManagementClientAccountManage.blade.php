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
                            <form action="{{ route('userManagementClientAccountManageUpdate') }}" method="post" enctype="multipart/form-data" class="mt-4 px-5 py-4">
                                @csrf    
                                <input type="hidden" name="user_id" value="{{$user->id}}" />
                                <div class="row">
                                    <span class="col col-lg-3">Username </span>
                                    <span class="col col-lg-9">
                                        <input type="text" name="username" value="{{$user->username}}" class="pro-select-input" />
                                        <br>
                                        @error('username')
                                            <sp class="force-color-red pro-select-input-text-error">{{ $message }}</sp>
                                        @enderror
                                    </span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Full Name </span>
                                    <span class="col col-lg-9">
                                        <input type="text" name="name" value="{{$user->name}}"  class="pro-select-input" />
                                        <br>
                                        @error('name')
                                            <sp class="force-color-red pro-select-input-text-error">{{ $message }}</sp>
                                        @enderror
                                    </span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Email </span>
                                    <span class="col col-lg-9"><input type="email" name="email" value="{{$user->email}}"  class="pro-select-input" />
                                        <br>
                                        @error('email')
                                            <sp class="force-color-red pro-select-input-text-error">{{ $message }}</sp>
                                        @enderror
                                    </span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Number </span>
                                    <span class="col col-lg-9"><input type="tel" name="phone" value="{{$user->phone}}"  class="pro-select-input" />
                                        <br>
                                        @error('phone')
                                            <sp class="force-color-red pro-select-input-text-error">{{ $message }}</sp>
                                        @enderror
                                    </span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Address</span>
                                    <span class="col col-lg-9"><input type="text" name="address" value="{{$user->address}}"  class="pro-select-input" />
                                        <br>
                                        @error('address')
                                            <sp class="force-color-red pro-select-input-text-error">{{ $message }}</sp>
                                        @enderror
                                    </span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Country</span>
                                    <span class="col col-lg-9"><input type="text" name="country" value="{{$user->country}}"  class="pro-select-input" />
                                        <br>
                                        @error('country')
                                            <sp class="force-color-red pro-select-input-text-error">{{ $message }}</sp>
                                        @enderror
                                    </span>
                                    
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Zip Code</span>
                                    <span class="col col-lg-9"><input type="text" name="zip_code" value="{{$user->zip_code}}"  class="pro-select-input" />
                                        <br>
                                        @error('zip_code')
                                            <sp class="force-color-red pro-select-input-text-error">{{ $message }}</sp>
                                        @enderror                                
                                    </span>
                                    
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Password</span>
                                    <span class="col col-lg-9"><input type="text" name="password" value="{{$user->password}}" class="pro-select-input" /></span>
                                    <span class="force-color-red"></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col-lg-4">Balance:<br>Bal:${{$trn_sum_ava - $user->adj_fee}} Adj:${{$trn_sum_ava}}</span>
                                    <span class="col col-lg-8">
                                        <input type="number" name="adj_fee" value="{{$user->adj_fee}}" placeholder="Enter new adjust balance" class="pro-select-input" required />
                                    </span>
                                    <span class="force-color-red"></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-4">Profit:<br>Bal:${{$trn_sum_pro - $user->adjp_fee}} Adj:${{$trn_sum_pro}}</span>
                                    <span class="col col-lg-8"><input type="number" name="adjp_fee" placeholder="Enter new adjust balance" value="{{$user->adjp_fee}}" class="pro-select-input" required/></span>
                                    <span class="force-color-red"></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-4">Referal earning:<br>Bal:${{$trn_sum_ref - $user->adjr_fee}} Adj:${{$trn_sum_ref}}</span>
                                    <span class="col col-lg-8"><input type="number" name="adjr_fee" value="{{$user->adjr_fee}}" placeholder="Enter new adjust balance" class="pro-select-input" required/></span>
                                    <span class="force-color-red"></span>
                                </div>
                                <div class="row mt-5">
                                    <span class="col col-lg-3">Status </span>
                                    <span class="col col-lg-9">
                                        Email verification
                                        <span class="transact-toggle-switch">
                                            <label class="toggle-switch">
                                                <input type="hidden" name="email_verify" value="0" />
                                                <input type="checkbox" id="toggle-switch-input-1" name="email_verify" value="1" @if($user->email_verify == '1') checked @endif class="toggle-switch-input" />
                                                <label for="toggle-switch-input-1" class="toggle-switch-label"></label>
                                            </label>
                                        </span>
                                        <sp class="ml-1">
                                            Phone verification
                                        <span class="transact-toggle-switch">
                                            <label class="toggle-switch">
                                                <input type="hidden" name="phone_verify" value="0" />
                                                <input type="checkbox" id="toggle-switch-input-9" name="phone_verify" value="1" @if($user->phone_verify == '1') checked @endif class="toggle-switch-input" />
                                                <label for="toggle-switch-input-9" class="toggle-switch-label"></label>
                                            </label>
                                        </span>
                                        </sp>
                                        <sp class="ml-1">
                                            Upgrade account
                                        <span class="transact-toggle-switch">
                                            <label class="toggle-switch">
                                                <input type="hidden" name="upgrade_account" value="0" />
                                                <input type="checkbox" id="toggle-switch-input-2"  name="upgrade_account" value="1" @if($user->upgrade_account == '1') checked @endif class="toggle-switch-input" />
                                                <label for="toggle-switch-input-2" class="toggle-switch-label"></label>
                                            </label>
                                        </span>
                                        </sp>
                                        <sp class="ml-1">
                                            KYC
                                        <span class="transact-toggle-switch">
                                            <label class="toggle-switch">
                                                <input type="checkbox" id="toggle-switch-input-12"  @if($user->kyc_verify == '1') checked @endif class="toggle-switch-input" />
                                                <label for="toggle-switch-input-12" class="toggle-switch-label"></label>
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
                                <span class="col col-lg-8 small-font-size"> {{$user->created_at}}</span>
                            </div>
                            <div class="row">
                                <span class="col col-lg-4 small-font-size">Login: </span>
                                <span class="col col-lg-8 small-font-size"> {{$user->last_login}}</span>
                            </div>
                            <div class="row">
                                <span class="col col-lg-4 small-font-size">Updated: </span>
                                <span class="col col-lg-8 small-font-size"> {{$user->updated_at}}</span>
                            </div>
                            <div class="row">
                                <span class="col col-lg-4 small-font-size">IP Address: </span>
                                <span class="col col-lg-8 small-font-size">{{$user->mac_address}}</span>
                            </div>
                        </div>
                        <div class="force-bg-white py-4 mt-5">
                            <div class="justify-row-space tabel-heading-h">
                                <div class="big-font-size">KYC</div>
                                <div class="row">
                                    <form action="{{ route('userManagementClientAccountManageKyc') }}" method="post" class="mr-2">
                                        @csrf    
                                        <input type="hidden" name="user_id" value="{{$user->id}}" />
                                        <input type="hidden" name="kyc_verify" value="1" />
                                        <button type="submit" class="btn btn-outline-success btn-sm">Approve</button>
                                    </form>
                                    <form action="{{ route('userManagementClientAccountManageKyc') }}" method="post" class="mr-2">
                                        @csrf    
                                        <input type="hidden" name="user_id" value="{{$user->id}}" />
                                        <input type="hidden" name="kyc_verify" value="0" />
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Decline</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tabel-heading-h">
                                <div class="px-4 py-2">
                                    <b class="small-font-size">Snapshot</b><br><br>
                                    <img src="{{ asset('img/user') }}/{{$user->snapshot}}" class="force-img-avatar-circle" />
                                </div>
                            </div>
                            <div class="tabel-heading-h">
                                <div class="px-4 py-2">
                                    <b class="small-font-size">Document</b><br><br>
                                    <div class="row">
                                        <div class="col col-lg-6">
                                            @if($user->front_snapshot)
                                            <a href="{{ route('userManagementClientAccountManagerDownloadFile', ['fname' => $user->front_snapshot])}}" class="small-font-size"> <i class="fa fa-download" style="font-size:36px"></i>Front snap</a><br>
                                            @endif
                                            <!-- <img src="" class="force-img-avatar-triangle" /> -->
                                        </div>
                                        <div class="col col-lg-6">
                                            @if($user->back_snapshot)
                                            <a href="{{ route('userManagementClientAccountManagerDownloadFile', ['fname' => $user->back_snapshot])}}" class="small-font-size"><i class="fa fa-download" style="font-size:36px"></i>Back snap</a><br>
                                            @endif
                                            <!-- <img src="" class="force-img-avatar-triangle" /> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="px-4 py-2">
                                    <b class="small-font-size">Proof of Adress</b><br><br>
                                    <div class="row">
                                        <div class="col col-lg-6">
                                            @if($user->proof_snap)
                                            <a href="{{ route('userManagementClientAccountManagerDownloadFile', ['fname' => $user->proof_snap])}}"  class="small-font-size"><i class="fa fa-download" style="font-size:36px"></i>Snap</a><br>
                                            @endif
                                            <!-- <img src="" class="force-img-avatar-triangle" /> -->
                                        </div>
<!-- 
                                        <div class="col col-lg-6">
                                            <span class="small-font-size">Back snap</span>
                                            <img src="{{ asset('assets/img/banner1.png" class="force-img-avatar-triangle" />
                                        </div> -->

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
            
            @if(session('statusSuccessKyc'))
                window.onload = (event) => {
                bs4pop.notice('Kyc Updated', {position: 'topright', type: 'success'})
                };
            @endif
        </script>
    </body>
</html>