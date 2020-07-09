<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple.png">
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
   <nav class="navbar navbar-default navbar-fixed-top" color-on-scroll="">
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
         <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li>
                  <a href="<?= base_url('/'); ?>">Beranda</a>
               </li>
               <li>
                  <a href="<?= base_url('/pages/katalog'); ?>">Kursus</a>
               </li>
               <li>
                  <a href="/">Event</a>
               </li>
               <li>
                  <a href="/">Karya</a>
               </li>
               <li>
                  <a href="<?= base_url('/pages/masuk'); ?>">Masuk</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
</body>
<div class="page-header" style="background-color: #2f3337!important;">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <div class="card card-signup">
               <form class="form" method="post" action="simpan-daftar.php" enctype="multipart/form-data">
                  <div class="header header-primary text-center">
                     <h4 class="card-title">Daftar</h4>
                  </div>
                  <div class="card-content">
                     <div class="form-group input-group has-primary">
                        <span class="input-group-addon">
                           <i class="material-icons">face</i>
                        </span>
                        <input type="text" class="form-control" style="color: #000;" name="nama" placeholder="Nama Lengkap">
                        <input type="text" class="form-control" style="color: #000;" name="username" placeholder="Nama Pengguna">
                        <input type="text" placeholder="Nomor HP" name="no_hp" class="form-control" style="color: #000;" />
                        <input type="text" placeholder="Alamat" name="alamat" class="form-control" style="color: #000;" />
                     </div>
                     <div class="form-group input-group has-primary">
                        <span class="input-group-addon">
                           <i class="material-icons">email</i>
                        </span>
                        <input type="text" placeholder="Email" name="email" class="form-control" style="color: #000;" />
                     </div>
                     <div class="form-group input-group has-primary">
                        <span class="input-group-addon">
                           <i class="material-icons">lock_outline</i>
                        </span>
                        <input type="password" placeholder="Password..." name="password" class="form-control" style="color: #000;" />
                     </div>
                     <div class="checkbox">
                        <label>
                           <input type="checkbox" name="optionsCheckboxes" checked>
                           Saya Setuju Dengan <a href="terms.html">Syarat & Ketentuan dan Kebijakan</a>.
                        </label>
                     </div>
                  </div>
                  <div class="footer text-center">
                     <button class="btn btn-primary btn-raised btn-lg" type="submit" name="submit">Daftar</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

</html>