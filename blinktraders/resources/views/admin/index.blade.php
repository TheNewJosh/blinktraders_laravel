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
                                            567
                                          </span>
                                      </div>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Active Users: 123</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Blocked Users: 452</span>
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
                                          <span class="big-font-size">345</span>
                                      </div>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Pending: 11</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Approved: 12</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Declined: 0</span>
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
                                          <span class="big-font-size">345</span>
                                      </div>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Pending: 11</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Approved: 12</span>
                                  </div>
                                  <div>
                                    <span class="small-font-size">Declined: 0</span>
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