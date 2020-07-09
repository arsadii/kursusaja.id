<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?= $title; ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="/assets/css/darkback.css" rel="stylesheet" />
</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-dark" id="sidenavAccordion">
        <a class="navbar-brand" href="<?= base_url('/'); ?>"><img src="/assets/img/Logo Panjang.png" width="150px" alt=""></a><button class="btn btn-icon btn-transparent-light order-1 order-lg-1 ml-2" id="sidebarToggle" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
        <ul class="navbar-nav align-items-center ml-auto">
            <!-- <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-light dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownMessages">
                    <h6 class="dropdown-header dropdown-notifications-header">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail mr-2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>Pesan Kamu
                    </h6>
                    <a class="dropdown-item dropdown-notifications-item" href="#"><img class="dropdown-notifications-item-img" src="/assets/img/placeholder.jpg">
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">
                                Isi Pesan
                            </div>
                            <div class="dropdown-notifications-item-content-details">
                                Kursusaja.id · 58m
                            </div>
                        </div>
                    </a><a class="dropdown-item dropdown-notifications-item" href="#"><img class="dropdown-notifications-item-img" src="/assets/img/placeholder.jpg">
                        <div class="dropdown-notifications-item-content">
                            <div class="dropdown-notifications-item-content-text">
                                Isi Pesan
                            </div>
                            <div class="dropdown-notifications-item-content-details">
                                Kursusaja.id · 2d
                            </div>
                        </div>
                    </a><a class="dropdown-item dropdown-notifications-footer" href="#">Baca Semua Pesan</a>
                </div>
            </li>
            <li class="nav-item dropdown no-caret mr-3 dropdown-user">
                <a class="btn btn-icon btn-transparent-light dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="/assets/img/ceo.jpg"></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="/assets/img/ceo.jpg">
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">Kurusaja.id</div>
                            <div class="dropdown-user-details-email">kursusaja.id@gmail.com</div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                            </svg>
                        </div>
                        Pengaturan
                    </a><a class="dropdown-item" href="#!">
                        <div class="dropdown-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                        </div>
                        Keluar
                    </a>
                </div>
            </li> -->
        </ul>
    </nav>
    <?php
    $status1 = '';
    $status2 = '';
    $status3 = '';
    $status4 = '';
    if ($menu == 'Profil') {
        $status1 = 'active';
    } else if ($menu == 'Kursus') {
        $status2 = 'active';
    } else if ($menu == 'Portfolio') {
        $status3 = 'active';
    } else if ($menu == 'Rewards') {
        $status4 = 'active';
    }
    ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav sidenav-dark">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <div class="container col-md-10 text-center" style="margin-top:30px">
                            <img class="img-fluid" style="width: 300px;height: 200px;border-radius:100%" src="/assets/img/ceo.jpg">
                        </div>
                        <div class="sidenav-menu-heading text-center">Kursusaja.id<br>Bergabung Sejak 2020</div>
                    </div>
                    <br>
                    <div class="sidenav-menu-heading text-center">
                        <a class="nav-link <?= $status1 ?>" href="/pages/profil_user">Profil Saya</a>
                        <a class="nav-link <?= $status2 ?>" href="/pages/dashboard_user">Kursus Saya</a>
                        <a class="nav-link <?= $status3 ?>" href="/pages/karya_user">Portfolio</a>
                        <a class="nav-link <?= $status4 ?>" href="/pages/reward">Rewards</a><br>
                        <a class="nav-link" data-toggle="modal" data-target="#keluar">Keluar</a>
                    </div>
                </div>
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-title">Login Sebagai :</div>
                        <div class="sidenav-footer-subtitle">Kursusaja.id</div>
                    </div>
                </div>
            </nav>
        </div>