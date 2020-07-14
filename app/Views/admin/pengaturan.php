<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="page-header page-header-dark">
                <div class="page-header-content">
                    <h2 class="page-header-title text-center" style="display:block!important;color:rgb(255, 103, 2)">
                        <span>Pengaturan Admin</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container col-md-10">
            <nav class="nav nav-borders">
                <a class="nav-link ml-0" href="/admin/dashboard">Dashboard</a>
                <a class="nav-link active" href="/admin/pengaturan">Pengaturan</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <?php $id = session()->get('id'); ?>
                        <div class="card-header">Ubah Foto Profil</div>
                        <form method="POST" action="/admin/ubahfotoprofil/<?= $id; ?>" enctype="multipart/form-data">
                            <div class="card-body text-center">
                                <img class="img-fluid img-preview mb-4" style="width: 250px;height: 250px;border-radius:100%" src="/assets/img/profil/admin/<?= $user['gambar'] ?>">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= ($validation->hasError('gambar')) ?
                                                                                    'is-invalid' : ''; ?>" id="gambar" name="gambar" type="file" onchange="previewImg()">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('gambar'); ?>
                                    </div>
                                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                </div>
                                <div class="small font-italic text-muted mt-3 mb-4">JPG atau PNG tidak lebih dari 5 MB</div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-header">Ubah Password</div>
                        <div class="card-body">
                            <form method="POST" action="/admin/ubahsandi/<?$id?>">
                                <div class="form-group">
                                    <label class="small mb-1" for="passlama">Password Sekarang</label>
                                    <input class="form-control" name="passlama" type="password" placeholder="Password Sekarang">
                                    <div class="text-danger pl-1">
                                        <?= $validation->getError('passlama'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="passbaru">Password Baru</label>
                                    <input class="form-control" name="passbaru" type="password" placeholder="Password Baru">
                                    <div class="text-danger pl-1">
                                        <?= $validation->getError('passbaru'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="confirmpass">Konfirmasi Password</label>
                                    <input class="form-control" name="confirmpass" type="password" placeholder="Konfirmasi Kata Sandi Baru">
                                    <div class="text-danger pl-1">
                                        <?= $validation->getError('confirmpass'); ?>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">Ubah Data</div>
                        <form class="card card-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3 text-center" style="margin:10px 0;">
                                        <label for="exampleFormControlInput1">
                                            Nama Lengkap
                                        </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" value="<?= $user['nama_lngkp'] ?>" type="text" placeholder="" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3 text-center" style="margin:10px 0;">
                                        <label for="exampleFormControlInput1">
                                            Nama Pengguna
                                        </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" type="text" value="<?= $user['username'] ?>" placeholder="" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3 text-center" style="margin:10px 0;">
                                        <label for="exampleFormControlInput1">
                                            Tempat Tanggal Lahir
                                        </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" value="<?= $user['ttl'] ?>" type="text" placeholder="" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3 text-center" style="margin:10px 0;">
                                        <label for="exampleFormControlInput1">
                                            Alamat
                                        </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" value="<?= $user['alamat'] ?>" type="text" placeholder="" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3 text-center" style="margin:10px 0;">
                                        <label for="exampleFormControlInput1">
                                            Email
                                        </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" value="<?= $user['email'] ?>" type="email" placeholder="" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3 text-center" style="margin:10px 0;">
                                        <label for="exampleFormControlInput1">
                                            No. Handphone
                                        </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" value="<?= $user['hp'] ?>" type="text" placeholder="" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"><button class="btn btn-primary btn-raised btn-fab btn-fab-mini" type="button" data-toggle="modal" data-target="#ubah">Ubah</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubah Profil</h5>
                </div>
                <div class="modal-body">
                    <form class="card card-body" method="POST" action="/admin/ubahprofil/<?= $id ?>">
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="nama">
                                    Nama Lengkap
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" name="nama" value="<?= $user['nama_lngkp'] ?>" type="text" placeholder="">
                                <div class="text-danger pl-5">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="username">
                                    Nama Pengguna
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" name="username" value="<?= $user['username'] ?>" type="text" placeholder="">
                                <div class="text-danger pl-5">
                                    <?= $validation->getError('username'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="ttl">
                                    Tempat Tanggal Lahir
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" name="ttl" value="<?= $user['ttl'] ?>" type="date" placeholder="">
                                <div class="text-danger pl-5">
                                    <?= $validation->getError('ttl'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="alamat">
                                    Alamat
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" name="alamat" value="<?= $user['alamat'] ?>" type="text" placeholder="">
                                <div class="text-danger pl-5">
                                    <?= $validation->getError('alamat'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="email">
                                    Email
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" name="email" value="<?= $user['email'] ?>" type="email" placeholder="">
                                <div class="text-danger pl-5">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="hp">
                                    No. Handphone
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" name="hp" value="<?= $user['hp'] ?>" type="text" placeholder="">
                                <div class="text-danger pl-5">
                                    <?= $validation->getError('hp'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="pass">
                                    Password
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" name="pass" type="password" placeholder="">
                                <div class="text-danger pl-5">
                                    <?= $validation->getError('pass'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" data-dismiss="modal">Tutup</button>
                            <button class="btn btn-danger" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>