<!DOCTYPE html>
<html lang="en">
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/> 
        <link href="<?= Request::root();?>/local/resources/views/assets/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link href="<?= Request::root();?>/local/resources/views/mapbox-gl-js/v0.53.0/mapbox-gl.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/libs.bundle.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/theme.bundle.css" id="stylesheetLight" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/theme-dark.bundle.css" id="stylesheetDark" rel="stylesheet"/>
        <style>
            body{display: none;}
        </style>
        <title>
            <?php $track = '';?>
            <?php if (count($data->track) > 0): ?>
            <?php $track = $data->track[0]->name;?>
            <?php endif ?>
            Campaign of <?= $track;?>
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
    </head>
    <body>
       <?php 
          $artist_cover = ""; 
          $artist_img = "";
          $artist_name = "";
          $artist_token = "";
          $track_name = "";
          $lenght = "";
          $bpm = "";
          $key_name = "";
          $loudness = "";
          $popularity = "";
          $danceability = "";
          $energy = "";
          $positiveness = "";
          $speechiness = "";
          $liveness = "";
          $instrumentalness = "";
          $album_name = "";
          $release_date = "";
          $isrc = "";
          $track_number = "";
          $explicit = "";  
          $id_track = "";
          $album_n_tracks = "";
  
          if(($data->track)>0){
              $artist_name = $data->track[0]->artist_name;
              $artist_cover = $data->track[0]->artist_cover;  
              $track_name = $data->track[0]->name;
              $id_track = $data->track[0]->id_track;
              $lenght = $data->track[0]->duration_ms;
              $bpm = $data->track[0]->bpm;
              $key_name = $data->track[0]->key_name;
              $loudness = $data->track[0]->loudness;
              $popularity = $data->track[0]->popularity;
              $danceability = $data->track[0]->danceability * 100;
              $energy = $data->track[0]->energy * 100;
              $positiveness = $data->track[0]->positiveness * 100;
              $speechiness = $data->track[0]->speechiness * 100;
              $liveness = $data->track[0]->liveness * 100;
              $instrumentalness = $data->track[0]->instrumentalness * 100;
              $album_name = $data->track[0]->album_name;
              $release_date = $data->track[0]->release_date;
              $isrc = $data->track[0]->isrc;
              $track_number = $data->track[0]->track_number;
              $explicit = $data->track[0]->explicit;
              $album_n_tracks = $data->track[0]->album_n_tracks;
              $mode = $data->track[0]->mode;
          }

          function lenght($tiempo_en_segundos) {
            $tiempo_en_segundos = $tiempo_en_segundos / 1000;
            $horas = floor($tiempo_en_segundos / 3600);
            $minutos = floor(($tiempo_en_segundos - ($horas * 3600)) / 60);
            $segundos = $tiempo_en_segundos - ($horas * 3600) - ($minutos * 60); 
            return round($minutos,0) . ":" . round($segundos,0);
            }

          function key_struc($key,$mode) {
            $response = "";
            if($key == 0){$response = "C";}
            else if($key == 1){$response = "C#";}
            else if($key == 2){$response = "D";}
            else if($key == 3){$response = "D#";}
            else if($key == 4){$response = "E";}
            else if($key == 5){$response = "F";}
            else if($key == 6){$response = "F#";}
            else if($key == 7){$response = "G";}
            else if($key == 8){$response = "G#";}
            else if($key == 9){$response = "A";}
            else if($key == 10){$response = "A#";}
            else if($key == 11){$response = "B";}

            if($mode == "1"){
                $response = $response . " Major";
            }
            else if($mode == "0"){
                $response = $response . " Minor";
            }   
            return $response;
        } 

        function notyet(){
            return '<span style="font-size: 18px;">No stats yet</span> <span class="fe fe-info" style="font-size: 16px;cursor: pointer;" data-bs-toggle="tooltip" data-bs-placement="top" title="If your campaign just begun allow up to 48 hours to start seeing data. Data usually updates live, but some platforms only update their statistics once a day."></span>';
        }

        function notStatsYetGraph($id,$class,$display=false){
            $dis = "";
            if($display == true){$dis = "display:none;";}
            return '<div style="padding-top: 50px;'.$dis.'" class="'.$class.'" id="'.$id.'"> <div class="text-center mb-2"> <span class="fe fe-bar-chart-2 text-primary" style="font-size: 48px"></span> </div><h2 class="text-center">No stats yet</h2> <p class="text-center mt-3 mb-0">You will see first results within 24-48 hours of campaign start.</p></div>';
        }
        ?>
        <?php include('includes/aside.php');?>
        <div class="main-content">
            <?php include('includes/campaign-header.php');?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Alert -->
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            This campaign is on track and forecasted to complete below budget!
                            <!-- Close -->
                            <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button">
                            </button>
                        </div>
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <!-- Tabs -->
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item" data-action="toggle" data-dataset="0" data-target="#graph" data-toggle="chart" data-trigger="click">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#">
                                            Reach
                                        </a>
                                    </li>
                                    <li class="nav-item" data-action="toggle" data-dataset="1" data-target="#graph" data-toggle="chart" data-trigger="click">
                                        <a class="nav-link" data-bs-toggle="tab" href="#">
                                            Plays
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <!-- Chart -->
                                <div class="chart">
                                    <?php if (count($data->total_conversion)>0): ?>
                                        <canvas class="chart-canvas" id="graph">
                                        </canvas>
                                    <?php else: ?>
                                        <?= notStatsYetGraph("grahp","");?>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / .row -->
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2 pd-2">
                                            Campaign Reach
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                           <?php if (count($data->total_reach)>0): ?>
                                                <?= number_format($data->total_reach[0]->gained);?>
                                            <?php else: ?>
                                                <?= notYet()?>
                                            <?php endif ?> 
                                        </span> 

                                    </div>
                                    <div class="col-auto">
                                        <!-- Icon -->
                                        <span class="h2 fe fe-headphones text-muted mb-0">
                                        </span>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body h-100">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2 pd-2">
                                            PLAYS GAINED
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                            <?php if (count($data->total_conversion)>0): ?>
                                                <?= number_format($data->total_conversion[0]->gained);?>
                                            <?php else: ?>
                                                <?= notYet()?>
                                            <?php endif ?> 
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Icon -->
                                        <span class="h2 fe fe-music text-muted mb-0">
                                        </span>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body h-100">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2 pd-2">
                                            BUDGET SPEND
                                        </h6>
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <!-- Heading -->
                                                <span class="h2 me-2 mb-0">
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
                                                        <?= notYet()?>
                                                    <?php endif ?>   
                                                </span>
                                            </div>
                                            <div class="col">
                                                <!-- Progress -->
                                                <?php 
                                                    $budget_spent_graph = 0;
                                                    if (count($data->total_conversion)>0): ?>
                                                        <div class="progress progress-sm me-4">
                                                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?= $budget_spent_graph;?>" class="progress-bar" role="progressbar" style="width: <?= $budget_spent_graph;?>%">
                                                            </div>
                                                        </div>  
                                                <?php endif ?>  
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                    <div class="col-auto">
                                        <!-- Icon -->
                                        <span class="h2 fe fe-dollar-sign text-muted mb-0">
                                        </span>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2 pd-2">
                                            Cost/1000 reach
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                        <?php if (count($data->total_conversion)>0): ?>
                                             <?php if ($data->total_conversion[0]->gained > 0): ?>
                                                 $<?= round((number_format($data->total_conversion[0]->gained / 95.1)*1000)/$data->total_reach[0]->gained,2);?>
                                              <?php else: ?>
                                                 $0
                                             <?php endif ?>
                                        <?php else: ?>
                                            <?= notYet()?>
                                        <?php endif ?> 
                                        </span>
                                    </div>
                                    <div class="col-auto"> 
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / .row -->
                <div class="row">
                    <div class="col-12 col-xl-8">
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
                    <div class="col-12 col-xl-4">
                        <!-- Latest Files -->
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    <span class="fe fe-cpu text-muted mb-0">
                                    </span>
                                    Audio Analysis
                                    <span class="badge bg-primary-soft">
                                        AI
                                    </span>
                                </h4>
                                <!-- Link -->
                                <a class="small" href="<?= Request::root();?>/campaign-audio-analysis/<?= $token;?>">
                                    View Full Analysis
                                </a>
                            </div>
                            <div class="card-body">
                                <!-- List group -->
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a class="avatar" href="#!">
                                                     <div class="avatar-title rounded bg-white text-secondary">
                                                        <span class="fe fe-activity">
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col ms-n2">
                                                <!-- Title -->
                                                <h4 class="mb-1">
                                                    <a href="#!">
                                                        Track Info
                                                    </a>
                                                </h4>
                                                <!-- Time -->
                                                <p class="card-text small text-muted">
                                                Length: <?= lenght($lenght);?> | 
                                                <?= $bpm;?>BPM |
                                                <?= key_struc($key_name,$mode)?> |
                                                <?= $loudness;?>db
                                                </p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Dropdown -->
                                                <div class="dropdown">
                                                    <a aria-expanded="false" aria-haspopup="true" class="dropdown-ellipses dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                                                        <i class="fe fe-more-vertical">
                                                        </i>
                                                    </a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a class="avatar" href="#!">
                                                    <div class="avatar-title rounded bg-white text-secondary">
                                                        <span class="fe fe-activity">
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col ms-n2">
                                                <!-- Title -->
                                                <h4 class="mb-1">
                                                    <a href="#!">
                                                        Popularity <i style="position: absolute;margin-left: 5px; cursor:pointer;" class="fe fe-info" data-bs-original-title="A measure on how popular the track is on Spotify. Updates every two days, so may appear 0% for new tracks. " data-bs-toggle="tooltip" title=""></i>
                                                    </a>
                                                </h4>
                                                <!-- Time -->
                                                <p class="card-text small text-muted">
                                                <?php if (count($data->track) > 0): ?>
                                                    <?= $data->track[0]->popularity;?>%
                                                <?php endif ?> 
                                                </p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Dropdown -->
                                                <div class="dropdown">
                                                    <a aria-expanded="false" aria-haspopup="true" class="dropdown-ellipses dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                                                        <i class="fe fe-more-vertical">
                                                        </i>
                                                    </a>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto"> 
                                                <a class="avatar" href="#!">
                                                    <div class="avatar-title rounded bg-white text-secondary">
                                                        <span class="fe fe-activity">
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col ms-n2">
                                                <!-- Title -->
                                                <h4 class="mb-1">
                                                    <a href="#!">
                                                        Danceability 
                                                        <i style="position: absolute;margin-left: 5px;" class="fe fe-info" data-bs-original-title="
