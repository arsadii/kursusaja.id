<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="page-header page-header-dark">
                <div class="page-header-content">
                    <h2 class="page-header-title text-center" style="display:block!important;color:rgb(255, 103, 2)">
                        <span>Data Layanan Mitra</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container col-md-10">
            <nav class="nav nav-borders">
                <a class="nav-link ml-0" href="/admin/mitra_akun">Akun</a>
                <a class="nav-link active" href="/admin/mitra_layanan">Layanan</a>
                <a class="nav-link" href="/admin/mitra_promosi">Promosi</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="table-responsive">
                <div class="card">
                    <h2 class="card-header">
                        Tabel Layanan Mitra
                    </h2>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kursusaja.id</td>
                                        <td>Kos Mul, Januari 2020</td>
                                        <td>Jalan Merpati</td>
                                        <td>0823456789</td>
                                        <td>Kursusaja.id@gmail.com</td>
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