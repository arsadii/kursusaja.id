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
                        <button class="btn btn-primary btn-raised btn-fab btn-fab-mini" type="button" data-toggle="modal" data-target="#tambahportofolio">Tambah</button>
                    </div>
                    <div class="row">
                        <?php foreach ($portofolio as $p) : ?>
                            <div class="col-xxl-4 col-xl-4">
                                <div class="card h-100 card-img-top">
                                    <img class="img" style="height: 200px" src="/assets/img/portfolio/<?= $p['gambar']; ?>" alt="...">
                                    <div class="card-img-overlay">
                                        <button class="close btn-hapus" type="button" data-toggle="modal" data-id="<?= $p['id']; ?>" data-target="#hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br><br>
                                        <button class="close btn-edit-portofolio" type="button" data-id="<?= $p['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button><br><br>
                                        <button class="close btn-detail" type="button" data-id="<?= $p['id']; ?>"><i class="fa fa-file-text" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="card-footer text-center">
                                        <h3 class="badge badge-primary"><?= $p['judul']; ?></h3>
                                        <p class="keterangan d-flex flex-column justify-content-center py-5 py-xl-4">
                                            <?php
                                            $num_char = 150;
                                            $text = $p['deskripsi'];
                                            echo substr($text, 0, $num_char) . '...';
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </main>
            <div class="modal fade" id="tambahportofolio" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Portfolio</h5>
                        </div>
                        <div class="modal-body">
                            <form role="form" id="tambah-portofolio" class="card card-body">
                                <div class="form-group">
                                    <div class="col-md text-center">
                                        <label for="judulportofolio">
                                            Judul
                                        </label>
                                    </div>
                                    <div class="col-md">
                                        <input class="form-control form-control-solid" id="judulportofolio" name="judulportofolio" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md text-center">
                                        <label for="keteranganportofolio">
                                            Keterangan
                                        </label>
                                    </div>
                                    <div class="col-md">
                                        <textarea class="form-control form-control-solid" id="keteranganportofolio" name="keteranganportofolio" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md text-center">
                                        <label for="gambarportofolio">
                                            Upload Gambar
                                        </label>
                                    </div>
                                    <div class="col-md">
                                        <input type="hidden"><input type="file" id="gambarportofolio" name="gambarportofolio">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button>
                                    <button class="btn btn-danger" type="submit">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="editportofolio" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Portfolio</h5>
                        </div>
                        <div class="modal-body">
                            <form role="form" id="form-ubah-portofolio" class="card card-body">
                                <div class="form-group">
                                    <div class="col-md text-center">
                                        <label for="judul-portofolio">
                                            Judul
                                        </label>
                                    </div>
                                    <div class="col-md">
                                        <input class="form-control form-control-solid" id="id-portofolio" name="id-portofolio" type="text" placeholder="" hidden>
                                    </div>
                                    <div class="col-md">
                                        <input class="form-control form-control-solid" id="judul-portofolio" name="judul-portofolio" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md text-center">
                                        <label for="keterangan-portofolio">
                                            Keterangan
                                        </label>
                                    </div>
                                    <div class="col-md">
                                        <textarea class="form-control form-control-solid" id="keterangan-portofolio" name="keterangan-portofolio" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md text-center">
                                        <label for="gambar-portofolio">
                                            Upload Gambar
                                        </label>
                                    </div>
                                    <div class="col-md">
                                        <input type="hidden"><input type="file" id="gambar-portofolio" name="gambar-portofolio">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button>
                                    <button class="btn btn-danger" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
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

            <!-- Ini coba -->