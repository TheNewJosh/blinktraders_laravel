<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Blink Traders || Dashboard </title>
        <?php 
            $page = "blog-post-new.php"; 
            $page_title = "Blog"; 
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
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="main-content-body force-bg-white px-1 pt-2 pb-5"  id="mrda-margin-move">
                    
                    <h4 class="big-font-size tabel-heading-h">Create post</h4>
                    
                    <div class="mt-4 px-5 py-4">
                        <div class="row">
                            <span class="col col-lg-2">Title:</span>
                            <span class="col col-lg-10"><input type="text" class="pro-select-input" value="" /><br>
                <span class="force-color-red"></span></span>
                        </div>
                        <div class="row mt-4">
                            <span class="col col-lg-2">Category: </span>
                            <span class="col col-lg-10">
                                <select class="pro-select-input">
                                    <option value = "1" <?php if(1 == 1){ echo "selected";} ?> >INVESTING</option>
                                    <option value = "2" <?php if(1 == 2){ echo "selected";} ?> >Pending</option>
                                </select>
                <span class="force-color-red"></span>
                              </span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-2">Thumbnail:</span>
                            <span class="col col-lg-10"><input type="file" class="pro-select-input" accept="jpg, jpeg, png, svg, gif" value="" />
                            <br>
                <span class="force-color-red"></span>
                        </span>
                        </div>
                        <div class="row mt-5">
                            <span class="col col-lg-2">Content</span>
                            <span class="col col-lg-10">
                              <div class="form-group">
                                 <textarea id="editor"></textarea>
                              </div>
                <span class="force-color-red"></span>
                            </span>
                        </div>
                        <div class="mt-2">
                            <button type="button" class="btn btn-primary float-right" name="send_blog_btn">Send <i class="fas fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </form>
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
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        <script>
              tinymce.init({
              selector: "textarea#editor",
              skin: "bootstrap",
              plugins: "lists, link, image, media",
              toolbar:
                "h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help",
              menubar: false,
              setup: (editor) => {
                // Apply the focus effect
                editor.on("init", () => {
                  editor.getContainer().style.transition =
                    "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out";
                });
                editor.on("focus", () => {
                  (editor.getContainer().style.boxShadow =
                    "0 0 0 .2rem rgba(0, 123, 255, .25)"),
                    (editor.getContainer().style.borderColor = "#80bdff");
                });
                editor.on("blur", () => {
                  (editor.getContainer().style.boxShadow = ""),
                    (editor.getContainer().style.borderColor = "");
                });
              },
            });
        </script>
    </body>
</html>