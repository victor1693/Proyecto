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
             .reproductor {
                background-color: rgb(2,0,36) !important;
                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,15,121,1) 35%, rgba(0,212,255,0.34217436974789917) 100%) !important;
            }
        </style>
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

        <title>
           <?php $track = '';?>
            <?php if (count($data->track) > 0): ?>
            <?php $track = $data->track[0]->name;?>
            <?php endif ?>
            Audio Analysis of <?= $track;?> 
        </title>

        <?php include('includes/general_scripts.php');?>
    </head>
    <body>
        <?php 
        // Variables
        $artist_cover = "";
        $artist_name = "";
        $artist_cover = "";
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

        ?>
        <?php include('includes/aside.php');?>
        <div class="main-content">
            <div class="main-content">
                
                <?php include('includes/campaign-header.php');?>

                <div class="container-fluid">
                    <div id="img-cover-lg" style="height: 300px;background-image: url( <?= $artist_cover;?>);background-size: cover;border-top-left-radius: 10px;border-top-right-radius: 10px;position: relative;">
                        <h3 class="text-capitalize" style="position: absolute; bottom: 65px;left: 25px;">
                            <a class="text-white ">
                                <?= $artist_name;?>
                            </a> 
                        </h3>
                        <h1 class="text-white text-capitalize" style="position: absolute; bottom: 25px;left: 25px;">
                            <?= $track_name;?>
                        </h1>
                    </div>
                    <iframe allow="autoplay; activity-write; encrypted-media; fullscreen; picture-in-picture" allowfullscreen="" frameborder="0" height="80" id="elframe" src="https://open.spotify.com/embed/track/<?= $id_track;?>?utm_source=generator&theme=0" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;" width="100%">
                    </iframe>
                    <div class="row mt-5">
                        <div class="col-lg-3 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <!-- Title -->
                                            <h6 class="text-uppercase text-muted mb-2">
                                                LENGTH
                                                <i class="fe fe-info fs-5" data-bs-original-title="
Length of the track. First number is minutes, second number is seconds." data-bs-toggle="tooltip" style="cursor: pointer;">
                                                </i>
                                            </h6>
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <!-- Heading -->
                                                    <span class="h2 me-2 mb-0"> 
                                                        <?= lenght($lenght);?> 
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </div>
                                        <div class="col-auto">
                                            <span class="h2 fe fe-clock text-muted mb-0">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- / .row -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <!-- Title -->
                                            <h6 class="text-uppercase text-muted mb-2">
                                                BPM
                                                <i class="fe fe-info fs-5" data-bs-original-title="
Tempo of the track in beats per minute. If the track has multiple BPM's this won't be reflected as only one BPM figure will show." data-bs-toggle="tooltip" style="cursor: pointer;">
                                                </i>
                                            </h6>
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <!-- Heading -->
                                                    <span class="h2 me-2 mb-0">
                                                       <?= $bpm;?>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </div>
                                        <div class="col-auto">
                                            <span class="h2 fe fe-activity text-muted mb-0">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- / .row -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <!-- Title -->
                                            <h6 class="text-uppercase text-muted mb-2">
                                                key
                                                <i class="fe fe-info fs-5" data-bs-original-title="
Key of the track. This data comes from Spotify. I am actively working to ensure this is more accurate." data-bs-toggle="tooltip" style="cursor: pointer;">
                                                </i>
                                            </h6>
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <!-- Heading -->
                                                    <span class="h2 me-2 mb-0">
                                                       <?= key_struc($key_name,$mode)?>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </div>
                                        <div class="col-auto">
                                            <span class="h2 fe fe-hash text-muted mb-0">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- / .row -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <!-- Title -->
                                            <h6 class="text-uppercase text-muted mb-2">
                                                LOUDNESS
                                                <i class="fe fe-info fs-5" data-bs-original-title="
Average loudness of the track in decibels (dB). Values typically are between -60 and 0 decibels. Tracks are rarely above -4 db and usually are around -4 to -9 db." data-bs-toggle="tooltip" style="cursor: pointer;" title="">
                                                </i>
                                            </h6>
                                            <div class="row align-items-center g-0">
                                                <div class="col-auto">
                                                    <!-- Heading -->
                                                    <span class="h2 me-2 mb-0">
                                                       <?= $loudness;?>
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </div>
                                        <div class="col-auto">
                                            <span class="h2 fe fe-speaker text-muted mb-0">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- / .row -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="table-responsive mb-0">
                                    <table class="table table-sm table-nowrap card-table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Popularity
                                                    <i class="fe fe-info fs-5" data-bs-original-title="A measure on how popular the track is on Spotify. Updates every two days, so may appear 0% for new tracks. " data-bs-toggle="tooltip" style="cursor: pointer;" title="">
                                                    </i>
                                                </th>
                                                <th>
                                                    Danceability
                                                    <i class="fe fe-info fs-5" data-bs-original-title="
