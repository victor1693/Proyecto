<!-- NAVIGATION -->
<nav class="navbar navbar-vertical fixed-start navbar-expand-md scroll" id="sidebar" style="z-index: 0">
    <div class="container-fluid">
        <!-- Toggler -->
        <button aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#sidebarCollapse" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <!-- Brand -->
        <a style="z-index: 1" class="navbar-brand" href="<?= Request::root();?>/dashboard">
            <object style="margin-bottom: -10px;height: 56px;margin-top: -6px;position: relative; z-index: -1" data="<?= Request::root();?>/local/resources/views/assets/img/logo2.svg" type="image/svg+xml"> 
            </object>  
        </a>
        <!-- User (xs) -->
        <div class="navbar-user d-md-none">
            <!-- Dropdown -->
            <div class="dropdown">
                <!-- Toggle -->
                <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-bs-toggle="dropdown"id="sidebarIcon" role="button">
                    <div class="avatar avatar-sm avatar-online">
                        <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-1.jpg">
                        </img>
                    </div>
                </a>
                <!-- Menu -->
                <div aria-labelledby="sidebarIcon" class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="profile-posts.html">
                        Profile
                    </a>
                    <a class="dropdown-item" href="account-general.html">
                        Settings
                    </a>
                    <hr class="dropdown-divider">
                        <a class="dropdown-item" href="sign-in.html">
                            Logout
                        </a>
                    </hr>
                </div>
            </div>
        </div>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= Request::root();?>/dashboard">
                        <i class="fe fe-home">
                        </i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a aria-controls="sidebarDashboards" aria-expanded="false" class="nav-link collapsed" data-bs-toggle="collapse" href="#sidebarDashboards" role="button">
                        <i class="fe fe-bar-chart-2">
                        </i>
                        Campaigns
                    </a>
                    <div class="collapse" id="sidebarDashboards" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= Request::root();?>/campaign-new">
                                    New Campaign
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= Request::root();?>/campaigns?section=active">
                                    Active Campaigns
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= Request::root();?>/campaigns?section=past">
                                    Past Campaign
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a aria-controls="artist" aria-expanded="false" class="nav-link collapsed" data-bs-toggle="collapse" href="#artist" role="button">
                        <i class="fe fe-star">
                        </i>
                        Artists
                    </a>
                    <div class="collapse" id="artist" style="">
                        <ul class="nav nav-sm flex-column">
                            <?php if (isset($artistAside)): ?>
                                <?php 
                                $artistAside = json_decode($artistAside);  
                             ?>
                             <?php if ($artistAside->httpCode == "200"): ?> 
                                <?php foreach ($artistAside->data as $key): ?>
                                    <li class="nav-item">
                                        <?php if ($key->profile_completed == 0): ?> 
                                            <a href="<?= Request::root();?>/artist-summary/<?= $key->artist_token;?>" title="<?= $key->name;?>" class="nav-link loading-artist">
                                                <?= $key->name;?> 
                                            </a>
                                            <?php else: ?>
                                            <a href="<?= Request::root();?>/artist-summary/<?= $key->artist_token;?>" title="<?= $key->name;?>" class="nav-link">
                                                <?= $key->name;?> 
                                            </a>
                                        <?php endif ?>
                                    </li>  
                                <?php endforeach ?>
                             <?php endif ?> 
                            <?php endif ?> 
                        </ul>
                    </div>
                </li>
            </ul>
            <hr class="navbar-divider my-3"/>
            <h6 class="navbar-heading">
                Account
            </h6>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="<?= Request::root();?>/general">
                        <i class="fe fe-settings">
                        </i>
                        General
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= Request::root();?>/billing">
                        <i class="fe fe-credit-card">
                        </i>
                        Billing
                    </a>
                </li>
                <li class="nav-item" style="display: none;">
                    <a class="nav-link " href="<?= Request::root();?>/members">
                        <i class="fe fe-users">
                        </i>
                        Members
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= Request::root();?>/security">
                        <i class="fe fe-lock">
                        </i>
                        Security
                    </a>
                </li>
                <li class="nav-item" style="display: none;">
                    <a class="nav-link " href="<?= Request::root();?>/notifications">
                        <i class="fe fe-bell">
                        </i>
                        Notifications
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= Request::root();?>/logout">
                        <i class="fe fe-log-out">
                        </i>
                        Logout
                    </a>
                </li>
            </ul>
            <div class="mt-auto">
            </div>
            <div class="mb-4">
                 <div style="padding: 13px;text-align: center;font-size: 14px;border: 1px solid #335eea;border-radius: 5px;color: #335eea">
                    <i class="fe fe-briefcase me-2">
                    </i>
                    <?php if (isset($data->balance)): ?>
                        Balance: $<?= number_format($data->balance[0]->balance,2);?>
                    <?php else: ?> 
                        Balance: $0.00
                    <?php endif ?>
                 </div>
            </div>
            <?php if (isset($data->user)): ?> 
                <?php if (count($data->user)>0): ?> 
                <div class="navbar-user d-none d-md-flex" id="sidebarUser"> 
                    <?php if ($data->user[0]->img!=""): ?>  
                        <a href="#" role="button">
                            <div class="avatar avatar-sm avatar-online"> 
                                <object data="<?= Request::root();?>/local/storage/app/profile_img/<?= $data->user[0]->img;?>" type="image/svg+xml"></object>
                            </div>
                        </a> 
                    <?php else: ?>
                        <a href="#" role="button">
                            <div class="avatar avatar-sm avatar-online">
                                <object data="<?= Request::root();?>/local/resources/views/assets/img/img_profile_default.svg" type="image/svg+xml"></object> 
                            </div>
                        </a> 
                    <?php endif ?> 
                </div>
                <p class="text-dark text-center mt-2 fw-bold mb-0 fs-3">
                   <?= $data->user[0]->nombre;?> <?= $data->user[0]->apellido;?>
                </p>
                <p class="text-muted text-uppercase mt-0 text-center fs-5">
                    <?= $data->user[0]->role;?>
                </p>
                <?php endif ?>
            <?php endif ?>
        </div>
    </div>
</nav>
<!-- / .navbar-collapse -->
<nav class="navbar navbar-vertical navbar-vertical-sm fixed-start navbar-expand-md " id="sidebarSmall" style="display: none !important;">
</nav>
<nav class="navbar navbar-expand-lg " id="topnav" style="display: none !important;">
</nav>

<script>
    function dashboard(){
         alert("Okay");
    }
</script>