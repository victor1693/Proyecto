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
                                        <!-- Nav -->
                                        <?php include("includes/account-menu.php");?>
                                    </div>
                                </div>
                            </div>
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
                                                    Seats used
                                                </h6>
                                                <!-- Heading -->
                                                <span class="h2 mb-0">
                                                    4 out of 6
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <a class="btn btn-sm btn-outline-primary" href="#!">
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
                                                    Default role
                                                </h6>
                                                <!-- Heading -->
                                                <span class="h2 mb-0">
                                                    Staff
                                                </span>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <a class="btn btn-sm btn-white" href="#!">
                                                    Change
                                                </a>
                                            </div>
                                        </div>
                                        <!-- / .row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / .row -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Members
                                </h4>
                                <!-- Dropdown -->
                                <div class="dropdown">
                                    <button aria-expanded="false" aria-haspopup="true" class="btn btn-sm btn-primary" data-bs-toggle="dropdown" id="inviteMember" type="button">
                                        Invite member
                                    </button>
                                    <form aria-labelledby="inviteMember" class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                                        <div class="card-header">
                                            <!-- Title -->
                                            <h4 class="card-header-title">
                                                Invite a member
                                            </h4>
                                            <!-- Badge -->
                                            <span class="badge bg-primary-soft">
                                                2 seats left
                                            </span>
                                        </div>
                                        <div class="card-header">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-3">
                                                    <!-- Label -->
                                                    <label class="mb-0" for="inviteMemberName">
                                                        Name
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <!-- Input -->
                                                    <input class="form-control form-control-flush" id="inviteMemberName" placeholder="Full name" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </div>
                                        <div class="card-header">
                                            <div class="row g-0 align-items-center">
                                                <div class="col-3">
                                                    <!-- Label -->
                                                    <label class="mb-0" for="inviteMemberEmail">
                                                        Email
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <!-- Input -->
                                                    <input class="form-control form-control-flush" id="inviteMemberEmail" placeholder="Email address" type="text">
                                                    </input>
                                                </div>
                                            </div>
                                            <!-- / .row -->
                                        </div>
                                        <div class="card-footer">
                                            <!-- Button -->
                                            <button class="btn w-100 btn-primary" type="submit">
                                                Invite member
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- List group -->
                                <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a class="avatar" href="profile-posts.html">
                                                    <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-1.jpg">
                                                    </img>
                                                </a>
                                            </div>
                                            <div class="col-5 ms-n2">
                                                <!-- Title -->
                                                <h4 class="mb-1">
                                                    <a href="profile-posts.html">
                                                        Dianna Smiley
                                                    </a>
                                                </h4>
                                                <!-- Email -->
                                                <p class="small text-muted mb-0">
                                                    <a class="d-block text-reset text-truncate" href="mailt:dianna.smiley@company.com">
                                                        dianna.smiley@company.com
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="col-auto ms-auto me-n3">
                                                <!-- Select -->
                                                <div aria-expanded="false" aria-haspopup="true" class="choices" data-type="select-one" role="listbox" tabindex="0">
                                                    <div class="form-select form-select-sm">
                                                        <select class="form-select form-select-sm form-control" data-choice="active" data-choices='{"searchEnabled": false}' hidden="" tabindex="-1">
                                                            <option value="Admin">
                                                                Admin
                                                            </option>
                                                        </select>
                                                        <div class="choices__list choices__list--single">
                                                            <div aria-selected="true" class="choices__item choices__item--selectable" data-custom-properties="null" data-id="1" data-item="" data-value="Admin">
                                                                Admin
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div aria-expanded="false" class="choices__list dropdown-menu">
                                                        <div class="choices__list" role="listbox">
                                                            <div aria-selected="true" class="choices__item dropdown-item choices__item--selectable is-highlighted" data-choice="" data-choice-selectable="" data-id="1" data-select-text="Press to select" data-value="Admin" role="option">
                                                                Admin
                                                            </div>
                                                            <div class="choices__item dropdown-item choices__item--selectable" data-choice="" data-choice-selectable="" data-id="2" data-select-text="Press to select" data-value="Staff" role="option">
                                                                Staff
                                                            </div>
                                                            <div class="choices__item dropdown-item choices__item--selectable" data-choice="" data-choice-selectable="" data-id="3" data-select-text="Press to select" data-value="Custom" role="option">
                                                                Custom
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                <!-- Avatar -->
                                                <a class="avatar" href="profile-posts.html">
                                                    <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-2.jpg">
                                                    </img>
                                                </a>
                                            </div>
                                            <div class="col-5 ms-n2">
                                                <!-- Title -->
                                                <h4 class="mb-1">
                                                    <a href="profile-posts.html">
                                                        Ab Hadley
                                                    </a>
                                                </h4>
                                                <!-- Email -->
                                                <p class="small text-muted mb-0">
                                                    <a class="d-block text-reset text-truncate" href="mailt:ab.hadley@company.com">
                                                        ab.hadleyompany.com
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="col-auto ms-auto me-n3">
                                                <!-- Select -->
                                                <div aria-expanded="false" aria-haspopup="true" class="choices" data-type="select-one" role="listbox" tabindex="0">
                                                    <div class="form-select form-select-sm">
                                                        <select class="form-select form-select-sm form-control" data-choice="active" data-choices='{"searchEnabled": false}' hidden="" tabindex="-1">
                                                            <option value="Admin">
                                                                Admin
                                                            </option>
                                                        </select>
                                                        <div class="choices__list choices__list--single">
                                                            <div aria-selected="true" class="choices__item choices__item--selectable" data-custom-properties="null" data-id="1" data-item="" data-value="Admin">
                                                                Admin
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div aria-expanded="false" class="choices__list dropdown-menu">
                                                        <div class="choices__list" role="listbox">
                                                            <div aria-selected="true" class="choices__item dropdown-item choices__item--selectable is-highlighted" data-choice="" data-choice-selectable="" data-id="1" data-select-text="Press to select" data-value="Admin" role="option">
                                                                Admin
                                                            </div>
                                                            <div class="choices__item dropdown-item choices__item--selectable" data-choice="" data-choice-selectable="" data-id="2" data-select-text="Press to select" data-value="Staff" role="option">
                                                                Staff
                                                            </div>
                                                            <div class="choices__item dropdown-item choices__item--selectable" data-choice="" data-choice-selectable="" data-id="3" data-select-text="Press to select" data-value="Custom" role="option">
                                                                Custom
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                <!-- Avatar -->
                                                <a class="avatar" href="profile-posts.html">
                                                    <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-3.jpg">
                                                    </img>
                                                </a>
                                            </div>
                                            <div class="col-5 ms-n2">
                                                <!-- Title -->
                                                <h4 class="mb-1">
                                                    <a href="profile-posts.html">
                                                        Adolfo Hess
                                                    </a>
                                                </h4>
                                                <!-- Email -->
                                                <p class="small text-muted mb-0">
                                                    <a class="d-block text-reset text-truncate" href="mailt:adolfo.hess@company.com">
                                                        adolfo.hess@company.com
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="col-auto ms-auto me-n3">
                                                <!-- Select -->
                                                <div aria-expanded="false" aria-haspopup="true" class="choices" data-type="select-one" role="listbox" tabindex="0">
                                                    <div class="form-select form-select-sm">
                                                        <select class="form-select form-select-sm form-control" data-choice="active" data-choices='{"searchEnabled": false}' hidden="" tabindex="-1">
                                                            <option value="Admin">
                                                                Admin
                                                            </option>
                                                        </select>
                                                        <div class="choices__list choices__list--single">
                                                            <div aria-selected="true" class="choices__item choices__item--selectable" data-custom-properties="null" data-id="1" data-item="" data-value="Admin">
                                                                Admin
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div aria-expanded="false" class="choices__list dropdown-menu">
                                                        <div class="choices__list" role="listbox">
                                                            <div aria-selected="true" class="choices__item dropdown-item choices__item--selectable is-highlighted" data-choice="" data-choice-selectable="" data-id="1" data-select-text="Press to select" data-value="Admin" role="option">
                                                                Admin
                                                            </div>
                                                            <div class="choices__item dropdown-item choices__item--selectable" data-choice="" data-choice-selectable="" data-id="2" data-select-text="Press to select" data-value="Staff" role="option">
                                                                Staff
                                                            </div>
                                                            <div class="choices__item dropdown-item choices__item--selectable" data-choice="" data-choice-selectable="" data-id="3" data-select-text="Press to select" data-value="Custom" role="option">
                                                                Custom
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                <!-- Avatar -->
                                                <a class="avatar" href="profile-posts.html">
                                                    <img alt="..." class="avatar-img rounded-circle" src="<?= Request::root();?>/local/resources/views/assets/img/avatars/profiles/avatar-4.jpg">
                                                    </img>
                                                </a>
                                            </div>
                                            <div class="col-5 ms-n2">
                                                <!-- Title -->
                                                <h4 class="mb-1">
                                                    <a href="profile-posts.html">
                                                        Daniela Dewitt
                                                    </a>
                                                </h4>
                                                <!-- Email -->
                                                <p class="small text-muted mb-0">
                                                    <a class="d-block text-reset text-truncate" href="mailt:daniela.dewitt@company.com">
                                                        daniela.dewitt@company.com
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="col-auto ms-auto me-n3">
                                                <!-- Select -->
                                                <div aria-expanded="false" aria-haspopup="true" class="choices" data-type="select-one" role="listbox" tabindex="0">
                                                    <div class="form-select form-select-sm">
                                                        <select class="form-select form-select-sm form-control" data-choice="active" data-choices='{"searchEnabled": false}' hidden="" tabindex="-1">
                                                            <option value="Admin">
                                                                Admin
                                                            </option>
                                                        </select>
                                                        <div class="choices__list choices__list--single">
                                                            <div aria-selected="true" class="choices__item choices__item--selectable" data-custom-properties="null" data-id="1" data-item="" data-value="Admin">
                                                                Admin
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div aria-expanded="false" class="choices__list dropdown-menu">
                                                        <div class="choices__list" role="listbox">
                                                            <div aria-selected="true" class="choices__item dropdown-item choices__item--selectable is-highlighted" data-choice="" data-choice-selectable="" data-id="1" data-select-text="Press to select" data-value="Admin" role="option">
                                                                Admin
                                                            </div>
                                                            <div class="choices__item dropdown-item choices__item--selectable" data-choice="" data-choice-selectable="" data-id="2" data-select-text="Press to select" data-value="Staff" role="option">
                                                                Staff
                                                            </div>
                                                            <div class="choices__item dropdown-item choices__item--selectable" data-choice="" data-choice-selectable="" data-id="3" data-select-text="Press to select" data-value="Custom" role="option">
                                                                Custom
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