A measure on how suitable a track could be for dancing to, through measuring tempo, rhythm, stability, beat strength and overall regularity. Tracks near 0% are least danceable, whereas tracks near 100% are more suited for dancing to. " data-bs-toggle="tooltip" style="cursor: pointer;" title=""></i>
                                                    </a>
                                                </h4>
                                                <!-- Time -->
                                                <p class="card-text small text-muted">
                                                    <?php if (count($data->track) > 0): ?>
                                                        <?= round($data->track[0]->danceability * 100,2);?>%
                                                    <?php endif ?> 
                                                </p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Dropdown -->
                                                <div class="dropdown">
                                                    <a aria-expanded="false" aria-haspopup="true" class="dropdown-ellipses dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                                                        <i class="fe fe-more-vertical">
                                                        </i>
                                                    </a> 
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a class="avatar" href="#!">
                                                   <div class="avatar-title rounded bg-white text-secondary">
                                                        <span class="fe fe-activity">
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col ms-n2">
                                                <!-- Title -->
                                                <h4 class="mb-1">
                                                    <a href="#!">
                                                        Energy <i style="position: absolute;margin-left: 5px; cursor: pointer;" class="fe fe-info" data-bs-original-title="
A measure on how intense a track sounds, through measuring the dynamic range, loudness, timbre, onset rate and general entropy. 0% indicates low energy, 100% indicates high energy. " data-bs-toggle="tooltip" title=""></i>
                                                    </a>
                                                </h4>
                                                <!-- Time -->
                                                <p class="card-text small text-muted">
                                                   <?php if (count($data->track) > 0): ?>
                                                        <?= round($data->track[0]->energy * 100,2);?>%
                                                    <?php endif ?> 
                                                </p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Dropdown -->
                                                <div class="dropdown">
                                                    <a aria-expanded="false" aria-haspopup="true" class="dropdown-ellipses dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                                                        <i class="fe fe-more-vertical">
                                                        </i>
                                                    </a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js">
        </script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>

        <script>

                $("html,.scroll").niceScroll({
                cursorcolor:"#ddd"
                });

            reach = [];
            conversion = [];
            labels = [];

            <?php foreach ($data->reach as $key): ?>
                reach.push(<?= $key->gained;?>);
                labels.push(moment("<?= $key->date;?>").format('ddd, ll'));
            <?php endforeach ?>
            <?php foreach ($data->conversion as $key): ?>
                conversion.push(<?= $key->gained;?>); 
            <?php endforeach ?>

            barGraph('graph',reach,conversion,labels);
            function barGraph(id, reach, conversion, labels) {
            new Chart(document.getElementById(id), {
                type: 'bar',
                options: {
                    scales: {
                        y: {
                            ticks: {
                                maxTicksLimit: 4,
                                autoSkip: true,
                                callback: function(value) {
                                    if (value >= 1000 && value < 1000000) {
                                        return value / 1000 + ' K';
                                    } else if (value >= 1000000) {
                                        return value / 1000000 + ' M';
                                    } else {
                                        return value;
                                    }
                                },
                            }
                        },
                        x: {
                            ticks: {
                                display: true,
                                autoSkip: true,
                                maxTicksLimit: 4,
                                maxRotation: 0,
                                align: 'start',
                            },
                        },
                    }
                },
                data: {
                    labels: labels,
                    datasets: [{
                            label: "Reach",
                            data: reach,
                        },
                        {
                            label: "Conversion",
                            data: conversion,
                            hidden: true
                        },
                    ]
                }
            });
        }

            $(document).ready(function(){
                var urlActual = window.location;
                if(String(urlActual).indexOf("analytics")!==-1){
                   $("#navlink-performance").removeClass('active'); 
                   $("#navlink-analysis").removeClass('active'); 
                   $("#navlink-analytics").addClass('active'); 
                }
            });
        </script>
    </body>
</html>
