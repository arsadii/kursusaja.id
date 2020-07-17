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
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/darkstyle.css?v=1.2.1" rel="stylesheet" />
</head>

<body style="background-color: #2f3337!important;">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="col-md-8 col-md-offset-2">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <a href="<?= base_url('/'); ?>"><img src="/assets/img/Logo Panjang.png" width="150px" alt=""></a>
                </div>
            </div>
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
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="<?= $status1 ?>">
                        <a href="<?= base_url('/'); ?>">Beranda</a>
                    </li>
                    <li class="<?= $status2 ?>">
                        <a href="<?= base_url('/pages/katalog'); ?>">Kursus</a>
                    </li>
                    <li class="<?= $status3 ?>">
                        <a href="<?= base_url('/pages/event'); ?>">Event</a>
                    </li>
                    <li class="<?= $status4 ?>" style="padding-right: 5px;">
                        <a href="<?= base_url('/pages/portfolio'); ?>">Portfolio</a>
                    </li>
                    <li class="btn-primary">
                        <a href="<?= base_url('/pages/masuk'); ?>">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>