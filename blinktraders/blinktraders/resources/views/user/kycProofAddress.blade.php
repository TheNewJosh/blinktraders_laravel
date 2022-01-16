<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.meta')
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "kyc-snapshort-intro.php"; 
            $page_title = "KYC";
            $mi1 = $mi2 = $mi3 = $mi4 = $mi5 = $mi6 = $mi7 = $mi8 = "";
            $smi1 = $smi2 = $smi3 = $smi4 = $smi5 = "";
        ?>
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
                                    Proof of Address
                                </span>
                                <span class="force-color-blue small-font-size">
                                    Step 3
                                </span>
                            </div>
                            <div class="force-color-black big-font-size">Input your address details and upload a document to confirm the details</div>
                            <form action="{{ route('kycProofAddress') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="px-2 py-5">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Address</label>
                                                <input type="text" class="form-control" name="address" value="{{auth()->user()->address}}" id="exampleInputEmail1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Select document</label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="doc_type_prof">
                                                    <option value="Bills">Bills</option>
                                                    <option value="Receipts">Receipts</option>
                                                    <option value="Bank Statements">Bank Statements</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="text-center">Upload a snapshot of your document</div>
                                            <div class="drag-area" id="drag-area-1">
                                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                                <header id="header-1">Drag & Drop to Upload File</header>
                                                <span>OR</span>
                                                <button type="button" id="button-1">Browse File</button>
                                            </div>
                                            <input type="file" name="proof_snap" hidden id="input-1">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary px-5">Submit</button>
                            </form>
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

        <script>
            //selecting all required elements
            const dropArea = document.querySelector("#drag-area-1"),
            dragText = dropArea.querySelector("#header-1"),
            button = dropArea.querySelector("#button-1"),
            input = document.querySelector("#input-1");
            let file; //this is a global variable and we'll use it inside multiple functions

            button.onclick = ()=>{
            input.click(); //if user click on the button then the input also clicked
            }

            input.addEventListener("change", function(){
            //getting user select file and [0] this means if user select multiple files then we'll select only the first one
            file = this.files[0];
            dropArea.classList.add("active");
            showFile(); //calling function
            });


            //If user Drag File Over DropArea
            dropArea.addEventListener("dragover", (event)=>{
            event.preventDefault(); //preventing from default behaviour
            dropArea.classList.add("active");
            dragText.textContent = "Release to Upload File";
            });

            //If user leave dragged File from DropArea
            dropArea.addEventListener("dragleave", ()=>{
            dropArea.classList.remove("active");
            dragText.textContent = "Drag & Drop to Upload File";
            });

            //If user drop File on DropArea
            dropArea.addEventListener("drop", (event)=>{
            event.preventDefault(); //preventing from default behaviour
            //getting user select file and [0] this means if user select multiple files then we'll select only the first one
            file = event.dataTransfer.files[0];
            showFile(); //calling function
            });

            function showFile(){
            let fileType = file.type; //getting selected file type
            let validExtensions = ["image/jpeg", "image/jpg", "image/png"]; //adding some valid image extensions in array
            if(validExtensions.includes(fileType)){ //if user selected file is an image file
                let fileReader = new FileReader(); //creating new FileReader object
                fileReader.onload = ()=>{
                let fileURL = fileReader.result; //passing user file source in fileURL variable
                let imgTag = `<img src="${fileURL}" alt="">`; //creating an img tag and passing user selected file source inside src attribute
                dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
                }
                fileReader.readAsDataURL(file);
            }
            
            // else{
            //     alert("This is not an Image File!");
            //     dropArea.classList.remove("active");
            //     dragText.textContent = "Drag & Drop to Upload File";
            // }
            }

        </script>
        
        <script>
           @if(session('statusSuccess'))
              $(window).on('load', function() {
                  $('#myModalSuccess').modal('show');
                  setTimeout(window.location.replace("{{ route('kycSuccess')}}"), 5000)
              });
          @endif

          @if(session('statusError'))
              $(window).on('load', function() {
                  $('#myModalError').modal('show');
              });
          @endif              
        </script>
    </body>
</html>