A measure on how suitable a track could be for dancing to, through measuring tempo, rhythm, stability, beat strength and overall regularity. Tracks near 0% are least danceable, whereas tracks near 100% are more suited for dancing to. " data-bs-toggle="tooltip" style="cursor: pointer;" title="">
                                                    </i>
                                                </th>
                                                <th>
                                                    Energy
                                                    <i class="fe fe-info fs-5" data-bs-original-title="
A measure on how intense a track sounds, through measuring the dynamic range, loudness, timbre, onset rate and general entropy. 0% indicates low energy, 100% indicates high energy. " data-bs-toggle="tooltip" style="cursor: pointer;" title="">
                                                    </i>
                                                </th>
                                                <th>
                                                    Positiveness
                                                    <i class="fe fe-info fs-5" data-bs-original-title="
A measure how positive, happy or cheerful track is. Values near 0% suggest a sad or angry track, where values near 100% suggest a happy and cheerful track. " data-bs-toggle="tooltip" style="cursor: pointer;" title="">
                                                    </i>
                                                </th>
                                                <th>
                                                    Speechiness
                                                    <i class="fe fe-info fs-5" data-bs-original-title="
A measure on the presence of spoken words. Values below 33% suggest it is just music, values between 33% and 66% suggest both music and speech (such as rap), values above 66% suggest there is only spoken word (such as a podcast). " data-bs-toggle="tooltip" style="cursor: pointer;" title="">
                                                    </i>
                                                </th>
                                                <th>
                                                    Liveness
                                                    <i class="fe fe-info fs-5" data-bs-original-title="
A measure on how likely it is the track has been recorded in front of a live audience instead of in a studio. This is measured by detecting the presence of an audience in the track. Values over 80% suggest that the track was most definitely performed in front of a live audience. " data-bs-toggle="tooltip" style="cursor: pointer;" title="">
                                                    </i>
                                                </th>
                                                <th>
                                                    Instrumentalness
                                                    <i class="fe fe-info fs-5" data-bs-original-title="
