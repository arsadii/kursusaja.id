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
        <a class="navbar-brand" href="#"><img src="/assets/img/Logo Panjang.png" width="150px" alt=""></a><button class="btn btn-icon btn-transparent-light order-1 order-lg-1 ml-2" id="sidebarToggle" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
        <ul class="navbar-nav align-items-center ml-auto">
        </ul>
    </nav>
    <?php
    $status1 = '';
    $status2 = '';
    if ($menu == 'Pengguna') {
        $status1 = 'active';
    } else if ($menu == 'Mitra') {
        $status2 = 'active';
    }
    ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav sidenav-dark">
                <div class="sidenav-menu">
                    <div class="nav accordion" id="accordionSidenav">
                        <div class="container col-md-10 text-center" style="margin-top:30px">
                            <img class="img-fluid" style="width: 200px;height: 200px;border-radius:100%" src="/assets/img/profil/admin/<?= $user['gambar'] ?>">
                        </div>
                        <div class="sidenav-menu-heading text-center">Kursusaja.id<br>Bergabung Sejak 2020</div>
                    </div>
                    <div class="nav accordion mb-4" id="accordionSidenav">
                        <a class="sidenav-menu-heading" href="/admin/dashboard">Admin</a>
                        <a class="nav-link <?= $status1 ?> collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pengguna" aria-expanded="false" aria-controls="penguna">
                            <div class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg></div>
                            Pengguna
                        </a>
                        <div class="collapse" id="pengguna" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                <a class="nav-link" href="/admin/user_akun">
                                    Akun
                                    <span class="badge badge-dark text-primary ml-auto">New</span>
                                </a>
                                <a class="nav-link" href="/admin/user_portfolio">
                                    Portfolio
                                </a>
                                <a class="nav-link" href="/admin/user_perkembangan">
                                    Perkembangan
                                </a>
                            </nav>
                        </div>
                        <a class="nav-link <?= $status2 ?> collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#mitra" aria-expanded="false" aria-controls="mitra">
                            <div class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg></div>
                            Mitra
                        </a>
                        <div class="collapse" id="mitra" data-parent="#accordionSidenav">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                                <a class="nav-link" href="/admin/mitra_akun">
                                    Akun
                                </a>
                                <a class="nav-link" href="/admin/mitra_layanan">
                                    Layanan
                                </a>
                                <a class="nav-link" href="/admin/mitra_promosi">
                                    Promosi
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div class="sidenav-menu-heading text-center">
                        <a class="nav-link" data-toggle="modal" data-target="#keluar">Keluar</a>
                    </div>
                </div>
                <div class="sidenav-footer">
                    <div class="sidenav-footer-content">
                        <div class="sidenav-footer-title">Login Sebagai :</div>
                        <div class="sidenav-footer-subtitle"><?= session()->get('role'); ?></div>
                    </div>
                </div>
            </nav>
        </div>