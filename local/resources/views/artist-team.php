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
        <?php include('includes/general_scripts.php');?>
    </head>
    <body>
        <?php include('includes/aside.php');?>
        <div class="main-content">
            <?php include('includes/artist-header.php');?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-xl-8">
                        <!-- Card -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <a class="avatar avatar-lg" href="profile-posts.html">
                                            <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-1.jpg">
                                            </img>
                                        </a>
                                    </div>
                                    <div class="col ms-n2">
                                        <!-- Title -->
                                        <h4 class="mb-1">
                                            <a href="profile-posts.html">
                                                Dianna Smiley
                                            </a>
                                        </h4>
                                        <!-- Text -->
                                        <p class="card-text small text-muted mb-1">
                                            You either die Spongebob or you live long enough to...
                                        </p>
                                        <!-- Status -->
                                        <p class="card-text small">
                                            <span class="text-success">
                                                ●
                                            </span>
                                            Online
                                            <span class="badge bg-primary-soft " style="margin-right: 5px;">
                                                Artist
                                            </span>
                                            <span class="badge bg-primary-soft " style="margin-right: 5px;">
                                                View & Edit
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a aria-haspopup="true" class="dropdown-ellipses dropdown-toggle" data-bs-toggle="dropdown" data-expanded="false" href="#" role="button">
                                                <i class="fe fe-more-vertical">
                                                </i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#!">
                                                    Edit permissions
                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    Remove from team
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                            <!-- / .card-body -->
                        </div>
                        <!-- Card -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <a class="avatar avatar-lg" href="profile-posts.html">
                                            <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-2.jpg">
                                            </img>
                                        </a>
                                    </div>
                                    <div class="col ms-n2">
                                        <!-- Title -->
                                        <h4 class="mb-1">
                                            <a href="profile-posts.html">
                                                Ab Hadley
                                            </a>
                                        </h4>
                                        <!-- Text -->
                                        <p class="card-text small text-muted mb-1">
                                            Working on the latest API integration.
                                        </p>
                                        <!-- Status -->
                                        <p class="card-text small">
                                            <span class="text-success">
                                                ●
                                            </span>
                                            Online
                                            <span class="badge bg-primary-soft " style="margin-right: 5px;">
                                                Artist
                                            </span>
                                            <span class="badge bg-primary-soft " style="margin-right: 5px;">
                                                Admin
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a aria-haspopup="true" class="dropdown-ellipses dropdown-toggle" data-bs-toggle="dropdown" data-expanded="false" href="#" role="button">
                                                <i class="fe fe-more-vertical">
                                                </i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#!">
                                                    Edit permissions
                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    Remove from team
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                            <!-- / .card-body -->
                        </div>
                        <!-- Card -->
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <a class="avatar avatar-lg" href="profile-posts.html">
                                            <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-3.jpg">
                                            </img>
                                        </a>
                                    </div>
                                    <div class="col ms-n2">
                                        <!-- Title -->
                                        <h4 class="mb-1">
                                            <a href="profile-posts.html">
                                                Adolfo Hess
                                            </a>
                                        </h4>
                                        <!-- Text -->
                                        <p class="card-text small text-muted mb-1">
                                            Vactioning with the fam
                                        </p>
                                        <!-- Status -->
                                        <p class="card-text small">
                                            <span class="text-success">
                                                ●
                                            </span>
                                            Online
                                            <span class="badge bg-primary-soft " style="margin-right: 5px;">
                                                Artist
                                            </span>
                                            <span class="badge bg-primary-soft " style="margin-right: 5px;">
                                                View
                                            </span>
                                        </p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Dropdown -->
                                        <div class="dropdown">
                                            <a aria-haspopup="true" class="dropdown-ellipses dropdown-toggle" data-bs-toggle="dropdown" data-expanded="false" href="#" role="button">
                                                <i class="fe fe-more-vertical">
                                                </i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#!">
                                                    Edit permissions
                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    Remove from team
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                            <!-- / .card-body -->
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <!-- List group -->
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h5 class="mb-0">
                                                    Member Count
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Text -->
                                                <small class="text-muted">
                                                    129
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
                                                    Joined
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Time -->
                                                <time class="small text-muted" datetime="2018-10-28">
                                                    10/24/18
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
                                                    Privacy
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Text -->
                                                <small class="text-muted">
                                                    Public
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
                                                    Owner
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Link -->
                                                <a class="small" href="#!">
                                                    Dianna Smiley
                                                </a>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / .row -->
            </div>
        </div>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor.bundle.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/theme.bundle.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js">
        </script>
        <script src="https://www.google-analytics.com/analytics.js">
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

            barGraph([30,25,14,16],[8,48,96,17],"salesGraph",['Drake','Farruko','Adele','Bad Bunny']);
            barGraph([2,55,44,5],[1,48,7,8],"salesGraph3",['Mon','Tue','Web','Thu']);
            barGraph([30,25,14,16],[8,48,96,17],"salesGraph2",['Drake','Farruko','Adele','Bad Bunny']);

            function barGraph(data_1,data_2,id,labels_data){
                new Chart(document.getElementById(id), {
                type: 'bar',
                options: {
                  scales: {
                    y: {
                      ticks: {
                        callback: function(value) {
                          return  value + ' M';
                        },
                      },max: 96,
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
                      return '%'
                    }
                  }
                }
              }
            },
            data: {
              labels: ['Spotify', 'YouTube', 'TikTok','Apple Music'],
              datasets: [{
                data: [60, 25, 15,45],
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
            function slChart(id,datos){
                new Chart(document.getElementById(id,datos), {
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
                  labels: new Array(8).fill('Label'),
                  datasets: [{
                    data: datos
                  }]
                }
              });
            }

            //TOTAL CAMPAIGN REACH
            dTotalReachCampaign = [rv(),rv(),rv(),rv(),rv(),rv(),rv(),rv()];
            slChart('graph_total_campaign',dTotalReachCampaign);

            //TOTAL PAYS GAINED
            dTotalPlaysGained = [rv(),rv(),rv(),rv(),rv(),rv(),rv(),rv()];
            slChart('graph_total_plays_gained',dTotalPlaysGained);

            //TOTAL SPENT
            dTotalSpent = [rv(),rv(),rv(),rv(),rv(),rv(),rv(),rv()];
            slChart('graph_total_spent',dTotalSpent);
        </script>
    </body>
</html>
