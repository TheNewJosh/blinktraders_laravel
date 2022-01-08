<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "invest-plan.php"; 
            $page_title = "Invest";
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
                        <h4 class="big-font-size">Plan</h4>
                        <a href="#" class="btn btn-light" data-toggle="modal" data-target="#myModalAdd"><i class="fas fa-plus-square"></i> Create Plan</a>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Icon</th>
                                <th>Name</th>
                                <th>Daily Percent</th>
                                <th>Max Amount</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($investPlan->count())
                          {{ $i=1 }}
                          @foreach ($investPlan as $inp)
                          <tr>
                                <td>{{$i}}</td>
                                <td><img src="{{asset('img/invest-plan') }}/{{$inp->icon}}" class="force-img-avatar-table-icon" /></td>
                                <td>{{ $inp->name }}</td>
                                <td>{{ $inp->percent }}</td>
                                <td>{{ $inp->max_amount }}</td>
                                <td>{{ $typStatus[$inp->status] }}</td>
                                <td>{{ $inp->created_at->toFormattedDateString() }}</td>
                                <td>
                                    <a href="#" class="force-color-black" data-toggle="modal" data-target="#myModal" id="click-modal-update" 
                                    data-id="{{ $inp->id }}"
                                    data-name="{{ $inp->name }}"
                                    data-max_amount="{{ $inp->max_amount }}"
                                    data-min_amount="{{ $inp->min_amount }}"
                                    data-percent_referral="{{ $inp->percent_referral }}"
                                    data-percent="{{ $inp->percent }}"
                                    data-percent_ref="{{ $inp->percent_ref }}"
                                    data-duration="{{ $inp->duration }}"
                                    data-icon="{{ $inp->icon }}"
                                    data-type_in="{{ $inp->type_in }}"
                                    data-status="{{ $inp->status }}"
                                    ><i class="fas fa-pencil-alt mr-2"></i>Edit</a>
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
        
<!-- The Modal New -->
<div class="modal" id="myModalAdd">
  <div class="modal-dialog modal-dialog-centered">
    <form action="{{ route('investPlan') }}" method="post" enctype="multipart/form-data" class="modal-content">
    @csrf
      <!-- Modal Header -->
      <h4 class="big-font-size px-2 py-4">Create Plan</h4>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="justify-no-space-between">
            <span class="mr-2 pro-select-input-text">Name of plan </span>
            <span class="">
                <input type="text" class="pro-select-input-new" name="name" value="{{old('name')}}" />
                <br>
               @error('name')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
            </span>
        </div>
        <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Max Amount </span>
            <span class="">
                <input type="number" class="pro-select-input-new" name="max_amount" value="{{old('max_amount')}}" />
                <br>
               @error('max_amount')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
        <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Min Amount </span>
            <span class="">
                <input type="number" class="pro-select-input-new" name="min_amount" value="{{old('min_amount')}}" />
                <br>
               @error('min_amount')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
        <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Percentage Earning </span>
            <span class="">
                <input type="number" class="pro-select-input-new" name="percent" value="{{old('percent')}}" />
                <br>
               @error('percent')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
        <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Percentage Tag </span>
            <span class="">
                <input type="text" class="pro-select-input-new" name="percent_ref" value="{{old('percent_ref')}}" />
                <br>
               @error('percent_ref')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
        <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Referral Bonus Percent </span>
            <span class="">
                <input type="number" class="pro-select-input-new" name="percent_referral" value="{{old('percent_referral')}}" />
                <br>
               @error('percent_referral')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
          <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Duration (Day) </span>
            <span class="">
                <input type="number" class="pro-select-input-new" name="duration" value="{{old('duration')}}" />
                <br>
               @error('duration')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
          <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Upload icon </span>
            <span class="">
                <input type="file" class="pro-select-input-new" name="icon" accept="jpg, jpeg, png, svg, gif" />
                <br>
               @error('icon')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
          <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Type </span>
            <span class="">
                <input type="text" class="pro-select-input-new" name="type_in" value="{{old('type_in')}}" />
                <br>
               @error('type_in')
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
      </div>

      <!-- Modal footer -->
      <div class="text-right py-4 px-2">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit_payment_gate_btn">Save Changes</button>
      </div>

    </form>
  </div>
