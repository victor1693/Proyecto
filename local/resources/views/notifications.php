<!DOCTYPE html>
<html lang="en">
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
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
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Notifications
                                </h4>
                                <!-- Button -->
                                <button class="btn btn-sm btn-white">
                                    Disable all
                                </button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-sm table-nowrap card-table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Type
                                            </th>
                                            <th class="text-center">
                                                Call
                                            </th>
                                            <th class="text-center">
                                                Email
                                            </th>
                                            <th class="text-center">
                                                SMS
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-base">
                                        <tr>
                                            <td>
                                                Direct messages
                                            </td>
                                            <td class="text-center">
                                            </td>
                                            <td class="text-center">
                                                <!-- Checkbox -->
                                                <div class="form-check d-inline-block me-n3">
                                                    <input checked="" class="form-check-input" id="emailCheckboxOne" type="checkbox">
                                                        <label class="form-check-label" for="emailCheckboxOne">
                                                        </label>
                                                    </input>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- Checkbox -->
                                                <div class="form-check d-inline-block me-n3">
                                                    <input checked="" class="form-check-input" id="smsCheckboxOne" type="checkbox">
                                                        <label class="form-check-label" for="smsCheckboxOne">
                                                        </label>
                                                    </input>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Reminders
                                            </td>
                                            <td class="text-center">
                                            </td>
                                            <td class="text-center">
                                                <!-- Checkbox -->
                                                <div class="form-check d-inline-block me-n3">
                                                    <input checked="" class="form-check-input" id="emailCheckboxTwo" type="checkbox">
                                                        <label class="form-check-label" for="emailCheckboxTwo">
                                                        </label>
                                                    </input>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- Checkbox -->
                                                <div class="form-check d-inline-block me-n3">
                                                    <input checked="" class="form-check-input" id="smsCheckboxTwo" type="checkbox">
                                                        <label class="form-check-label" for="smsCheckboxTwo">
                                                        </label>
                                                    </input>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                API Limits
                                            </td>
                                            <td class="text-center">
                                                <!-- Checkbox -->
                                                <div class="form-check d-inline-block me-n3">
                                                    <input class="form-check-input" id="callCheckboxThree" type="checkbox">
                                                        <label class="form-check-label" for="callCheckboxThree">
                                                        </label>
                                                    </input>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- Checkbox -->
                                                <div class="form-check d-inline-block me-n3">
                                                    <input checked="" class="form-check-input" id="emailCheckboxThree" type="checkbox">
                                                        <label class="form-check-label" for="emailCheckboxThree">
                                                        </label>
                                                    </input>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- Checkbox -->
                                                <div class="form-check d-inline-block me-n3">
                                                    <input checked="" class="form-check-input" id="smsCheckboxThree" type="checkbox">
                                                        <label class="form-check-label" for="smsCheckboxThree">
                                                        </label>
                                                    </input>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Policy & Community
                                            </td>
                                            <td class="text-center">
                                                <!-- Checkbox -->
                                                <div class="form-check d-inline-block me-n3">
                                                    <input class="form-check-input" id="callCheckboxFour" type="checkbox">
                                                        <label class="form-check-label" for="callCheckboxFour">
                                                        </label>
                                                    </input>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- Checkbox -->
                                                <div class="form-check d-inline-block me-n3">
                                                    <input checked="" class="form-check-input" id="emailCheckboxFour" type="checkbox">
                                                        <label class="form-check-label" for="emailCheckboxFour">
                                                        </label>
                                                    </input>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <!-- Checkbox -->
                                                <div class="form-check d-inline-block me-n3">
                                                    <input checked="" class="form-check-input" id="smsCheckboxFour" type="checkbox">
                                                        <label class="form-check-label" for="smsCheckboxFour">
                                                        </label>
                                                    </input>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Subscriptions
                                </h4>
                                <!-- Button -->
                                <button class="btn btn-sm btn-white">
                                    Unsubscribe all
                                </button>
                            </div>
                            <div class="card-body">
                                <!-- List group -->
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Heading -->
                                                <h4 class="font-weight-base mb-1">
                                                    Sales & Promotions
                                                </h4>
                                                <!-- Small -->
                                                <small class="text-muted">
                                                    We only notify you for significant promotions
                                                </small>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Switch -->
                                                <div class="form-check form-switch">
                                                    <input checked="" class="form-check-input" id="subscriptionsSwitchOne" type="checkbox">
                                                        <label class="form-check-label" for="subscriptionsSwitchOne">
                                                        </label>
                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Heading -->
                                                <h4 class="font-weight-base mb-1">
                                                    Product updates
                                                </h4>
                                                <!-- Small -->
                                                <small class="text-muted">
                                                    Major changes in our product offering
                                                </small>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Switch -->
                                                <div class="form-check form-switch">
                                                    <input checked="" class="form-check-input" id="subscriptionsSwitchTwo" type="checkbox">
                                                        <label class="form-check-label" for="subscriptionsSwitchTwo">
                                                        </label>
                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Heading -->
                                                <h4 class="font-weight-base mb-1">
                                                    Newsletter
                                                </h4>
                                                <!-- Small -->
                                                <small class="text-muted">
                                                    Updates on what’s going on here at Landkit.
                                                </small>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Switch -->
                                                <div class="form-check form-switch">
                                                    <input checked="" class="form-check-input" id="subscriptionsSwitchThree" type="checkbox">
                                                        <label class="form-check-label" for="subscriptionsSwitchThree">
                                                        </label>
                                                    </input>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                </div>
                            </div>
                        </div>
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
    </body>
</html>
