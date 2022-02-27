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
        </style>
        <title>
            Dashboard
        </title>
    </head>
    <body>
        <?php include('includes/aside.php');?>
        <div class="main-content">
            <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar" style="display: none !important">
                <div class="container-fluid">
                    <!-- Form -->
                    <form class="form-inline me-4 d-none d-md-flex">
                        <div class="input-group input-group-flush input-group-merge input-group-reverse" data-list='{"valueNames": ["name"]}'>
                            <!-- Input -->
                            <input aria-label="Search" class="form-control dropdown-toggle list-search" data-bs-toggle="dropdown" placeholder="Search" type="search">
                                <!-- Prepend -->
                                <div class="input-group-text">
                                    <i class="fe fe-search">
                                    </i>
                                </div>
                                <!-- Menu -->
                                <div class="dropdown-menu dropdown-menu-card">
                                    <div class="card-body">
                                        <!-- List group -->
                                        <div class="list-group list-group-flush list-group-focus list my-n3">
                                            <a class="list-group-item" href="./team-overview.html">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        <div class="avatar">
                                                            <img alt="..." class="avatar-img rounded" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/teams/team-logo-1.jpg">
                                                            </img>
                                                        </div>
                                                    </div>
                                                    <div class="col ms-n2">
                                                        <!-- Title -->
                                                        <h4 class="text-body text-focus mb-1 name">
                                                            Airbnb
                                                        </h4>
                                                        <!-- Time -->
                                                        <p class="small text-muted mb-0">
                                                            <span class="fe fe-clock">
                                                            </span>
                                                            <time datetime="2018-05-24">
                                                                Updated 2hr ago
                                                            </time>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </a>
                                            <a class="list-group-item" href="./team-overview.html">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        <div class="avatar">
                                                            <img alt="..." class="avatar-img rounded" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/teams/team-logo-2.jpg">
                                                            </img>
                                                        </div>
                                                    </div>
                                                    <div class="col ms-n2">
                                                        <!-- Title -->
                                                        <h4 class="text-body text-focus mb-1 name">
                                                            Medium Corporation
                                                        </h4>
                                                        <!-- Time -->
                                                        <p class="small text-muted mb-0">
                                                            <span class="fe fe-clock">
                                                            </span>
                                                            <time datetime="2018-05-24">
                                                                Updated 2hr ago
                                                            </time>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </a>
                                            <a class="list-group-item" href="./project-overview.html">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-4by3">
                                                            <img alt="..." class="avatar-img rounded" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/projects/project-1.jpg">
                                                            </img>
                                                        </div>
                                                    </div>
                                                    <div class="col ms-n2">
                                                        <!-- Title -->
                                                        <h4 class="text-body text-focus mb-1 name">
                                                            Homepage Redesign
                                                        </h4>
                                                        <!-- Time -->
                                                        <p class="small text-muted mb-0">
                                                            <span class="fe fe-clock">
                                                            </span>
                                                            <time datetime="2018-05-24">
                                                                Updated 4hr ago
                                                            </time>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </a>
                                            <a class="list-group-item" href="./project-overview.html">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-4by3">
                                                            <img alt="..." class="avatar-img rounded" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/projects/project-2.jpg">
                                                            </img>
                                                        </div>
                                                    </div>
                                                    <div class="col ms-n2">
                                                        <!-- Title -->
                                                        <h4 class="text-body text-focus mb-1 name">
                                                            Travels & Time
                                                        </h4>
                                                        <!-- Time -->
                                                        <p class="small text-muted mb-0">
                                                            <span class="fe fe-clock">
                                                            </span>
                                                            <time datetime="2018-05-24">
                                                                Updated 4hr ago
                                                            </time>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </a>
                                            <a class="list-group-item" href="./project-overview.html">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-4by3">
                                                            <img alt="..." class="avatar-img rounded" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/projects/project-3.jpg">
                                                            </img>
                                                        </div>
                                                    </div>
                                                    <div class="col ms-n2">
                                                        <!-- Title -->
                                                        <h4 class="text-body text-focus mb-1 name">
                                                            Safari Exploration
                                                        </h4>
                                                        <!-- Time -->
                                                        <p class="small text-muted mb-0">
                                                            <span class="fe fe-clock">
                                                            </span>
                                                            <time datetime="2018-05-24">
                                                                Updated 4hr ago
                                                            </time>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </a>
                                            <a class="list-group-item" href="./profile-posts.html">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        <div class="avatar">
                                                            <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-1.jpg">
                                                            </img>
                                                        </div>
                                                    </div>
                                                    <div class="col ms-n2">
                                                        <!-- Title -->
                                                        <h4 class="text-body text-focus mb-1 name">
                                                            Dianna Smiley
                                                        </h4>
                                                        <!-- Status -->
                                                        <p class="text-body small mb-0">
                                                            <span class="text-success">
                                                                ●
                                                            </span>
                                                            Online
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </a>
                                            <a class="list-group-item" href="./profile-posts.html">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        <div class="avatar">
                                                            <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-2.jpg">
                                                            </img>
                                                        </div>
                                                    </div>
                                                    <div class="col ms-n2">
                                                        <!-- Title -->
                                                        <h4 class="text-body text-focus mb-1 name">
                                                            Ab Hadley
                                                        </h4>
                                                        <!-- Status -->
                                                        <p class="text-body small mb-0">
                                                            <span class="text-danger">
                                                                ●
                                                            </span>
                                                            Offline
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- / .row -->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- / .dropdown-menu -->
                            </input>
                        </div>
                    </form>
                    <!-- User -->
                    <div class="navbar-user">
                        <!-- Dropdown -->
                        <div class="dropdown me-4 d-none d-md-flex">
                            <!-- Toggle -->
                            <a aria-expanded="false" aria-haspopup="true" class="navbar-user-link" data-bs-toggle="dropdown" href="#" role="button">
                                <span class="icon active">
                                    <i class="fe fe-bell">
                                    </i>
                                </span>
                            </a>
                            <!-- Menu -->
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                                <div class="card-header">
                                    <!-- Title -->
                                    <h5 class="card-header-title">
                                        Notifications
                                    </h5>
                                    <!-- Link -->
                                    <a class="small" href="#!">
                                        View all
                                    </a>
                                </div>
                                <!-- / .card-header -->
                                <div class="card-body">
                                    <!-- List group -->
                                    <div class="list-group list-group-flush list-group-activity my-n3">
                                        <a class="list-group-item text-reset" href="#!">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm">
                                                        <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-1.jpg">
                                                        </img>
                                                    </div>
                                                </div>
                                                <div class="col ms-n2">
                                                    <!-- Content -->
                                                    <div class="small">
                                                        <strong>
                                                            Dianna Smiley
                                                        </strong>
                                                        shared your post with Ab Hadley, Adolfo Hess,
                      and 3 others.
                                                    </div>
                                                    <!-- Time -->
                                                    <small class="text-muted">
                                                        2m ago
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </a>
                                        <a class="list-group-item text-reset" href="#!">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm">
                                                        <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-2.jpg">
                                                        </img>
                                                    </div>
                                                </div>
                                                <div class="col ms-n2">
                                                    <!-- Content -->
                                                    <div class="small">
                                                        <strong>
                                                            Ab Hadley
                                                        </strong>
                                                        reacted to your post with a 😍
                                                    </div>
                                                    <!-- Time -->
                                                    <small class="text-muted">
                                                        2m ago
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </a>
                                        <a class="list-group-item text-reset" href="#!">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm">
                                                        <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-3.jpg">
                                                        </img>
                                                    </div>
                                                </div>
                                                <div class="col ms-n2">
                                                    <!-- Content -->
                                                    <div class="small">
                                                        <strong>
                                                            Adolfo Hess
                                                        </strong>
                                                        commented
                                                        <blockquote class="mb-0">
                                                            “I don’t think this really makes sense to do without approval from Johnathan
                        since he’s the one...”
                                                        </blockquote>
                                                    </div>
                                                    <!-- Time -->
                                                    <small class="text-muted">
                                                        2m ago
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </a>
                                        <a class="list-group-item text-reset" href="#!">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm">
                                                        <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-4.jpg">
                                                        </img>
                                                    </div>
                                                </div>
                                                <div class="col ms-n2">
                                                    <!-- Content -->
                                                    <div class="small">
                                                        <strong>
                                                            Daniela Dewitt
                                                        </strong>
                                                        subscribed to you.
                                                    </div>
                                                    <!-- Time -->
                                                    <small class="text-muted">
                                                        2m ago
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </a>
                                        <a class="list-group-item text-reset" href="#!">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm">
                                                        <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-5.jpg">
                                                        </img>
                                                    </div>
                                                </div>
                                                <div class="col ms-n2">
                                                    <!-- Content -->
                                                    <div class="small">
                                                        <strong>
                                                            Miyah Myles
                                                        </strong>
                                                        shared your post with Ryu Duke, Glen Rouse, and 3 others.
                                                    </div>
                                                    <!-- Time -->
                                                    <small class="text-muted">
                                                        2m ago
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </a>
                                        <a class="list-group-item text-reset" href="#!">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm">
                                                        <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-6.jpg">
                                                        </img>
                                                    </div>
                                                </div>
                                                <div class="col ms-n2">
                                                    <!-- Content -->
                                                    <div class="small">
                                                        <strong>
                                                            Ryu Duke
                                                        </strong>
                                                        reacted to your post with a 😍
                                                    </div>
                                                    <!-- Time -->
                                                    <small class="text-muted">
                                                        2m ago
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </a>
                                        <a class="list-group-item text-reset" href="#!">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm">
                                                        <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-7.jpg">
                                                        </img>
                                                    </div>
                                                </div>
                                                <div class="col ms-n2">
                                                    <!-- Content -->
                                                    <div class="small">
                                                        <strong>
                                                            Glen Rouse
                                                        </strong>
                                                        commented
                                                        <blockquote class="mb-0">
                                                            “I don’t think this really makes sense to do without approval from Johnathan
                        since he’s the one...”
                                                        </blockquote>
                                                    </div>
                                                    <!-- Time -->
                                                    <small class="text-muted">
                                                        2m ago
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </a>
                                        <a class="list-group-item text-reset" href="#!">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm">
                                                        <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-8.jpg">
                                                        </img>
                                                    </div>
                                                </div>
                                                <div class="col ms-n2">
                                                    <!-- Content -->
                                                    <div class="small">
                                                        <strong>
                                                            Grace Gross
                                                        </strong>
                                                        subscribed to you.
                                                    </div>
                                                    <!-- Time -->
                                                    <small class="text-muted">
                                                        2m ago
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- / .dropdown-menu -->
                        </div>
                        <!-- Dropdown -->
                        <div class="dropdown">
                            <!-- Toggle -->
                            <a aria-expanded="false" aria-haspopup="true" class="avatar avatar-sm avatar-online dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                                <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-1.jpg">
                                </img>
                            </a>
                            <!-- Menu -->
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="./profile-posts.html">
                                    Profile
                                </a>
                                <a class="dropdown-item" href="./account-general.html">
                                    Settings
                                </a>
                                <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="./sign-in.html">
                                        Logout
                                    </a>
                                </hr>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <!-- Header -->
                        <div class="header mt-md-5">
                            <div class="header-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <!-- Pretitle -->
                                        <h6 class="header-pretitle">
                                            Overview
                                        </h6>
                                        <!-- Title -->
                                        <h1 class="header-title">
                                            Account
                                        </h1>
                                    </div>
                                </div>
                                <!-- / .row -->
                                <div class="row align-items-center">
                                    <div class="col">
                                        <?php include("includes/account-menu.php");?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Alert -->
                        <div class="alert alert-danger">
                            <i class="fe fe-info me-1">
                            </i>
                            You're automatically enrolled in our Rewards Program
                            <button type="button" class="btn btn-primary py-0 px-1" style="float: right;">LEARN MORE</button>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h6 class="text-uppercase text-muted mb-2">
                                                    Reward Level
                                                </h6>
                                                <!-- Heading -->
                                                <span class="h2 mb-0">
                                                    $29/mo
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <a class="btn btn-sm btn-primary" href="pricing.html">
                                                    Upgrade
                                                </a>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h6 class="text-uppercase text-muted mb-2">
                                                    Total Funds Added
                                                    <i class="fe fe-info" data-bs-original-title="" data-bs-toggle="tooltip" data-title="Your limits renew on May 1, 2020" title="">
                                                    </i>
                                                </h6>
                                                <!-- Heading -->
                                                <span class="h2 mb-0">
                                                    7,500 of 10,000
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Chart -->
                                                <div class="chart chart-sparkline">
                                                    <canvas class="chart-canvas" height="31" id="sparklineChart" style="display: block; box-sizing: border-box; height: 34.4444px; width: 74.4444px;" width="67">
                                                    </canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <!-- Title -->
                                        <h4 class="card-header-title">
                                            Payment methods
                                        </h4>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a class="btn btn-sm btn-primary" href="#!">
                                            Add method
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- List group -->
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Image -->
                                                <img alt="..." class="img-fluid" src="<?= Request::root();?>/local/resources/views/assets/img/payment-methods/visa.svg" style="max-width: 38px;">
                                                </img>
                                            </div>
                                            <div class="col ms-n2">
                                                <!-- Heading -->
                                                <h4 class="mb-1">
                                                    Visa ending in 1234
                                                </h4>
                                                <!-- Text -->
                                                <small class="text-muted">
                                                    Expires 3/2024
                                                </small>
                                            </div>
                                            <div class="col-auto me-n3">
                                                <!-- Badge -->
                                                <span class="badge bg-light">
                                                    Default
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Dropdown -->
                                                <div class="dropdown">
                                                    <a aria-expanded="false" aria-haspopup="true" class="dropdown-ellipses dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                                                        <i class="fe fe-more-vertical">
                                                        </i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#!">
                                                            Action
                                                        </a>
                                                        <a class="dropdown-item" href="#!">
                                                            Another action
                                                        </a>
                                                        <a class="dropdown-item" href="#!">
                                                            Something else here
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Image -->
                                                <img alt="..." class="img-fluid" src="<?= Request::root();?>/local/resources/views/assets/img/payment-methods/mastercard.svg" style="max-width: 38px;">
                                                </img>
                                            </div>
                                            <div class="col ms-n2">
                                                <!-- Heading -->
                                                <h4 class="mb-1">
                                                    Mastercard ending in 1234
                                                </h4>
                                                <!-- Text -->
                                                <small class="text-muted">
                                                    Expires 3/2024
                                                </small>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Dropdown -->
                                                <div class="dropdown">
                                                    <a aria-expanded="false" aria-haspopup="true" class="dropdown-ellipses dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button">
                                                        <i class="fe fe-more-vertical">
                                                        </i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#!">
                                                            Action
                                                        </a>
                                                        <a class="dropdown-item" href="#!">
                                                            Another action
                                                        </a>
                                                        <a class="dropdown-item" href="#!">
                                                            Something else here
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Invoices
                                </h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-sm table-nowrap card-table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Invoice ID
                                            </th>
                                            <th>
                                                Date
                                            </th>
                                            <th>
                                                Amount
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-base">
                                        <tr>
                                            <td>
                                                <a href="invoice.html">
                                                    Invoice #10395
                                                </a>
                                            </td>
                                            <td>
                                                <time datetime="2020-04-24">
                                                    Apr. 24, 2020
                                                </time>
                                            </td>
                                            <td>
                                                $29.00
                                            </td>
                                            <td>
                                                <span class="badge bg-secondary">
                                                    Outstanding
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="invoice.html">
                                                    Invoice #10244
                                                </a>
                                            </td>
                                            <td>
                                                <time datetime="2020-03-24">
                                                    Mar. 24, 2020
                                                </time>
                                            </td>
                                            <td>
                                                $29.00
                                            </td>
                                            <td>
                                                <span class="badge bg-success">
                                                    Paid
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="invoice.html">
                                                    Invoice #10119
                                                </a>
                                            </td>
                                            <td>
                                                <time datetime="2020-02-24">
                                                    Feb. 24, 2020
                                                </time>
                                            </td>
                                            <td>
                                                $29.00
                                            </td>
                                            <td>
                                                <span class="badge bg-success">
                                                    Paid
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="invoice.html">
                                                    Invoice #10062
                                                </a>
                                            </td>
                                            <td>
                                                <time datetime="2020-01-24">
                                                    Jan. 24, 2020
                                                </time>
                                            </td>
                                            <td>
                                                $29.00
                                            </td>
                                            <td>
                                                <span class="badge bg-success">
                                                    Paid
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Text -->
                        <p class="text-center">
                            <small class="text-muted">
                                Don’t need Dashkit anymore?
                                <a href="#!">
                                    Cancel your account
                                </a>
                            </small>
                        </p>
                        <br>
                        </br>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script>

                $("html,.scroll").niceScroll({
                cursorcolor:"#ddd"
                });

            $(document).ready(function(){
                var urlActual = window.location;
                if(String(urlActual).slice(-4)=="eral"){
                   $("#navlink-general").addClass('active'); 
                   $("#navlink-billing").removeClass('active'); 
                   $("#navlink-security").removeClass('active'); 
                }
                else if(String(urlActual).slice(-4)=="ling"){
                   $("#navlink-general").removeClass('active'); 
                   $("#navlink-billing").addClass('active'); 
                   $("#navlink-security").removeClass('active'); 
                }
                else if(String(urlActual).slice(-4)=="rity"){
                   $("#navlink-general").removeClass('active'); 
                   $("#navlink-billing").removeClass('active'); 
                   $("#navlink-security").addClass('active'); 
                }
            });
        </script>
    </body>
</html>
