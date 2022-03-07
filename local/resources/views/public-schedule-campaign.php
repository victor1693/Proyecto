<!DOCTYPE html>
<html lang="en">
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/libs.bundle.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/theme.bundle.css" id="stylesheetLight" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/theme-dark.bundle.css" id="stylesheetDark" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
        <style>
            body{display: none;}

            .budget-initial{
                background: none; 
                color: inherit; 
                border: none; 
                padding: 0; 
                outline: inherit;
                cursor: context-menu;
            }

            .budget-focus{
                background: none; 
                color: inherit;
                padding: 0; 
                outline: inherit;
                margin-top: -2px;
                border: 1px solid rgb(210, 221, 236);
                color:rgb(51, 94, 234)
            }
            .budget-error{
                background: none; 
                color: inherit;
                padding: 0; 
                outline: inherit;
                margin-top: -2px;
                border: 1px solid rgb(220, 53, 69);
                color:rgb(220, 53, 69);
            }

            .form-control-range{
                border-color:none;
            }

        </style>
        <title>
            Schedule campaign
        </title>
    </head>
    <body>
        <div class="main-content">
            <div class="container-lg container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8">
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
                                            Schedule campaign
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Genre
                                </h4>
                            </div>
                            <div class="card-body">
                                <select class="form-control mg-b-15" data-live-search="true" id="generos_select" multiple="" name="generos[]" required="">
                                    <option value="">
                                        Select
                                    </option>
                                    <option value="salsa">
                                        Salsa
                                    </option>
                                    <option value="merengue">
                                        Merengue
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Estimated Results
                                </h4>
                            </div>
                            <div class="card-body">
                                <h4 class="card-header-title mb-2">
                                    Budget
                                </h4>

                                <div class="input-group input-group-merge" style="">
                                    <div class="py-1 px-0" style="background: none; color: inherit; border: none; font: inherit; outline: inherit;"><i class="fe fe-dollar-sign"></i></div>
                                    <input class="form-input h1 px-1 mx-1 mb-1 budget-initial" id="flag_inversion" value="<?= number_format(49, 0, ',', ' ');?>" 
                                    style="width:12%; border-radius:5px"
                                    onfocus="budgetFocus()">
                                    <span class="input-group-text" style="background: none; color: inherit; border: none; padding: 0; font: inherit; outline: inherit;">
                                        <button type="button" class="btn" style="background: none; color: inherit; border: none; padding: 0; font: inherit; outline: inherit;" onclick="changeBudget()">
                                            <i class="fe fe-edit-2">
                                            </i>
                                        </button>
                                    </span>
                                </div>
                                
                                <input value="49" id="campaign_reach" style="cursor: pointer;width: 100%;" name="inversion" class="mb-4 form-control-range" type="range" value="0" max="1300" min="49" step="1">
                                </input>

                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="card-header-title mb-2">
                                            Reach
                                            <i class="fe fe-info fs-5 fw-bold">
                                            </i>
                                        </h4>
                                        <span class="badge bg-primary-soft fw-bold">
                                            <i class="fe fe-user fs-5 fw-bold">
                                            </i>
                                            15,850 - 45,800
                                        </span>
                                        <div class="progress progress-sm mt-3">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar" role="progressbar" style="width: 10%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h4 class="card-header-title mb-2">
                                            Streams
                                            <i class="fe fe-info fs-5 fw-bold">
                                            </i>
                                        </h4>
                                        <span class="badge bg-primary-soft fw-bold">
                                            <i class="fe fe-music">
                                            </i>
                                            4,755 - 9,160
                                        </span>
                                        <div class="progress progress-sm mt-3">
                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar" role="progressbar" style="width: 10%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mt-3">
                                    The accuracy of estimates is based on factors like past campaign data, the budget you entered, market data, targeting criteria and ad placements. Numbers are provided to give you an idea of performance for your budget, but are only estimates and don't guarantee results.
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Start Date
                                </h4>
                            </div>
                            <div class="card-body">
                                <input class="form-control mb-3" name="" type="date"/>
                                <p class="text-muted">
                                    Your campaign will start within 48 hours or within a start date you select. All our campaigns are running for 14 days to ensure that we let the playlist curators have enough time to review your song.
                                </p>
                            </div>
                        </div>
                        <div class="mb-5 row">
                            <div class="col-6" style="text-align: left;">
                                <a class="btn btn-primary" href="public-campaign-new.php" style="width: 120px;">
                                    Go Back
                                </a>
                            </div>
                            <div class="col-6" style="text-align: right;">
                                <a class="btn btn-primary" href="public-details-campaign.php" style="width: 120px;">
                                    Continue
                                </a>
                            </div>
                        </div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js">
        </script>
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
            
            $(document).ready(function(){
             $('#generos_select').selectpicker();
           });

           //CÓDIGO PARA EL BUDGET BAR Y BUDGET INPUT

            var x_global = 1;


            //funciones de cambio de valor del Slider y de la Barra
            
            var slider = document.getElementById('campaign_reach');
            var input = document.getElementById('flag_inversion');

            input.value = slider.value

            slider.oninput = function(){
                input.value = this.value
                budgetRange(input.value)
            }

            $('#flag_inversion').change(function(){
                var x = document.getElementById('flag_inversion').value;
                document.getElementById('campaign_reach').value = x;
                budgetRange(x);
            });

            input.oninput = function(){
                if(this.value>=49&&this.value<=1300){
                    input.style.color = 'rgb(40, 167, 69)';
                    input.style.borderColor = 'rgb(40, 167, 69)';
                }
                else{
                    input.style.color = 'rgb(220, 53, 69)';
                    input.style.borderColor = 'rgb(220, 53, 69)';
                }
            }
            input.onchange = function(){
                if(this.value>=49&&this.value<=1300){
                    input.style.color = 'black';
                    input.style.borderColor = 'black';
                }
                else{
                    input.style.color = 'rgb(220, 53, 69)';
                    input.style.borderColor = 'rgb(220, 53, 69)';
                }
            }
            input.onfocus = function(){
                input.style.color = 'rgb(51, 94, 234)';
                input.style.borderColor = 'rgb(51, 94, 234)';
            }

            //Función para determinar si el input tendrá focus o no
            function budgetFocus(){
                if(x_global==1){
                    $('#flag_inversion').blur()
                }
                else{
                    $('#flag_inversion').focus()
                }
            }

            //Función para cambiar el estilo del input cuando tiene focus
            function changeBudget(){
                x_global=0;
                $('#flag_inversion').removeClass('budget-initial');
                $('#flag_inversion').addClass('budget-focus')
                $('#flag_inversion').focus();
                
            }

            //Función para que el input tome el valor al presionar enter
            var input = document.getElementById("flag_inversion");
            input.addEventListener("keyup", function(event) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                    x_global = 1;
                    $('#flag_inversion').blur();
                }
            });

            //Función para validar el rango del budget

            function budgetRange(valor){
                if(valor>=49&&valor<=1300){
                    x_global = 1;
                    $('#flag_inversion').removeClass('budget-focus');
                    $('#flag_inversion').removeClass('budget-error');
                    $('#flag_inversion').addClass('budget-initial');
                    $('#continue').removeClass('disabled');
                    $("html").getNiceScroll().resize();
                }
                else{
                    x_global = 1;
                    $('#flag_inversion').removeClass('budget-initial');
                    $('#flag_inversion').removeClass('budget-focus');
                    $('#flag_inversion').addClass('budget-error');
                    $('#continue').addClass('disabled');
                    $("html").getNiceScroll().resize();
                }
            }

            //Validación del budget para que solo acepte números
            $(document).ready(function(){
              $('#flag_inversion').on('input', function(evt){
                  $(this).val($(this).val().replace(/[^0-9]/g, ''));
              })
           });

            //CÓDIGO PARA EL BUDGET BAR Y BUDGET INPUT

            var x_global = 1;


            //funciones de cambio de valor del Slider y de la Barra

                var slider = document.getElementById('campaign_reach');
                var input = document.getElementById('flag_inversion');

                input.value = slider.value

                slider.oninput = function(){
                input.value = this.value
                budgetRange(input.value)
                }

                $('#flag_inversion').change(function(){
                var x = document.getElementById('flag_inversion').value;
                document.getElementById('campaign_reach').value = x;
                budgetRange(x);
                });

                input.oninput = function(){
                    if(this.value>=49&&this.value<=1300){
                        input.style.color = 'rgb(40, 167, 69)';
                        input.style.borderColor = 'rgb(40, 167, 69)';
                    }
                    else{
                        input.style.color = 'rgb(220, 53, 69)';
                        input.style.borderColor = 'rgb(220, 53, 69)';
                    }
                }
                input.onchange = function(){
                    if(this.value>=49&&this.value<=1300){
                    input.style.color = 'black';
                    input.style.borderColor = 'black';
                    }
                    else{
                    input.style.color = 'rgb(220, 53, 69)';
                    input.style.borderColor = 'rgb(220, 53, 69)';
                    }
                }
                input.onfocus = function(){
                    input.style.color = 'rgb(51, 94, 234)';
                    input.style.borderColor = 'rgb(51, 94, 234)';
                }

                //Función para determinar si el input tendrá focus o no
                function budgetFocus(){
                    if(x_global==1){
                        $('#flag_inversion').blur()
                    }
                    else{
                        $('#flag_inversion').focus()
                    }
                }

                //Función para cambiar el estilo del input cuando tiene focus
                function changeBudget(){
                    x_global=0;
                    $('#flag_inversion').removeClass('budget-initial');
                    $('#flag_inversion').addClass('budget-focus')
                    $('#flag_inversion').focus();
    
                }

                //Función para que el input tome el valor al presionar enter
                var input = document.getElementById("flag_inversion");
                input.addEventListener("keyup", function(event) {
                    if (event.keyCode === 13) {
                        event.preventDefault();
                        x_global = 1;
                        $('#flag_inversion').blur();
                    }
                });

                //Función para validar el rango del budget

                function budgetRange(valor){
                    if(valor>=49&&valor<=1300){
                        x_global = 1;
                        $('#flag_inversion').removeClass('budget-focus');
                        $('#flag_inversion').removeClass('budget-error');
                        $('#flag_inversion').addClass('budget-initial');
                        $('#continue').removeClass('disabled');
                        $("html").getNiceScroll().resize();
                    }
                    else{
                        x_global = 1;
                        $('#flag_inversion').removeClass('budget-initial');
                        $('#flag_inversion').removeClass('budget-focus');
                        $('#flag_inversion').addClass('budget-error');
                        $('#continue').addClass('disabled');
                        $("html").getNiceScroll().resize();
                    }
                }

                //Validación del budget para que solo acepte números
                $(document).ready(function(){
                $('#flag_inversion').on('input', function(evt){
                    $(this).val($(this).val().replace(/[^0-9]/g, ''));
                })
                });

        </script>
    </body>
</html>