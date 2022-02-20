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
        </style>
        <title>
            Campaigns
        </title>
    </head>
    <body>
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
                                <h1 class="header-title" id="page-tittle">
                                    Active Campaign
                                </h1>
                            </div>
                        </div>
                        <!-- / .row -->
                    </div>
                    <!-- / .header-body -->
                </div>
            </div>
            <div class="container-fluid">
                <div class="tab-content">
                    <div aria-labelledby="contactsListTab" class="tab-pane fade show active" id="contactsListPane" role="tabpanel">
                        <!-- Card -->
                        <div class="card" id="contactsList">
                            <div class="card-header">
                                <h4 class="card-header-title" id="title-card">
                                    Active Campaigns
                                </h4>
                                <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#" id="btn-active">
                                            Active
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#" id="btn-pass">
                                            Past
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="table-responsive" style="max-height: 410px;overflow: scroll;">
                                <table class="table table-sm table-hover table-nowrap card-table text-center" id="table-active">
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
                                                    PLATFORMS
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
                                        <?php foreach ($data->campaigns as $key): ?>
                                            <?php if ($key->campaign_statust != "Completed"): ?>
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
                                                <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/spotify.svg" style="width: 20px;">
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
                                                    <a class="btn btn-outline-primary btn-sm mb-2" href="<?= Request::root();?>/campaign-analytics/<?= $key->campaign_token;?>">
                                                        View & edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endif ?>
                                        <?php endforeach ?> 
                                    </tbody>
                                </table>
                                <table class="table table-sm table-hover table-nowrap card-table text-center" id="table-pass" style="display: none;">
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
                                                    PLATFORMS
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
                                       <?php foreach ($data->campaigns as $key): ?>
                                            <?php if ($key->campaign_statust == "Completed"): ?>
                                                <tr>
                                                <td>
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-xs align-middle me-2">
                                                        <img class="avatar-img rounded-circle" src="<?= $key->track_cover;?>">
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
                                                <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/spotify.svg" style="width: 20px;">
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
                                                    <a class="btn btn-outline-primary btn-sm mb-2" href="<?= Request::root();?>/campaign-analytics/<?= $key->campaign_token;?>">
                                                        View & edit
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
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
        <script>
            $("#btn-active").click(function(){
                $("a").removeClass('active');
                $(this).addClass('active');
                $("#table-pass").hide();
                $("#table-active").show();
                $("#title-card,#page-tittle").text("Active Campaign"); 
             });

            $("#btn-pass").click(function(){
                $("a").removeClass('active');
                $(this).addClass('active');
                $("#table-pass").show();
                $("#table-active").hide();
                $("#title-card").text("Past Campaign");
                $("#title-card,#page-tittle").text("Past Campaign");
             });
            <?php if (isset($_GET['section'])): ?>
                <?php if ($_GET['section'] == "active"): ?>
                    $("#btn-active").click();
                <?php endif ?>
                <?php if ($_GET['section'] == "past"): ?>
                    $("#btn-pass").click();
                <?php endif ?>
            <?php endif ?>
        </script>
    </body>
</html>
