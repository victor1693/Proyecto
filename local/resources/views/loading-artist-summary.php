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
         body{
         display: none; 

         } 
         .cp{filter: blur(4px);}
      </style>
      <title>
         Loading Artists Summary
      </title>
      <?php include('includes/general_scripts.php');?>
   </head>
   <body>
      <div id="lock" style="position: absolute;background: #fff;width: 100%;height: 100%;z-index: 2000;top: 0;left: 0;opacity: 0;"> 
        </div> 
      <div class="cp" style="z-index: 0;">

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
               <object style="margin-bottom: -7px;height: 50px;margin-top: -3px;position: relative; z-index: -1" data="<?= Request::root();?>/local/resources/views/assets/img/logo.svg" type="image/svg+xml"> 
               </object>  
               </a>
               <!-- User (xs) -->
               <div class="navbar-user d-md-none">
                  <!-- Dropdown -->
                  <div class="dropdown">
                     <!-- Toggle -->
                     <div class="navbar-user d-flex" id="sidebarUser">
                        <a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-bs-toggle="dropdown"id="sidebarIcon" role="button">
                           <div class="avatar avatar-sm avatar-online">
                              <img class="avatar-img rounded-circle" src="<?= Request::root();?>/local/storage/app/profile_img/pg6wVfBpLYXV3yfHhf5FrIbKG4ZN9OjbcSks1ma4.jpg">  
                           </div>
                        </a>
                     </div> 
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
                        Balance: $992,091.25                                     
                     </div>
                  </div>
                  <div class="navbar-user d-none d-md-flex" id="sidebarUser">
                     <a href="#" role="button">
                        <div class="avatar avatar-sm avatar-online">
                           <img class="avatar-img rounded-circle" src="<?= Request::root();?>/local/storage/app/profile_img/pg6wVfBpLYXV3yfHhf5FrIbKG4ZN9OjbcSks1ma4.jpg">  
                        </div>
                     </a>
                  </div>
                  <p class="text-dark text-center mt-2 fw-bold mb-0 fs-3">
                     Alberto Enrique                
                  </p>
                  <p class="text-muted text-uppercase mt-0 text-center fs-5">
                     agent                
                  </p>
               </div>
            </div>
         </nav>
         <!-- / .navbar-collapse -->
         <nav class="navbar navbar-vertical navbar-vertical-sm fixed-start navbar-expand-md " id="sidebarSmall" style="display: none !important;"></nav>
         <nav class="navbar navbar-expand-lg " id="topnav" style="display: none !important;"></nav>
         <script>
            function dashboard(){
                 alert("Okay");
            }
         </script>        
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
                                    88.44 K                                                      
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
                                    42.83 K                                                 
                                    <div class="spinner-grow spinner-grow-sm text-success" role="status" style="width: 10px;height: 10px;position: absolute;top: 7px;right: -15px;">
                                       <span class="visually-hidden"> 
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
                                 74                                                                                               
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
                                 15.93 K                                                                                             
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
                                 <canvas class="chart-canvas totalReachGraph" id="totalReachRelease">
                                 </canvas>
                                 <canvas class="chart-canvas totalReachGraph" id="totalReachArtist" style="display: none;">
                                 </canvas>
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
                              <div class="list-group-item">
                                 <div class="row align-items-center">
                                    <div class="col-auto"> 
                                       <a class="avatar avatar-4by3" href="<?= Request::root();?>/artist-summary/c62172aa-b9e7-4fcf-ba9f-50ddb1645590">
                                       <img style="width: 50px;height: 50px;" class="avatar-img rounded-circle" src="https://i.scdn.co/image/ab6761610000e5eb7462d94efa2db53abba8c003">
                                       </img>
                                       </a>
                                    </div>
                                    <div class="col ms-n2">
                                       <!-- Title -->
                                       <h4 class="mb-1">
                                          <a href="<?= Request::root();?>/artist-summary/c62172aa-b9e7-4fcf-ba9f-50ddb1645590">
                                          Various Artists                                                    </a>
                                       </h4>
                                       <!-- Time -->
                                       <p class="card-text small text-muted">
                                          <time>
                                          Lastest Campaign: <br/>
                                          <span class="text-dark">Years</span>
                                          </time>
                                       </p>
                                    </div>
                                    <div class="col-auto">
                                       <div class="dropdown">
                                          <a href="<?= Request::root();?>/artist-summary/c62172aa-b9e7-4fcf-ba9f-50ddb1645590" class="text-muted">
                                          <i class="fe fe-bar-chart-2"></i>
                                          </a> 
                                       </div>
                                    </div>
                                 </div>
                                 <!-- / .row -->
                              </div>
                              <div class="list-group-item">
                                 <div class="row align-items-center">
                                    <div class="col-auto"> 
                                       <a class="avatar avatar-4by3" href="<?= Request::root();?>/artist-summary/482358db-8016-40f6-896c-41cd12fe7d96">
                                       <img style="width: 50px;height: 50px;" class="avatar-img rounded-circle" src="https://i.scdn.co/image/ab6761610000e5eb2f71b65ef483ed75a8b40437">
                                       </img>
                                       </a>
                                    </div>
                                    <div class="col ms-n2">
                                       <!-- Title -->
                                       <h4 class="mb-1">
                                          <a href="<?= Request::root();?>/artist-summary/482358db-8016-40f6-896c-41cd12fe7d96">
                                          The Weeknd                                                    </a>
                                       </h4>
                                       <!-- Time -->
                                       <p class="card-text small text-muted">
                                          <time>
                                          Lastest Campaign: <br/>
                                          <span class="text-dark">Try Me</span>
                                          </time>
                                       </p>
                                    </div>
                                    <div class="col-auto">
                                       <div class="dropdown">
                                          <a href="<?= Request::root();?>/artist-summary/482358db-8016-40f6-896c-41cd12fe7d96" class="text-muted">
                                          <i class="fe fe-bar-chart-2"></i>
                                          </a> 
                                       </div>
                                    </div>
                                 </div>
                                 <!-- / .row -->
                              </div>
                              <div class="list-group-item">
                                 <div class="row align-items-center">
                                    <div class="col-auto"> 
                                       <a class="avatar avatar-4by3" href="<?= Request::root();?>/artist-summary/017c6296-b231-4049-92c3-366aa5ed4a24">
                                       <img style="width: 50px;height: 50px;" class="avatar-img rounded-circle" src="https://i.scdn.co/image/ab6761610000e5ebe181a93896a8b422775516ce">
                                       </img>
                                       </a>
                                    </div>
                                    <div class="col ms-n2">
                                       <!-- Title -->
                                       <h4 class="mb-1">
                                          <a href="<?= Request::root();?>/artist-summary/017c6296-b231-4049-92c3-366aa5ed4a24">
                                          The Neighbourhood                                                    </a>
                                       </h4>
                                       <!-- Time -->
                                       <p class="card-text small text-muted">
                                          <time>
                                          Lastest Campaign: <br/>
                                          <span class="text-dark">Softcore</span>
                                          </time>
                                       </p>
                                    </div>
                                    <div class="col-auto">
                                       <div class="dropdown">
                                          <a href="<?= Request::root();?>/artist-summary/017c6296-b231-4049-92c3-366aa5ed4a24" class="text-muted">
                                          <i class="fe fe-bar-chart-2"></i>
                                          </a> 
                                       </div>
                                    </div>
                                 </div>
                                 <!-- / .row -->
                              </div>
                              <div class="list-group-item">
                                 <div class="row align-items-center">
                                    <div class="col-auto"> 
                                       <a class="avatar avatar-4by3" href="<?= Request::root();?>/artist-summary/11984bee-50cc-4c1b-8d17-0e7bc158dfd3">
                                       </a>
                                    </div>
                                    <div class="col ms-n2">
                                       <!-- Title -->
                                       <h4 class="mb-1">
                                          <a href="<?= Request::root();?>/artist-summary/11984bee-50cc-4c1b-8d17-0e7bc158dfd3">
                                          The Kid LAROI                                                    </a>
                                       </h4>
                                       <!-- Time -->
                                       <p class="card-text small text-muted">
                                          <time>
                                          Lastest Campaign: <br/>
                                          <span class="text-dark">STAY (with Justin Bieber)</span>
                                          </time>
                                       </p>
                                    </div>
                                    <div class="col-auto">
                                       <div class="dropdown">
                                          <a href="<?= Request::root();?>/artist-summary/11984bee-50cc-4c1b-8d17-0e7bc158dfd3" class="text-muted">
                                          <i class="fe fe-bar-chart-2"></i>
                                          </a> 
                                       </div>
                                    </div>
                                 </div>
                                 <!-- / .row -->
                              </div>
                              <div class="list-group-item">
                                 <div class="row align-items-center">
                                    <div class="col-auto"> 
                                       <a class="avatar avatar-4by3" href="<?= Request::root();?>/artist-summary/3e584236-c572-466a-bcfc-faa6368b47e0">
                                       <img style="width: 50px;height: 50px;" class="avatar-img rounded-circle" src="https://i.scdn.co/image/ab6761610000e5ebc6bb3345a8a898bd01283a36">
                                       </img>
                                       </a>
                                    </div>
                                    <div class="col ms-n2">
                                       <!-- Title -->
                                       <h4 class="mb-1">
                                          <a href="<?= Request::root();?>/artist-summary/3e584236-c572-466a-bcfc-faa6368b47e0">
                                          Sin Bandera                                                    </a>
                                       </h4>
                                       <!-- Time -->
                                       <p class="card-text small text-muted">
                                          <time>
                                          Lastest Campaign: <br/>
                                          <span class="text-dark">Kilómetros</span>
                                          </time>
                                       </p>
                                    </div>
                                    <div class="col-auto">
                                       <div class="dropdown">
                                          <a href="<?= Request::root();?>/artist-summary/3e584236-c572-466a-bcfc-faa6368b47e0" class="text-muted">
                                          <i class="fe fe-bar-chart-2"></i>
                                          </a> 
                                       </div>
                                    </div>
                                 </div>
                                 <!-- / .row -->
                              </div>
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
                        <div class="table-responsive scroll" style="max-height: 390px; overflow-x:scroll;">
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
                                 <tr>
                                    <td>
                                       <!-- Avatar -->
                                       <div class="avatar avatar-xs align-middle me-2">
                                          <img alt="..." class="avatar-img rounded" src="https://i.scdn.co/image/ab67616d0000b273a9c7357101e65ee6af3c3789">
                                          </img>
                                       </div>
                                    </td>
                                    <td>
                                       <!-- Text -->
                                       <span class="item-title">
                                       BICHOTA                                                </span>
                                    </td>
                                    <td>
                                       KAROL G2                                            
                                    </td>
                                    <td>
                                       2022-02-23                                            
                                    </td>
                                    <td>
                                       <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" style="width: 20px;">
                                       </img>
                                    </td>
                                    <td>
                                       <span class="item-score badge bg-primary-soft">
                                       Spotify                                                </span>
                                    </td>
                                    <td>
                                       <span class="item-score badge bg-warning text-white">
                                       Scheduled                                                    </span>
                                    </td>
                                    <td>
                                       <!-- Badge -->
                                       <span class="item-score badge bg-success">
                                       Paid                                                    </span>
                                    </td>
                                    <td class="text-center">
                                       <a href="<?= Request::root();?>/campaign-analytics/5ccfe496-047e-4fe8-8fac-24354a65c61b" class="btn btn-outline-primary btn-sm mb-2">
                                       View & edit
                                       </a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <!-- Avatar -->
                                       <div class="avatar avatar-xs align-middle me-2">
                                          <img alt="..." class="avatar-img rounded" src="https://i.scdn.co/image/ab67616d0000b273e1ac646ed6f25125e2a77229">
                                          </img>
                                       </div>
                                    </td>
                                    <td>
                                       <!-- Text -->
                                       <span class="item-title">
                                       Dos Oruguitas                                                </span>
                                    </td>
                                    <td>
                                       KAROL G2                                            
                                    </td>
                                    <td>
                                       2022-02-25                                            
                                    </td>
                                    <td>
                                       <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" style="width: 20px;">
                                       </img>
                                    </td>
                                    <td>
                                       <span class="item-score badge bg-primary-soft">
                                       Spotify                                                </span>
                                    </td>
                                    <td>
                                       <span class="item-score badge bg-success">
                                       Completed                                                    </span>
                                    </td>
                                    <td>
                                       <!-- Badge -->
                                       <span class="item-score badge bg-success">
                                       Paid                                                    </span>
                                    </td>
                                    <td class="text-center">
                                       <a href="<?= Request::root();?>/campaign-analytics/297e6d8c-b558-46f1-9c42-05570ceeaedc" class="btn btn-outline-primary btn-sm mb-2">
                                       View & edit
                                       </a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <!-- Avatar -->
                                       <div class="avatar avatar-xs align-middle me-2">
                                          <img alt="..." class="avatar-img rounded" src="https://i.scdn.co/image/ab67616d0000b273c6e0948bbb0681ff29cdbae8">
                                          </img>
                                       </div>
                                    </td>
                                    <td>
                                       <!-- Text -->
                                       <span class="item-title">
                                       No Role Modelz                                                </span>
                                    </td>
                                    <td>
                                       J. Cole                                            
                                    </td>
                                    <td>
                                       2022-02-23                                            
                                    </td>
                                    <td>
                                       <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" style="width: 20px;">
                                       </img>
                                    </td>
                                    <td>
                                       <span class="item-score badge bg-primary-soft">
                                       Spotify                                                </span>
                                    </td>
                                    <td>
                                       <span class="item-score badge bg-success">
                                       Completed                                                    </span>
                                    </td>
                                    <td>
                                       <!-- Badge -->
                                       <span class="item-score badge bg-success">
                                       Paid                                                    </span>
                                    </td>
                                    <td class="text-center">
                                       <a href="<?= Request::root();?>/campaign-analytics/0e4360b5-d5a5-4d2e-a0c3-7846a04d9880" class="btn btn-outline-primary btn-sm mb-2">
                                       View & edit
                                       </a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <!-- Avatar -->
                                       <div class="avatar avatar-xs align-middle me-2">
                                          <img alt="..." class="avatar-img rounded" src="https://i.scdn.co/image/ab67616d0000b2738c6ff5cbed17363658f46732">
                                          </img>
                                       </div>
                                    </td>
                                    <td>
                                       <!-- Text -->
                                       <span class="item-title">
                                       Kilómetros                                                </span>
                                    </td>
                                    <td>
                                       Sin Bandera                                            
                                    </td>
                                    <td>
                                       2022-02-15                                            
                                    </td>
                                    <td>
                                       <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" style="width: 20px;">
                                       </img>
                                    </td>
                                    <td>
                                       <span class="item-score badge bg-primary-soft">
                                       Spotify                                                </span>
                                    </td>
                                    <td>
                                       <span class="item-score badge bg-warning text-white">
                                       Scheduled                                                    </span>
                                    </td>
                                    <td>
                                       <!-- Badge -->
                                       <span class="item-score badge bg-success">
                                       Paid                                                    </span>
                                    </td>
                                    <td class="text-center">
                                       <a href="<?= Request::root();?>/campaign-analytics/3c196fd7-db2e-4c18-b109-c61c0812d675" class="btn btn-outline-primary btn-sm mb-2">
                                       View & edit
                                       </a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <!-- Avatar -->
                                       <div class="avatar avatar-xs align-middle me-2">
                                          <img alt="..." class="avatar-img rounded" src="https://i.scdn.co/image/ab67616d0000b273bebbbfeb614d51835b817beb">
                                          </img>
                                       </div>
                                    </td>
                                    <td>
                                       <!-- Text -->
                                       <span class="item-title">
                                       La promesa                                                </span>
                                    </td>
                                    <td>
                                       Melendi                                            
                                    </td>
                                    <td>
                                       2022-02-17                                            
                                    </td>
                                    <td>
                                       <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" style="width: 20px;">
                                       </img>
                                    </td>
                                    <td>
                                       <span class="item-score badge bg-primary-soft">
                                       Spotify                                                </span>
                                    </td>
                                    <td>
                                       <span class="item-score badge bg-warning text-white">
                                       Scheduled                                                    </span>
                                    </td>
                                    <td>
                                       <!-- Badge -->
                                       <span class="item-score badge bg-success">
                                       Paid                                                    </span>
                                    </td>
                                    <td class="text-center">
                                       <a href="<?= Request::root();?>/campaign-analytics/d43fffc8-c306-4942-87d9-5cc464db75af" class="btn btn-outline-primary btn-sm mb-2">
                                       View & edit
                                       </a>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <!-- Avatar -->
                                       <div class="avatar avatar-xs align-middle me-2">
                                          <img alt="..." class="avatar-img rounded" src="https://i.scdn.co/image/ab67616d0000b2731f6a2a40bb692936879db730">
                                          </img>
                                       </div>
                                    </td>
                                    <td>
                                       <!-- Text -->
                                       <span class="item-title">
                                       Try Me                                                </span>
                                    </td>
                                    <td>
                                       The Weeknd                                            
                                    </td>
                                    <td>
                                       2022-02-17                                            
                                    </td>
                                    <td>
                                       <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" style="width: 20px;">
                                       </img>
                                    </td>
                                    <td>
                                       <span class="item-score badge bg-primary-soft">
                                       Spotify                                                </span>
                                    </td>
                                    <td>
                                       <span class="item-score badge bg-warning text-white">
                                       Scheduled                                                    </span>
                                    </td>
                                    <td>
                                       <!-- Badge -->
                                       <span class="item-score badge bg-success">
                                       Paid                                                    </span>
                                    </td>
                                    <td class="text-center">
                                       <a href="<?= Request::root();?>/campaign-analytics/a514016c-1b9d-434f-b055-da8e6e30ef3b" class="btn btn-outline-primary btn-sm mb-2">
                                       View & edit
                                       </a>
                                    </td>
                                 </tr> 
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
                                 <canvas class="chart-canvas totalConversionGraph" id="totalConversionRelease">
                                 </canvas>
                                 <canvas class="chart-canvas totalConversionGraph" id="totalConversionArtist" style="display: none;">
                                 </canvas>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
          
          
         <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor.bundle.js"></script>
         <script src="<?= Request::root();?>/local/resources/views/assets/js/theme.bundle.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script> 
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
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
            
            
            traffic = 42.83;
            symbol = "";
                        symbol = " K";
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
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Bad Bunny");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Laura Pausini");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("J. Cole");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Olivia Rodrigo");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("The Neighbourhood");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Puku");
                            totalReachArtist.push(88440);
                totalReachArtistLabel.push("KAROL G2");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Sael");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Sin Bandera");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Farruko");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Juice WRLD");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Various Artists");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Invertnam");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Awino");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Silvestre Dangond");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Rihanna");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("The Kid LAROI");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Anthony Santos");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Becky G");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Diomedes Diaz");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Anuel AA");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("José José");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("The Weeknd");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Nek");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Chase Atlantic");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Donnie Trumpet & The Social Experiment");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Melendi");
                            totalReachArtist.push(0);
                totalReachArtistLabel.push("Nicki Minaj");
                        
            barGraph('totalReachArtist',totalReachArtist,totalReachArtistLabel,'Artist');
            
            totalReachRelease = [];
            totalReachReleaseLabel = [];
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Yonaguni");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Yonaguni");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("No Role Modelz");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("deja vu");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Softcore");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("DIE 4 ME.");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(44322);
                totalReachReleaseLabel.push("Dos Oruguitas");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Ajá");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("deja vu");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Kilómetros");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Pepas");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Yonaguni");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Used To");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Years");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Inv3rtnam Romeo Must Die");
                            totalReachRelease.push(44118);
                totalReachReleaseLabel.push("BICHOTA");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Uyanis");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("La Última Vez");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Diamonds");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Yonaguni");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("STAY (with Justin Bieber)");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("PHENOM");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Bellas");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("MAMIII");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("STAY (with Justin Bieber)");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Mi Primera Cana");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Sola");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Gavilán o Paloma");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Try Me");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("North Carolina");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Inv3rtnam Romeo Must Die");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Laura no està");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Okay");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Hipnotizou");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Ajá");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("SmthnthtIwnt");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("La promesa");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Pepas");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Pepas");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Do We Have A Problem?");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Okay");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Non me lo so spiegare (with Tiziano Ferro) - Live");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("Years");
                            totalReachRelease.push(0);
                totalReachReleaseLabel.push("La Última Vez");
                        
            barGraph('totalReachRelease',totalReachRelease,totalReachReleaseLabel,'Release');
            
            
             
            
             
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
                            dTotalReachCampaign.push(0);
                            dTotalReachCampaign.push(3.316);
                            dTotalReachCampaign.push(4.156);
                            dTotalReachCampaign.push(5.053);
                            dTotalReachCampaign.push(6.085);
                            dTotalReachCampaign.push(6.965);
                            dTotalReachCampaign.push(7.949);
                            dTotalReachCampaign.push(9.102);
                            dTotalReachCampaign.push(10.105);
                            dTotalReachCampaign.push(11.09);
                            dTotalReachCampaign.push(12.047);
                            dTotalReachCampaign.push(13.144);
                            dTotalReachCampaign.push(14.309);
                            dTotalReachCampaign.push(15.233);
                            dTotalReachCampaign.push(16.315);
                            dTotalReachCampaign.push(17.264);
                            dTotalReachCampaign.push(18.242);
                            dTotalReachCampaign.push(19.251);
                            dTotalReachCampaign.push(20.188);
                            dTotalReachCampaign.push(21.179);
                            dTotalReachCampaign.push(22.209);
                            dTotalReachCampaign.push(23.284);
                            dTotalReachCampaign.push(24.328);
                            dTotalReachCampaign.push(25.24);
                            dTotalReachCampaign.push(26.124);
                            dTotalReachCampaign.push(27.113);
                            dTotalReachCampaign.push(28.18);
                            dTotalReachCampaign.push(29.148);
                            dTotalReachCampaign.push(30.168);
                            dTotalReachCampaign.push(31.2);
                            dTotalReachCampaign.push(32.198);
                            dTotalReachCampaign.push(33.34);
                            dTotalReachCampaign.push(34.339);
                            dTotalReachCampaign.push(35.343);
                            dTotalReachCampaign.push(36.241);
                            dTotalReachCampaign.push(37.325);
                            dTotalReachCampaign.push(38.253);
                            dTotalReachCampaign.push(39.349);
                            dTotalReachCampaign.push(40.352);
                            dTotalReachCampaign.push(41.367);
                            dTotalReachCampaign.push(42.42);
                            dTotalReachCampaign.push(43.442);
                            dTotalReachCampaign.push(44.426);
                            dTotalReachCampaign.push(45.406);
                            dTotalReachCampaign.push(46.282);
                            dTotalReachCampaign.push(47.406);
                            dTotalReachCampaign.push(48.494);
                            dTotalReachCampaign.push(49.51);
                            dTotalReachCampaign.push(50.456);
                            dTotalReachCampaign.push(51.309);
                            dTotalReachCampaign.push(52.294);
                            dTotalReachCampaign.push(53.228);
                            dTotalReachCampaign.push(54.245);
                            dTotalReachCampaign.push(55.191);
                            dTotalReachCampaign.push(56.019);
                            dTotalReachCampaign.push(56.96);
                            dTotalReachCampaign.push(57.871);
                            dTotalReachCampaign.push(58.883);
                            dTotalReachCampaign.push(59.84);
                            dTotalReachCampaign.push(60.872);
                            dTotalReachCampaign.push(61.775);
                            dTotalReachCampaign.push(62.741);
                            dTotalReachCampaign.push(63.685);
                            dTotalReachCampaign.push(64.514);
                            dTotalReachCampaign.push(65.444);
                            dTotalReachCampaign.push(66.58);
                            dTotalReachCampaign.push(67.658);
                            dTotalReachCampaign.push(68.706);
                            dTotalReachCampaign.push(69.734);
                            dTotalReachCampaign.push(70.787);
                            dTotalReachCampaign.push(71.76);
                            dTotalReachCampaign.push(72.834);
                            dTotalReachCampaign.push(73.844);
                            dTotalReachCampaign.push(74.83);
                            dTotalReachCampaign.push(75.71);
                            dTotalReachCampaign.push(76.618);
                            dTotalReachCampaign.push(77.625);
                            dTotalReachCampaign.push(78.522);
                            dTotalReachCampaign.push(79.42);
                            dTotalReachCampaign.push(80.505);
                            dTotalReachCampaign.push(81.628);
                            dTotalReachCampaign.push(82.546);
                            dTotalReachCampaign.push(83.62);
                            dTotalReachCampaign.push(84.72);
                            dTotalReachCampaign.push(85.588);
                            dTotalReachCampaign.push(86.757);
                            dTotalReachCampaign.push(87.863);
                            dTotalReachCampaign.push(88.837);
                            dTotalReachCampaign.push(89.704);
                            dTotalReachCampaign.push(90.738);
                            dTotalReachCampaign.push(91.756);
            
            slChart('graph_total_campaign',dTotalReachCampaign);
            
            //TOTAL PAYS GAINED
            dTotalPlaysGained = [];
                             dTotalPlaysGained.push(0);
                            dTotalPlaysGained.push(1.443);
                            dTotalPlaysGained.push(1.874);
                            dTotalPlaysGained.push(2.327);
                            dTotalPlaysGained.push(2.738);
                            dTotalPlaysGained.push(3.263);
                            dTotalPlaysGained.push(3.9);
                            dTotalPlaysGained.push(4.208);
                            dTotalPlaysGained.push(4.752);
                            dTotalPlaysGained.push(2.675);
                            dTotalPlaysGained.push(5.641);
                            dTotalPlaysGained.push(6.271);
                            dTotalPlaysGained.push(6.515);
                            dTotalPlaysGained.push(7.055);
                            dTotalPlaysGained.push(7.428);
                            dTotalPlaysGained.push(7.753);
                            dTotalPlaysGained.push(8.113);
                            dTotalPlaysGained.push(8.566);
                            dTotalPlaysGained.push(8.795);
                            dTotalPlaysGained.push(9.428);
                            dTotalPlaysGained.push(5.03);
                            dTotalPlaysGained.push(10.216);
                            dTotalPlaysGained.push(10.546);
                            dTotalPlaysGained.push(11.02);
                            dTotalPlaysGained.push(11.607);
                            dTotalPlaysGained.push(12.195);
                            dTotalPlaysGained.push(12.833);
                            dTotalPlaysGained.push(13.369);
                            dTotalPlaysGained.push(13.59);
                            dTotalPlaysGained.push(14.104);
                            dTotalPlaysGained.push(14.457);
                            dTotalPlaysGained.push(14.713);
                            dTotalPlaysGained.push(15.027);
                            dTotalPlaysGained.push(15.485);
                            dTotalPlaysGained.push(15.93);
                            dTotalPlaysGained.push(16.197);
                            dTotalPlaysGained.push(16.867);
                            dTotalPlaysGained.push(17.084);
                            dTotalPlaysGained.push(17.386);
                            dTotalPlaysGained.push(17.902);
                            dTotalPlaysGained.push(18.64);
                            dTotalPlaysGained.push(19.284);
                            dTotalPlaysGained.push(19.709);
                            dTotalPlaysGained.push(20.261);
                            dTotalPlaysGained.push(20.976);
                            dTotalPlaysGained.push(21.409);
                            dTotalPlaysGained.push(21.918);
                            dTotalPlaysGained.push(22.374);
                            dTotalPlaysGained.push(22.775);
                            dTotalPlaysGained.push(23.138);
                            dTotalPlaysGained.push(23.595);
                            dTotalPlaysGained.push(24.057);
                            dTotalPlaysGained.push(24.71);
                            dTotalPlaysGained.push(25.191);
                            dTotalPlaysGained.push(25.847);
                            dTotalPlaysGained.push(26.408);
                            dTotalPlaysGained.push(26.745);
                            dTotalPlaysGained.push(27.017);
                            dTotalPlaysGained.push(27.671);
                            dTotalPlaysGained.push(28.114);
                            dTotalPlaysGained.push(28.569);
                            dTotalPlaysGained.push(29.041);
                            dTotalPlaysGained.push(29.422);
                            dTotalPlaysGained.push(29.667);
                            dTotalPlaysGained.push(30.157);
                            dTotalPlaysGained.push(30.703);
                            dTotalPlaysGained.push(31.207);
                            dTotalPlaysGained.push(31.518);
                            dTotalPlaysGained.push(31.73);
                            dTotalPlaysGained.push(32.183);
                            dTotalPlaysGained.push(32.501);
                            dTotalPlaysGained.push(33.107);
                            dTotalPlaysGained.push(33.651);
                            dTotalPlaysGained.push(17.43);
                            dTotalPlaysGained.push(34.602);
                            dTotalPlaysGained.push(35.203);
                            dTotalPlaysGained.push(35.661);
                            dTotalPlaysGained.push(35.983);
                            dTotalPlaysGained.push(36.579);
                            dTotalPlaysGained.push(37.189);
                            dTotalPlaysGained.push(19.244);
                            dTotalPlaysGained.push(38.495);
                            dTotalPlaysGained.push(39.155);
                            dTotalPlaysGained.push(39.897);
                            dTotalPlaysGained.push(40.531);
                            dTotalPlaysGained.push(40.838);
                            dTotalPlaysGained.push(41.341);
                            dTotalPlaysGained.push(41.734);
                            dTotalPlaysGained.push(21.262);
                            dTotalPlaysGained.push(42.489);
                            dTotalPlaysGained.push(42.834);
                        slChart('graph_total_plays_gained',dTotalPlaysGained);
            
            //TOTAL SPENT
            dTotalSpent = [];
                            dTotalSpent.push(0.23);
                            dTotalSpent.push(0.91);
                            dTotalSpent.push(0.96);
                            dTotalSpent.push(1.47);
                            dTotalSpent.push(2.19);
                            dTotalSpent.push(2.52);
                            dTotalSpent.push(3.04);
                            dTotalSpent.push(3.55);
                            dTotalSpent.push(4.63);
                            dTotalSpent.push(4.68);
                            dTotalSpent.push(5.43);
                            dTotalSpent.push(6.08);
                            dTotalSpent.push(6.13);
                            dTotalSpent.push(6.18);
                            dTotalSpent.push(6.489);
                            dTotalSpent.push(6.664);
                            dTotalSpent.push(6.669);
                            dTotalSpent.push(6.669);
                            dTotalSpent.push(6.789);
                            dTotalSpent.push(6.909);
                            dTotalSpent.push(7.029);
                            dTotalSpent.push(7.229);
                            dTotalSpent.push(7.229);
                            dTotalSpent.push(7.229);
                            dTotalSpent.push(7.229);
                            dTotalSpent.push(7.329);
                            dTotalSpent.push(7.485);
                            dTotalSpent.push(7.565);
                            dTotalSpent.push(7.646);
                            dTotalSpent.push(7.737);
                            dTotalSpent.push(7.767);
                            dTotalSpent.push(7.788);
                            dTotalSpent.push(7.856);
                            dTotalSpent.push(7.924);
                            dTotalSpent.push(8.092);
                            dTotalSpent.push(8.3806);
                            dTotalSpent.push(8.4806);
                            dTotalSpent.push(8.6056);
                            dTotalSpent.push(8.7566);
                            dTotalSpent.push(8.8266);
                            dTotalSpent.push(8.9241);
                            dTotalSpent.push(9.1191);
                            dTotalSpent.push(9.2691);
                            dTotalSpent.push(9.5226);
                            dTotalSpent.push(9.7761);
                            dTotalSpent.push(9.8541);
                            dTotalSpent.push(9.94575);
                            dTotalSpent.push(10.07675);
                            dTotalSpent.push(10.1333975);
                            dTotalSpent.push(10.16021);
                            dTotalSpent.push(10.17581);
                            dTotalSpent.push(10.43126);
                            dTotalSpent.push(7.94226);
                            dTotalSpent.push(10.43126);
                            dTotalSpent.push(10.55426);
                            dTotalSpent.push(10.59989);
                            dTotalSpent.push(10.6417175);
                            dTotalSpent.push(10.8507175);
                            dTotalSpent.push(11.3347175);
                            dTotalSpent.push(11.8347175);
                            dTotalSpent.push(12.2407175);
                            dTotalSpent.push(12.4897175);
                            dTotalSpent.push(12.6567175);
                            dTotalSpent.push(12.7927175);
                            dTotalSpent.push(12.9287175);
                            dTotalSpent.push(13.0307175);
                            dTotalSpent.push(13.1327175);
                            dTotalSpent.push(13.5457175);
                            dTotalSpent.push(13.9587175);
                            dTotalSpent.push(14.2227175);
                            dTotalSpent.push(14.9637175);
                            dTotalSpent.push(15.2937175);
                            dTotalSpent.push(15.6337175);
                            dTotalSpent.push(15.9317175);
                        slChart('graph_total_spent',dTotalSpent);  
         </script> 
         <script> 
            function showModalLoad(){
            
            
            
            setTimeout(function(){ 
            $("#text-1").text("Socials");
            $("#text-1").fadeIn(2500);
            $("#text-1").fadeOut(2500);
            }, 5000);
            setTimeout(function(){ 
            $("#text-1").text("Genres");
            $("#text-1").fadeIn(2500);
            $("#text-1").fadeOut(2500);
            }, 10000);
            setTimeout(function(){ 
            $("#text-1").text("Top Cities");
            $("#text-1").fadeIn(2500);
            $("#text-1").fadeOut(2500);
            }, 15000);
            setTimeout(function(){ 
            $("#text-1").text("Artist in Same Genres");
            $("#text-1").fadeIn(2500);
            $("#text-1").fadeOut(2500);
            }, 20000);
            setTimeout(function(){ 
            $("#text-1").text("Catalogue");
            $("#text-1").fadeIn(2500);
            $("#text-1").fadeOut(2500); 
            }, 25000);
            setTimeout(function(){ 
            $("#text-1").text("Markets of Opportunity");
            $("#text-1").fadeIn(2500);
            $("#text-1").fadeOut(2500); 
            }, 30000);
            setTimeout(function(){ 
            $("#text-1").text("AUDIENCE");
            $("#text-1").fadeIn(2500);
            $("#text-1").fadeOut(2500); 
            }, 35000);
            setTimeout(function(){ 
            $("#text-1").text("GROWTH POTENTIAL");
            $("#text-1").fadeIn(2500);
            $("#text-1").fadeOut(2500); 
            }, 40000);
            setTimeout(function(){ 
            $("#text-1").text("Artists with Similar Fanbases");
            $("#text-1").fadeIn(2500);
            $("#text-1").fadeOut(2500); 
            }, 45000);
            setTimeout(function(){ 
            $("#text-1").text("YOUR MONTHLY LISTENERS");
            $("#text-1").fadeIn(2500);
            $("#text-1").fadeOut(2500); 
            }, 50000);
            setTimeout(function(){ 
            $("#text-1").text("SIMILAR ARTISTS AVG. MONTHLY LISTENERS");
            $("#text-1").fadeIn(2500);
            $("#text-1").fadeOut(2500); 
            }, 55000);
            setTimeout(function(){ 
            $("#text-1").text("POTENTIAL ACHIEVED");
            $("#text-1").fadeIn(2500);
            $("#text-1").fadeOut(2500); 
            }, 60000);
            setTimeout(function(){ 
            $("#text-1").text(", almost ready...");
            $("#text-1").fadeIn(2500); 
            }, 65000);
            }
            
         </script>         
      </div>

      <!-- Button trigger modal -->
      <button id="btn-modal" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="display:none;"> 
      </button>

      <!-- Modal -->
      <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content"> 
            <div class="modal-body text-center"> 
                  <div class="mb-1 mt-n4">
                     <object id="aside-icon" style="width: 218px; height:218px;" data="<?= Request::root();?>/local/resources/views/assets/svg_icons/goloudrbrain.svg" type="image/svg+xml"></object>
                  </div>
                  <h4 class="header-title mb-1 fade-in mt-n4"> 
                  </h4>
                  <!--<h5 class="mb-4">LOADING <span id="text-1"></span></h5>-->
                  <div class="row" style="padding: 0px; margin:0px">
                     <div class="col-12 pt-3 pb-3" style="padding: 0px; margin:0px">
                        <h5>Plase wait, We are loading: <strong>Artist Summary...</strong></h5>
                     </div> 
                  </div>
                  <!--<h5 class="mb-5" id="text-1"></h5>-->
                  <div class="spinner-border text-primary" style="width: 25px; height: 25px;" role="status">
                     <span class="visually-hidden">Loading...</span>
                  </div>
            </div> 
          </div>
        </div>
      </div>

      <script> 
         $("#btn-modal").click();
      </script>

      <script>
         $(document).ready(function(){
            window.location.href = "<?= Request::root();?>/load-artist-summary/<?= $token;?>";
         });
      </script>
   </body>
</html>