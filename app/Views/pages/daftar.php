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
                     <a class="px-4 ml-lg-4" href="/pages/masuk" target="_blank"><i class="fa fa-lock" aria-hidden="true"></i> Masuk</a>
                     <a class="btn-orange btn px-4 ml-lg-4" href="/pages/daftar">Daftar <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                  </div>
               </div>
            </nav>
            <header class="page-header page-header-light overlay overlay-80 d-flex flex-column justify-content-center">
               <div class="page-header-content">
                  <div class="container col-md-10">
                     <?php if (session()->getFlashdata('flashdata')) : ?>
                        <div class="flash-data-daftarakun" data-flashdata="<?php echo session()->getFlashdata('flashdata'); ?> "></div>
                        <?php if (session()->getFlashdata('flashdata') == 'Data Berhasil Di Simpan!') : ?>
                           <div class="alert alert-success" style="margin-bottom: 60px" role="alert">
                              <?= session()->getFlashdata('flashdata'); ?>
                           </div>
                        <?php else : ?>
                           <div class="alert alert-danger" style="margin-bottom: 60px" role=" alert">
                              <?= session()->getFlashdata('flashdata'); ?>
                           </div>
                        <?php endif; ?>
                     <?php endif; ?>
                     <div class="row justify-content-center">
                        <div class="col-md-6 text-center" data-aos="fade-up">
                           <h1 class="page-header-title text-orange">Daftar</h1>
                           <p class="page-header-text text-white">Silahkan Isi Data Dibawah Ini Dengan Benar</p>
                           <form class="page-header-signup" method="post" action="/pages/daftarakun" enctype="multipart/form-data">
                              <?= csrf_field(); ?>
                              <div class="justify-content-center">
                                 <div class="col-md">
                                    <div class="form-group mr-0 mr-lg-2">
                                       <input type="text" class="form-control form-control-solid <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" value="<?= old('nama'); ?>" name="nama" placeholder="Nama Lengkap">
                                       <div class="invalid-feedback">
                                          <?= $validation->getError('nama'); ?>
                                       </div>
                                    </div>
                                    <div class="form-group mr-0 mr-lg-2">
                                       <input type="text" class="form-control form-control-solid <?= ($validation->hasError('usernamed')) ? 'is-invalid' : ''; ?>" value="<?= old('usernamed'); ?>" name="usernamed" placeholder="Nama Pengguna">
                                       <div class="invalid-feedback">
                                          <?= $validation->getError('usernamed'); ?>
                                       </div>
                                    </div>
                                    <div class="form-group mr-0 mr-lg-2">
                                       <input type="text" class="form-control form-control-solid <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" value="<?= old('no_hp'); ?>" name="no_hp" placeholder="Nomor HP" />
                                       <div class="invalid-feedback">
                                          <?= $validation->getError('no_hp'); ?>
                                       </div>
                                    </div>
                                    <div class="form-group mr-0 mr-lg-2">
                                       <input type="text" class="form-control form-control-solid <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" value="<?= old('alamat'); ?>" name="alamat" placeholder="Alamat">
                                       <div class="invalid-feedback">
                                          <?= $validation->getError('alamat'); ?>
                                       </div>
                                    </div>
                                    <div class="form-group mr-0 mr-lg-2">
                                       <input type="text" class="form-control form-control-solid <?= ($validation->hasError('tanggallahir')) ? 'is-invalid' : ''; ?>" value="<?= old('tanggallahir'); ?>" name="tanggallahir" placeholder="Tanggal Lahir">
                                       <div class="invalid-feedback">
                                          <?= $validation->getError('tanggallahir'); ?>
                                       </div>
                                    </div>
                                    <div class="form-group mr-0 mr-lg-2">
                                       <input type="text" class="form-control form-control-solid <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" value="<?= old('email'); ?>" name="email" placeholder="Email">
                                       <div class="invalid-feedback">
                                          <?= $validation->getError('email'); ?>
                                       </div>
                                    </div>
                                    <div class="form-group mr-0 mr-lg-2">
                                       <input type="text" class="form-control form-control-solid <?= ($validation->hasError('passwordd')) ? 'is-invalid' : ''; ?>" value="<?= old('passwordd'); ?>" name="passwordd" placeholder="Password">
                                       <div class="invalid-feedback">
                                          <?= $validation->getError('passwordd'); ?>
                                       </div>
                                    </div>
                                 </div>
                                 <button class="btn btn-orange btn-block btn-marketing rounded-pill mb-4" name="masuk" type="submit"><i class="fa fa-lock" aria-hidden="true"></i> Daftar</button>
                                 <a class="mb-5" href="/pages/masuk" target="_blank">Punya Akun ? Silahkan Login</a><br>
                                 <a href="/" target="_blank">Lupa Password ?</a>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
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