<!DOCTYPE doctype html>
<html lang="en">
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/libs.bundle.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/theme.bundle.css" id="stylesheetLight" rel="stylesheet"/>

        <style>
             body { display: none; }
        </style>
        <title>
            Restore Password
        </title>
    </head>
    <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">
        <div class="container">
             <div class="row align-items-center">
        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

          <!-- Image -->
          <div class="text-center">
            <img src="<?= Request::root();?>/local/resources/views/assets/img/illustrations/coworking.svg" alt="..." class="img-fluid">
          </div>

        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">

          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Password reset
          </h1>

          <!-- Subheading -->
          <p class="text-muted text-center mb-5">
            Enter your email to get a password reset link.
          </p> 

          <form method="POST" action="<?= Request::root();?>/restore-passwrod"> 
            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label class="form-label">
                Email Address
              </label>

              <!-- Input -->
              <input id="email" name="email" type="email" class="form-control" placeholder="name@address.com">

            </div>

            <!-- Submit -->
            <button type="button" id="btn-enviar" class="btn btn-lg w-100 btn-primary mb-3">
              Reset Password
            </button>

            <!-- Link -->
            <div class="text-center">
              <small class="text-muted text-center">
                Remember your password? <a href="<?= Request::root();?>/signIn">Log in</a>.
              </small>
            </div>

          </form>

        </div>
      </div>
        </div>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor.bundle.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/theme.bundle.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script>
           $(document).ready(function () {
                if ($(window).width() >= 992) {
                    $("html,.scroll").niceScroll({
                        cursorcolor:"#ddd"
                    });
                }
                else{
                }     
            });
            
            $("#btn-enviar").click(function(){
                $("input").removeClass('is-invalid');

                if($("#email").val() == ""){
                    $("#email").addClass('is-invalid');
                }
                else{
                    $("form").submit();
                }
            });
        </script>
    </body>
</html>
