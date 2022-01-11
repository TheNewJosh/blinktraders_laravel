<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "system-config-settings.php"; 
            $page_title = "System Configuration"; 
        ?>
        @include('layouts.meta')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link href="{{ asset('css/toggle-switch.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
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
                    <h4 class="big-font-size tabel-heading-h">General Settings</h4>
                    <form action="{{ route('systemConfigSettingsUpdate') }}" method="post" enctype="multipart/form-data" class="mt-4 px-5 py-4">
                        @csrf
                        <input type="hidden" name="id" value="{{$sysc->id}}" />
                        <div class="row mt-5">
                            <span class="col col-lg-3">Company / website name </span>
                            <span class="col col-lg-9"><input type="text" class="pro-select-input" name="company_name" value="{{ $sysc->company_name }}" /><br><sp class="force-color-red"></sp></span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-3">Company email </span>
                            <span class="col col-lg-9"><input type="email" class="pro-select-input" name="company_email" value="{{ $sysc->company_email }}" /><br><sp class="force-color-red"></sp></span>
    
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-3">Balance on sign up </span>
                            <span class="col col-lg-9">
                                USD<input type="text" name="signup_fee" class="pro-select-input-sm" value="{{ $sysc->signup_fee }}" />
                                <sp class="ml-4">Withdraw charge<input type="text" class="pro-select-input-sm" name="withdraw_charge" value="{{ $sysc->withdraw_charge }}" />%
                                </sp>
                                <sp class="ml-4">Deposit charge<input type="text" class="pro-select-input-sm" name="deposit_charge" value="{{ $sysc->deposit_charge }}" />%</sp>
                                <br><br>
                                    <sp class="ml-4">Upgrade fee<input type="text" class="pro-select-input-sm" name="upgrade_fee" value="{{ $sysc->upgrade_fee }}" />USD</sp>
                                
                            </span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-3">Status </span>
                            <span class="col col-lg-9">
                                KYC
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="hidden" name="kyc" value="0" />
                                        <input type="checkbox" id="toggle-switch-input-1" class="toggle-switch-input" name="kyc" value="1" @if($sysc->kyc == '1') checked @endif />
                                        <label for="toggle-switch-input-1" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                <sp class="ml-1">
                                    Email verification
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="hidden" name="email_verification" value="0" />
                                        <input type="checkbox" id="toggle-switch-input-9" class="toggle-switch-input" name="email_verification" value="1" @if($sysc->email_verification == '1') checked @endif />
                                        <label for="toggle-switch-input-9" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                                <sp class="ml-1">
                                    SMS verification
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="hidden" name="sms_verification" value="0" />
                                        <input type="checkbox" id="toggle-switch-input-2" class="toggle-switch-input" name="sms_verification" value="1" @if($sysc->sms_verification == '1') checked @endif />
                                        <label for="toggle-switch-input-2" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                                <sp class="ml-1">
                                    Upgrade status
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="hidden" name="upgrade_status" value="0" />
                                        <input type="checkbox" id="toggle-switch-input-3" class="toggle-switch-input" name="upgrade_status" value="1" @if($sysc->upgrade_status == '1') checked @endif />
                                        <label for="toggle-switch-input-3" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                                <sp class="ml-1">
                                    Email notify
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="hidden" name="email_notify" value="0" />
                                        <input type="checkbox" id="toggle-switch-input-4" class="toggle-switch-input" name="email_notify" value="1" @if($sysc->email_notify == '1') checked @endif />
                                        <label for="toggle-switch-input-4" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                                <sp class="ml-1">
                                    SMS notify
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="hidden" name="sms_notify" value="0" />
                                        <input type="checkbox" id="toggle-switch-input-5" class="toggle-switch-input" name="sms_notify" value="1" @if($sysc->sms_notify == '1') checked @endif />
                                        <label for="toggle-switch-input-5" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                                <sp class="ml-1">
                                    Registration
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="hidden" name="registration" value="0" />
                                        <input type="checkbox" id="toggle-switch-input-6" class="toggle-switch-input" name="registration" value="1" @if($sysc->registration == '1') checked @endif />
                                        <label for="toggle-switch-input-6" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                                <sp class="ml-1">
                                    Referral
                                <span class="transact-toggle-switch">
                                    <label class="toggle-switch">
                                        <input type="hidden" name="referral" value="0" />
                                        <input type="checkbox" id="toggle-switch-input-7" class="toggle-switch-input" name="referral" value="1" @if($sysc->referral == '1') checked @endif />
                                        <label for="toggle-switch-input-7" class="toggle-switch-label"></label>
                                    </label>
                                </span>
                                </sp>
                            </span>
                        </div>                    
                        
                        <div class="row mt-5">
                            <span class="col col-lg-3">Subject </span>
                            <span class="col col-lg-9"><input type="text" class="pro-select-input" name="subject" value="{{ $sysc->subject }}" /><br><sp class="force-color-red"></sp></span>
                            
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-3">Address </span>
                            <span class="col col-lg-9"><input type="text" class="pro-select-input" name="address" value="{{ $sysc->address }}" /><br><sp class="force-color-red"></sp></span>
                            
                        </div>
                        <div class="mt-2">
                            <button type="submit" name="submit_system_configuration_btn" class="btn btn-primary float-right">Submit <i class="fas fa-paper-plane"></i></button>
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