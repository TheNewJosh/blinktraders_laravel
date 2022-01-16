<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "kyc-snapshort-take.php"; 
            $page_title = "KYC";
            $mi1 = $mi2 = $mi3 = $mi4 = $mi5 = $mi6 = $mi7 = $mi8 = "";
            $smi1 = $smi2 = $smi3 = $smi4 = $smi5 = "";
        ?>
        <style>
         #vid {
    width: 250px !important;
    height: 250px !important;
    border-radius: 50% !important;
    position: relative;
    align-items: center;
    left: 50px;
}
#mobileshow { 
display:none; 
}
@media screen and (max-width: 500px) {
#mobileshow { 
display:block; }
}
        </style>
    </head>
    <body>
        <main class="main-dash row main-bottom">
            <section class="col col-lg-1 display-none-area">
                @include('user.layouts.sidebar')
            </section>
            <section class="heading-dash col col-lg-11">
                <div class="head-border-bottom">
                    @include('user.layouts.header')
                </div>
                <div class="pofolio-div">
                    <div class="space-mobile"></div>
                    @if(auth()->user()->kyc_verify == 0)
                    <h4 class="force-color-black force-small-text">
                        Your account is not yet verified
                        <span class="force-bg-red px-2 py-2 small-font-size border-curve-5">UNVERIFIED</span>
                    </h4>
                    @endif
                    @if(auth()->user()->kyc_verify == 1)
                    <h4 class="force-color-black force-small-text">
                        Your account is verified
                        <span class="force-bg-green px-2 py-2 small-font-size border-curve-5">VERIFIED</span>
                    </h4>
                    @endif
                    <div class="mt-5 mb-5 deposit-res-px-5">
                        <div class="force-bg-gray master-deposit-div-wk px-4 py-2">
                            <div class="d-flex justify-content-between">
                                <span class="force-color-black big-font-size">
                                    Snapshot
                                </span>
                                <span class="force-color-blue small-font-size">
                                    Step 1
                                </span>
                            </div>
                            <div class="row px-2 py-2">
                                <div class="text-center">
                                    <span class="big-font-size">
                                        Hold your phone at eye level and make sure your face is entered in the oval shape for the snapshot
                                    </span>
                                </div>
                            </div>
                            <div id="my_camera" class="text-center"><img src="{{ asset('img/user/') }}/{{auth()->user()->snapshot}}" class="img-sizes-12x" ></div>
                            <div id="results"></div><br><br>
                            <div class="d-flex justify-content-center">
                            <button type="button" onclick="configure();" id="configure" class="btn btn-primary px-5">Take snapshot</button>
                            <button type="button" onclick="saveSnap();" id="saveSnap" class="btn btn-primary px-5 mrda-display-none">Save</button>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalSuccess">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="force-color-green" style="font-size:50px;"><i class="far fa-check-circle"></i></span><br>
            <span class="big-font-size">Successful</span><br><br><br>
            <a href="{{ route('kycDocument') }}" class="btn btn-primary px-5">Continue</a>
      </div>
    </div>
  </div>
</div>

<!-- The Modal trigger account not verify -->
<div class="modal" id="myModalError">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <!-- Modal body -->
      <div class="modal-body text-center">
            <span class="force-color-red" style="font-size:50px;"><i class="far fa-window-close"></i></span><br>
            <span class="big-font-size">Sorry!</span><br>
            <span class="small-font-size text-center">An Error Occur</span><br><br>
      </div>
    </div>
  </div>
</div>
        
        @include('user.layouts.footer')

        <script src="{{ asset('js/webcam.min.js') }}" type="application/javascript"></script>
        <script type="application/javascript">
            function configure(){
                document.querySelector('#saveSnap').classList.remove("mrda-display-none");
                document.querySelector('#configure').classList.add("mrda-display-none");

                Webcam.set({
                    width: 250,
                    height: 250,
                    image_format: 'jpeg',
                    jpeg_quality: 90
                });

                Webcam.attach('#my_camera');
            }

            function saveSnap(){
                document.querySelector('#configure').classList.remove("mrda-display-none");
                document.querySelector('#saveSnap').classList.add("mrda-display-none");

                Webcam.snap(function(data_uri){
                    document.getElementById('results').innerHTML= '<img id="webcam" src="'+data_uri+'">';
                });

                Webcam.reset();

                var base64image = document.getElementById("webcam").src;
                var csrf_token = '{{ csrf_token() }}';
	            var url = "{{ route('kycSnapshortTake') }}?_token=" + csrf_token ;
                Webcam.upload(base64image, url,function(code,text){
                    $('#myModalSuccess').modal('show');
                })
            }
        </script>
        
    </body>
</html>