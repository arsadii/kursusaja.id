<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?= $title; ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
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
                            <img class="img-fluid" style="width: 200px;height: 200px;border-radius:100%" src="/assets/img/profil/peserta/<?= $user['gambar'] ?>">
                        </div>
                        <div class="sidenav-menu-heading text-center"><?= $user['nama_lngkp'] ?>
                            <br style="font-size: 1px;">Bergabung Sejak <?= date('Y', strtotime($user['created_at'])) ?>
                        </div>
                    </div>
                    <br>
                    <div class="sidenav-menu-heading text-center">
                        <a class="nav-link <?= $status1 ?>" href="/user/profil">Profil</a>
                        <a class="nav-link <?= $status2 ?>" href="/user/dashboard">Dashboard</a>
                        <a class="nav-link <?= $status3 ?>" href="/user/portfolio">Portfolio</a>
                        <a class="nav-link <?= $status4 ?>" href="/user/reward">Rewards</a><br>
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