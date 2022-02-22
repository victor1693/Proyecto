<!DOCTYPE html>
<html lang="en">
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        
        <link href="<?= Request::root();?>/local/resources/views/assets/css/libs.bundle.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/theme.bundle.css" id="stylesheetLight" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/theme-dark.bundle.css" id="stylesheetDark" rel="stylesheet"/>
        <link rel="stylesheet" href="https://www.jqueryscript.net/demo/jQuery-International-Telephone-Input-With-Flags-Dial-Codes/build/css/intlTelInput.css"/>
        <style>
            body{display: none;}
            .tooltip-inner {
                max-width: 400px; 
                width: 400px; 
            }
            .flag-dropdown{
                margin-top: 5px;
            }
        </style>
        <title>
            Customer Information
        </title>
    </head>
    <body>
        <!-- Modal -->
        <div class="main-content">
            <div class="container-lg container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <div class="header mt-md-5">
                            <div class="header-body">
                                 <a href="<?= Request::root();?>/signIn">
                                     <object style="height: 50px;" data="<?= Request::root();?>/local/resources/views/assets/img/logo.svg"> </object>
                                </a>
                                <div class="row align-items-center mt-4">
                                    <div class="col">
                                        <!-- Pretitle -->
                                        <h6 class="header-pretitle">
                                            Overview
                                        </h6>
                                        <!-- Title -->
                                        <h1 class="header-title">
                                            Customer Information
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                        <form action="<?= Request::root();?>/account" method="POST" enctype="multipart/form-data">
                            
                            <input id="track_name" name="track_name" type="text" style="display: none;">
                            <input id="track_img" name="track_img" type="text" style="display: none;">
                            <input id="track_artist" name="track_artist" type="text" style="display: none;">
                            <input id="track_id" name="track_id" type="text" style="display: none;">
 
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <!-- First name -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="form-label">
                                            First name
                                        </label>
                                        <!-- Input -->
                                        <input id="name" name="name" class="form-control" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Last name -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="form-label">
                                            Last name
                                        </label>
                                        <!-- Input -->
                                        <input id="apellido" name="apellido" class="form-control" type="text">
                                        </input>
                                    </div>
                                </div>
                               
                                
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="form-label">
                                            Role
                                        </label>
                                        <select  id="role" name="role" class="form-control">
                                            <option value="">
                                                Select
                                            </option>
                                            <?php if (count($roles->data)>0): ?> 
                                            <?php foreach ($roles->data as $key): ?>
                                                <option class="text-capitalize" value="<?= $key->rol;?>"><?= $key->rol;?></option>
                                            <?php endforeach ?>
                                            <?php endif ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Birthday -->
                                    <div  class="form-group">
                                        <!-- Label -->
                                        <label class="form-label">
                                            Country
                                        </label>
                                        <select id="pais" name="pais" class="form-control">
                                            <option value="">
                                                Select
                                            </option>
                                            <?php if (count($paises->data)>0): ?> 
                                            <?php foreach ($paises->data as $key): ?>
                                                <?php if ($key->pais == "United States"): ?>
                                                <option selected class="text-capitalize" value="<?= $key->pais;?>_<?= $key->code;?>"><?= $key->pais;?></option>
                                                <?php else: ?>
                                                <option class="text-capitalize" value="<?= $key->pais;?>_<?= $key->code;?>"><?= $key->pais;?></option>
                                                <?php endif ?>
                                                
                                            <?php endforeach ?>
                                            <?php endif ?>
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-12 col-lg-6">
                                    <!-- Email address -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="form-label">
                                            Email address
                                        </label>
                                        <input  id="correo" name="correo" class="form-control" type="email">
                                        </input>
                                        <small class="form-text text-muted mt-2">
                                            Will be used to send you the password.
                                        </small>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Phone -->
                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="form-label">
                                            Phone
                                        </label>
                                        <!-- Input -->
                                        <input maxlength="20" style="height: 40px;" id="telefono" name="telefono" class="form-control" type="text">
                                        </input>
                                        <small class="form-text text-muted mt-2">
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5 row">
                                <div class="col-6" style="text-align: left;">
                                    <a class="btn btn-primary" href="<?= Request::root();?>/campaign/new" style="width: 120px;">
                                        Go Back
                                    </a>
                                </div>
                                <div class="col-6" style="text-align: right;">
                                    <button type="button" id="btn-create" class="btn btn-primary" href="<?= Request::root();?>/campaign-schedule" style="width: 120px;">
                                        Finish
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor.bundle.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/theme.bundle.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        </script>
        <script src="https://www.jqueryscript.net/demo/jQuery-International-Telephone-Input-With-Flags-Dial-Codes/build/js/intlTelInput.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"></script>
        <script>
          
            $(document).ready(function(){
                $("#telefono").intlTelInput();
                $("#track_name").val(Cookies.get('track_name'));
                $("#track_artist").val(Cookies.get('track_artist'));
                $("#track_id").val(Cookies.get('track_id'));
                $("#track_img").val(Cookies.get('track_img')); 
                
            });

            function isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }

            $("#btn-create").click(function(){
               $("input,select").removeClass('is-invalid');
               if($("#name").val() == ""){
                $("#name").addClass("is-invalid");
               }
               else if($("#apellido").val() == ""){
                $("#apellido").addClass("is-invalid");
               }
                else if($("#role").val() == ""){
                $("#role").addClass("is-invalid");
               }
                else if($("#pais").val() == ""){
                $("#pais").addClass("is-invalid");
               }
               else if($("#correo").val() == ""){
                $("#correo").addClass("is-invalid");
               }
               else if(!isEmail($("#correo").val())){
                $("#correo").addClass("is-invalid");
               }
               else{
                    $("form").submit();
               }
            });

            // SETEAMOS EL CODE NUMBER AL CAMBIAR DE PAIS
            
            $("#pais").change(function(){
                code = $(this).val().split("_"); 
                $("#telefono").val("+"+code[1]);
                $("#telefono").keyup(); 
            });

            // SIMULAMOS EL CLICH EN EL AVATAR
            
            $("#btn-avatar").click(function(){
                $("#avatar").click();
            });
             
            // PREVIEW DE LA IMG 
            var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
              URL.revokeObjectURL(output.src) // free memory
            }
          };
        </script>

        <?php if (Session::has('info')): ?>
            <script>alert("<?= Session::get('info');?>")</script>
        <?php endif ?>
    </body>
</html>