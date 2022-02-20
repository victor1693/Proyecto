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
        <style>
            body{display: none;}
        </style>
        <title>
            Security
        </title>
    </head>
    <body>
        <?php include('includes/aside.php');?>
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
                                        <!-- Nav -->
                                        <?php include("includes/account-menu.php");?>
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                      
                            <div class="row justify-content-between align-items-center mb-5">
                                <div class="col-12 col-md-9 col-xl-7">
                                    <!-- Heading -->
                                    <h2 class="mb-2">
                                        Change your password
                                    </h2>
                                    <!-- Text -->
                                    <p class="text-muted mb-xl-0">
                                        We will email you a confirmation when changing your password, so please expect that email after submitting.
                                    </p>
                                </div>
                                <div class="col-12 col-xl-auto"> 
                                </div>
                            </div>
                            <!-- / .row -->
                            <div class="row">
                                <div class="col-12 col-md-6 order-md-2">
                                    <!-- Card -->
                                    <div class="card bg-light border ms-md-4" style="margin-top: 30px;">
                                        <div class="card-body">
                                            <!-- Text -->
                                            <p class="mb-2">
                                                Password requirements
                                            </p>
                                            <!-- Text -->
                                            <p class="small text-muted mb-2">
                                                To create a new password, you have to meet all of the following requirements:
                                            </p>
                                            <!-- List group -->
                                            <ul class="small text-muted ps-4 mb-0">
                                                <li id="p_caracteres">
                                                    At least 8 characters
                                                </li> 
                                                <li id="p_numero">
                                                    At least 1 number
                                                </li>
                                                <li id="p_mayuscula">
                                                    At least 1 uppercase letter
                                                </li> 
                                                <li id="p_espacios">
                                                    No space 
                                                </li> 
                                                <li id="p_coinciden">
                                                    Both match 
                                                </li>   
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <!-- Form -->
                                    <form id="form-password" action="<?= Request::root();?>/update-password" method="POST">
                                       
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label">
                                                New password
                                            </label>
                                            <!-- Input -->
                                            <input  id="t1" name="t1" class="form-control" type="password">
                                            </input>
                                        </div>
                                        <!-- Confirm new password -->
                                        <div class="form-group">
                                            <!-- Label -->
                                            <label class="form-label">
                                                Confirm new password
                                            </label>
                                            <!-- Input -->
                                            <input id="t2" name="t2" class="form-control" type="password">
                                            </input>
                                        </div>
                                        <!-- Submit -->
                                        <button disabled id="btn-password" class="btn w-100 btn-primary lift" type="button">
                                            Update password
                                        </button>
                                    </form>
                                </div>
                            </div> 
                        </hr>
                    </div>
                </div>
                <!-- / .row -->
            </div>
        </div>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor.bundle.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/theme.bundle.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
       
        <script>
            $("#btn-password").click(function(){
                $("input").removeClass('text-primary');

                if($("#t1").val()==""){
                    $("#t1").addClass("is-invalid");
                    $("#t1").focus();
                }
                else if($("#t2").val()==""){
                    $("#t2").addClass("is-invalid");
                    $("#t2").focus();
                }
                else if($("#t2").val()!= $("#t1").val()){
                    $("#t2").addClass("is-invalid");
                    $("#t1").addClass("is-invalid");
                    $("#t2").focus();
                    alert("Su password no coincide");
                }
                else if($("#t2").val().length < 8){
                    $("#t2").addClass("is-invalid");
                    $("#t1").addClass("is-invalid");
                    $("#t1").focus();
                    alert("Su password debe se de minimo 8 digitos.");
                }
                else{
                    $("#form-password").submit();
                }
            });


          $('input').keyup(function() {
             
            // set password variable
            var password = $(this).val();
            var p1 = document.getElementById("t1").value;
            var p2 = document.getElementById("t2").value;
            var noValido = / /;

         
            numero = false;
            mayuscula = false;
            espacio = false; 
            igualdad = false; 
            caracteres = false;

            //validar longitud contraseña
            if ( password.length >= 8 ) { 
                $('#p_caracteres').removeClass('text-danger').addClass('text-primary');
                caracteres = true;
            } else {
                $('#p_caracteres').removeClass('text-primary').addClass('text-danger');
                caracteres = false;
            }
             

            //validar letra mayúscula
            if ( password.match(/[A-Z]/) ) {
                $('#p_mayuscula').removeClass('text-danger').addClass('text-primary');
                mayuscula = true;
            } else { 
                $('#p_mayuscula').removeClass('text-primary').addClass('text-danger');
                mayúscula = false;
            }

            //validar numero
            if ( password.match(/\d/) ) { 
                $('#p_numero').removeClass('text-danger').addClass('text-primary');
                numero = true;
            } else {
                 $('#p_numero').removeClass('text-primary').addClass('text-danger');
                 numero = false;
            }

            if(p1 != "" && p2 != ""){ 
              
              //validar contraseñas cohincidan
              if (p1 != p2) {   
                $('#p_coinciden').removeClass('text-primary').addClass('text-danger'); 
                igualdad = false;
              } else {
                $('#p_coinciden').removeClass('text-danger').addClass('text-primary');
                igualdad = true;
              }

              if(noValido.test(p1 || p2)){ // se chequea el regex de que el string no tenga espacio
                 $('#p_espacios').removeClass('text-primary').addClass('text-danger');
                 espacio = false;
              } else {
                 $('#p_espacios').removeClass('text-danger').addClass('text-primary');
                  espacio = true;
              }
            } 

            if(espacio == true && mayuscula == true && numero == true && caracteres == true && igualdad == true){
                $("#btn-password").prop('disabled',false);
            }
            else{ 
                $("#btn-password").prop('disabled',true);
            }
        });

          
        </script>  
    </body>
</html>
