<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?= $title; ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="../assets/css/darkback.css" rel="stylesheet" />
</head>

<body class="nav-fixed">
    <nav class="topnav navbar navbar-expand shadow navbar-light bg-dark" id="sidenavAccordion">
        <a class="navbar-brand" href="<?= base_url('/'); ?>"><img src="../assets/img/Logo Panjang.png" width="150px" alt=""></a><button class="btn btn-icon btn-transparent-light order-1 order-lg-1 ml-2" id="sidebarToggle" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
        <ul class="navbar-nav align-items-center ml-auto">
            <!-- <li class="nav-item dropdown no-caret mr-3 dropdown-user">
                <a class="btn btn-icon btn-transparent-light dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="../assets/img/ceo.jpg"></a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="../assets/img/ceo.jpg">
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
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sidenav sidenav-dark">
                <div class=" sidenav-menu">
                    <div class="col">
                        <h2 class="card-header text-center" style="color:rgb(255, 103, 2)">Progress Belajar</h2>
                        <div class="progress rounded-0">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Progress 25%</div>
                        </div>
                    </div>
                    <br>
                    <div class="col">
                        <h2 class="card-header text-center" style="color:rgb(255, 103, 2)">Materi Kursus</h2>
                        <div class="card-body" style="padding: 0 1.35rem 1.35rem 1.35rem">
                            <ul class="nav nav-pills flex-column" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#materi1" data-toggle="tab" role="tab" aria-selected="true">Materi 1</a></li>
                                <li class="nav-item"><a class="nav-link" href="#materi2" data-toggle="tab" role="tab" aria-selected="false">Materi 2</a></li>
                                <li class="nav-item"><a class="nav-link" href="#materi3" data-toggle="tab" role="tab" aria-selected="false">Materi 3</a></li>
                                <li class="nav-item"><a class="nav-link" href="#materi4" data-toggle="tab" role="tab" aria-selected="false">Materi 4</a></li>
                                <li class="nav-item"><a class="nav-link" href="#materi5" data-toggle="tab" role="tab" aria-selected="false">Materi 5</a></li>
                                <li class="nav-item"><a class="nav-link" href="#materi6" data-toggle="tab" role="tab" aria-selected="false">Materi 6</a></li>
                                <li class="nav-item"><a class="nav-link" href="#materi7" data-toggle="tab" role="tab" aria-selected="false">Materi 7</a></li>
                                <li class="nav-item"><a class="nav-link" href="#materi8" data-toggle="tab" role="tab" aria-selected="false">Materi 8</a></li>
                                <li class="nav-item"><a class="nav-link" href="#materi9" data-toggle="tab" role="tab" aria-selected="false">Materi 9</a></li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="sidenav-menu-heading text-center">
                        <a class="btn btn-primary btn-raised btn-fab btn-fab-mini" href="/user/dashboard">Kembali Ke Dashboard</a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="page-header">
                    <div class="container col-md-12">
                        <div class="page-header-content">
                            <h2 class="page-header-title text-center" style="display:block!important;color:rgb(255, 103, 2)">
                                <span>Judul Materi</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="container col-md-11">
                    <div class="card mb-5" style="background-color:transparent">
                        <div class="card-body text-center" style="padding:0;height:640px"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/-IW2c9Scmtk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                        <div class="card-footer medium" style="background-color: #eee">Keterangan Disini</div>
                    </div>
                    <div class="row mb-4">
                        <div class="col text-left">
                            <button class="btn btn-primary btn-raised btn-fab btn-fab-mini">Materi Sebelumnya</button>
                        </div>
                        <div class="col text-right">
                            <button class="btn btn-primary btn-raised btn-fab btn-fab-mini">Materi Selanjutnya</button>
                        </div>
                    </div>
                </div>
            </main>