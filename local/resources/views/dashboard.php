<!DOCTYPE html>
<html lang="en">
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/libs.bundle.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/theme.bundle.css" id="stylesheetLight" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/theme-dark.bundle.css" id="stylesheetDark" rel="stylesheet"/>
      
        <style>
            body{display: none;} 
        </style>

        <title>
            Dashboard
        </title>
    </head>
    <body>
        <?php 
            function MOK($valor){
                if($valor > 1000 && $valor < 1000000){
                    return round($valor/1000,2) . " K";
                }
                else if($valor >= 1000000){
                    return round($valor/1000000,2) . " M";
                }
                else{
                    return $valor;
                }
            }

            function notyet(){
                return '<span style="font-size: 18px;">No stats yet</span> <span class="fe fe-info" style="font-size: 16px;cursor: pointer;" data-bs-toggle="tooltip" data-bs-placement="top" title="If your campaign just begun allow up to 48 hours to start seeing data. Data usually updates live, but some platforms only update their statistics once a day."></span>';
            }

            function notStatsYetGraph($id,$class,$display=false){
                $dis = "";
                if($display == true){$dis = "display:none;";}
                return '<div style="padding-top: 40px;'.$dis.'" class="'.$class.'" id="'.$id.'"> <div class="text-center mb-2"> <span class="fe fe-bar-chart-2 text-primary" style="font-size: 48px"></span> </div><h2 class="text-center">No stats yet</h2> <p class="text-center mt-3 mb-0">You will see first results within 20-48 hours of campaign start.</p></div>';
            }
        ?>
        <?php include('includes/aside.php');?>
        <div class="main-content">   

            <!-- HEADER -->
            <div class="header">
                <div class="container-fluid">
                    <!-- Body -->
                    <div class="header-body">
                        <div class="row align-items-end">
                            <div class="col">
                                <h6 class="header-pretitle">
                                    OVERVIEW
                                </h6>
                                <h1 class="header-title">
                                    Dashboard

                                </h1>
                            </div>
                            <div class="col-auto"> 
                                <a class="btn btn-primary lift" href="<?= Request::root();?>/campaign-new">
                                    New Campaign
                                </a>
                            </div>
                        </div> 
                    </div> 
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl">
                        <!-- Value  -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2">
                                            total campaign reach
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0" style="position: relative;">
                                            <span class="h2 fe fe-headphones text-muted mb-0">
                                            </span>
                                            <?php 
                                            $totalReach = 0;
                                            if ($data->totalReach > 0): ?>
                                                 <?php $totalReach = MOK($data->totalReach[0]->gained);?>
                                                 <?php if ($totalReach>0): ?>
                                                      <?= $totalReach;?>
                                                      <div class="spinner-grow spinner-grow-sm text-success" role="status" style="width: 10px;height: 10px;position: absolute;top: 7px;right: -15px;">
                                                            <span class="visually-hidden">
                                                                Loading...
                                                            </span>
                                                        </div>
                                                    <?php else: ?>
                                                       <?= notYet()?>
                                                  <?php endif ?>  
                                            <?php else: ?> 
                                            <?php endif ?>  
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="chart chart-sparkline p-1">
                                            <canvas class="chart-canvas" id="graph_total_campaign">
                                            </canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl">
                        <!-- Hours -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2">
                                            Total conversions
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0" style="position: relative;margin-right: 15px;">
                                            <span class="h2 fe fe-music text-muted mb-0">
                                            </span>
                                            <?php 
                                            $totalConversion = 0;
                                            if ($data->totalConversion > 0): ?>
                                                 <?php $totalConversion = MOK($data->totalConversion[0]->gained);?>
                                                 <?php if ($totalConversion > 0): ?>
                                                 <?= $totalConversion;?>
                                                 <div class="spinner-grow spinner-grow-sm text-success" role="status" style="width: 10px;height: 10px;position: absolute;top: 7px;right: -15px;">
                                                    <span class="visually-hidden"> 
                                                    </span>
                                                </div>
                                                 <?php else: ?>
                                                    <?= notYet()?>
                                                 <?php endif ?>
                                            <?php endif ?>   
                                        </span> 
                                    </div>
                                    <div class="col-auto">
                                        <div class="chart chart-sparkline p-1">
                                            <canvas class="chart-canvas" id="graph_total_plays_gained">
                                            </canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl">
                        <!-- Exit -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2">
                                            Number of campaigns
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                            <span class="h2 fe fe-clipboard text-muted mb-0">
                                            </span>
                                             <?php 
                                            $numberOfCampaign = 0;
                                            if ($data->numberOfCampaign > 0): ?>
                                                 <?php $numberOfCampaign = MOK($data->numberOfCampaign[0]->total);?>
                                                 <?php if ($numberOfCampaign > 0): ?>
                                                     <?= $numberOfCampaign;?>
                                                 <?php else: ?> 
                                                    <?= notYet()?>
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
                    <div class="col-12 col-lg-6 col-xl">
                        <!-- Time -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2">
                                            total budget spent
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                            <span class="h2 fe fe-dollar-sign text-muted mb-0">
                                            </span>
                                            <?php 
                                            $totalSpent = 0;
                                            if (count($data->totalSpent) > 0): ?> 
                                                <?php $totalSpent = MOK($data->totalSpent[0]->total);?>
                                                <?php if ($totalSpent == ""): ?> 
                                                    <?= notYet()?>
                                                 <?php else: ?> 
                                                    <?= $totalSpent;?>
                                                <?php endif ?>
                                            <?php endif ?> 
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="chart chart-sparkline p-1">
                                            <canvas class="chart-canvas" id="graph_total_spent">
                                            </canvas>
                                        </div>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-header-title">
                                    Total Reach
                                </h4>
                                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active totalReach" title="release" data-bs-toggle="tab" href="#">
                                            Per release
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link totalReach" title="artist" data-bs-toggle="tab" href="#">
                                            Per artist
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <div class="chart">
                                     <?php 
                                     $totalReachgained = 0;
                                     foreach ($data->totalReachPerRelease as $key): ?>
                                         <?php $totalReachgained = $totalReachgained + $key->gained;?>
                                    <?php endforeach ?>
                                     <?php 
                                     $totalReachgainedPerArtist = 0;
                                     foreach ($data->totalReachPerRelease as $key): ?>
                                         <?php $totalReachgainedPerArtist = $totalReachgainedPerArtist + $key->gained;?>
                                    <?php endforeach ?>

                                    <?php if ($totalReachgained>0): ?> 
                                         <canvas class="chart-canvas totalReachGraph" id="totalReachRelease">
                                        </canvas> 
                                    <?php else: ?> 
                                    <?= notStatsYetGraph("totalReachRelease","totalReachGraph");?>
                                    <?php endif ?> 

                                    <?php if ($totalReachgainedPerArtist > 0): ?> 
                                     <canvas class="chart-canvas totalReachGraph" id="totalReachArtist" style="display: none;">
                                    </canvas>
                                    <?php else: ?>
                                        <?= notStatsYetGraph("totalReachArtist","totalReachGraph",true);?>
                                    <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Artist Roster
                                </h4>
                                <a class="small text-muted">
                                    Analytics
                                </a>
                            </div>
                            <div class="card-body scroll" style="flex-grow: 1 !important;max-height: 396px;overflow-y: scroll;">
                                <!-- List group -->
                                <div class="list-group list-group-flush">
                                    <?php foreach ($data->ArtistRoster as $key ): ?> 

                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto"> 
                                                <a class="avatar avatar-4by3" href="<?= Request::root();?>/artist-summary/<?= $key->artist_token;?>">
                                                    <img style="width: 50px;height: 50px;" class="avatar-img rounded-circle" src="<?= $key->artist_img_profile;?>">
                                                    </img>
                                                </a>
                                            </div>
                                            <div class="col ms-n2">
                                                <!-- Title -->
                                                <h4 class="mb-1">
                                                    <a href="<?= Request::root();?>/artist-summary/<?= $key->artist_token;?>">
                                                        <?= $key->artist_name;?>
                                                    </a>
                                                </h4>
                                                <!-- Time -->
                                                <p class="card-text small text-muted">
                                                    <time>
                                                        Lastest Campaign: <br/>
                                                        <span class="text-dark"><?= $key->track_name;?></span>
                                                    </time>
                                                </p>  
                                            </div> 
                                            <div class="col-auto">  
                                                <div class="dropdown">
                                                  <a href="<?= Request::root();?>/artist-summary/<?= $key->artist_token;?>" class="text-muted">
                                                    <i class="fe fe-bar-chart-2"></i>
                                                  </a> 
                                                </div> 
                                              </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                    <?php endforeach ?> 
                                </div>
                            </div>
                            <!-- / .card-body -->
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div aria-labelledby="contactsListTab" class="tab-pane fade show active" id="contactsListPane" role="tabpanel">
                        <!-- Card -->
                        <div class="card" id="contactsList">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <!-- Title -->
                                        <h4 class="card-header-title">
                                            Active Campaigns
                                        </h4>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                            <div class="table-responsive scroll" style="max-height: 390px;">
                                <table class="table table-sm table-hover table-nowrap card-table text-center">
                                    <thead>
                                        <tr>
                                            <th>
                                            </th>
                                            <th>
                                                <a class="text-muted" href="#">
                                                    Song Name
                                                </a>
                                            </th>
                                            <th>
                                                <a class="text-muted" href="#">
                                                    Artist
                                                </a>
                                            </th>
                                            <th>
                                                <a class="text-muted" href="#">
                                                    Start Date
                                                </a>
                                            </th>
                                            <th>
                                                <a class="text-muted" href="#">
                                                    PLATFORMs
                                                </a>
                                            </th>
                                            <th>
                                                <a class="text-muted" href="#">
                                                    Strategy
                                                </a>
                                            </th>
                                            <th>
                                                <a class="text-muted" href="#">
                                                    Campaign Status
                                                </a>
                                            </th>
                                            <th>
                                                <a class="text-muted" href="#">
                                                    Payment Status
                                                </a>
                                            </th>
                                            <th class="text-center">
                                                <a class="text-muted" href="#">
                                                    Actions
                                                </a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list fs-base"> 
                                        <?php foreach ($data->ActiveCampaign as $key): ?>
                                            <tr>
                                            <td>
                                                <!-- Avatar -->
                                                <div class="avatar avatar-xs align-middle me-2">
                                                    <img alt="..." class="avatar-img rounded-circle" src="<?= $key->track_cover;?>">
                                                    </img>
                                                </div>
                                            </td>
                                            <td>
                                                <!-- Text -->
                                                <span class="item-title">
                                                    <?= $key->track_name;?>
                                                </span>
                                            </td>
                                            <td>
                                                <?= $key->artist_name;?>
                                            </td>
                                            <td>
                                                <?= $key->start_date;?>
                                            </td>
                                            <td>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" style="width: 20px;">
                                                </img>
                                            </td>
                                            <td>
                                                <span class="item-score badge bg-primary-soft">
                                                     <?= $key->plataform;?>
                                                </span>
                                            </td>
                                            <td>
                                                <?php if ($key->campaign_statust == "Scheduled"): ?>
                                                     <span class="item-score badge bg-warning text-white">
                                                       <?= $key->campaign_statust;?>
                                                    </span>
                                                <?php elseif($key->campaign_statust == "Completed"): ?>
                                                     <span class="item-score badge bg-success">
                                                       <?= $key->campaign_statust;?>
                                                    </span>
                                                 <?php elseif($key->campaign_statust == "Pending"): ?>
                                                     <span class="item-score badge bg-info">
                                                       <?= $key->campaign_statust;?>
                                                    </span>
                                                <?php endif ?> 
                                            </td>
                                            <td>
                                                <!-- Badge -->
                                                <?php if ($key->payment_status == "Paid"): ?> 
                                                    <span class="item-score badge bg-success">
                                                       <?= $key->payment_status;?>
                                                    </span>
                                                <?php else: ?> 
                                                    <span class="item-score badge bg-danger">
                                                       <?= $key->payment_status;?>
                                                    </span>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <a href="<?= Request::root();?>/campaign-analytics/<?= $key->campaign_token;?>" class="btn btn-outline-primary btn-sm mb-2">
                                                    View & edit
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-4">
                        <div class="card card-fill">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Traffic Channels
                                </h4>
                                <a class="small text-muted">
                                    Analytics
                                </a>
                            </div>
                            <div class="card-body">
                                <!-- Chart -->
                                <div class="chart chart-appended">
                                    <?php if ($totalConversion > 0): ?> 
                                    <canvas class="chart-canvas" data-target="#trafficChartLegend" data-toggle="legend" id="trafficChart2">
                                    </canvas>
                                    <?php else: ?>
                                        <?= notStatsYetGraph("trafficChart2","");?>
                                    <?php endif ?>
                                </div>
                                <!-- Legend -->
                                <div class="chart-legend" id="trafficChartLegend">
                                </div>
                            </div>
                            <!-- / .card-body -->
                        </div>
                    </div>
                    <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-header-title">
                                    Total Conversions
                                </h4>
                                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active totalConversion" title="release" data-bs-toggle="tab" href="#">
                                            Per release
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link totalConversion" title="artist" data-bs-toggle="tab" href="#">
                                            Per artist
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <div class="chart">
                                        <?php 
                                        $tcPerReleaseCount = 0;
                                        foreach ($data->totalConversionPerRelease as $key): ?>
                                            <?php $tcPerReleaseCount = $tcPerReleaseCount + $key->gained;?> 
                                        <?php endforeach ?>

                                        <?php 
                                        $tcPerArtistCount = 0;
                                        foreach ($data->totalConversionPerArtist as $key): ?>
                                            <?php $tcPerArtistCount = $tcPerArtistCount + $key->gained;?> 
                                        <?php endforeach ?>


                                        <?php if ($tcPerReleaseCount>0): ?>
                                            <canvas class="chart-canvas totalConversionGraph" id="totalConversionRelease">
                                            </canvas>
                                            <?php else: ?>
                                                 <?= notStatsYetGraph("totalConversionRelease","totalConversionGraph");?>
                                        <?php endif ?>
                                         
                                         <?php if ($tcPerArtistCount > 0): ?> 
                                             <canvas class="chart-canvas totalConversionGraph" id="totalConversionArtist" style="display: none;">
                                            </canvas>
                                            <?php else: ?>
                                                <?= notStatsYetGraph("totalConversionArtist","totalConversionGraph",true);?>
                                        <?php endif ?>

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

            <?php $t = explode(" ", $totalConversion) ;?>;
            traffic = <?= $t[0];?>;
            symbol = "";
            <?php if (count($t)>1): ?>
            symbol = " <?= $t[1];?>";
            <?php endif ?>
            new Chart('trafficChart2', {
            type: 'doughnut',
            options: {
              plugins: {
                tooltip: {
                  callbacks: {
                    afterLabel: function() {
                      return symbol
                    }
                  }
                }
              }
            },
            data: {
              labels: ['Spotify', 'YouTube', 'TikTok','Apple Music'],
              datasets: [{
                data: [traffic, 0, 0, 0],
                backgroundColor: ['#2C7BE5', '#A6C5F7', '#D2DDEC', '#A6C5F7']
              }]
            }
          });
        </script>
        <script>

            $(".totalReach").click(function(){
                $(".totalReachGraph").hide();
                if($(this).attr('title') == "release"){ 
                    $("#totalReachRelease").fadeIn();
                }
                else{
                    $("#totalReachArtist").fadeIn();
                }
            });

             $(".totalConversion").click(function(){
                $(".totalConversionGraph").hide();
                if($(this).attr('title') == "release"){ 
                    $("#totalConversionRelease").fadeIn();
                }
                else{
                    $("#totalConversionArtist").fadeIn();
                }
            });


            function barGraph(id, d_data, d_labels, d_label) {
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
                        labels: d_labels,
                        datasets: [{
                            label: d_label,
                            data: d_data,
                        }]
                    }
                });
            }
            
            totalReachArtist = [];
            totalReachArtistLabel = [];
            <?php foreach ($data->totalReachPerArtist as $key): ?>
                totalReachArtist.push(<?= $key->gained;?>);
                totalReachArtistLabel.push("<?= $key->artist;?>");
            <?php endforeach ?>
            
            barGraph('totalReachArtist',totalReachArtist,totalReachArtistLabel,'Artist');

            totalReachRelease = [];
            totalReachReleaseLabel = [];
            <?php foreach ($data->totalReachPerRelease as $key): ?>
                totalReachRelease.push(<?= $key->gained;?>);
                totalReachReleaseLabel.push("<?= $key->track_name;?>");
            <?php endforeach ?>
            
            barGraph('totalReachRelease',totalReachRelease,totalReachReleaseLabel,'Release');


            totalConversionArtist = [];
            totalConversionArtistLabel = [];
            <?php foreach ($data->totalConversionPerArtist as $key): ?>
                totalConversionArtist.push(<?= $key->gained;?>);
                totalConversionArtistLabel.push("<?= $key->artist;?>");
            <?php endforeach ?>
            
            barGraph('totalConversionArtist',totalConversionArtist,totalConversionArtistLabel,'Artist');

            totalConversionRelease = [];
            totalConversionReleaseLabel = [];
            <?php foreach ($data->totalConversionPerRelease as $key): ?>
                totalConversionRelease.push(<?= $key->gained;?>);
                totalConversionReleaseLabel.push("<?= $key->track_name;?>");
            <?php endforeach ?>
            
            barGraph('totalConversionRelease',totalConversionRelease,totalConversionReleaseLabel,'Release');


        </script>
       
        <script>
            // PARA GENERAR VALORES ALEATORIOS
            function rv(){
                return Math.floor((Math.random() * 100) + 1);
            }

            // GRAFICAR SPARKLINE
            function slChart(id,datos){
                new Chart(document.getElementById(id,datos), {
                type: 'line',
                options: {
                  scales: {
                    y: {
                      display: false
                    },
                    x: {
                      display: false
                    }
                  },
                  elements: {
                    line: {
                      borderWidth: 2,
                      borderColor: '#335eea' 
                    },
                    point: {
                      hoverRadius: 0
                    }
                  },
                  plugins: {
                    tooltip: {
                      external: function() {
                        return false;
                      }
                    }
                  }
                },
                data: {
                  labels: new Array(datos.length).fill('Label'),
                  datasets: [{
                    data: datos
                  }]
                }
              });
            }

            //TOTAL CAMPAIGN REACH
            dTotalReachCampaign = [];
            <?php foreach ($data->totalReachGraph as $key): ?>
                dTotalReachCampaign.push(<?= $key->gained/1000;?>);
            <?php endforeach ?>

            slChart('graph_total_campaign',dTotalReachCampaign);

            //TOTAL PAYS GAINED
            dTotalPlaysGained = [];
             <?php foreach ($data->totalConversionGraph as $key): ?>
                dTotalPlaysGained.push(<?= $key->gained/1000;?>);
            <?php endforeach ?>
            slChart('graph_total_plays_gained',dTotalPlaysGained);

            //TOTAL SPENT
            dTotalSpent = [];
            <?php foreach ($data->totalSpentGraph as $key): ?>
                dTotalSpent.push(<?= $key->spent/1000;?>);
            <?php endforeach ?>
            slChart('graph_total_spent',dTotalSpent);   
        </script>

        <?php include ("includes/loading.php") ?>

    </body>
</html>
