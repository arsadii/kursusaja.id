        <div id="layoutSidenav_content">
            <main>
                <div class="page-header">
                    <div class="container col-md-12">
                        <div class="page-header-content">
                            <h2 class="page-header-title text-center" style="display:block!important;color:rgb(255, 103, 2)">
                                Portfolio
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="container col-md-10">
                    <div class="col mb-4 text-right">
                        <button class="btn btn-primary btn-raised btn-fab btn-fab-mini" type="button" data-toggle="modal" data-target="#tambah">Tambah</button>
                    </div>
                    <div class="row">
                        <div class="container col-md-6" style="border: none">
                            <div class="card card-img-top mb-4">
                                <img class="img" style="height: 300px" src="/assets/img/skynight.jpg" alt="...">
                                <div class="card-img-overlay">
                                    <button class="close" type="button" data-toggle="modal" data-target="#hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br><br>
                                    <button class="close" type="button" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                </div>
                                <div class="card-footer">
                                    <h3 class="badge badge-primary">Judul</h3>
                                    <p class="card-text">Keterangan</p>
                                </div>
                            </div>
                        </div>
                        <div class="container col-md-6" style="border: none">
                            <div class="card card-img-top mb-4">
                                <img class="img" style="height: 300px" src="/assets/img/Flew.png" alt="...">
                                <div class="card-img-overlay">
                                    <button class="close" type="button" data-toggle="modal" data-target="#hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br><br>
                                    <button class="close" type="button" data-toggle="modal" data-target="#edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                </div>
                                <div class="card-footer">
                                    <h3 class="badge badge-primary">Judul</h3>
                                    <p class="card-text">Keterangan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Portfolio</h5>
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
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="">
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
                                            Upload Gambar
                                        </label>
                                    </div>
                                    <div class="col-md">
                                        <input type="hidden"><input type="file" name="...">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger" type="button">Tambah</button></div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Portfolio</h5>
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
                                        <input class="form-control form-control-solid" id="exampleFormControlInput1" type="email" placeholder="">
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
                                            Upload Gambar
                                        </label>
                                    </div>
                                    <div class="col-md">
                                        <input type="hidden"><input type="file" name="...">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger" type="button">Tambah</button></div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Yakin Ingin Menghapus Portfolio ?</h5>
                        </div>
                        <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button><a href="/" class="btn btn-danger" type="button">Hapus</a></div>
                    </div>
                </div>
            </div>