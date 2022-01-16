<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "deposit-paymentgate.php"; 
            $page_title = "Deposit"; 
            $typStatus = ["Pending", "Active"];
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
                        <div class="row">
                          <div class="mr-2">
                            <a href="#" class="btn btn-light" data-toggle="modal" data-target="#myModalAdd"><i class="fas fa-plus-square"></i> Add gateway</a>
                          </div>
                          <div>
                            <form action="{{ route('depositPaymentgateUpdateCoin') }}" method="post">
                            @csrf
                              <button type="submit" class="btn btn-light"><i class="fas fa-plus-square"></i>Update Coin</button>
                            </form>
                          </div>
                        </div>
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
                        @if ($paymentGateway->count())
                          @foreach ($paymentGateway as $pgw)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{asset('img/payment-gateway') }}/{{$pgw->upload_icon}}" class="force-img-avatar-table-icon" /></td>
                                <td>{{ $pgw->name }}</td>
                                <td>{{ $pgw->wallet_address }}</td>
                                <td><img src="{{asset('img/payment-gateway') }}/{{$pgw->upload_qr_img}}" class="force-img-avatar-table-icon" /></td>
                                <td>{{ $typStatus[$pgw->status] }}</td>
                                <td>{{ $pgw->created_at }}</td>
                                <td>
                                    <a href="#" class="force-color-black" data-toggle="modal" data-target="#myModal" id="click-modal-update" 
                                    data-id="{{ $pgw->id }}"
                                    data-name="{{ $pgw->name }}"
                                    data-max_deposit="{{ $pgw->max_deposit }}"
                                    data-min_deposit="{{ $pgw->min_deposit }}"
                                    data-wallet_address="{{ $pgw->wallet_address }}"
                                    data-upload_icon="{{ $pgw->upload_icon }}"
                                    data-upload_qr_img="{{ $pgw->upload_qr_img }}"
                                    data-status="{{ $pgw->status }}"
                                    data-short_code="{{ $pgw->coin_short }}"
                                    ><i class="fas fa-pencil-alt mr-2"></i>Edit</a>
                                </td>
                            </tr> 
                          @endforeach
                        @endif 
                        </tbody>
                    </table>             
                </div>
            </section>
        </main>
        
<!-- The Modal New -->
<div class="modal" id="myModalAdd">
  <div class="modal-dialog modal-dialog-centered">
    <form action="{{ route('depositPaymentgate') }}" method="post" enctype="multipart/form-data" class="modal-content">
    @csrf
      <!-- Modal Header -->
      <h4 class="big-font-size px-2 py-4">Add payment gateway</h4>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="justify-no-space-between">
            <span class="mr-2 pro-select-input-text">Coin UUID </span>
            <span class="">
                <input type="text" class="pro-select-input-new" name="name" value="{{ old('name') }}" />
                <br>
                @error('name')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
            </span>
        </div>
        <div class="justify-no-space-between">
            <span class="mr-2 pro-select-input-text">Name of gateway </span>
            <span class="">
                <input type="text" class="pro-select-input-new" name="name" value="{{ old('name') }}" />
                <br>
                @error('name')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
            </span>
        </div>
        <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Max deposit </span>
            <span class="">
                <input type="number" class="pro-select-input-new-sm" name="max_deposit" value="{{ old('max_deposit') }}" />
            <br>
            @error('max_deposit')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
            </span>
            
            <span class="mr-2 pro-select-input-text">Min deposit </span>
            <span class="">
                <input type="number" class="pro-select-input-new-sm" name="min_deposit" value="{{ old('min_deposit') }}" />
                <br>
                @error('min_deposit')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
            </span>
            
        </div>
          <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Wallet address </span>
            <span class="">
                <input type="text" class="pro-select-input-new" name="wallet_address" value="{{ old('wallet_address') }}" />
                <br>
                @error('wallet_address')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
          <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Upload icon </span>
            <span class="">
                <input type="file" class="pro-select-input-new" name="upload_icon" accept="jpg, jpeg, png, svg, gif" />
                <br>
                @error('upload_icon')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
          <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Upload QR image </span>
            <span class="">
                <input type="file" class="pro-select-input-new" name="upload_qr_img" accept="jpg, jpeg, png, svg, gif" />
                <br>
                @error('upload_qr_img')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
          <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Status </span>
            <span class="">
                <select class="pro-select-input-new" name="status">
                    <option value="0" @if(old('status') == '0') selected @endif >Pending</option>
                    <option value="1" @if(old('status') == '1') selected @endif >Active</option>
                </select>
                @error('status')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
        <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Short Code </span>
            <span class="">
                <input type="text" class="pro-select-input-new" name="short_code" value="{{ old('short_code') }}" />
                <br>
                @error('short_code')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="text-right py-4 px-2">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit_payment_gate_btn">Save Changes</button>
      </div>

    </form>
  </div>
</div>
        
<!-- The Modal Edit -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
  <form action="{{ route('depositPaymentgateUpdate') }}" method="post" enctype="multipart/form-data" class="modal-content">
    @csrf
    <input type="hidden" name="pgw_id" id="id" value="{{ old('pgw_id') }}" />
    <input type="hidden" name="icon_img_hd" id="icon_img_hd" value="{{ old('icon_img_hd') }}" />
    <input type="hidden" name="p_img_hd" id="p_img_hd" value="{{ old('p_img_hd') }}" />
