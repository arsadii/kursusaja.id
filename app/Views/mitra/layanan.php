        <div id="layoutSidenav_content">
            <main>
                <div class="page-header">
                    <div class="container col-md-12">
                        <div class="page-header-content">
                            <h2 class="page-header-title text-center" style="display:block!important;color:rgb(255, 103, 2)">
                                Layanan
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="container col-md-10">
                    <div class="card card-header-actions mb-4">
                        <h2 class="card-header">Kursus
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahkursus">Tambah Kursus</button>
                        </h2>
                        <div class="card-body text-center">
                            <div class="row">
                                <?php foreach ($kursus as $k) :; ?>
                                    <div class="col-lg-4">
                                        <div class="card mb-4">
                                            <img class="card-img-top" src="/assets/img/layanan/<?= $k['gambar']; ?>" title="<?= $k['judul']; ?>" alt="...">
                                            <div class="card-img-overlay">
                                                <button class="close btn-hapus" type="button" data-toggle="modal" data-id="<?= $k['id']; ?>" data-target="#hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-edit-kursus" type="button" data-id="<?= $k['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-detail" type="button" data-id="<?= $k['id']; ?>"><i class="fa fa-file-text" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="card-footer text-center py-3">
                                                <h6 class="card-title">
                                                    <?= $k['judul']; ?>
                                                </h6>
                                                <div class="card-subtitle">
                                                    <?= $k['deskripsi']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container col-md-10">
                    <div class="card card-header-actions mb-4">
                        <h2 class="card-header">Kurma
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahkurma">Tambah Kurma</button>
                        </h2>
                        <div class="card-body text-center">
                            <div class="row">
                                <?php foreach ($kurma as $ku) :; ?>
                                    <div class="col-lg-4">
                                        <div class="card mb-4">
                                            <img class="card-img-top" src="/assets/img/layanan/<?= $ku['gambar']; ?>" title="<?= $ku['judul']; ?>" alt="...">
                                            <div class="card-img-overlay">
                                                <button class="close btn-hapus" type="button" data-toggle="modal" data-id="<?= $ku['id']; ?>" data-target="#hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-edit-kurma" type="button" data-id="<?= $ku['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-detail" type="button" data-id="<?= $ku['id']; ?>"><i class="fa fa-file-text" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="card-footer text-center py-3">
                                                <h6 class="card-title">
                                                    <?= $ku['judul']; ?>
                                                </h6>
                                                <div class="card-subtitle">
                                                    <?= $ku['deskripsi']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container col-md-10">
                    <div class="card card-header-actions mb-4">
                        <h2 class="card-header">Event
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahlayanan">Tambah Event</button>
                        </h2>
                        <div class="card-body text-center">
                            <div class="row">
                                <?php foreach ($event as $e) :; ?>
                                    <div class="col-lg-4">
                                        <div class="card mb-4">
                                            <img class="card-img-top" src="/assets/img/layanan/<?= $e['gambar']; ?>" title="<?= $e['judul']; ?>" alt="...">
                                            <div class="card-img-overlay">
                                                <button class="close btn-hapus" type="button" data-toggle="modal" data-id="<?= $e['id']; ?>" data-target="#hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-edit-kursus" type="button" data-id="<?= $e['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-detail" type="button" data-id="<?= $e['id']; ?>"><i class="fa fa-file-text" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="card-footer text-center py-3">
                                                <h6 class="card-title">
                                                    <?= $e['judul']; ?>
                                                </h6>
                                                <div class="card-subtitle">
                                                    <?= $e['deskripsi']; ?>
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