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

<body class="bg-dark">
   <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
         <main>
            <nav class="navbar navbar-home navbar-expand-lg bg-primary navbar-dark">
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
            <div class="container-xl">
               <div class="row justify-content-center text-center">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-10">
                     <h1 class="page-header-title text-orange">Login</h1>
                     <p class="page-header-text text-white">Silahkan Login Terlebih Dahulu.</p>
                     <?php if (session()->getFlashdata('flashdata')) : ?>
                        <?php if (session()->getFlashdata('flashdata') == 'Akun Berhasil Di Dafar!') : ?>
                           <div class="alert alert-success" role="alert">
                              <?= (session()->getFlashdata('flashdata')); ?>
                           </div>
                        <?php else : ?>
                           <div class="alert alert-danger" role="alert">
                              <?= (session()->getFlashdata('flashdata')); ?>
                           </div>
                        <?php endif ?>
                     <?php endif ?>
                     <form class="page-header-signup" method="post" action="/pages/cekmasuk">
                        <?= csrf_field(); ?>
                        <div class="container col-md-6 justify-content-center">
                           <div class="form-group mr-0 mr-lg-2">
                              <input class="form-control form-control-solid <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('username'); ?>" id="username" name="username" type="text" placeholder="Username">
                              <div class="invalid-feedback">
                                 <?= $validation->getError('username'); ?>
                              </div>
                           </div>
                           <div class="form-group mr-0 mr-lg-2">
                              <input class="form-control form-control-solid <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" autofocus value="<?= old('password'); ?>" id="password" name="password" type="text" placeholder="Password">
                              <div class="invalid-feedback">
                                 <?= $validation->getError('password'); ?>
                              </div>
                           </div>
                           <button class="btn btn-orange btn-block btn-marketing rounded-pill mb-4" name="masuk" type="submit"><i class="fa fa-lock" aria-hidden="true"></i> Login</button>
                        </div>
                        <a class="mb-5" href="/pages/daftar" target="_blank">Belum Punya Akun ? Silahkan Daftar</a><br>
                        <a href="/" target="_blank">Lupa Password ?</a>
                     </form>
                  </div>
               </div>
            </div>
         </main>
      </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   <script src="/assets/js/front.js"></script>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script>
      AOS.init({
         disable: 'mobile',
         duration: 600,
         once: true
      });
   </script>
</body>

</html>