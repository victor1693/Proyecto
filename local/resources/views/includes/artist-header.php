<div class="header">
    <!-- Image -->
    <div id="img-cover-lg" style="height: 350px;background-image: url(<?= $artist_cover;?>);background-size: cover;">
    </div> 
    <div class="container-fluid">
        <!-- Body -->
        <div class="header-body mt-n5 mt-md-n6">
            <div class="row align-items-end">
                <div class="col-auto">
                    <!-- Avatar -->
                    <div class="avatar avatar-xxl header-avatar-top">
                        <img alt="..." class="avatar-img rounded-circle border border-4 border-body" src="<?= $artist_img;?>">
                        </img>
                    </div>
                </div>
                <div class="col mb-3 ms-n3 ms-md-n2">
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                        Artist
                    </h6>
                    <!-- Title -->
                    <h1 class="header-title">
                        <?= $artist_name;?>
                    </h1>
                </div>
                <div class="col-12 col-md-auto mt-2 mt-md-0 mb-md-3">
                    <!-- Button -->
                    <a class="btn btn-primary d-block d-md-inline-block lift" href="<?= Request::root();?>/campaign-new">
                        New Campaign
                    </a>
                </div>
            </div>
            <!-- / .row -->
            <div class="row align-items-center">
                <div class="col">
                    <!-- Nav -->
                    <ul class="nav nav-tabs nav-overflow header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= Request::root();?>/artist-summary/<?= $artist_token;?>">
                                Summary
                            </a>
                        </li>
                        <li class="nav-item"> 
                             <?php if ($artistSummary->artist->analysis_completed == 1): ?> 
                                <a class="nav-link" href="<?= Request::root();?>/artist-audience-analysis/<?= $artist_token;?>">
                                    Audience Analysis
                                    <span class="badge bg-primary-soft fw-bold">
                                        AI
                                    </span>
                                </a>
                                <?php else: ?>
                                <a title="<?= $artistSummary->artist->name;?>"  class="nav-link loading-audience-analysis" href="<?= Request::root();?>/artist-audience-analysis/<?= $artist_token;?>">
                                    Audience Analysis
                                    <span class="badge bg-primary-soft fw-bold">
                                        AI
                                    </span>
                                </a>
                            <?php endif ?>
                        </li>
                        <li class="nav-item">
                            <?php if ($artistSummary->artist->catalogue_completed == 1): ?> 
                                <a class="nav-link" href="<?= Request::root();?>/artist-catalogue/<?= $artist_token;?>">
                                    Catalogue
                                </a>
                                <?php else: ?>
                                <a title="<?= $artistSummary->artist->name;?>" class="nav-link loading-catalogue" href="<?= Request::root();?>/artist-catalogue/<?= $artist_token;?>">
                                    Catalogue
                                </a>
                            <?php endif ?>
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
        <!-- / .header-body -->
    </div>
</div>