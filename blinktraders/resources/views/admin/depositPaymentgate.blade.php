<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "deposit-paymentgate.php"; 
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
                <div class="main-content-body force-bg-white px-1 py-3" id="mrda-margin-move" >
                    <div class="row d-flex justify-content-between px-4 py-2">
                        <h4 class="big-font-size">Payment gateways</h4>
                        <a href="#" class="btn btn-light" data-toggle="modal" data-target="#myModalAdd"><i class="fas fa-plus-square"></i> Add gateway</a>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Icon</th>
                                <th>Name of Gateway</th>
                                <th>Wallet Address</th>
                                <th>QR Code</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <td>1</td>
                                <td><img src="{{asset('img/payment-gateway/') }}" class="force-img-avatar-table-icon" /></td>
                                <td>bhfg</td>
                                <td>jjj</td>
                                <td><img src="{{asset('img/payment-gateway/') }}" class="force-img-avatar-table-icon" /></td>
                                <td>fg</td>
                                <td>bgtt</td>
                                <td>
                                    <a href="#" class="force-color-black" data-toggle="modal" data-target="#myModal" id="click-modal-update" 
                                    data-id="1"
                                    data-name="bgt"
                                    data-max_deposit="myu"
                                    data-min_deposit="gfr"
                                    data-wallet_address="fggt"
                                    data-upload_icon="3245"
                                    data-upload_qr_img="gh"
                                    data-status="23"
                                    ><i class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                </td>
                            </tr>  
                        </tbody>
                    </table>             
                </div>
            </section>
        </main>
        
<!-- The Modal New -->
<div class="modal" id="myModalAdd">
  <div class="modal-dialog modal-lg">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="modal-content">

      <!-- Modal Header -->
      <h4 class="big-font-size px-2 py-4">Add payment gateway</h4>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
            <span class="col col-lg-3">Name of gateway </span>
            <span class="col col-lg-9">
                <input type="text" class="pro-select-input" name="name" value="" />
                <br>
                <span class="force-color-red"></span>
            </span>
        </div>
        <div class="row mt-4">
            <span class="col col-lg-2">Max deposit </span>
            <span class="col col-lg-4">
                <input type="number" class="pro-select-input" name="max_deposit" value="" />
            <br>
                <sp class="force-color-red"></sp>
            </span>
            
            <span class="col col-lg-2">Min deposit </span>
            <span class="col col-lg-4">
                <input type="number" class="pro-select-input" name="min_deposit" value="" />
                <br>
                <span class="force-color-red"></span>
            </span>
            
        </div>
          <div class="row mt-4">
            <span class="col col-lg-3">Wallet address </span>
            <span class="col col-lg-9">
                <input type="text" class="pro-select-input" name="wallet_address" value="" />
                <br>
                <span class="force-color-red"></span>
              </span>
        </div>
          <div class="row mt-4">
            <span class="col col-lg-3">Upload icon </span>
            <span class="col col-lg-9">
                <input type="file" class="pro-select-input" name="upload_icon" accept="jpg, jpeg, png, svg, gif" />
                <br>
                <span class="force-color-red"></span>
              </span>
        </div>
          <div class="row mt-4">
            <span class="col col-lg-3">Upload QR image </span>
            <span class="col col-lg-9">
                <input type="file" class="pro-select-input" name="upload_qr_img" accept="jpg, jpeg, png, svg, gif" />
                <br>
                <span class="force-color-red"></span>
              </span>
        </div>
          <div class="row mt-4">
            <span class="col col-lg-3">Status </span>
            <span class="col col-lg-9">
                <select class="pro-select-input" name="status">
                    <option value="1" <?php if(1 == 1){ echo "selected";} ?> >Active</option>
                    <option value="0" <?php if(1 == 0){ echo "selected";} ?>>Pending</option>
                </select>
                <span class="force-color-red"></span>
              </span>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit_payment_gate_btn">Save Changes</button>
      </div>

    </form>
  </div>
</div>
        
