<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "index.php"; 
            $page_title = "Dashboard"; 
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
                <div class="main-content-body" id="mrda-margin-move">
                    <div class="row">
                        <div class="col-lg-4 col-xs-4 mt-4">
                            <div class="card dashboard-card-border">
                              <div class="card-body">
                                  <div class="row d-flex justify-content-between">
                                      <div class="col col-lg-6">
                                          <span class="big-font-size">Users</span>
                                      </div>
                                      <div class="col col-lg-6">
                                          <span class="big-font-size">
                                            {{$user_all}}
                                          </span>
                                      </div>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Active Users: {{$user_1}}</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Blocked Users: {{$user_0}}</span>
                                  </div><br>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-4 mt-4">
                            <div class="card dashboard-card-border">
                              <div class="card-body">
                                  <div class="row d-flex justify-content-between">
                                      <div class="col col-lg-6">
                                          <span class="big-font-size">Deposit</span>
                                      </div>
                                      <div class="col col-lg-6">
                                          <span class="big-font-size">{{$trn_deposit_all}}</span>
                                      </div>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Pending: {{$trn_deposit_0}}</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Approved: {{$trn_deposit_1}}</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Declined: {{$trn_deposit_2}}</span>
                                  </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-4 mt-4">
                            <div class="card dashboard-card-border">
                              <div class="card-body">
                                  <div class="row d-flex justify-content-between">
                                      <div class="col col-lg-6">
                                          <span class="big-font-size">Withdrawal</span>
                                      </div>
                                      <div class="col col-lg-6">
                                          <span class="big-font-size">{{$trn_withdraw_all}}</span>
                                      </div>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Pending: {{$trn_withdraw_0}}</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Approved: {{$trn_withdraw_1}}</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Declined: {{$trn_withdraw_2}}</span>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        @include('admin.layouts.footer')
        
        
        
    </body>
</html>