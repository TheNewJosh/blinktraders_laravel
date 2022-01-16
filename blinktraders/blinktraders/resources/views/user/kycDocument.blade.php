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
                                    Upload Document
                                </span>
                                <span class="force-color-blue small-font-size">
                                    Step 2
                                </span>
                            </div>
                            <div class="force-color-black big-font-size">Snap and upload the selected document. Both front and back view.</div>
                            <form action="{{ route('kycDocument') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="px-2 py-5">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Select document</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="doc_type_snap" style="width:50%;">
                                            <option value="Drivers License">Drivers License</option>
                                            <option value="National ID Card">National ID Card</option>
                                            <option value="International Passport">International Passport</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="text-center">Upload the front of your document</div>
                                            <div class="drag-area" id="drag-area-1">
                                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                                <header id="header-1">Drag & Drop to Upload File</header>
                                                <span>OR</span>
                                                <button type="button" id="button-1">Browse File</button>
                                            </div>
                                            <input type="file" name="front_snapshot" hidden id="input-1">
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="text-center">Upload the back of your document</div>
                                            <div class="drag-area" id="drag-area-2">
                                                <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                                <header id="header-2">Drag & Drop to Upload File</header>
                                                <span>OR</span>
                                                <button type="button" id="button-2">Browse File</button>
                                            </div>
                                            <input type="file" name="back_snapshot" hidden id="input-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary px-5">Continue</button>
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
            <a href="{{ route('kycProofAddress') }}" class="btn btn-primary px-5">Continue</a>
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
            //selecting all required elements
            const dropArea2 = document.querySelector("#drag-area-2"),
            dragText2 = dropArea2.querySelector("#header-2"),
            button2 = dropArea2.querySelector("#button-2"),
            input2 = document.querySelector("#input-2");
            let file2; //this is a global variable and we'll use it inside multiple functions

            button2.onclick = ()=>{
            input2.click(); //if user click on the button then the input also clicked
            }

            input2.addEventListener("change", function(){
            //getting user select file and [0] this means if user select multiple files then we'll select only the first one
            file2 = this.files[0];
            dropArea2.classList.add("active");
            showFile2(); //calling function
            });


            //If user Drag File Over DropArea
            dropArea2.addEventListener("dragover", (event)=>{
            event.preventDefault(); //preventing from default behaviour
            dropArea2.classList.add("active");
            dragText2.textContent = "Release to Upload File";
            });

            //If user leave dragged File from DropArea
            dropArea2.addEventListener("dragleave", ()=>{
            dropArea2.classList.remove("active");
            dragText2.textContent = "Drag & Drop to Upload File";
            });

            //If user drop File on DropArea
            dropArea2.addEventListener("drop", (event)=>{
            event.preventDefault(); //preventing from default behaviour
            //getting user select file and [0] this means if user select multiple files then we'll select only the first one
            file2 = event.dataTransfer.files[0];
            showFile2(); //calling function
            });

            function showFile2(){
            let fileType2 = file2.type; //getting selected file type
            let validExtensions2 = ["image/jpeg", "image/jpg", "image/png"]; //adding some valid image extensions in array
            if(validExtensions2.includes(fileType2)){ //if user selected file is an image file
                let fileReader2 = new FileReader(); //creating new FileReader object
                fileReader2.onload = ()=>{
                let fileURL2 = fileReader2.result; //passing user file source in fileURL variable
                let imgTag2 = `<img src="${fileURL2}" alt="">`; //creating an img tag and passing user selected file source inside src attribute
                dropArea2.innerHTML = imgTag2; //adding that created img tag inside dropArea2 container
                }
                fileReader2.readAsDataURL(file2);
            }
            // else{
            //     alert("This is not an Image File!");
            //     dropArea2.classList.remove("active");
            //     dragText2.textContent = "Drag & Drop to Upload File";
            // }
            }

        </script>

        <script>
           @if(session('statusSuccess'))
              $(window).on('load', function() {
                  $('#myModalSuccess').modal('show');
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