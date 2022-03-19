<!DOCTYPE html>
<html lang="en">
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
         <link href="<?= Request::root();?>/local/resources/views/assets//favicon/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link href="<?= Request::root();?>/local/resources/views/mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets//css/libs.bundle.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets//css/theme.bundle.css" id="stylesheetLight" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets//css/theme-dark.bundle.css" id="stylesheetDark" rel="stylesheet"/>
        <style>
            body{display: none;}
        </style>
        <title>
            <?php $track = '';?>
            <?php if (count($data->track) > 0): ?>
            <?php $track = $data->track[0]->name;?>
            <?php endif ?>
            Performance of <?= $track;?> 
        </title>
        <style>
            /* Extra small devices (portrait phones, less than 576px)*/
            @media (max-width: 766.98px) { 
                 .botones{
                    right: 0px !important;
                    top: 110px !important;
                 }
            }
            @media (min-width: 965.98px) { 
                .show-sm{
                    display: none;
                }
                .show-lg{
                    display: show;
                }
            }

            /*/ Small devices (landscape phones, less than 768px)*/
            @media (max-width: 966.98px) { 
                .show-sm{
                    display: show;
                }
                 .show-lg{
                    display: none;
                }
             }
        </style>
        <?php include('includes/general_scripts.php');?>
    </head>
    <body>
        <?php include('includes/aside.php');?>
        <div class="main-content">
             <?php include('includes/campaign-header.php');?>
            <!-- / .header -->
            <!-- CONTENT -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Performance -->
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    <span class="fe fe-list text-muted mb-0">
                                    </span>
                                    Performance
                                </h4>
                            </div>
                            <div class="table-responsive mb-0">
                                <table class="table table-sm table-nowrap card-table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Platform
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th>
                                                Reach
                                            </th>
                                            <th>
                                                Completion
                                            </th>
                                            <th>
                                                Budget Spent
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <!-- Avatar -->
                                                <a class="avatar avatar-xs d-inline-block me-2" href="profile-posts-2.html">
                                                    <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/svg_icons/spotify.svg">
                                                    </img>
                                                </a>
                                                <!-- Title -->
                                                <span>
                                                    Spotify
                                                </span>
                                            </td>
                                            <td>
                                                <?php if (count($data->campaign)>0): ?>
                                                    <?php if ($data->campaign[0]->campaign_statust == "Scheduled"): ?>
                                                        <span class="text-warning">
                                                            ●
                                                        </span> 
                                                        <?= $data->campaign[0]->campaign_statust;?> 
                                                    <?php elseif($data->campaign[0]->campaign_statust == "Completed"): ?>
                                                       <span class="text-success">
                                                            ●
                                                        </span> 
                                                        <?= $data->campaign[0]->campaign_statust;?> 
                                                    <?php endif ?>
                                                <?php endif ?> 
                                            </td>
                                            <td>
                                                <?php if (count($data->total_reach)>0): ?>
                                                      <?= number_format($data->total_reach[0]->gained);?>
                                                <?php else: ?>
                                                      No stats yet  
                                                <?php endif ?> 
                                            </td>
                                            <td>
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <!-- Value -->
                                                        <span class="me-2">
                                                        <?php 
                                                        $budget_spent_graph = 0;
                                                        if (count($data->total_conversion)>0): ?>
                                                            <?php 
                                                            $budget_spent_graph = (number_format($data->total_conversion[0]->gained / 95.1) * 100) / number_format($data->campaign[0]->inversion);
                                                            ?>
                                                        <?php endif ?> 

                                                        
                                                            <?= round($budget_spent_graph,0);?>%
                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <!-- Progress -->
                                                        <div class="progress progress-sm">
                                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="55" class="progress-bar bg-secondary" role="progressbar" style="width: <?= round($budget_spent_graph,0);?>%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </td>
                                            <td>
                                                <?php 
                                                $budget_spent_graph = 0;
                                                if (count($data->total_conversion)>0): ?>
                                                    <?php if ($data->total_conversion[0]->gained > 0): ?>
                                                        $<?= number_format($data->total_conversion[0]->gained / 95.1);?>
                                                        <?php 
                                                        $budget_spent_graph = (number_format($data->total_conversion[0]->gained / 95.1) * 100) / number_format($data->campaign[0]->inversion);
                                                        ?>
                                                    <?php else: ?>
                                                        $0
                                                    <?php endif ?>
                                                    / $<?= number_format($data->campaign[0]->inversion);?>
                                                <?php else: ?>
                                                    $0
                                                <?php endif ?>  
                                                   
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!-- Avatar -->
                                                <a class="avatar avatar-xs d-inline-block me-2" href="profile-posts.html">
                                                    <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/svg_icons/youtube.svg">
                                                    </img>
                                                </a>
                                                <!-- Title -->
                                                <span>
                                                    YouTube
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-muted">
                                                    ●
                                                </span>
                                                Unavailable
                                            </td>
                                            <td>
                                                No stats yet  
                                            </td>
                                            <td>
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <!-- Value -->
                                                        <span class="me-2">
                                                           0%
                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <!-- Progress -->
                                                        <div class="progress progress-sm">
                                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar bg-secondary" role="progressbar" style="width: 0%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </td>
                                            <td>
                                                $0
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!-- Avatar -->
                                                <a class="avatar avatar-xs d-inline-block me-2" href="profile-posts.html">
                                                    <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/svg_icons/apple_music.svg">
                                                    </img>
                                                </a>
                                                <!-- Title -->
                                                <span>
                                                    Apple Music
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-muted">
                                                    ●
                                                </span>
                                                Unavailable
                                            </td>
                                            <td>
                                                No stats yet
                                            </td>
                                            <td>
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <!-- Value -->
                                                        <span class="me-2">
                                                           0%
                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <!-- Progress -->
                                                        <div class="progress progress-sm">
                                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar bg-secondary" role="progressbar" style="width: 0%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </td>
                                            <td>
                                                $0
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!-- Avatar -->
                                                <a class="avatar avatar-xs d-inline-block me-2" href="profile-posts.html">
                                                    <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/svg_icons/tiktok.svg">
                                                    </img>
                                                </a>
                                                <!-- Title -->
                                                <span>
                                                    TikTok
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-muted">
                                                    ●
                                                </span>
                                                Unavailable
                                            </td>
                                            <td>
                                                No stats yet
                                            </td>
                                            <td>
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <!-- Value -->
                                                        <span class="me-2">
                                                           0%
                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <!-- Progress -->
                                                        <div class="progress progress-sm">
                                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar bg-secondary" role="progressbar" style="width: 0%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </td>
                                            <td>
                                                $0
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!-- Avatar -->
                                                <a class="avatar avatar-xs d-inline-block me-2" href="profile-posts.html">
                                                    <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/svg_icons/instagram.svg">
                                                    </img>
                                                </a>
                                                <!-- Title -->
                                                <span>
                                                    Instagram Ads
                                                </span>
                                            </td>
                                            <td>
                                                <span class="text-muted">
                                                    ●
                                                </span>
                                                Unavailable
                                            </td>
                                            <td>
                                                No stats yet
                                            </td>
                                            <td>
                                                <div class="row align-items-center g-0">
                                                    <div class="col-auto">
                                                        <!-- Value -->
                                                        <span class="me-2">
                                                           0%
                                                        </span>
                                                    </div>
                                                    <div class="col">
                                                        <!-- Progress -->
                                                        <div class="progress progress-sm">
                                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="0" class="progress-bar bg-secondary" role="progressbar" style="width: 0%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </td>
                                            <td>
                                                $0
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= Request::root();?>/local/resources/views/assets//js/vendor.bundle.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets//js/theme.bundle.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
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
                var urlActual = window.location;
                if(String(urlActual).indexOf("performance")!==-1){
                   $("#navlink-performance").addClass('active'); 
                   $("#navlink-analysis").removeClass('active'); 
                   $("#navlink-analytics").removeClass('active'); 
                }
            });
        </script>
    </body>
</html>
