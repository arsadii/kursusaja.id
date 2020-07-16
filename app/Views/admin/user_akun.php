<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="page-header page-header-dark">
                <div class="page-header-content">
                    <h2 class="page-header-title text-center" style="display:block!important;color:rgb(255, 103, 2)">
                        <span>Data Akun Pengguna</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container col-md-10">
            <nav class="nav nav-borders">
                <a class="nav-link active ml-0" href="/admin/user_akun">Akun</a>
                <a class="nav-link" href="/admin/user_portfolio">Portfolio</a>
                <a class="nav-link" href="/admin/user_perkembangan">Perkembangan</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="table-responsive">
                <div class="card">
                    <h2 class="card-header">
                        Tabel Data Akun Pengguna
                    </h2>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($pengguna as $p) : ?>
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td><?= $p['username'] ?></td>
                                            <td><?= $p['nama_lngkp'] ?></td>
                                            <td><?= $p['ttl'] ?></td>
                                            <td><?= $p['alamat'] ?></td>
                                            <td><?= $p['hp'] ?></td>
                                            <td><?= $p['email'] ?></td>
                                            <td class="text-center"><button class="btn btn-edit btn-primary" data-id="<?= $p['id'] ?>" data-toggle="modal" data-target="#editdata">Edit</button>
                                                <tb><button class="btn btn-detail btn-success" data-id="<?= $p['id'] ?>" data-toggle="modal" data-target="#detail">Detail</button>
                                                    <tb><button class="btn btn-danger" data-toggle="modal" data-target="#hapusdata">Hapus</button>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>