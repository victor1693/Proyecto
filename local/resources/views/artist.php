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
                <div class="row">
                    <div class="col-12 col-lg-3">
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
                                            $reach = $artistSummary->artist->reach;
                                            ?>
                                            <?php if ($reach > 999 && $reach < 1000000): ?>
                                                 <?= round($reach / 1000,1);?> K
                                            <?php elseif ($reach >= 1000000): ?>
                                                 <?= round($reach / 1000000,1);?> M
                                            <?php else: ?>
                                                 <?= $reach;?> 
                                            <?php endif ?> 
                                            <div class="spinner-grow spinner-grow-sm text-success" role="status" style="width: 10px;height: 10px;position: absolute;top: 7px;right: -15px;">
                                                <span class="visually-hidden">
                                                    Loading...
                                                </span>
                                            </div>
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
                    <div class="col-12 col-lg-3">
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
                                            $streams = $artistSummary->artist->streams;
                                            ?>
                                            <?php if ($streams > 999 && $streams < 1000000): ?>
                                                 <?= round($streams / 1000,1);?> K
                                            <?php elseif ($streams >= 1000000): ?>
                                                 <?= round($streams / 1000000,1);?> M
                                            <?php else: ?>
                                                 <?= $streams;?> 
                                            <?php endif ?> 
                                            <div class="spinner-grow spinner-grow-sm text-success" role="status" style="width: 10px;height: 10px;position: absolute;top: 7px;right: -15px;">
                                                <span class="visually-hidden">
                                                    Loading...
                                                </span>
                                            </div>
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
                    <div class="col-12 col-lg-3">
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
                                            <?= $artistSummary->artist->total_campaign;?>
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 ">
                        <!-- Time -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2">
                                            total spent
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                            <span class="h2 fe fe-dollar-sign text-muted mb-0">
                                            </span>
                                            <?php 
                                            $inversion = $artistSummary->artist->inversion;
                                            ?>
                                            <?php if ($inversion > 999 && $inversion < 1000000): ?>
                                                 $<?= round($inversion / 1000,1);?> K
                                            <?php elseif ($inversion >= 10000001): ?>
                                                 $<?= round($inversion / 1000000,1);?> M
                                            <?php else: ?>
                                                 $<?= $inversion;?> 
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
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-header-title">
                                            Total Campaign Results
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart">
                                            <canvas class="chart-canvas" id="salesGraph">
                                            </canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <div class="table-responsive">
                                <table class="table table-sm table-hover table-nowrap text-center">
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
                                    <tbody class="list">
                                        <?php foreach ($artistSummary->active_campaigns as $key): ?> 
                                        <tr>
                                            <td>
                                                <!-- Avatar -->
                                                <div class="avatar avatar-xs align-middle me-2">
                                                    <img alt="..." class="avatar-img rounded-circle" src="<?= $key->cover;?>">
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
                                               <?= $key->name;?>
                                            </td>
                                            <td>
                                                <?= $key->created;?>
                                            </td>
                                            <td>
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" style="width: 20px;">
                                                </img>
                                            </td>
                                            <td>
                                                <span class="item-score badge bg-primary-soft">
                                                    <?= $key->estrategia;?>
                                                </span>
                                            </td>
                                            <td>
                                                <span class="item-score badge bg-primary">
                                                   <?= $key->campaign_statust;?>
                                                </span>
                                            </td>
                                            <td>
                                                <!-- Badge -->
                                                <span class="item-score badge bg-success">
                                                   <?= $key->payment_status;?>
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-outline-primary btn-sm mb-2" href="<?= Request::root();?>/campaign-analytics">
                                                    View & edit
                                                </a>
                                            </td>
                                        </tr>
                                          <?php endforeach ?>
                                    </tbody>
                                </table>
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
                                            <canvas class="chart-canvas" data-target="#trafficChartLegend" data-toggle="legend" id="trafficChart2">
                                            </canvas>
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
                                            Total Spent
                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-body">
                                            <div class="chart">
                                                <canvas class="chart-canvas" id="salesGraph23">
                                                </canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <!-- List group -->
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h5 class="mb-0">
                                                    Latest Campaign
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Time -->
                                                <time class="small text-muted">
                                                     <?php if (isset($artistSummary->artist->last_campaign)): ?>
                                                         <?= $artistSummary->artist->last_campaign;?>
                                                     <?php endif ?>
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
                                                    Joined
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Time -->
                                                <time class="small text-muted"> 
                                                      <?php if (isset($artistSummary->artist->joined)): ?>
                                                            <?php 
                                                            $old_date = date('Y-m-d H:i:s'); 
                                                            $old_date_timestamp = strtotime($artistSummary->artist->joined);
                                                            $new_date = date('Y/m/d', $old_date_timestamp);   
                                                             ?>
                                                         <?= $new_date;?>
                                                     <?php endif ?>
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
                                                    Latest Release
                                                </h5>
                                            </div>
                                            <div class="col-auto"> 
                                                <small class="text-muted">
                                                
                                                </small>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h5 class="mb-0">
                                                    Socials
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <?php foreach ($artistSummary->socials as $key): ?> 
                                                    <?php if ($key->name == "FACEBOOK"): ?> 
                                                        <a target="_blank" href="<?= $key->url;?>"><img style="width: 30px;" src="<?= Request::root();?>/local/resources/views/assets/svg_icons/facebook.svg"></a>
                                                    <?php elseif ($key->name == "INSTAGRAM"): ?> 
                                                        <a target="_blank" href="<?= $key->url;?>"><img style="width: 24px;" src="<?= Request::root();?>/local/resources/views/assets/svg_icons/instagram.svg"></a>
                                                    <?php elseif ($key->name == "TWITTER"): ?> 
                                                        <a target="_blank" href="<?= $key->url;?>"><img style="width: 30px;" src="<?= Request::root();?>/local/resources/views/assets/svg_icons/twitter.svg"></a>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-header-title">
                                    Past Campaign's Performance
                                </h4>
                                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                                    <li class="nav-item" data-action="toggle" data-dataset="0" data-target="#salesGraph3" data-toggle="chart" data-trigger="click">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#">
                                            Reach
                                        </a>
                                    </li>
                                    <li class="nav-item" data-action="toggle" data-dataset="1" data-target="#salesGraph3" data-toggle="chart" data-trigger="click">
                                        <a class="nav-link" data-bs-toggle="tab" href="#">
                                            Conversions
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <canvas class="chart-canvas" id="salesGraph3">
                                    </canvas>
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
        <script> 
            salesGraphLabels  = []; 
            salesGraphReach  = []; 
            salesGraphConversion  = []; 

            <?php foreach ($artistSummary->total_campaign_results as $key): ?> 
                <?php if ($key->streams!=""): ?> 
                    salesGraphLabels.push(moment('<?= $key->created;?>').format('ddd, ll'));
                    salesGraphConversion.push(<?= $key->streams;?>); 
                <?php endif ?>
                <?php if ($key->reach!=""): ?> 
                    salesGraphReach.push(<?= $key->reach;?>); 
                <?php endif ?>
            <?php endforeach ?> 

            lineGraph2(salesGraphConversion,salesGraphReach,"salesGraph",salesGraphLabels);

            <?php if (count($artistSummary->past_campaign_performance)>0): ?>  

                past_names = [];
                past_streams = [];
                past_reach = [];

                <?php foreach ($artistSummary->past_campaign_performance as $key): ?>
                    past_names.push("<?= $key->name;?>");
                    <?php if ($key->total_streams == null): ?> 
                        past_streams.push(0);
                        <?php else: ?> 
                        past_streams.push(<?= $key->total_streams / 1000;?>);
                    <?php endif ?>

                    <?php if ($key->total_reach == null): ?> 
                        past_reach.push(0);
                        <?php else: ?> 
                        past_reach.push(<?= $key->total_reach / 1000;?>);
                    <?php endif ?> 
                <?php endforeach ?> 
                barGraph(past_reach,past_streams,"salesGraph3",past_names);
            <?php endif ?>

            total_spent_graph = [];
            total_spent_graph_label = [];

            <?php 
                $acu_total_spent = 0;
                foreach ($artistSummary->total_spent_graph as $key): ?>
                <?php $acu_total_spent = $acu_total_spent + $key->inversion;?>
                total_spent_graph.push(<?= $acu_total_spent;?>);   
                total_spent_graph_label.push(moment('<?= $key->created;?>').format('ddd, ll')); 
            <?php endforeach ?>


            lineGraph(total_spent_graph,[],"salesGraph23",total_spent_graph_label,' $');
 

            function barGraph(data_1,data_2,id,labels_data){
                new Chart(document.getElementById(id), {
                type: 'bar',
                options: {
                  scales: {
                    y: {
                      ticks: {
                        maxTicksLimit: 4, 
                        autoSkip: true,
                        callback: function(value) {
                             if((value * 1000) >= 1000000){ 
                              return ((value * 1000) / 1000000) + ' M';
                            }
                            else if((value * 1000) >= 1000 && value < 1000000){
                                 return ((value * 1000) / 1000) + ' K';
                            }
                        }, 
                      },
                    }
                  }
                },
                data: {
                  labels: labels_data,
                  datasets: [{
                    label: 'release',
                    data: data_1,
                  },{
                    label: 'track',
                    data: data_2,
                    hidden: true
                  }
                  ]
                }
              });
            }
            function lineGraph2(data_1,data_2,id,labels_data,symbol = ' M'){
                new Chart(document.getElementById(id), {
                type: 'line',
                options: { 
                     
                   plugins: {
                      legend: {  
                        position: 'bottom', 
                        display: true,
                        labels: { 
                              boxHeight:5,
                              boxWidth:35,
                          }
                      },  
                    }, 
                     scales: {
                        y: {
                          ticks: { 
                            maxTicksLimit: 4, 
                            autoSkip: true,
                            callback: function(value) {
                              if(value > 1000 && value < 1000000){
                                return ( value / 1000).toFixed(2) + ' K';
                              }
                              else if(value >= 1000000){
                                return Math.round(value / 1000000) + ' M';
                              }
                            },
                          } 
                        },
                         x: {
                          ticks: { 
                            display: true,
                            autoSkip: true,
                            maxTicksLimit: 4,
                            maxRotation:0,
                            align : 'start',
                          } 
                        }
                      }
                },

                data: {
                  labels: labels_data,
                  datasets: [{
                    label: 'Reach',
                    data: data_1, 
                  },{
                    label: 'Conversions',
                    data: data_2, 
                    hidden: false, 
                    borderColor: '#A6C5F7',
                    borderDash: [5, 5],
                  } 
                  ]
                }
              });
            }
            function lineGraph(data_1,data_2,id,labels_data,symbol = ' M'){
                new Chart(document.getElementById(id), {
                type: 'line',
                options: {
                  scales: {
                    y: {
                      ticks: {
                        maxTicksLimit: 4, 
                        autoSkip: true,
                        callback: function(value) {
                          return  value + symbol;
                        },
                      }
                    }
                  }
                },
                data: {
                  labels: labels_data,
                  datasets: [{
                    label: 'release',
                    data: data_1,
                  },{
                    label: 'artist',
                    data: data_2,
                    hidden: true
                  }
                  ]
                }
              });
            }
        </script>
        <!-- TRAFFIC CHANNEL -->
        <script>
            new Chart(document.getElementById('trafficChart2'), {
            type: 'doughnut',
            options: {
              plugins: {
                tooltip: {
                  callbacks: {
                    afterLabel: function() {
                      return ''
                    }
                  }
                }
              }
            },
            data: {
              labels: ['Spotify', 'YouTube', 'TikTok','Apple Music'],
              datasets: [{
                data: [<?= $artistSummary->artist->streams;?>, 0, 0,0],
                backgroundColor: ['#2C7BE5', '#A6C5F7', '#D2DDEC', '#A6C5F7']
              }]
            }
          });
        </script>
        <script>
            // PARA GENERAR VALORES ALEATORIOS
            function rv(){
                return Math.floor((Math.random() * 100) + 1);
            }

            // GRAFICAR SPARKLINE
            function slChart(id,datos,borderColor = "#335eea",borderDash = []){
                new Chart(document.getElementById(id,datos,borderColor,borderDash), { 
                type: 'line',
                responsive:true,
                
                options: {
                    responsive: true,
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
                    data: datos,
                    borderColor: borderColor,
                    borderDash: borderDash,
                  }]
                }
              });
            }

            //TOTAL CAMPAIGN REACH
            dTotalReachCampaign = salesGraphReach;

            slChart('graph_total_campaign',dTotalReachCampaign,'#A6C5F7',[5,5]);

            //TOTAL PAYS GAINED
            dTotalPlaysGained = salesGraphConversion;
            slChart('graph_total_plays_gained',dTotalPlaysGained);

            //TOTAL SPENT
            dTotalSpent = total_spent_graph;
            slChart('graph_total_spent',dTotalSpent);
        </script>
         <script></script>
        <?php include ("includes/loading.php") ?>
    </body>
</html>
