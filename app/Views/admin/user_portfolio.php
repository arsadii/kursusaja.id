<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="page-header page-header-dark">
                <div class="page-header-content">
                    <h2 class="page-header-title text-center" style="display:block!important;color:rgb(255, 103, 2)">
                        <span>Data Portfolio Pengguna</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container col-md-10">
            <nav class="nav nav-borders">
                <a class="nav-link ml-0" href="/admin/user_akun">Akun</a>
                <a class="nav-link active" href="/admin/user_portfolio">Portfolio</a>
                <a class="nav-link" href="/admin/user_perkembangan">Perkembangan</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="table-responsive">
                <div class="card">
                    <h2 class="card-header">
                        Tabel Portfolio Pengguna
                    </h2>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>Judul</th>
                                        <th>Keterangan</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kursusaja.id</td>
                                        <td>Finding Gratitude</td>
                                        <td>Belajar Bersyukur</td>
                                        <td>Flew.png</td>
                                        <td class="text-center"><button class="btn btn-primary" data-toggle="modal" data-target="#editdata">Edit</button>
                                            <tb><button class="btn btn-success" data-toggle="modal" data-target="#detail">Detail</button>
                                                <tb><button class="btn btn-danger" data-toggle="modal" data-target="#hapusdata">Hapus</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>