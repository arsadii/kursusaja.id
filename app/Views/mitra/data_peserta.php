<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <div class="page-header page-header-dark">
                <div class="page-header-content">
                    <h2 class="page-header-title text-center" style="display:block!important;color:rgb(255, 103, 2)">
                        <span>Detail Peserta</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="container col-md-10">
            <nav class="nav nav-borders">
                <a class="nav-link ml-0" href="/mitra/detail_layanan">Detail Layanan</a>
                <a class="nav-link active" href="/mitra/data_peserta">Data Peserta</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="table-responsive">
                <div class="card">
                    <h2 class="card-header">
                        Tabel Data Peserta
                    </h2>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>Kursus</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kursusaja.id</td>
                                        <td>Pemrograman Android</td>
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
        <div class="modal fade" id="editdata" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Layanan</h5>
                    </div>
                    <div class="modal-body">
                        <form class="card card-body">
                            <div class="form-group">
                                <div class="col-md text-center">
                                    <label for="exampleFormControlInput1">
                                        Judul
                                    </label>
                                </div>
                                <div class="col-md">
                                    <input class="form-control form-control-solid" id="exampleFormControlInput1" type="text" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md text-center">
                                    <label for="exampleFormControlInput1">
                                        Keterangan
                                    </label>
                                </div>
                                <div class="col-md">
                                    <textarea class="form-control form-control-solid" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md text-center">
                                    <label for="exampleFormControlInput1">
                                        Harga
                                    </label>
                                </div>
                                <div class="col-md">
                                    <input class="form-control form-control-solid" id="exampleFormControlInput1" type="text" placeholder="">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger" type="button">Simpan</button></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Peserta</h5>
                    </div>
                    <div class="modal-body">
                        <div class="card-body text-center">
                            <img class="img-fluid mb-4" style="width: 200px;height: 200px;border-radius:100%" src="/assets/img/ceo.jpg">
                            <div class="text-muted">Nama Peserta</div>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hapusdata" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Yakin Ingin Menghapus Data Ini ?</h5>
                    </div>
                    <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button><a href="/" class="btn btn-danger" type="button">Hapus</a></div>
                </div>
            </div>
        </div>
    </main>