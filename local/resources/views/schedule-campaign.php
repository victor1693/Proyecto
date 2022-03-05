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
         <link href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"></script>
      <script>
        if(typeof Cookies.get("track_id") !== "undefined"){
             $("#id_track").val(Cookies.get('track_id'));
        }else{
            Cookies.remove('track_name');
            Cookies.remove('track_img');
            Cookies.remove('track_artist');
            Cookies.remove('track_id'); 
            window.location.href = "<?= Request::root();?>/campaign-new";
        }
      </script>
        <style>
            body{display: none;}
            .is-invalid{
                border: 1px solid red !important;
            }
             
            input[type="date"]::-webkit-calendar-picker-indicator {
                display: block;
                background: transparent;
                bottom: 0;
                color: transparent;
                cursor: pointer;
                height: auto;
                left: 0;
                position: absolute;
                right: 0;
                top: 0;
                width: auto;
            } 

            .new-secundary{
                color: #bababa;
            }

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
                border: 1px solid gray;
                border-radius: 15px;
            }
 
        </style>
        <title>
            Schedule campaign
        </title>
    </head>
    <body>
        <?php include('includes/aside.php');?>
        <!-- Modal -->
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
                                    <?php if (count($generos->data) > 0): ?> 
                                    <?php foreach ($generos->data as $key): ?> 
                                        <option class="text-capitalize" value="<?= $key->id;?>_<?= $key->genero;?>">
                                            <?= $key->genero;?>
                                        </option>
                                    <?php endforeach ?>
                                <?php endif ?> 
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
                                <div class="input-group input-group-merge" style="float:left;">
                                    <span style="background: none; color: inherit; border: none; padding: 0; font: inherit; outline: inherit; align-items:center;"><i class="fe fe-dollar-sign"></i></span>
                                    <input class="form-input h1 mb-1 budget-initial" id="flag_inversion" value="<?= number_format(50, 2, ',', ' ');?>" 
                                    style="width:17%;"
                                    onfocus="budgetFocus()">
                                        <span class="input-group-text" style="background: none; color: inherit; border: none; padding: 0; font: inherit; outline: inherit;">
                                            <button type="button" class="btn" style="background: none; color: inherit; border: none; padding: 0; font: inherit; outline: inherit;" onclick="changeBudget()">
                                                <i class="fe fe-edit-2">
                                                </i>
                                            </button>
                                        </span>
                                    </input>
                                </div>
                                
                                <input value="49" id="campaign_reach" style="cursor: pointer;width: 100%" name="inversion" class="mb-4 form-control-range" type="range" value="0" max="1300" min="49" step="1">
                                </input>
                                
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="card-header-title mb-2">
                                            Reach
                                            <i class="fe fe-info fs-5 fw-bold" style="font-size: 16px;cursor: pointer;" data-bs-toggle="tooltip" data-bs-placement="top" title="This is the number of people we estimate you'll reach in your genre throughout your campaign. This has to do with factors like your budget, genre, playlist size and ad placements. Your actual reach may be higher or lower than this estimate.">
                                            </i>
                                        </h4>
                                        <span class="badge bg-primary-soft fw-bold">
                                            <i class="fe fe-user fs-5 fw-bold">
                                            </i>
                                            <span id="flag_min_reach">15,850</span>
                                             - 
                                            <span id="flag_max_reach">45,800</span>
                                        </span>
                                        <div class="progress progress-sm mt-3">
                                            <div id="estimated_reach" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar" role="progressbar" style="width: 10%">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h4 class="card-header-title mb-2">
                                            Conversions
                                            <i class="fe fe-info fs-5 fw-bold" style="font-size: 16px;cursor: pointer;" data-bs-toggle="tooltip" data-bs-placement="top" title="This is the number of plays, streams, likes, saves, playlist adds, comments, etc that we estimate you can get from your campaign based on your performance and estimated daily reach. The actual number of conversions you get may be higher or lower than this estimate.">
                                            </i>
                                        </h4>
                                        <span class="badge bg-primary-soft fw-bold">
                                            <i class="fe fe-music">
                                            </i>
                                             <span id="flag_min_stream">4,755</span>
                                             - 
                                            <span id="flag_max_stream">9,160</span> 
                                        </span>
                                        <div class="progress progress-sm mt-3">
                                            <div id="estimated_streams" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar" role="progressbar" style="width: 10%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted mt-3">
                                    The accuracy of estimates is based on factors like past campaign data, the budget you entered, market data, targeting criteria and ad placements. Numbers are provided to give you an idea of performance for your budget, but are only estimates and don't guarantee results.
                                </p>

                                <h4 class="card-header-title mb-2">
                                    Gift Card or Discount Code
                                </h4>
                                <div class="input-group mb-3"> 
                                  <input id="cupon" type="text" class="form-control" placeholder="Gift Card or Discount Code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                  <div class="input-group-append">
                                    <button id="btn-cupon" class="btn btn-primary" style="border-top-left-radius: 0;border-bottom-left-radius: 0;" type="button"><i class="fe fe-arrow-right"></i></button>
                                  </div>
                                </div>
                                <p class="mb-0 badge bg-light fs-4" id="text_cupon"><span class="fw-bold text-primary text-uppercase" id="text_cupon_value"></span> <i id="delete-discount" title="Remove coupon" class="fe fe-x-circle text-secondary" style="cursor: pointer;"></i></p>
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
                                <div class="input-group mb-3 flex-nowrap"> 
                                 <input value="" id="date" class="form-control" name="date" type="date"/>
                                  <span class="input-group-text icon-date">
                                    <i class="fe fe-calendar"></i>
                                  </span> 
                                </div> 
                                <p class="text-muted">
                                    Your campaign will start within 48 hours or within a start date you select. All our campaigns are running for 14 days to ensure that we let the playlist curators have enough time to review your song.
                                </p>
                            </div>
                        </div>
                        <div class="mb-5 row">
                            <div class="col-6" style="text-align: left;">
                                <a class="btn btn-primary" href="<?= Request::root();?>/campaign-new" style="width: 120px;">
                                    Go Back
                                </a>
                            </div>
                            <div class="col-6" style="text-align: right;">
                                <button id="continue" type="button" class="btn btn-primary" style="width: 120px;">
                                    Continue
                                </button>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js">
        </script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/df-number-format/2.1.6/jquery.number.min.js"></script> 
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
             loadInfo()
             calcular($("#campaign_reach").val());
             $('#generos_select').selectpicker();
           });


            $("#campaign_reach").change(function(){
                calcular($(this).val());
            });

            $("#delete-discount").click(function(){ 
                Cookies.remove('cupon_code');
                Cookies.remove('cupon_tipo');
                Cookies.remove('cupon_percent');
                Cookies.remove('cupon_amount');
                $("#cupon").val("");
                calcular($("#campaign_reach").val());
            });

            $("#btn-cupon").click(function(){
                $("#cupon").removeClass("is-invalid");
                if($("#cupon").val()==""){
                    $("#cupon").addClass("is-invalid");
                    $("#cupon").focus();
                    return 0;
                }
                var settings = {
                  "url": "https://app.venbia.com/v1/cupon/" + $("#cupon").val(),
                  "method": "GET",
                  "timeout": 0,
                  "headers": {},
                }; 
                $.ajax(settings).done(function (response) {
                  if(response['cupon'].length == 0){
                    $("#cupon").addClass("is-invalid");
                    $("#cupon").focus();
                    return 0;
                  } 
                   Cookies.set('cupon_code', response['cupon'][0].cupon_token);
                   Cookies.set('cupon_tipo',  response['cupon'][0].tipo_cupon);
                   Cookies.set('cupon_percent', response['cupon'][0].porcentaje_dicount);
                   Cookies.set('cupon_amount',  response['cupon'][0].monto_discount);
                   $("#cupon").addClass("is-valid");
                    calcular($("#campaign_reach").val());
                });
            });

            function calcular(valor){
              
            var inversion = valor;
            var min_streams = 0;
            var max_streams = 0;
            var min_reach = 0;
            var max_reaxh = 0; 

            if(inversion!= 0 && inversion != ""){
                    min_reach = inversion * 317;
                    max_reach = inversion * 916;

                    min_streams = min_reach * 0.3;
                    max_streams = max_reach * 0.2;
                    
                    cupon_tipo = "";
                    cupon_percent = ""; 
                    cupon_amount = ""; 
                    cupon_code = "";

                    if(typeof Cookies.get("cupon_tipo") !== "undefined"){
                        cupon_tipo = Cookies.get('cupon_tipo'); 
                    }
                    if(typeof Cookies.get("cupon_percent") !== "undefined"){
                        cupon_percent = Cookies.get('cupon_percent'); 
                    }
                    if(typeof Cookies.get("cupon_amount") !== "undefined"){
                        cupon_amount = Cookies.get('cupon_amount'); 
                    }
                    if(typeof Cookies.get("cupon_code") !== "undefined"){
                        cupon_code = Cookies.get('cupon_code'); 
                    }
                    if(cupon_tipo == "monto"){ 
                        descuento = $.number(valor - cupon_amount,  0, '.',',');
                        valor = $.number(valor,  0, '.',','); 
                        inversion = '<span class="text-muted fw-normal"><strike style="font-weight:300;font-size: 21px;">$'+valor+'</strike></span> $' + descuento;  
                        $("#text_cupon_value").html('<span class="fe fe-tag" style = "font-size: 13px;padding-right: 2px;"></span>' + cupon_code); 
                    }
                    else if(cupon_tipo == "porcentaje"){ 
                        descuento = $.number(valor - (valor * (cupon_percent / 100)),  2, '.',',');  
                        valor = $.number(valor,  0, '.',','); 
                        inversion = '<span class="text-muted fw-normal"><strike style="font-weight:300;font-size: 21px;">$'+valor+'</strike></span> $' + descuento;
                        $("#text_cupon_value").html('<span class="fe fe-tag" style = "font-size: 13px;padding-right: 2px;"></span>' + cupon_code); 
                    }

                    if(cupon_tipo!=""){
                        $("#text_cupon").show();
                    }
                    else{
                        $("#text_cupon").hide();
                        inversion = "$" + inversion;
                    }

                    $("#flag_min_stream").text($.number(min_streams, 0, '.',','));
                    $("#flag_max_stream").text($.number(max_streams,  0, '.',','));

                    $("#flag_min_reach").text($.number(min_reach,  0, '.',','));
                    $("#flag_max_reach").text($.number(max_reach,  0, '.',',')); 
                    $("#flag_inversion").html(inversion);

                    $('#estimated_streams').css('width',Math.round((max_streams * 100) / 238160,0) + "%");
                    $('#estimated_reach').css('width',Math.round((max_reach * 100) / 1190800,0) + "%");
                } 
            }

            // VALIDACIONES ANTES DE GUARDAR
            $("#date").val("<?= date('Y-m-d');?>");  

            $("#continue").click(function(){

                $("input,select,button").removeClass("is-invalid");
                if($("#generos_select").val() == ""){ 
                    $(".bs-placeholder").addClass('is-invalid');
                }
                else if($("#date").val() == ""){
                    $("#date").addClass('is-invalid');
                }
                else{ 
                    Cookies.set('track_inversion', $("#campaign_reach").val());
                    Cookies.set('track_generos', $("#generos_select").val());
                    Cookies.set('track_date', $("#date").val());
                    Cookies.set('track_reach', $("#flag_min_reach").text()  + " - " + $("#flag_max_reach").text());
                    Cookies.set('track_streams', $("#flag_min_stream").text()  + " - " + $("#flag_max_stream").text());
                    Cookies.set('track_reach_porcent', $("#estimated_reach").css('width'));
                    Cookies.set('track_stream_porcent', $("#estimated_streams").css('width')); 
                    window.location.href =  "<?= Request::root();?>/campaign-details";
                }
            });

            // SETEAMOS EN CASO QUE HAYAN DATOS GUARDADOS

            function loadInfo() {
                if(typeof Cookies.get("cupon_code") !== "undefined"){
                    $("#cupon").val(Cookies.get('cupon_code'));
                }
                if(typeof Cookies.get("track_inversion") !== "undefined"){
                    $("#campaign_reach").val(Cookies.get('track_inversion'));
                }
                if(typeof Cookies.get("track_date") !== "undefined"){
                    $("#date").val(Cookies.get('track_date'));
                }
                if(typeof Cookies.get("track_reach") !== "undefined"){
                    tmp_track_reach = Cookies.get('track_reach').split("-");
                    $("#flag_min_reach").text(tmp_track_reach[0]);
                    $("#flag_max_reach").text(tmp_track_reach[0]);
                }
                if(typeof Cookies.get("track_streams") !== "undefined"){
                    tmp_track_reach = Cookies.get('track_streams').split("-");
                    $("#flag_min_stream").text(tmp_track_reach[0]);
                    $("#flag_max_stream").text(tmp_track_reach[0]);
                }
                if(typeof Cookies.get("track_reach_porcent") !== "undefined"){
                    $("#estimated_reach").css('width',Cookies.get('track_reach_porcent'));
                }
                 if(typeof Cookies.get("track_stream_porcent") !== "undefined"){
                    $("#estimated_streams").css('width',Cookies.get('track_stream_porcent'));
                }
                if(typeof Cookies.get("track_date") !== "undefined"){
                    $("#date").val(Cookies.get('track_date'));
                }
                if(typeof Cookies.get("track_generos") !== "undefined"){
                    generos = Cookies.get("track_generos");

                    generos = JSON.parse(generos);
                    $('#generos_select').selectpicker('val', generos);   
                }   
            }

            //CÓDIGO PARA EL BUDGET BAR Y BUDGET INPUT

            var x_global = 1;

            $('#campaign_reach').change(function(){
                var x = document.getElementById('campaign_reach').value;
                document.getElementById('flag_inversion').value = x;
                console.log(x);
                x_global = 1;
                $('#flag_inversion').removeClass('budget-focus');
                $('#flag_inversion').addClass('budget-initial')
            });

            $('#flag_inversion').change(function(){
                var x = document.getElementById('flag_inversion').value;
                document.getElementById('campaign_reach').value = x;
                console.log(x);
                x_global = 1;
                $('#flag_inversion').removeClass('budget-focus');
                $('#flag_inversion').addClass('budget-initial')
            });

            function budgetFocus(){
                if(x_global==1){
                    $('#flag_inversion').blur()
                }
                else{
                    $('#flag_inversion').focus()
                }
            }

            function changeBudget(){
                x_global=0;
                $('#flag_inversion').removeClass('budget-initial');
                $('#flag_inversion').addClass('budget-focus')
                $('#flag_inversion').focus()
                
            }

        </script>
    </body>
</html>