<div class="header">
                <div class="container-fluid">
                    <!-- Body -->
                    <div class="show-sm text-right botones" style="text-align: right;top: 34px;position: absolute;right: 21px;">
                        <div class="dropdown" style="float: left;font-size: 11px;">
                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-sm btn-rounded-circle btn-white mx-0" data-bs-toggle="dropdown" style="font-size: 13px;">
                                <span class="fe fe-pause">
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end text-center">
                                <a class="dropdown-item" href="#!">
                                    <i class="fe fe-pause" style="position: absolute;margin-bottom: 1px;margin-left: -20px;">
                                    </i>
                                    Pause
                                </a>
                                <a class="dropdown-item" href="#!">
                                    <i class="fe fe-corner-down-left" style="position: absolute;margin-bottom: 1px;margin-left: -20px;">
                                    </i>
                                    Stop & Return Balance
                                </a>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-rounded-circle btn-white mx-3">
                            <i class="fe fe-edit">
                            </i>
                        </button>
                    </div>
                    <div class="header-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <!-- Avatar -->
                                <div class="avatar avatar-lg avatar-5by3">
                                    <?php if (count($data->track)>0): ?> 
                                        <img alt="..." class="avatar-img rounded" src="<?= $data->track[0]->cover;?>">
                                        </img>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col">
                                <h6 class="header-pretitle">
                                   <?php if (count($data->track)>0): ?> 
                                         <?= $data->track[0]->artist_name;?>
                                    <?php endif ?>
                                </h6>
                                <!-- Title -->
                                <h1 class="header-title">
                                  <?= $track;?>
                                </h1>
                            </div>
                            <!-- VISTA MOBIL-->
                            <div class="row mt-3 text-center show-sm" style="padding: 0px;margin: 0px;">
                                <div class="col-4 text-center">
                                    <div class="card mb-3">
                                        <div class="card-body p-3 text-center">
                                            <div class="row align-items-center gx-0">
                                                <div class="col text-center">
                                                    <h6 class="text-uppercase text-muted mb-2">
                                                        Platformsd
                                                    </h6>
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" style="width: 20px;margin-top: 0px;">
                                                    </img>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="card mb-3">
                                        <div class="card-body p-3 text-center">
                                            <div class="row align-items-center gx-0">
                                                <div class="col text-center">
                                                    <h6 class="text-uppercase text-muted mb-2">
                                                        START DATE
                                                    </h6>
                                                    <p class="badge bg-light-soft text-dark mb-0">
                                                        
                                                        <?php if (count($data->campaign)>0): ?>
                                                            <?= $data->campaign[0]->start_date;?>
                                                        <?php endif ?> 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="card mb-3">
                                        <div class="card-body p-3 text-center">
                                            <div class="row align-items-center gx-0">
                                                <div class="col text-center">
                                                    <h6 class="text-uppercase text-muted mb-2">
                                                        STRATEGY
                                                    </h6>
                                                    <p class="item-score badge bg-primary-soft mb-0">
                                                         
                                                        <?php if (count($data->campaign)>0): ?>
                                                            <?= $data->campaign[0]->estrategia;?>
                                                        <?php endif ?> 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="card mb-3">
                                        <div class="card-body p-3 text-center">
                                            <div class="row align-items-center gx-0">
                                                <div class="col text-center">
                                                    <h6 class="text-uppercase text-muted mb-2">
                                                        CAMPAIGN STATUS
                                                    </h6>
                                                    <span class="item-score badge bg-primary">
                                                        <?php if (count($data->campaign)>0): ?>
                                                            <?php if ($data->campaign[0]->campaign_statust == "Scheduled"): ?>
                                                                 <span class="item-score badge bg-warning text-white">
                                                                        <?= $data->campaign[0]->campaign_statust;?> 
                                                                </span>
                                                            <?php elseif($data->campaign[0]->campaign_statust == "Completed"): ?>
                                                                <span class="item-score badge bg-success">
                                                                        <?= $data->campaign[0]->campaign_statust;?> 
                                                                </span>
                                                            <?php endif ?>
                                                        <?php endif ?>  
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="card mb-3">
                                        <div class="card-body p-3 text-center">
                                            <div class="row align-items-center gx-0">
                                                <div class="col text-center">
                                                    <h6 class="text-uppercase text-muted mb-2">
                                                        PAYMENT STATUS
                                                    </h6>
                                                    <?php if (count($data->campaign)>0): ?>
                                                        <?php if ($data->campaign[0]->payment_status == "Unpaid"): ?>
                                                             <span class="item-score badge bg-primary">
                                                                    <?= $data->campaign[0]->payment_status;?> 
                                                            </span>
                                                        <?php elseif($data->campaign[0]->payment_status == "Paid"): ?>
                                                            <span class="item-score badge bg-success">
                                                                    <?= $data->campaign[0]->payment_status;?> 
                                                            </span>
                                                        <?php endif ?>
                                                    <?php endif ?> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- MENU VISTA RESPONSIVE -->
                            <div class="col-12 col-md-auto show-lg">
                                <div class="d-flex flex-row bd-highlight mb-3" style="margin-top: 12px;">
                                    <div class="p-2 bd-highlight">
                                        <div class="card mb-0">
                                            <div class="card-body p-3 text-center" style="max-width: 100px; min-height:74px;">
                                                <div class="row align-items-center gx-0">
                                                    <div class="col text-center">
                                                        <h6 class="text-uppercase text-muted mb-2">
                                                            Platforms
                                                        </h6>
                                                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" style="width: 20px;position: absolute;bottom: 15px;right: 35px;">
                                                        </img>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <div class="card mb-0">
                                            <div class="card-body p-3 text-center" style="max-width: 100px; min-height:74px;">
                                                <div class="row align-items-center gx-0">
                                                    <div class="col">
                                                        <h6 class="text-uppercase text-muted mb-2 ">
                                                            Start date
                                                        </h6>
                                                        <p class="badge bg-light-soft text-dark mb-0" style="margin-top: 13px;">
                                                            
                                                            <?php if (count($data->campaign)>0): ?>
                                                                <?= $data->campaign[0]->start_date;?>
                                                            <?php endif ?> 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <div class="card mb-0">
                                            <div class="card-body py-3 px-lg-2 px-md-2 px-sm-0 px-xs-0 text-center" style="max-width: 100px; min-height:74px;">
                                                <div class="row align-items-center gx-0">
                                                    <div class="col text-justify">
                                                        <h6 class="text-uppercase text-muted mb-2">
                                                            Strategy
                                                        </h6>
                                                        <p class="item-score badge bg-primary-soft mb-0 mx-lg-1 mx-md-auto mx-sm-auto mx-xs-auto" style="margin-top: 13px;">
                                                            
                                                            <?php if (count($data->campaign)>0): ?>
                                                                <?= $data->campaign[0]->estrategia;?>
                                                            <?php endif ?> 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <div class="card mb-0">
                                            <div class="card-body p-3 text-center" style="max-width: 100px; min-height:74px;">
                                                <div class="row align-items-center gx-0">
                                                    <div class="col">
                                                        <h6 class="text-uppercase text-muted mb-2 ">
                                                            Campaign status
                                                        </h6>

                                                        <?php if (count($data->campaign)>0): ?>
                                                            <?php if ($data->campaign[0]->campaign_statust == "Scheduled"): ?>
                                                                 <span class="item-score badge bg-warning text-white">
                                                                        <?= $data->campaign[0]->campaign_statust;?> 
                                                                </span>
                                                            <?php elseif($data->campaign[0]->campaign_statust == "Completed"): ?>
                                                                <span class="item-score badge bg-success">
                                                                        <?= $data->campaign[0]->campaign_statust;?> 
                                                                </span>
                                                            <?php endif ?>
                                                        <?php endif ?> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <div class="card mb-0">
                                            <div class="card-body p-3 text-center" style="max-width: 100px; min-height:74px;">
                                                <div class="row align-items-center gx-0">
                                                    <div class="col">
                                                        <h6 class="text-uppercase text-muted mb-2 ">
                                                            payment status
                                                        </h6>
                                                       <?php if (count($data->campaign)>0): ?>
                                                        <?php if ($data->campaign[0]->payment_status == "Unpaid"): ?>
                                                             <span class="item-score badge bg-primary">
                                                                    <?= $data->campaign[0]->payment_status;?> 
                                                            </span>
                                                        <?php elseif($data->campaign[0]->payment_status == "Paid"): ?>
                                                            <span class="item-score badge bg-success">
                                                                    <?= $data->campaign[0]->payment_status;?> 
                                                            </span>
                                                        <?php endif ?>
                                                    <?php endif ?> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <button class="btn btn-primary" style="min-height: 75px;width: 62px;margin-top: 1px;">
                                            <span class="fe fe-edit">
                                            </span>
                                            <p class="mb-0 text-uppercase" style="font-size: 11px;margin-top: 2px;">
                                                Edit
                                            </p>
                                        </button>
                                    </div>
                                    <div class="p-2 bd-highlight">
                                        <div class="dropdown">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-white dropdown-ellipses dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" style="min-height: 76px;width: 62px;margin-top: 1px;">
                                                <span class="fe fe-pause">
                                                </span>
                                                <p class="mb-0 text-uppercase" style="font-size: 11px;">
                                                    Pause
                                                </p>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end text-center">
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-pause" style="position: absolute;margin-bottom: 1px;margin-left: -20px;">
                                                    </i>
                                                    Pause
                                                </a>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-corner-down-left" style="position: absolute;margin-bottom: 1px;margin-left: -20px;">
                                                    </i>
                                                    Stop & Return Balance
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <!-- / .row -->
                        <div class="row align-items-center">
                            <div class="col">
                                <?php include("menu-campaign.php")?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>