A measure on how likely the track does not contain any vocals. Values over 50% indicate an instrumental track, values near 0% indicate there are lyrics. " data-bs-toggle="tooltip" style="cursor: pointer;" title="">
                                                    </i>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <!-- Value -->
                                                            <span class="me-2">
                                                                <?= $popularity;?>%
                                                            </span>
                                                        </div>
                                                        <div class="col">
                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="55" class="progress-bar bg-primary" role="progressbar" style="width: <?= $popularity;?>%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- / .row -->
                                                </td>
                                                <td>
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <!-- Value -->
                                                            <span class="me-2">
                                                                <?= $danceability;?>%
                                                            </span>
                                                        </div>
                                                        <div class="col">
                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="55" class="progress-bar bg-primary" role="progressbar" style="width:  <?= $danceability;?>%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- / .row -->
                                                </td>
                                                <td>
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <!-- Value -->
                                                            <span class="me-2">
                                                                 <?= $energy;?>%
                                                            </span>
                                                        </div>
                                                        <div class="col">
                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="55" class="progress-bar bg-primary" role="progressbar" style="width:  <?= $energy;?>%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- / .row -->
                                                </td>
                                                <td>
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <!-- Value -->
                                                            <span class="me-2">
                                                                 <?= $positiveness;?>%
                                                            </span>
                                                        </div>
                                                        <div class="col">
                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="55" class="progress-bar bg-primary" role="progressbar" style="width:  <?= $positiveness;?>%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- / .row -->
                                                </td>
                                                <td>
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <!-- Value -->
                                                            <span class="me-2">
                                                                 <?= $speechiness;?>%
                                                            </span>
                                                        </div>
                                                        <div class="col">
                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="55" class="progress-bar bg-primary" role="progressbar" style="width:  <?= $speechiness;?>%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- / .row -->
                                                </td>
                                                <td>
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <!-- Value -->
                                                            <span class="me-2">
                                                                 <?= $liveness;?>%
                                                            </span>
                                                        </div>
                                                        <div class="col">
                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="55" class="progress-bar bg-primary" role="progressbar" style="width:  <?= $liveness;?>%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- / .row -->
                                                </td>
                                                <td>
                                                    <div class="row align-items-center g-0">
                                                        <div class="col-auto">
                                                            <!-- Value -->
                                                            <span class="me-2">
                                                                 <?= $instrumentalness;?>%
                                                            </span>
                                                        </div>
                                                        <div class="col">
                                                            <!-- Progress -->
                                                            <div class="progress progress-sm">
                                                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="55" class="progress-bar bg-primary" role="progressbar" style="width:  <?= $instrumentalness;?>%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- / .row -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-header-title">
                                            Discover songs similar to <?= $track_name;?>
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <?php foreach ($data->track_similar as $key): ?> 
                                            <div class="col-12 col-lg-4">
                                                <div class="list-group list-group-flush pt-4 my-n3">
                                                    <div class="list-group-item">
                                                        <div class="row align-items-center">
                                                            <div class="col-auto">
                                                               <?php if ($key->cover!=""): ?> 
                                                                <a target="_blank" class="avatar" href="https://open.spotify.com/<?= $key->id_track;?>">
                                                                    <img class="avatar-img rounded" src="<?= $key->cover;?>">
                                                                    </img>
                                                                </a>
                                                                <?php endif ?>
                                                            </div>
                                                            <div class="col ms-n2">
                                                               
                                                                <h4 class="fw-normal mb-1">
                                                                    <a target="_blank" href="https://open.spotify.com/<?= $key->id_track;?>">
                                                                        <?= $key->name;?>
                                                                    </a>
                                                                </h4>
                                                                <!-- Text -->
                                                                <small class="text-muted">
                                                                    <?= $key->bpm;?> bpm • • <?= lenght($lenght);?>
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <!-- / .row -->
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- List group -->
                                            <div class="list-group list-group-flush my-n3">
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <!-- Title -->
                                                            <h5 class="mb-0">
                                                                Name
                                                            </h5>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Time -->
                                                            <time class="small text-muted">
                                                                <?= $track_name;?>
                                                            </time>
                                                        </div>
                                                    </div>
                                                    <!-- / .row -->
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <!-- Title -->
                                                            <h5 class="mb-0">
                                                                Artist(s)
                                                            </h5>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Time -->
                                                            <time class="small text-muted" >
                                                                <?= $artist_name;?>
                                                            </time>
                                                        </div>
                                                    </div>
                                                    <!-- / .row -->
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <!-- Title -->
                                                            <h5 class="mb-0">
                                                                Album
                                                            </h5>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Time -->
                                                            <time class="small text-muted" >
                                                                 <?= $album_name;?>
                                                            </time>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <!-- Title -->
                                                            <h5 class="mb-0">
                                                                Release Date
                                                            </h5>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Time -->
                                                            <time class="small text-muted" >
                                                                <?= $release_date;?>
                                                            </time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- List group -->
                                            <div class="list-group list-group-flush my-n3">
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <!-- Title -->
                                                            <h5 class="mb-0">
                                                                ISRC
                                                            </h5>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Time -->
                                                            <time class="small text-muted" >
                                                                <?= $isrc;?>
                                                            </time>
                                                        </div>
                                                    </div>
                                                    <!-- / .row -->
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <!-- Title -->
                                                            <h5 class="mb-0">
                                                                Key
                                                            </h5>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Time -->
                                                            <time class="small text-muted" >
                                                                <?= $key_name;?>
                                                            </time>
                                                        </div>
                                                    </div>
                                                    <!-- / .row -->
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <!-- Title -->
                                                            <h5 class="mb-0">
                                                                Beats Per Minute
                                                            </h5>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Time -->
                                                            <time class="small text-muted" >
                                                                <?= $bpm;?>
                                                            </time>
                                                        </div>
                                                    </div>
                                                    <!-- / .row -->
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <!-- Title -->
                                                            <h5 class="mb-0">
                                                                Loudness (db)
                                                            </h5>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Time -->
                                                            <time class="small text-muted" >
                                                               <?= $loudness;?>
                                                            </time>
                                                        </div>
                                                    </div>
                                                    <!-- / .row -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- List group -->
                                            <div class="list-group list-group-flush my-n3">
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <!-- Title -->
                                                            <h5 class="mb-0">
                                                                Length
                                                            </h5>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Time -->
                                                            <time class="small text-muted" >
                                                                <?= lenght($lenght);?>
                                                            </time>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <!-- Title -->
                                                            <h5 class="mb-0">
                                                                Track Number
                                                            </h5>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Time -->
                                                            <time class="small text-muted" >
                                                                 <?= $track_number;?> of  <?= $album_n_tracks;?>
                                                            </time>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-group-item">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <!-- Title -->
                                                            <h5 class="mb-0">
                                                                Explicit
                                                            </h5>
                                                        </div>
                                                        <div class="col-auto">
                                                            <!-- Time -->
                                                            <time class="small text-muted" >
                                                                <?= $explicit;?>
                                                            </time>
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
            </div>
            <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor.bundle.js">
            </script>
            <script src="<?= Request::root();?>/local/resources/views/assets/js/theme.bundle.js">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js">
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

                $("#btnokay").click(function(){ 
                frame = $("#elframe").contents();
                frame.find("#main > div").hide(); 
            });

                $(document).ready(function(){
                 var urlActual = window.location;
                    if(String(urlActual).indexOf("analysis")!==-1){
                       $("#navlink-performance").removeClass('active'); 
                       $("#navlink-analysis").addClass('active'); 
                       $("#navlink-security").removeClass('active'); 
                    }
                });
                
            </script>
        </div>
    </body>
</html>
