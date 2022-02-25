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
            
             @media (max-width: 576px) {
                 
                #img-cover-lg{
                    display: none;
                }
                #img-cover-sm{
                    display: block !important;
                }
            }
            .chart-sparkline{
                width: 100%;
            }
        </style>
        <title>
            Artist
        </title>
    </head>
    <body>
        <?php 
          $artist_cover = $artistSummary->artist->cover; 
          $artist_img = $artistSummary->artist->img_profile;
          $artist_name = $artistSummary->artist->name;
          $artist_token = $artistSummary->artist->artist_token;
         ?>
        <?php include('includes/aside.php');?>
        <div class="main-content">
            <?php include('includes/artist-header.php');?>
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="tabPaneOne" role="tabpanel">
                        <div class="row listAlias">
                            <h1 class="header-title mb-5 mt-0">
                                Active 
                            </h1> 
                            <?php foreach ($artistSummary->artist_catalogue_active_campaigns as $key): ?>
                             <div class="col-12 col-md-6 col-xl-3"> 
                                <div class="card">
                                    <img class="card-img-top" src=" <?= $key->cover;?>"/>
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-12" style="position: relative;">
                                                <!-- Title -->
                                                <h4 class="mb-2 name">
                                                   <?= $key->name;?>
                                                </h4>
                                                <!-- Subtitle -->
                                                <p class="card-text small text-muted">
                                                    <?= $artistSummary->artist->name;?>
                                                </p>
                                                <button class="btn btn-primary" style="position: absolute;top: 0px;right: 0px;font-size: 10px;padding: 4px;width: 103px;" type="button">
                                                    <i class="fe fe-bar-chart">
                                                    </i>
                                                    Analytics
                                                </button>
                                                <button class="btn btn-primary" style="position: absolute;top: 30px;right: 0px;font-size: 10px;padding: 4px;" type="button">
                                                    <i class="fe fe-cpu">
                                                    </i>
                                                    Audio Analysis AI
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row g-0 border-top border-bottom mt-2">
                                            <div class="col-6 py-3 text-center">
                                                <!-- Heading -->
                                                <h6 class="text-uppercase text-muted">
                                                    Campaign Reach
                                                </h6>
                                                <!-- Value -->
                                                <h2 class="mb-0">
                                                    <?php if ($key->max_reach == null): ?>
                                                        0
                                                    <?php else: ?>
                                                      <?= round($key->max_reach / 1000,2);?>
                                                    <?php endif ?> 
                                                </h2>
                                            </div>
                                            <div class="col-6 py-3 text-center border-start">
                                                <!-- Heading -->
                                                <h6 class="text-uppercase text-muted">
                                                    Plays gained
                                                </h6>
                                                <!-- Value -->
                                                <h2 class="mb-0">
                                                    <?php if ($key->gained == null): ?>
                                                        0
                                                    <?php else: ?>
                                                      <?= round($key->gained / 1000,2);?>
                                                    <?php endif ?> 
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="list-group list-group-flush ">
                                            <div class="list-group-item py-2">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <!-- Title -->
                                                        <h5 class="mb-0">
                                                            Release Date:
                                                        </h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Time -->
                                                        <time class="small text-muted" datetime="1988-10-24">
                                                        <?= $key->release_date;?>
                                                        </time>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </div>
                                            <div class="list-group-item py-2">
                                                <div class="row align-items-center ">
                                                    <div class="col">
                                                        <!-- Title -->
                                                        <h5 class="mb-0">
                                                            Campaign Start date:
                                                        </h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Time -->
                                                        <time class="small text-muted" datetime="2018-10-28">
                                                           <?= $key->start_date;?>
                                                        </time>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </div>
                                            <div class="list-group-item py-2">
                                                <div class="row align-items-center">
                                                    <div class="col">
                                                        <!-- Title -->
                                                        <h5 class="mb-0">
                                                            Status
                                                        </h5>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Text -->
                                                        <small class="text-muted">
                                                            <span class="badge bg-success-soft">
                                                              <?= $key->campaign_statust;?>
                                                            </span>
                                                        </small>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer card-footer-boxed">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <!-- Value -->
                                                        <div class="small me-2">
                                                            <?php if ($key->progress!=null): ?> 
                                                                 <?= round($key->progress,2);?>%
                                                            <?php endif ?>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <!-- Progress -->
                                                        <div class="progress progress-sm">
                                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="77" class="progress-bar" role="progressbar" style="width: <?= round($key->progress,2);?>%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </div>
                                             
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                </div>
                            </div> 
                            <?php endforeach ?>
                            <div style="padding-left: 14px;padding-right: 14px;margin-bottom: 25px;"> <hr/></div>
                            <?php foreach ($artistSummary->artist_catalogue as $key): ?> 
                            <div class="col-12 col-md-6 col-xl-3">
                                <div class="card">
                                    <img class="card-img-top" src="<?= $key->cover;?>"/>
                                    <!-- Body -->
                                    <div class="card-body">
                                        <div class="row align-items-center" style="position: relative;">
                                            <div class="col-6">
                                                <!-- Title -->
                                                <h4 class="mb-2 name text-capitalize">
                                                   <?= $key->name;?>
                                                </h4>
                                                <!-- Subtitle -->
                                                <p class="card-text small text-muted"> 
                                                    <?= $artistSummary->artist->name;?>
                                                </p>
                                            </div>
                                            <div class="col-6 " style="text-align: right;">
                                                <button class="btn btn-primary text-capitalize" style="position: absolute;top: 0px;right: 0px;font-size: 10px;padding: 4px;width: 103px;" type="button">
                                                    <i class="fe fe-plus">
                                                    </i>
                                                    new campaign
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <?php endforeach ?>
                        </div>
                        <!-- / .row -->
                    </div>
                    <div class="tab-pane fade" id="tabPaneTwo" role="tabpanel">
                        <!-- / .row -->
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js">
        </script>
        <script>
            $(document).ready(function(){
                var urlActual = window.location;
                if(String(urlActual).indexOf("catalogue")!==-1){
                   $("#navlink-catalogue").addClass('active'); 
                   $("#navlink-summary").removeClass('active'); 
                   $("#navlink-audience").removeClass('active');
                }
            });
        </script>
        <?php include ("includes/loading.php") ?>
    </body>
</html>
