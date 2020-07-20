        <div id="layoutSidenav_content">
            <main>
                <div class="page-header">
                    <div class="container col-md-12">
                        <div class="page-header-content">
                            <h2 class="page-header-title text-center" style="display:block!important;color:rgb(255, 103, 2)">
                                Promosi
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="container col-md-10">
                    <div class="card card-header-actions mb-4">
                        <h2 class="card-header">Promosi
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahkursus">Tambah Promosi</button>
                        </h2>
                        <div class="card-body text-center">
                            <div class="row">
                                <?php foreach ($promosi as $p) :; ?>
                                    <div class="col-lg-4">
                                        <div class="card mb-4">
                                            <img class="card-img-top" src="/assets/img/layanan/<?= $p['gambar']; ?>" title="<?= $p['judul']; ?>" alt="...">
                                            <div class="card-img-overlay">
                                                <button class="close btn-hapus" type="button" data-toggle="modal" data-id="<?= $p['id']; ?>" data-target="#hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-edit-kursus" type="button" data-id="<?= $p['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-detail" type="button" data-id="<?= $p['id']; ?>"><i class="fa fa-file-text" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="card-footer text-center py-3">
                                                <h6 class="card-title">
                                                    <?= $p['judul']; ?>
                                                </h6>
                                                <div class="card-subtitle">
                                                    <?= $p['deskripsi']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>