<!-- Modal Header -->
<h4 class="big-font-size px-2 py-4">Edit payment gateway</h4>

<!-- Modal body -->
<div class="modal-body">
  <div class="justify-no-space-between">
      <span class="mr-2 pro-select-input-text">Name of gateway </span>
      <span class="">
          <input type="text" class="pro-select-input-new" name="name" id="name" value="{{ old('name') }}" />
          <br>
          @error('name')
            <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
          @enderror
      </span>
  </div>
  <div class="justify-no-space-between mt-4">
      <span class="mr-2 pro-select-input-text">Max deposit </span>
      <span class="">
          <input type="text" class="pro-select-input-new-sm" name="max_deposit" id="max_deposit" value="{{ old('max_deposit') }}" />
      <br>
      @error('max_deposit')
        <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
      @enderror
      </span>
      
      <span class="mr-2 pro-select-input-text">Min deposit </span>
      <span class="">
          <input type="text" class="pro-select-input-new-sm" name="min_deposit" id="min_deposit" value="{{ old('min_deposit') }}" />
          <br>
          @error('min_deposit')
            <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
          @enderror
      </span>
      
  </div>
    <div class="justify-no-space-between mt-4">
      <span class="mr-2 pro-select-input-text">Wallet address </span>
      <span class="">
          <input type="text" class="pro-select-input-new" name="wallet_address" id="wallet_address" value="{{ old('wallet_address') }}" />
          <br>
          @error('wallet_address')
            <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
          @enderror
        </span>
  </div>
    <div class="justify-no-space-between mt-4">
      <span class="mr-2 pro-select-input-text">Upload icon </span>
      <span class="">
          <input type="file" class="pro-select-input-new" name="upload_icon" id="upload_icon" accept="jpg, jpeg, png, svg, gif" />
          <br>
          @error('upload_icon')
            <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
          @enderror
        </span>
  </div>
    <div class="justify-no-space-between mt-4">
      <span class="mr-2 pro-select-input-text">Upload QR image </span>
      <span class="">
          <input type="file" class="pro-select-input-new" name="upload_qr_img" id="upload_qr_img" accept="jpg, jpeg, png, svg, gif" />
          <br>
          @error('upload_qr_img')
            <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
          @enderror
        </span>
  </div>
    <div class="justify-no-space-between mt-4">
      <span class="mr-2 pro-select-input-text">Status </span>
      <span class="">
          <select class="pro-select-input-new" name="status">
            <option id="status"></option>
            <option value="0" @if(old('status') == '0') selected @endif >Pending</option>
            <option value="1" @if(old('status') == '1') selected @endif >Active</option>
          </select>
          @error('status')
            <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
          @enderror
        </span>
  </div>
  <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Short Code </span>
            <span class="">
                <input type="text" class="pro-select-input-new" name="short_code" id="short_code" value="{{ old('short_code') }}" />
                <br>
                @error('short_code')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
</div>

<!-- Modal footer -->
<div class="text-right py-4 px-2">
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
          @if(session('statusdepositPaymentgate'))
                $(window).on('load', function() {
                    $('#myModalAdd').modal('show');
                });
            
                window.onload = (event) => {
                   bs4pop.notice('Input Error', {position: 'topright', type: 'danger'})
                };
          @endif

          @if(session('statusdepositPaymentgateUpdate'))
                $(window).on('load', function() {
                    $('#myModal').modal('show');
                });
            
                window.onload = (event) => {
                   bs4pop.notice('Input Error', {position: 'topright', type: 'danger'})
                };
          @endif

          @if(session('statusdepositPaymentgateSuccess'))
                window.onload = (event) => {
                   bs4pop.notice('Saved', {position: 'topright', type: 'success'})
                };
          @endif
        </script>
        
        <script>
          $(document).ready(function(){
                
                $(document).on('click', '#click-modal-update', function(){
                  document.querySelector("#id").value = $(this).attr("data-id");
                  document.querySelector("#name").value = $(this).attr("data-name");
                  document.querySelector("#max_deposit").value = $(this).attr("data-max_deposit");
                  document.querySelector("#min_deposit").value = $(this).attr("data-min_deposit");
                  document.querySelector("#wallet_address").value = $(this).attr("data-wallet_address");
                  // document.querySelector("#upload_icon").value = $(this).attr("data-upload_icon");
                  // document.querySelector("#upload_qr_img").value = $(this).attr("data-upload_qr_img");
                  document.querySelector("#icon_img_hd").value = $(this).attr("data-upload_icon");
                  document.querySelector("#p_img_hd").value = $(this).attr("data-upload_qr_img");

                  document.querySelector("#status").value = $(this).attr("data-status");
                  if($(this).attr("data-status")== 1){statusMss = "Active";}else{statusMss = "Pending"}
                  document.querySelector("#status").innerHTML = statusMss;


                  document.querySelector("#short_code").value = $(this).attr("data-short_code");
                     modalBg.classList.add("modal-bg-active");
                 }); 
             });
        </script>
    </body>
</html>