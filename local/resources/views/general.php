<!DOCTYPE html>
<html lang="en">
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
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
            General
        </title>
    </head>
    <body>
        <?php include('includes/aside.php');?>
        <?php  
            $name = "";
            $lastname = "";
            $email = "";
            $phone = "";
            $role = "";
            $country = "";
            $img = "";
            
            if (count($data->account)>0) {
                $name = $data->account[0]->nombre;
                $lastname = $data->account[0]->apellido;
                $email = $data->account[0]->email;
                $role = $data->account[0]->role;
                $phone = $data->account[0]->telefono; 
                $pais = $data->account[0]->pais;
                $img = $data->account[0]->img;  
            }
        ?>
        <div class="main-content">
             
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <!-- Header -->
                        <div class="header mt-md-5">
                            <div class="header-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <!-- Pretitle -->
                                        <h6 class="header-pretitle">
                                            Overview
                                        </h6>
                                        <!-- Title -->
                                        <h1 class="header-title">
                                            Account
                                        </h1>
                                    </div>
                                </div>
                                <!-- / .row -->
                                <div class="row align-items-center">
                                    <div class="col">
                                        <?php include("includes/account-menu.php");?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Form -->
                        <form method="POST" action="<?= Request::root();?>/account-update" enctype="multipart/form-data">
                            <div class="row justify-content-between align-items-center">
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <input id="img_profile_input" type="file" name="img_profile" style="display: none;">
                                            <div class="avatar">
                                                <img style="cursor: pointer;" alt="..." class="avatar-img rounded-circle img_profile" src="<?= Request::root();?>/local/storage/app/profile_img/<?= $img;?>">
                                                </img>
                                            </div>
                                        </div>
                                        <div class="col ms-n2">
                                            <!-- Heading -->
                                            <h4 class="mb-1">
                                                Your avatar
                                            </h4>
                                            <!-- Text -->
                                            <small class="text-muted">
                                                PNG or JPG no bigger than 1000px wide and tall.
                                            </small>
                                        </div>
                                    </div>
                                    <!-- / .row -->
                                </div>
                                <div class="col-auto">
                                    <!-- Button -->
                                    <button type="button" class="btn btn-sm btn-primary img_profile">
                                        Upload
                                    </button>
                                </div>
                            </div>
                            <!-- / .row -->
                            <!-- Divider -->
                            <hr class="my-5">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <!-- First name -->
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label">
                                                First name
                                            </label>
                                            <!-- Input -->
                                            <input value="<?= $name;?>" id="name" name="name" class="form-control" type="text">
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
                                            <input value="<?= $lastname;?>" id="lastname" name="lastname" class="form-control" type="text">
                                            </input>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- First name -->
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label">
                                               Role
                                            </label>
                                            <select id="role" name="role" class="form-control">
                                               <option value="">Select</option>
                                              <?php foreach ($data->roles as $key): ?>
                                              <?php if (strtolower($key->rol)== strtolower($role)): ?>
                                                <option selected value="<?= $key->rol;?>"><?= ucfirst($key->rol);?></option>
                                              <?php else: ?>
                                                    <option class="text-capitalize" value="<?= $key->rol;?>"><?= ucfirst($key->rol);?></option>
                                              <?php endif ?>   
                                              <?php endforeach ?>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- Last name -->
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label">
                                               Country
                                            </label>
                                            <!-- Input -->
                                          <select name="country" id="pais" class="form-control">
                                              <option value="">Select</option>
                                              <?php foreach ($data->paises as $key): ?>
                                              <?php if ($key->pais): ?>
                                               <option selected value="<?= $key->pais;?>_<?= $key->code;?>"><?= $key->pais;?></option>  
                                              <?php else: ?>
                                              <option value="<?= $key->pais;?>_<?= $key->code;?>"><?= $key->pais;?></option><?php endif ?> 
                                              <?php endforeach ?>
                                          </select>
                                        </div>
                                    </div>
                                     
                                    <div class="col-12 col-md-6">
                                        <!-- Phone -->
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label">
                                                Email
                                            </label>
                                            <!-- Input -->
                                            <input readonly value="<?= $email;?>" id="email" name="email" class="form-control mb-3" placeholder="" type="text">
                                            </input>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- Birthday -->
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label">
                                                Phone
                                            </label>
                                            <!-- Input -->
                                             <input value="<?= $phone;?>" name="phone" maxlength="20" style="height: 40px;" id="telefono" class="form-control" type="text">
                                        </input>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" id="btn-save" class="btn btn-primary">
                                    Save changes
                                </button> 
                            </hr>
                        </form>
                        <br>
                            <br>
                            </br>
                        </br>
                    </div>
                </div>
                <!-- / .row -->
            </div>
        </div>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor.bundle.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/theme.bundle.js">
        </script> 
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        </script>
        <script src="https://www.jqueryscript.net/demo/jQuery-International-Telephone-Input-With-Flags-Dial-Codes/build/js/intlTelInput.js"></script>
        <script>
            $(document).ready(function(){
                $("#telefono").intlTelInput(); 
            });

            $("#pais").change(function(){
                code = $(this).val().split("_"); 
                $("#telefono").val("+"+code[1]);
                $("#telefono").keyup(); 
            });

            function isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }

            $("#btn-save").click(function(){
                $("input,select").removeClass('is-invalid');
                if($("#name").val() == ""){
                    $("#name").addClass('is-invalid');
                    $("#name").focus();
                }
                else if($("#lastname").val() == ""){
                    $("#lastname").addClass('is-invalid');
                    $("#lastname").focus();
                }
                else if($("#role").val() == ""){
                    $("#role").addClass('is-invalid');
                    $("#role").focus();
                }
                else if($("#pais").val() == ""){
                    $("#pais").addClass('is-invalid');
                    $("#pais").focus();
                }
                else if($("#email").val() == ""){
                    $("#email").addClass('is-invalid');
                    $("#email").focus();
                }
                else if($("#phone").val() == ""){
                    $("#phone").addClass('is-invalid');
                    $("#phone").focus();
                }else if(!isEmail($("#email").val())){
                    $("#email").addClass("is-invalid");
               }
               else{
                    $("form").submit();
               }
            });

            $(".img_profile").click(function(){
                $("#img_profile_input").click();
            });
        </script>
    </body>
</html>
