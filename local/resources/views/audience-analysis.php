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
        <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/jqcloud/1.0.3/jqcloud.min.css" integrity="sha512-fcdsxZsaS4WFbhPFbrOWXO+IEhXJg/lP6m4vgu8vPgyoTsbYUTD/iesILpk7P+glk9CBnjfPiD5PshTzwfv9ig==" referrerpolicy="no-referrer" rel="stylesheet"/>
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
            .w10{
                color: #335eea !important;
            }
            .w9, .w8, .w7, .w6, .w5, .w4, .w3, .w2, .w1,div.jqcloud{
                color: #2e2e2e !important;
            }
            div.jqcloud a:hover{
                color: #335eea !important;
            } 

            .visible{
                display: initial;
            }
            .no-visible{
                display: none;
            }
        </style>
        <title>
            Audience Analysis
        </title>
        <?php include('includes/general_scripts.php');?>
    </head>
    <body>
        <?php 
            $artist_cover = $artistSummary->artist->cover; 
            $artist_img = $artistSummary->artist->img_profile;
            $artist_name = $artistSummary->artist->name;
            $artist_token = $artistSummary->artist->artist_token;

            function notStatsYetGraph($id,$class,$display=false){
                $dis = "";
                if($display == true){$dis = "display:none;";}
                return '<div style="padding-top: 50px;'.$dis.'" class="'.$class.'" id="'.$id.'"> <div class="text-center mb-2"> <span class="fe fe-bar-chart-2 text-primary" style="font-size: 48px"></span> </div><h2 class="text-center">No stats yet</h2> <p class="text-center mt-3 mb-0">You will see first results within 24-48 hours of campaign start.</p></div>';
            }

            function getAVGSimilar($data){
                $total = 0;
                $suma = 0;
                foreach ($data as $key) {
                    $total = $total + 1;
                    $suma = $suma + $key->monthlyListeners;
                }
                if($total>0 && $suma>0){
                    return ($suma / $total);
                }
                return 0;
            }
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
                                <div class="row align-items-center">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2">
                                            your mONTHLY LISTENERS
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                            <?php if (count($artistSummary->monthly_listener_graph) > 0): ?>
                                                <?php $m_listeners = count($artistSummary->monthly_listener_graph); ?>
                                                <?php $hoy = $artistSummary->monthly_listener_graph[$m_listeners - 1]->listener;?>
                                                <?php if (count($artistSummary->monthly_listener_graph) >= 2): ?>
                                                    <?php $ayer = $artistSummary->monthly_listener_graph[$m_listeners - 2]->listener;?>
                                                <?php else: ?>
                                                    <?php $ayer = 0;?>
                                                <?php endif ?> 
                                            <?php endif ?>
                                            <?php echo number_format($hoy); ?>
                                        </span>
                                        <!-- Badge -->
                                        <?php
                                        if (number_format($hoy)>0 && number_format($ayer)>0): ?>
                                            <?php if (number_format($hoy - $ayer)>0): ?> 
                                                <span class="badge bg-success-soft mt-n1">
                                                   <?php echo number_format(($hoy - $ayer)*100/$ayer);?>%
                                                </span>
                                            <?php elseif(number_format($hoy - $ayer)<0): ?>
                                                <span class="badge bg-danger-soft mt-n1">
                                                    <?php echo number_format(($ayer - $hoy)*100/$ayer);?>%
                                                </span>
                                            <?php elseif(number_format($hoy - $ayer)==0): ?>
                                                <span class="badge bg-secondary-soft mt-n1">
                                                    0%
                                                </span>
                                            <?php endif ?>
                                        <?php elseif(number_format($hoy)==0 && number_format($ayer)>0): ?>
                                            <span class="badge bg-secondary-soft mt-n1">
                                                    0%
                                            </span>    
                                        <?php elseif(number_format($ayer)==0 && number_format($hoy)==0 ): ?>
                                            <span></span>   
                                        <?php endif ?>    
                                    </div>
                                    <div class="col-auto">
                                        <!-- Icon -->
                                        <span class="h2 fe fe-users text-muted mb-0">
                                        </span>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <!-- Value  -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2">
                                            Growth Potential
                                            <i class="fe fe-info fs-5" data-bs-original-title="" data-bs-toggle="tooltip" style="cursor: pointer;" title="Audience size of the largest artist in your niche.">
                                            </i>
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0" id="growth_potential"> 
                                            <?= number_format($artistSummary->growth_potential);?>
                                        </span>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Icon -->
                                        <span class="h2 fe fe-briefcase text-muted mb-0">
                                        </span>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <!-- Value  -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2">
                                            Potential Achieved
                                        </h6>
                                        <div class="row align-items-center g-0">
                                            <div class="col-auto">
                                                <!-- Heading -->
                                                <span class="h2 me-2 mb-0">
                                                    <?php $percen = 0; ?>
                                                    <?php if ($artistSummary->growth_potential > 0 && $hoy> 0): ?>
                                                        <?= number_format(($hoy / $artistSummary->growth_potential) * 100,2);?>%
                                                        <?php $percen = number_format($hoy / $artistSummary->growth_potential,2); ?>
                                                    <?php else: ?>
                                                        0%
                                                    <?php endif ?> 
                                                </span>
                                            </div>
                                            <div class="col">
                                                <!-- Progress -->
                                                <div class="progress progress-sm">
                                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" class="progress-bar" role="progressbar" style="width: <?= $percen * 100;?>%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                    <div class="col-auto">
                                        <!-- Icon -->
                                        <span class="h2 fe fe-clipboard text-muted mb-0">
                                        </span>
                                    </div>
                                </div>
                                <!-- / .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <!-- Value  -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <!-- Title -->
                                        <h6 class="text-uppercase text-muted mb-2">
                                            SIMILAR ARTISTS AVG. MONTHLY LISTENERS
                                        </h6>
                                        <!-- Heading -->
                                        <span class="h2 mb-0">
                                            <?= number_format(getAVGSimilar($artistSummary->related_artist));?> 
                                        </span>
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
                </div>
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-header-title">
                                            Total Monthly Listeners
                                        </h4>
                                        <select class="form-control" style="max-width: 200px;">
                                            <option value="60">
                                                Last 60 Days
                                            </option>
                                            <option value="90">
                                                Last 90 Days
                                            </option>
                                            <option value="360">
                                                Last Year
                                            </option>
                                            <option value="Custom">
                                                Custom
                                            </option>
                                        </select>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart">
                                            <?php if(count($artistSummary->monthly_listener_graph) > 0): ?>
                                                <canvas class="chart-canvas" id="g1">
                                                </canvas>
                                            <?php else: ?>
                                                <?= notStatsYetGraph("g1","");?>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Top Cities
                                </h4>
                            </div>
                            <div class="card-body">
                                <!-- List group -->
                                <div class="list-group list-group-flush my-n3">
                                    <?php 
                                    $contador_city = 1;
                                    foreach ($artistSummary->top_cities as $key): ?> 
                                        <div class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto" style="color:#335eea;font-size: 21px;">
                                                    # <?= $contador_city;?>
                                                </div>
                                                <div class="col ms-n2">
                                                    <h4 class="mb-1">
                                                        <?= $key->city;?>, <?= $key->country;?> 
                                                        <span style="float: right;" class="badge bg-light"><?= number_format($key->numberOfListeners);?></span>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                     <?php $contador_city = $contador_city + 1;?>
                                     <?php endforeach ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Genres
                                </h4>
                            </div>
                            <div class="card-body">
                                <!-- List group -->
                                <div class="list-group list-group-flush my-n3">
                                    
                                    <?php 
                                    $contador_generos = 1;
                                    $generos_artist = [];
                                    if (count($artistSummary->generos)  > 0 ) {
                                       $generos_artist = $artistSummary->generos; 
                                    }
                                    else if (count($artistSummary->related_generos_group) > 0){
                                        $generos_artist = $artistSummary->related_generos_group; 
                                    }
                                    else{
                                        $generos_artist = [];
                                    }
                                    foreach ($generos_artist as $key): ?> 
                                        <?php 
                                            if($contador_generos == 6){break;}
                                        ?>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto" style="color:#335eea;font-size: 21px;">
                                                    # <?= $contador_generos;?>
                                            </div> 
                                            <div class="col ms-n2"> 
                                                <h4 class="mb-1 text-capitalize">
                                                   <?= $key->genero;?>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $contador_generos = $contador_generos + 1;?>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-header-title">
                                            Artist in Same Genre’s
                                        </h4>  
                                       <form id="form-genero" method="GET">
                                            <select id="cbn_genero" name="genero" class="form-control" style="width: 250px;">
                                            <?php 
                                            $c = 1;
                                            foreach ($generos_artist as $key): ?>
                                                <?php if ($c==6): ?>
                                                    <?php break;?>
                                                <?php endif ?>
                                                <?php if (isset($_GET['genero'])): ?>
                                                    <?php if ($_GET['genero']== $key->genero): ?>
                                                        <option selected class="text-capitalize" value="<?= $key->genero;?>">
                                                        <?= ucwords($key->genero);?>
                                                        </option> 
                                                    <?php else: ?>
                                                        <option class="text-capitalize" value="<?= $key->genero;?>">
                                                        <?= ucwords($key->genero);?>
                                                        </option>
                                                    <?php endif ?>
                                                    <?php else: ?>
                                                        <option class="text-capitalize" value="<?= $key->genero;?>">
                                                        <?= ucwords($key->genero);?>
                                                        </option>
                                                <?php endif ?>   
                                            <?php 
                                            $c = $c + 1;
                                            endforeach ?>
                                        </select>
                                       </form>
                                    </div>
                                    <div class="card-body">
                                        <div data-scrollbar class="chart" id="wordGraph" style="">
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary" onclick="cambiar()">See more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Artists with Similar Fanbases
                                </h4>
                            </div>
                            <div id="similar_fanbases" class="card-body scroll" style="max-height: 478px;overflow-y: scroll;">
                                <div class="table-responsive mb-0">
                                    <table class="table table-sm table-nowrap card-table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Artist
                                                </th>
                                                <th>
                                                    Socials
                                                </th>
                                                <th>
                                                    followers
                                                </th>
                                                <th>
                                                    Most popular in
                                                </th>
                                                 <th>
                                                    Monthly listeners
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($artistSummary->related_artist as $key): ?> 
                                            <tr>
                                                <td>
                                                    <div class="row align-items-center">
                                                        <div class="col-auto">
                                                            <a class="avatar" href="#!">
                                                                <img alt="..." class="avatar-img rounded" src="<?= $key->img;?>">
                                                                </img>
                                                            </a>
                                                        </div>
                                                        <div class="col ms-n2">
                                                            <h4 class="mb-1">
                                                                <a href="#!">
                                                                    <?= $key->name;?>
                                                                </a>
                                                            </h4>
                                                            <?php foreach ($artistSummary->related_generos as $key2): ?>
                                                                <?php if ($key2->id_artist == $key->id_artist && $key2->genero != ""): ?>
                                                                     <span class="badge bg-light text-capitalize fw-bold"> <?= $key2->genero;?></span>
                                                                <?php endif ?>
                                                            <?php endforeach ?>
                                                          
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php foreach ($artistSummary->related_socials as $key2): ?>
                                                        <?php if ($key2->id_artist == $key->id_artist): ?>
                                                             <?php if ($key2->name == "FACEBOOK"): ?> 
                                                                <a target="_blank" href="<?= $key2->url;?>"><img style="width: 22px;" src="<?= Request::root();?>/local/resources/views/assets/svg_icons/facebook.svg"></a>
                                                            <?php elseif ($key2->name == "INSTAGRAM"): ?> 
                                                                <a target="_blank" href="<?= $key2->url;?>"><img style="width: 18px;" src="<?= Request::root();?>/local/resources/views/assets/svg_icons/instagram.svg"></a>
                                                            <?php elseif ($key2->name == "TWITTER"): ?> 
                                                                <a target="_blank" href="<?= $key2->url;?>"><img style="width: 27px;" src="<?= Request::root();?>/local/resources/views/assets/svg_icons/twitter.svg"></a>
                                                            <?php endif ?>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                </td>
                                                <td>
                                                    <?= number_format($key->followers);?>
                                                </td>
                                                <td>
                                                    <?= $key->best_market;?>
                                                </td>
                                                <td>
                                                    <?= number_format($key->monthlyListeners);?>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-header-title">
                                    Markets of Opportunity
                                </h4>
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas class="chart-canvas" id="market_oportunity_graph">
                                        </canvas>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.7.4/smooth-scrollbar.js"  ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqcloud/1.0.3/jqcloud.min.js"  ></script>
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
                getArtistByGenres($("#cbn_genero").val()); 
            });
            $("#cbn_genero").change(function(){
                getArtistByGenres($(this).val());
            });

            monthly_listener_graph = [];
            monthly_listener_graph_labels = [];
            monthly_listener_symbol = "K";

            <?php foreach ($artistSummary->monthly_listener_graph as $key): ?> 
               monthly_listener_graph.push(<?= $key->listener;?>);
               monthly_listener_graph_labels.push(moment('<?= $key->created;?>').format('ddd, ll'));
            <?php endforeach ?>

            m = Math.max.apply(Math,monthly_listener_graph);
          
            if(parseFloat(m) >= 1000000){
                monthly_listener_symbol = "M";
                 $.each(monthly_listener_graph, function( index, value ) {
                  monthly_listener_graph[index] = (value / 1000000).toFixed(2); 
                }); 
                m = parseFloat(m / 1000000);
            }
            else if(parseFloat(m)>= 1000 && parseFloat(m) < 1000000){
                monthly_listener_symbol = "K";
                $.each(monthly_listener_graph, function( index, value ) {
                  monthly_listener_graph[index] = (value / 1000).toFixed(2); 
                });
                m = parseFloat(m / 1000).toFixed(2);
            }
            
            market_oportunity_labels = [];
            market_oportunity_values = [];
            market_symbol = "";

            <?php foreach ($artistSummary->market_oportunity as $key): ?>
                market_oportunity_labels.push('<?= $key->city;?>');
                market_oportunity_values.push(<?= $key->numberOfListeners;?>);
            <?php endforeach ?>

            m2 = Math.max.apply(Math,market_oportunity_values);
          
            if(parseFloat(m2) >= 1000000){
                market_symbol = " M";
                 $.each(market_oportunity_values, function( index, value ) {
                  market_oportunity_values[index] = parseFloat(value / 1000000).toFixed(2); 
                }); 
                m2 = parseFloat(m2 / 1000000);
            }
            else if(parseFloat(m2)>= 1000 && parseFloat(m2) < 1000000){
                market_symbol = " K";
                $.each(market_oportunity_values, function( index, value ) {
                  market_oportunity_values[index] = parseFloat(value / 1000).toFixed(2); 
                });
                m2 = parseFloat(m2 / 1000).toFixed(2);
            }
            
            barGraph(market_oportunity_values,[],"market_oportunity_graph",market_oportunity_labels,m2,market_symbol);

            lineGraph([35,0,0,70],[],"salesGraph2",['01-Jan','02-Jan','03-Jan','04-Jan'],'$'); 
            
            lineGraph2(monthly_listener_graph,[],"g1",monthly_listener_graph_labels,monthly_listener_symbol,m); 

            function barGraph(data_1,data_2,id,labels_data,max,symbol){
                new Chart(document.getElementById(id), {
                type: 'bar',
                options: {
                  scales: {
                    y: {
                      ticks: {
                        callback: function(value) {
                          return  value + symbol;
                        },
                      },max: max,
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
            function lineGraph2(data_1,data_2,id,labels_data,symbol = ' M',max){
                new Chart(document.getElementById(id), {
                type: 'line',
                options: { 
                   scales: {
                    y: {
                      ticks: {
                        callback: function(value) {
                          return  value + symbol;
                        },
                      },max: max,
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
                  },
                   plugins: {
                      legend: {  
                        position: 'bottom', 
                        display: false,
                        labels: { 
                              boxHeight:5,
                              boxWidth:35,
                          }
                      },  
                    }, 
                },
                data: {
                  labels: labels_data,
                  datasets: [{
                    label: 'Reach',
                    data: data_1, 
                  },{
                    label: 'Plays',
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
                        callback: function(value) {
                          return  value + symbol;
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
        <script> 
        </script> 

        <script> 
            var Word_global = []
            var control = [1,2,3,4,5]
            var a = []
            var b = []
            var c = []
            var d = []
            var e = []

            function derecha(){
  
                var i = control[0];
                var j = control[0];
  
                for(w=0; w<=4; w++){
    
                if(w<4){
                    var m = control[w+1];
                    control[w+1] = j;
                    j = m;
                }
                else{
                    control[0] = j;
                }  
                }
            }

            function izquierda(){ 
                var i = control[4];
                var j = control[4]; 
                for(w=4; w>=0; w--){
    
                    if(w>0){
                        var m = control[w-1];
                        control[w-1] = j;
                        j = m;
                    }
                    else{
                        control[4] = j;
     
                    } 
                }   
            }
     

            function partir(arreglo){
                var primero = arreglo[0];
                var control = [];
                control[0] = primero;

                for(i=1; i<20; i++){
                    control[i] = arreglo[i];
                } 
                return control;
            }
            function partir2(arreglo){
                var primero = arreglo[0];
                var control = [];
                control[0] = primero;

                for(i=20; i<40; i++){
                    control[i-19] = arreglo[i];
                } 
                return control;
            }
            function partir3(arreglo){
                var primero = arreglo[0];
                var control = [];
                control[0] = primero;

                for(i=40; i<60; i++){
                    control[i-39] = arreglo[i];
                } 
                return control;
            }
            function partir4(arreglo){
                var primero = arreglo[0];
                var control = [];
                control[0] = primero;

                for(i=60; i<80; i++){
                    control[i-59] = arreglo[i];
                } 
                return control;
            }
            function partir5(arreglo){
                var primero = arreglo[0];
                var control = [];
                control[0] = primero;

                for(i=80; i<=99; i++){
                    control[i-79] = arreglo[i];
                } 
                return control;
            }

            function getArtistByGenres(genero) {
                if(genero !=""){
                    var settings = {
                      "url": "http://65.108.135.59/v1/generos-artist/"+genero,
                      "method": "GET",
                      "timeout": 0,
                      "headers": {},
                    };

                    var word_list = [];
                    $.ajax(settings).done(function (response) { 
                        $("#wordGraph").html("");

                        word_list = response['data']; 
                        Word_global = word_list; 

                        a = partir(word_list);
                        b = partir2(word_list);
                        c = partir3(word_list);
                        d = partir4(word_list);
                        e = partir5(word_list);

                        $("#wordGraph").jQCloud(a,{ 
                            fontSize: function(width, height, step) {
                                return (width / 100 * step) + 'px';
                            },
                        }); 
                    }); 
                }
            }

            function cambiar(){

                izquierda();

                var numero = control[0];

                switch(numero){
                    case 1: $('#wordGraph').empty();
                $('#wordGraph').jQCloud('destroy');
                $('#wordGraph').jQCloud(a, { 
                            fontSize: function(width, height, step) {
                                return (width / 100 * step) + 'px';
                            },
            });
            break;
                    case 2: $('#wordGraph').empty();
                $('#wordGraph').jQCloud('destroy');
                $('#wordGraph').jQCloud(b, { 
                            fontSize: function(width, height, step) {
                                return (width / 100 * step) + 'px';
                            },
            });
            break;
                    case 3: $('#wordGraph').empty();
                $('#wordGraph').jQCloud('destroy');
                $('#wordGraph').jQCloud(c, { 
                            fontSize: function(width, height, step) {
                                return (width / 100 * step) + 'px';
                            },
            });
            break;
                    case 4: $('#wordGraph').empty();
                $('#wordGraph').jQCloud('destroy');
                $('#wordGraph').jQCloud(e, { 
                            fontSize: function(width, height, step) {
                                return (width / 100 * step) + 'px';
                            },
            });
            break;
                    case 5: $('#wordGraph').empty();
                $('#wordGraph').jQCloud('destroy');
                $('#wordGraph').jQCloud(e, { 
                            fontSize: function(width, height, step) {
                                return (width / 100 * step) + 'px';
                            },
            });
            break;
                }

                
            }

            $(document).ready(function(){
                var urlActual = window.location;
                if(String(urlActual).indexOf("audience")!==-1){
                   $("#navlink-audience").addClass('active');
                   $("#navlink-catalogue").removeClass('active'); 
                   $("#navlink-summary").removeClass('active');
                }
            });

        </script>
         
        <?php include ("includes/loading.php") ?>
    </body>
</html>
