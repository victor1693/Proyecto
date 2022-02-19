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
            SignIn
        </title>
    </head>
    <body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">
                    <!-- Image -->
                    <div class="text-center">
                        <img alt="..." class="img-fluid" src="<?= Request::root();?>/local/resources/views/assets/img/illustrations/happiness.svg">
                        </img>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">
                    <!-- Heading -->
                    <h1 class="display-4 text-center mb-3">
                        Sign in
                    </h1>
                    <!-- Subheading -->
                    <p class="text-muted text-center mb-5">
                        Free access to our dashboard.
                    </p>
                    <!-- Form -->
                    <form method="POST" action="<?= Request::root();?>/signIn">
                        <!-- Email address -->
                        <div class="form-group">
                            <!-- Label -->
                            <label class="form-label">
                                Email Address
                            </label>
                            <!-- Input -->
                            <input value="victor.fernandez.18@gmail.com" id="email" name="email" class="form-control" placeholder="name@address.com" type="email">
                            </input>
                        </div>
                        <!-- Password -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <!-- Label -->
                                    <label class="form-label">
                                        Password
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <!-- Help text -->
                                    <a class="form-text small text-muted" href="<?= Request::root();?>/restore-password">
                                        Forgot password?
                                    </a>
                                </div>
                            </div>
                            <!-- / .row -->
                            <!-- Input group -->
                            <div class="input-group input-group-merge">
                                <!-- Input -->
                                <input value="208297" id="password" name="password" class="form-control" placeholder="Enter your password" type="password">
                                    <!-- Icon -->
                                    <span class="input-group-text">
                                        <i class="fe fe-eye">
                                        </i>
                                    </span>
                                </input>
                            </div>
                        </div>
                        <!-- Submit -->
                        <button type="button" id="btn-enviar" class="btn btn-lg w-100 btn-primary mb-3">
                            Sign in
                        </button>
                        <!-- Link -->
                        <div class="text-center">
                            <small class="text-muted text-center">
                                Don't have an account yet?
                                <a href="<?= Request::root();?>/campaign/new">
                                    Sign up
                                </a> 
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
        <script>
            $("#btn-enviar").click(function(){ 
             $("input").removeClass('is-invalid');

               if($("#email").val() == ""){
                $("#email").focus();
                $("#email").addClass('is-invalid');
               }
               else if($("#password").val() == ""){
                $("#password").focus();
                $("#password").addClass('is-invalid');
               }

               else{
                $("form").submit();
               }
            });
        </script>
    </body>
</html>