</div>


<!-- The Modal New -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <form action="{{ route('investPlanUpdate') }}" method="post" enctype="multipart/form-data" class="modal-content">
    @csrf
    <input type="hidden" name="inp_id" id="inp_id" value="{{ old('inp_id') }}" />
    <input type="hidden" name="icon_img_hd" id="icon_img_hd" value="{{ old('icon_img_hd') }}" />
      <!-- Modal Header -->
      <h4 class="big-font-size px-2 py-4">Create Plan</h4>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="justify-no-space-between">
            <span class="mr-2 pro-select-input-text">Name of plan </span>
            <span class="">
                <input type="text" class="pro-select-input-new" name="name" id="name" value="{{old('name')}}" />
                <br>
               @error('name')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
            </span>
        </div>
        <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Max Amount </span>
            <span class="">
                <input type="number" class="pro-select-input-new" name="max_amount" id="max_amount" value="{{old('max_amount')}}" />
                <br>
               @error('max_amount')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
        <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Min Amount </span>
            <span class="">
                <input type="number" class="pro-select-input-new" name="min_amount" id="min_amount" value="{{old('min_amount')}}" />
                <br>
               @error('min_amount')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
        <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Percentage Earning </span>
            <span class="">
                <input type="number" class="pro-select-input-new" name="percent" id="percent" value="{{old('percent')}}" />
                <br>
               @error('percent')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
        <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Percentage Tag </span>
            <span class="">
                <input type="text" class="pro-select-input-new" name="percent_ref" id="percent_ref" value="{{old('percent_ref')}}" />
                <br>
               @error('percent_ref')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
        <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Referral Bonus Percent </span>
            <span class="">
                <input type="number" class="pro-select-input-new" name="percent_referral" id="percent_referral" value="{{old('percent_referral')}}" />
                <br>
               @error('percent_referral')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
          <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Duration (Day) </span>
            <span class="">
                <input type="number" class="pro-select-input-new" name="duration" id="duration" value="{{old('duration')}}" />
                <br>
               @error('duration')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
          <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Upload icon </span>
            <span class="">
                <input type="file" class="pro-select-input-new" name="icon" accept="jpg, jpeg, png, svg, gif" />
                <br>
               @error('icon')
                    <span class="force-color-red pro-select-input-text-error">{{ $message }}</span>
                @enderror
              </span>
        </div>
          <div class="justify-no-space-between mt-4">
            <span class="mr-2 pro-select-input-text">Type </span>
            <span class="">
                <input type="text" class="pro-select-input-new" name="type_in" id="type_in" value="{{old('type_in')}}" />
                <br>
               @error('type_in')
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
      </div>

      <!-- Modal footer -->
      <div class="text-right py-4 px-2">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit_payment_gate_btn">Save Changes</button>
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
          @if(session('statusErrorStore'))
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

          @if(session('statusSuccess'))
                window.onload = (event) => {
                   bs4pop.notice('Saved', {position: 'topright', type: 'success'})
                };
          @endif
        </script>

        <script>
          $(document).ready(function(){
                
                $(document).on('click', '#click-modal-update', function(){
                  document.querySelector("#inp_id").value = $(this).attr("data-id");
                  document.querySelector("#name").value = $(this).attr("data-name");
                  document.querySelector("#max_amount").value = $(this).attr("data-max_amount");
                  document.querySelector("#min_amount").value = $(this).attr("data-min_amount");
                  document.querySelector("#percent_referral").value = $(this).attr("data-percent_referral");
                  document.querySelector("#percent").value = $(this).attr("data-percent");
                  document.querySelector("#percent_ref").value = $(this).attr("data-percent_ref");
                  document.querySelector("#duration").value = $(this).attr("data-duration");
                  document.querySelector("#type_in").value = $(this).attr("data-type_in");
                  document.querySelector("#icon_img_hd").value = $(this).attr("data-icon");
                  
                  document.querySelector("#status").value = $(this).attr("data-status");
                  if($(this).attr("data-status")== 1){statusMss = "Active";}else{statusMss = "Pending"}
                  document.querySelector("#status").innerHTML = statusMss;

                     modalBg.classList.add("modal-bg-active");
                 }); 
             });
        </script>
    </body>
</html>