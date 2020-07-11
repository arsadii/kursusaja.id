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
        <div class="container mt-4">
            <nav class="nav nav-borders">
                <a class="nav-link ml-0" href="/admin/dashboard_admin">Dashboard</a>
                <a class="nav-link active" href="/admin/pengaturan_admin">Pengaturan</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-header">Ubah Foto Profil</div>
                        <div class="card-body text-center">
                            <img class="img-fluid mb-4" style="width: 250px;height: 250px;border-radius:100%" src="../assets/img/ceo.jpg">
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
                </div>
            </div>
        </div>
    </main>