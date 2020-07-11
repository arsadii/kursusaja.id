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

<body class="login-page">
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
         }
         else if ($menu == 'Event') {
            $status3 = 'active';
         }
         else if ($menu == 'Portfolio') {
            $status4 = 'active';
         }
         else if ($menu == 'Masuk') {
            $status5 = 'active';
         }
         ?>
         <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               <li class="<?= $status1 ?>">
                  <a href="/">Beranda</a>
               </li>
               <li class="<?= $status2 ?>">
                  <a href="/pages/katalog">Kursus</a>
               </li>
               <li class="<?= $status3 ?>">
                  <a href="/pages/event">Event</a>
               </li>
               <li class="<?= $status4 ?>">
                  <a href="/pages/portfolio">Portfolio</a>
               </li>
               <li class="<?= $status5 ?>">
                  <a href="/pages/masuk">Masuk</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <div class="page-header header-filter" style="background-image: url('/assets/img/1.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
               <div class="card card-signup">
                  <form class="form" method="post" action="/pages/cekmasuk">
                     <?= csrf_field(); ?>
                     <div class="header header-primary text-center">
                        <h4 class="card-title">Masuk</h4>
                     </div>
                     <div class="card-content">
                        <div class="form-group input-group has-primary">
                           <span class="input-group-addon">
                              <i class="material-icons">face</i>
                           </span>
                           <input type="text" name="username" class="form-control <?= ($validation->hasError('username')) ?
                                                                                       'is-invalid' : ''; ?>" style="color: #000;" placeholder="Nama Pengguna" autofocus value="<?= old('username'); ?>">
                           <div class="invalid-feedback text-danger pl-5">
                              <?= $validation->getError('username'); ?>
                           </div>
                        </div>
                        <div class="form-group input-group has-primary">
                           <span class="input-group-addon">
                              <i class="material-icons">lock_outline</i>
                           </span>
                           <input type="password" name="password" placeholder="Password..." class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" value="<?= old('password'); ?>" style="color: #000;" />
                           <div class=" invalid-feedback text-danger">
                              <?= $validation->getError('password'); ?>
                           </div>
                        </div>
                     </div>
                     <div class="footer text-center">
                        <button class="btn btn-primary btn-simple btn-lg" type="submit" name="masuk">Masuk</button><br>
                     </div>
                  </form>
                  <button class="btn btn-primary btn-raised btn-wd btn-lg" data-toggle="modal" data-target="#daftar">Belum Punya Akun ?</button>
               </div>
            </div>
         </div>
      </div>
      <footer class="footer">
         <div class="container">
            <div class="copyright">
               &copy; <script>
                  document.write(new Date().getFullYear())
               </script> Kursusaja.id - All Right Reserved
            </div>
         </div>
      </footer>
   </div>
</body>
<div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Daftar</h5>
            <button class="btn btn-primary" type="button" style="padding:8px;  font-size:10px;" data-dismiss="modal">X</button>
         </div>
         <div class="modal-body">
            <form class="form" method="post" action="/pages/daftarakun" enctype="multipart/form-data">
               <?= csrf_field(); ?>
               <div class="card-content">
                  <div class="form-group input-group has-primary">
                     <span class="input-group-addon">
                        <i class="material-icons">info</i>
                     </span>
                     <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" value="<?= old('nama'); ?>" style="color: #000;" name="nama" placeholder="Nama Lengkap">
                     <div class="invalid-feedback text-danger pl-5">
                        <?= $validation->getError('nama'); ?>
                     </div>
                  </div>
                  <div class="form-group input-group has-primary">
                     <span class="input-group-addon">
                        <i class="material-icons">face</i>
                     </span>
                     <input type="text" class="form-control <?= ($validation->hasError('usernamed')) ? 'is-invalid' : ''; ?>" value="<?= old('usernamed'); ?>" style="color: #000;" name="usernamed" placeholder="Nama Pengguna">
                     <div class="invalid-feedback text-danger pl-5">
                        <?= $validation->getError('usernamed'); ?>
                     </div>
                  </div>
                  <div class="form-group input-group has-primary">
                     <span class="input-group-addon">
                        <i class="material-icons">call</i>
                     </span>
                     <input type="text" placeholder="Nomor HP" name="no_hp" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" value="<?= old('no_hp'); ?>" style="color: #000;" />
                     <div class="invalid-feedback text-danger pl-5">
                        <?= $validation->getError('no_hp'); ?>
                     </div>
                  </div>
                  <div class="form-group input-group has-primary">
                     <span class="input-group-addon">
                        <i class="material-icons">home</i>
                     </span>
                     <input type="text" placeholder="Alamat" name="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" value="<?= old('alamat'); ?>" style="color: #000;" />
                     <div class="invalid-feedback text-danger pl-5">
                        <?= $validation->getError('alamat'); ?>
                     </div>
                  </div>
                  <div class="form-group input-group has-primary">
                     <span class="input-group-addon">
                        <i class="material-icons">event</i>
                     </span>
                     <input type="date" placeholder="Tanggal Lahir" name="tanggallahir" class="form-control <?= ($validation->hasError('tanggallahir')) ? 'is-invalid' : ''; ?>" value="<?= old('tanggallahir'); ?>" style="color: #000;" placeholder="Tanggal lahir" />
                     <div class="invalid-feedback text-danger pl-5">
                        <?= $validation->getError('tanggallahir'); ?>
                     </div>
                  </div>
                  <div class="form-group input-group has-primary">
                     <span class="input-group-addon">
                        <i class="material-icons">email</i>
                     </span>
                     <input type="email" placeholder="Email" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" value="<?= old('email'); ?>" style="color: #000;" />
                     <div class="invalid-feedback text-danger pl-5">
                        <?= $validation->getError('email'); ?>
                     </div>
                  </div>
                  <div class="form-group input-group has-primary">
                     <span class="input-group-addon">
                        <i class="material-icons">lock_outline</i>
                     </span>
                     <input type="password" placeholder="Password..." name="passwordd" class="form-control <?= ($validation->hasError('paswordd')) ? 'is-invalid' : ''; ?>" style="color: #000;" />
                     <div class="invalid-feedback text-danger pl-5">
                        <?= $validation->getError('passwordd'); ?>
                     </div>
                  </div>
               </div>
               <div class="footer text-center">
                  <button class="btn btn-primary" type="submit" name="submit">Daftar</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<script src="/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/js/material.min.js"></script>
<script src="/assets/js/moment.min.js"></script>
<script src="/assets/js/nouislider.min.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap-tagsinput.js"></script>
<script src="/assets/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="/assets/js/style.js" type="text/javascript"></script>

</html>