<!-- The Modal Edit -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
  <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" class="modal-content">
    <input type="hidden" name="id" id="id" value="" />
    <input type="hidden" name="icon_img_hd" id="icon_img_hd" value="" />
    <input type="hidden" name="p_img_hd" id="p_img_hd" value="" />
<!-- Modal Header -->
<h4 class="big-font-size px-2 py-4">Add payment gateway</h4>

<!-- Modal body -->
<div class="modal-body">
  <div class="row">
      <span class="col col-lg-3">Name of gateway </span>
      <span class="col col-lg-9">
          <input type="text" class="pro-select-input" name="name" id="name" value="" />
          <br>
          <span class="force-color-red"></span>
      </span>
  </div>
  <div class="row mt-4">
      <span class="col col-lg-2">Max deposit </span>
      <span class="col col-lg-4">
          <input type="number" class="pro-select-input" name="max_deposit" id="max_deposit" value="" />
      <br>
          <sp class="force-color-red"></sp>
      </span>
      
      <span class="col col-lg-2">Min deposit </span>
      <span class="col col-lg-4">
          <input type="number" class="pro-select-input" name="min_deposit" id="min_deposit" value="" />
          <br>
          <span class="force-color-red"></span>
      </span>
      
  </div>
    <div class="row mt-4">
      <span class="col col-lg-3">Wallet address </span>
      <span class="col col-lg-9">
          <input type="text" class="pro-select-input" name="wallet_address" id="wallet_address" value="" />
          <br>
          <span class="force-color-red"></span>
        </span>
  </div>
    <div class="row mt-4">
      <span class="col col-lg-3">Upload icon </span>
      <span class="col col-lg-9">
          <input type="file" class="pro-select-input" name="upload_icon" id="upload_icon" accept="jpg, jpeg, png, svg, gif" />
          <br>
          <span class="force-color-red"></span>
        </span>
  </div>
    <div class="row mt-4">
      <span class="col col-lg-3">Upload QR image </span>
      <span class="col col-lg-9">
          <input type="file" class="pro-select-input" name="upload_qr_img" id="upload_qr_img" accept="jpg, jpeg, png, svg, gif" />
          <br>
          <span class="force-color-red"></span>
        </span>
  </div>
    <div class="row mt-4">
      <span class="col col-lg-3">Status </span>
      <span class="col col-lg-9">
          <select class="pro-select-input" name="status">
              <option value="1" <?php if(1 == 1){ echo "selected";} ?> >Active</option>
              <option value="0" <?php if(1 == 0){ echo "selected";} ?>>Pending</option>
          </select>
          <span class="force-color-red"></span>
        </span>
  </div>
</div>

<!-- Modal footer -->
<div class="modal-footer">
  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary" name="submit_payment_gate_edit_btn">Save Changes</button>
</div>

</form>
  </div>
</div>
        
@include('admin.layouts.footer')
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type="application/javascript"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js" type="application/javascript"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
            
        </script>
        
        
        <script>
          $(document).ready(function(){
                
                $(document).on('click', '#click-modal-update', function(){
                  document.querySelector("#id").value = $(this).attr("data-id");
                  document.querySelector("#name").value = $(this).attr("data-name");
                  document.querySelector("#max_deposit").value = $(this).attr("data-max_deposit");
                  document.querySelector("#min_deposit").value = $(this).attr("data-min_deposit");
                  document.querySelector("#wallet_address").value = $(this).attr("data-wallet_address");
                  document.querySelector("#upload_icon").value = $(this).attr("data-upload_icon");
                  document.querySelector("#upload_qr_img").value = $(this).attr("data-upload_qr_img");
                  document.querySelector("#icon_img_hd").value = $(this).attr("data-upload_icon");
                  document.querySelector("#p_img_hd").value = $(this).attr("data-upload_qr_img");;
                  document.querySelector("#status").value = $(this).attr("data-status");
                     modalBg.classList.add("modal-bg-active");
                 }); 
             });

             

            var msg = new URL(window.location.href).searchParams.get("msg");
            if(msg === "sucessUpdate"){
                window.onload = (event) => {
                   bs4pop.notice('Saved', {position: 'topright', type: 'success'})
                };
            }
        </script>
    </body>
</html>