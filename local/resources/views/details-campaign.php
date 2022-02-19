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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" rel="stylesheet"/>
        <style>
            body{display: none;}
            .tooltip-inner {
                max-width: 400px; 
                width: 400px; 
            }
        </style>
        <title>
            Campaign details
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
                                            Campaign details
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <i class="fe fe-check-circle text-white">
                            </i>
                            Artist Protection Program is enabled! We've got you covered.
                            <i class="fe fe-info " data-bs-toggle="tooltip" style="cursor: pointer;" title="If you want to stop your campaign, then you will automatically be refunded the difference of budget that hasn't been used to your Account Balance. If we're not able to begin your campaign to our standards then you will be automatically refunded to your form of payment.">
                            </i>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Estimated results
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img id="track-img" class="img-fluid rounded mb-2" src="https://i.scdn.co/image/ab67616d0000b27323152d9337d6c57b116ed13a"/>
                                        <p class="mb-0 fw-bold text-center" id="track-name">
                                            Victorious
                                        </p>
                                        <p class="mb-0 text-center" id="track-artist">
                                            Panic! At The Disco
                                        </p> 
                                    </div>
                                    <div class="col-8">
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
                                                    <span id="track-reach"></span>
                                                </span>
                                                <div class="progress progress-sm mt-3">
                                                    <div id="reach_p" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar" role="progressbar" style="width: 10%">
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
                                                    <span id="track-streams"></span>
                                                </span>
                                                <div class="progress progress-sm mt-3">
                                                    <div id="stream_p" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar" role="progressbar" style="width: 10%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-muted mt-3 fs-5">
                                            The accuracy of estimates is based on factors like past campaign data, the budget you entered, market data, targeting criteria and ad placements. Numbers are provided to give you an idea of performance for your budget, but are only estimates and don't guarantee results.
                                        </p>
                                        <h4 class="card-header-title mb-2">
                                            Target genres
                                        </h4>
                                        <div style="margin-left: -5px" id="track-generos"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Benefits
                                </h4>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                    <i class="fe fe-check-circle text-primary">
                                    </i>
                                    Submitting
                                    <strong>
                                        Ads Campaign
                                    </strong>
                                    and
                                    <strong>
                                        Independent Playlisting Campaign.
                                    </strong>
                                </p>
                                <p class="mb-0">
                                    <i class="fe fe-check-circle text-primary">
                                    </i>
                                    You are covered by the
                                    <strong>
                                        'Artist Protection Program'
                                    </strong>
                                </p>
                                <p class="mb-0">
                                    <i class="fe fe-check-circle text-primary">
                                    </i>
                                    Auto-refund to your account balance in case you want to pause or end campaign before it reaches its goal. Balance can be used for future campaigns.
                                </p>
                            </div>
                        </div>
                        <div class="mb-5 row">
                            <div class="col-6" style="text-align: left;">
                                <a class="btn btn-primary" href="<?= Request::root();?>/campaign-schedule" style="width: 120px;">
                                    Go Back
                                </a>
                            </div>
                            <div class="col-6" style="text-align: right;">
                                <button class="btn btn-primary" id="btn-continue" type="button" style="width: 120px;">
                                    Continue
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form id="form-campaign" method="POST" action="<?= Request::root();?>/create-campaign">
                <input type="hidden" name="id_track" id="id_track">
                <input type="hidden" name="inversion" id="inversion">
                <input type="hidden" name="date" id="date">
                <input type="hidden" name="generos" id="generos">
            </form>
        </div>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor.bundle.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/theme.bundle.js">
        </script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        </script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/df-number-format/2.1.6/jquery.number.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"></script>

        <script>
            $(document).ready(function(){
                loadInfo();
            });

            // CARGAMOS LA INFORMACION 
            function loadInfo() {
            if(typeof Cookies.get("track_img") !== "undefined"){
                $("#track-img").attr('src',Cookies.get('track_img'));
            }
            
            if(typeof Cookies.get("track_id") !== "undefined"){
                $("#id_track").val(Cookies.get('track_id'));
            }
            if(typeof Cookies.get("track_name") !== "undefined"){
                $("#track-name").text(Cookies.get('track_name'));
            }
            
            if(typeof Cookies.get("track_inversion") !== "undefined"){
                $("#inversion").val(Cookies.get('track_inversion'));
            }
            if(typeof Cookies.get("track_generos") !== "undefined"){
                $("#generos").val(JSON.parse(Cookies.get('track_generos')).toString());
            }
            if(typeof Cookies.get("track_date") !== "undefined"){
                $("#date").val(Cookies.get('track_date'));
            }
            if(typeof Cookies.get("track_artist") !== "undefined"){
                $("#track-artist").text(Cookies.get('track_artist'));
            }
            
            if(typeof Cookies.get("track_reach") !== "undefined"){
                $("#track-reach").text(Cookies.get('track_reach'));
            }
            if(typeof Cookies.get("track_streams") !== "undefined"){
                $("#track-streams").text(Cookies.get('track_streams'));
            }
            if(typeof Cookies.get("track_stream_porcent") !== "undefined"){ 
                $("#stream_p").css('width',Cookies.get('track_stream_porcent'));
            }
            if(typeof Cookies.get("track_reach_porcent") !== "undefined"){
                $("#reach_p").css('width',Cookies.get('track_reach_porcent'));
            } 
            if(typeof Cookies.get("track_generos") !== "undefined"){
                generos = Cookies.get("track_generos"); 
                generos = JSON.parse(generos);
                generos_tags = "";
                $.each( generos, function( key, value ) {
                  genero_text = value.split("_");
                  generos_tags = generos_tags + '<span class="text-capitalize badge bg-primary-soft fw-bold ms-2">'+ genero_text[1] +'</span>'; 
                });
                $("#track-generos").html(generos_tags);  
            }  
        } 

        $("#btn-continue").click(function(){
            $("#form-campaign").submit();
        });


        </script>
    </body>
</html>