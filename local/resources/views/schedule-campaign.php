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
        <style>
            body{display: none;}
            .is-invalid{
                border: 1px solid red !important;
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
                                <label class="form-label h1 mb-1" id="flag_inversion">
                                    $ <?= number_format(50, 2, ',', ' ');?>
                                </label>
                                <input value="50" id="campaign_reach" style="cursor: pointer;" name="inversion" class="form-range mb-4" type="range" value="0" max="1300" min="50" step="10">
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
                                            Streams
                                            <i class="fe fe-info fs-5 fw-bold">
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
                                <input id="date" class="form-control mb-3" name="date" type="date"/>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        </script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js">
        </script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/df-number-format/2.1.6/jquery.number.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"></script>

        <script>
            $(document).ready(function(){
             loadInfo()
             calcular($("#campaign_reach").val());
             $('#generos_select').selectpicker();
           });


            $("#campaign_reach").change(function(){
                calcular($(this).val());
            });


            function calcular(valor){  
            // HACEMOS LOS CALCULOS
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

                    $("#flag_min_stream").text($.number(min_streams, 0, '.',','));
                    $("#flag_max_stream").text($.number(max_streams,  0, '.',','));

                    $("#flag_min_reach").text($.number(min_reach,  0, '.',','));
                    $("#flag_max_reach").text($.number(max_reach,  0, '.',','));

                    $("#flag_inversion").text("$ " +$.number(inversion,  0, '.',',') );

                    $('#estimated_streams').css('width',Math.round((max_streams * 100) / 238160,0) + "%");
                    $('#estimated_reach').css('width',Math.round((max_reach * 100) / 1190800,0) + "%");
                }
                console.log(inversion);
            }

            // VALIDACIONES ANTES DE GUARDAR
            
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
        </script>
    </body>
</html>