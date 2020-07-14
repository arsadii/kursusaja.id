<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="page-header page-header-dark">
                <div class="page-header-content">
                    <h2 class="page-header-title text-center" style="display:block!important;color:rgb(255, 103, 2)">
                        <span>Pengaturan Profil Mitra</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container col-md-10">
            <nav class="nav nav-borders">
                <a class="nav-link ml-0" href="/mitra/profil">Profil</a>
                <a class="nav-link active" href="/mitra/pengaturan">Pengaturan</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header">Ubah Foto Profil</div>
                        <div class="card-body text-center">
                            <img class="img-fluid mb-4" style="width: 250px;height: 250px;border-radius:100%" src="/assets/img/ceo.jpg">
                            <div class="small font-italic text-muted mb-4">JPG atau PNG tidak lebih dari 5 MB</div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-header">Ubah Password</div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label class="small mb-1" for="currentPassword">Password Sekarang</label>
                                    <input class="form-control" id="currentPassword" type="password" placeholder="Password Sekarang">
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="newPassword">Password Baru</label>
                                    <input class="form-control" id="newPassword" type="password" placeholder="Password Baru">
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="confirmPassword">Konfirmasi Password</label>
                                    <input class="form-control" id="confirmPassword" type="password" placeholder="Konfirmasi Password Baru">
                                </div>
                                <button class="btn btn-primary" type="button">Simpan</button>
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
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" disabled value="<?= $akun['nama_lmbg']; ?>">
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
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" disabled value="<?= $akun['username']; ?>">
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
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" disabled value="<?= $akun['tnggl_brdr']; ?>">
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
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" disabled value="<?= $akun['alamat']; ?>">
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
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" disabled value="<?= $akun['email']; ?>">
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
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" disabled value="<?= $akun['hp']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3 text-center" style="margin:10px 0;">
                                        <label for="exampleFormControlInput1">
                                            Password
                                        </label>
                                    </div>
                                    <div class="col-md-9">
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" disabled value="<?= $akun['password']; ?>">
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
                    <h5 class="modal-title">Ubah Data</h5>
                </div>
                <div class="modal-body">
                    <form class="card card-body">
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="exampleFormControlInput1">
                                    Nama Lengkap
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" value="<?= $akun['nama_lmbg']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="exampleFormControlInput1">
                                    Nama Pengguna
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" value="<?= $akun['username']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="exampleFormControlInput1">
                                    Tempat Tanggal Lahir
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" value="<?= $akun['tnggl_brdr']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="exampleFormControlInput1">
                                    Alamat
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" value="<?= $akun['alamat']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="exampleFormControlInput1">
                                    Email
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" value="<?= $akun['email']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="exampleFormControlInput1">
                                    No. Handphone
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" value="<?= $akun['hp']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md text-center">
                                <label for="exampleFormControlInput1">
                                    Password
                                </label>
                            </div>
                            <div class="col-md">
                                <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="" value="<?= $akun['password']; ?>">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger" type="button">Edit</button></div>
            </div>
        </div>
    </div>