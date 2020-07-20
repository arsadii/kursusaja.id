<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title><?= $title; ?></title>
    <link href="/assets/css/front.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>
                <nav class="navbar navbar-home navbar-expand-lg bg-transparent navbar-dark fixed-top">
                    <div class="container">
                        <a class="navbar-brand" href="/"><img src="/assets/img/Logo Panjang.png" alt=""></a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#menuresponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="navbar-collapse collapse" id="menuresponsive">
                            <?php
                            $status1 = '';
                            $status2 = '';
                            $status3 = '';
                            $status4 = '';
                            $status5 = '';
                            if ($menu == 'Beranda') {
                                $status1 = 'active';
                            } else if ($menu == 'Kursus') {
                                $status2 = 'active';
                            } else if ($menu == 'Event') {
                                $status3 = 'active';
                            } else if ($menu == 'Portfolio') {
                                $status4 = 'active';
                            }
                            ?>
                            <ul class="navbar-nav ml-auto mr-lg-5">
                                <li class="nav-item <?= $status1 ?>"><a class="nav-link" href="/">Beranda</a></li>
                                <li class="nav-item <?= $status2 ?>"><a class="nav-link" href="/pages/katalog">Kursus</a></li>
                                <li class="nav-item <?= $status3 ?>"><a class="nav-link" href="/pages/event">Event</a></li>
                                <li class="nav-item <?= $status4 ?>"><a class="nav-link" href="/pages/portfolio">Portfolio</a></li>
                            </ul>
                            <div class="text-center">
                                <a class="px-4 ml-lg-4" href="/pages/masuk" target="_blank"><i class="fa fa-lock" aria-hidden="true"></i> Masuk</a>
                                <a class="btn btn-orange px-4 ml-lg-4" href="/pages/daftar" target="_blank">Daftar <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </nav>