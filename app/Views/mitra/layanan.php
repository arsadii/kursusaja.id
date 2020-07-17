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
                                <?php foreach ($kursus as $k) : ?>
                                    <div class="col-xxl-4 col-xl-4">
                                        <div class="card h-100 card-img-top mb-4">
                                            <img class="img" style="height: 200px" src="/assets/img/layanan/<?= $k['gambar']; ?>" alt="...">
                                            <div class="card-img-overlay">
                                                <button class="close btn-hapus" type="button" data-toggle="modal" data-id="<?= $k['id']; ?>" data-target="#hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-edit-kursus" type="button" data-id="<?= $k['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-detail" type="button" data-id="<?= $k['id']; ?>"><i class="fa fa-file-text" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="card-footer">
                                                <h3 class="badge badge-primary"><?= $k['judul']; ?></h3>
                                                <p class="keterangan d-flex flex-column justify-content-center py-5 py-xl-4">
                                                    <?php
                                                    $num_char = 150;
                                                    $text = $k['deskripsi'];
                                                    echo substr($text, 0, $num_char) . '...';
                                                    ?>
                                                </p>
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
                                <?php foreach ($kurma as $ku) : ?>
                                    <div class="col-xxl-4 col-xl-4">
                                        <div class="card h-100 card-img-top mb-4">
                                            <img class="img" style="height: 200px" src="/assets/img/skynight.jpg" alt="...">
                                            <div class="card-img-overlay">
                                                <button class="close btn-hapus" type="button" data-toggle="modal" data-id="<?= $ku['id']; ?>" data-target="#hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-edit-kursus" type="button" data-id="<?= $ku['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-detail" type="button" data-id="<?= $ku['id']; ?>"><i class="fa fa-file-text" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="card-footer">
                                                <h3 class="badge badge-primary"><?= $ku['judul']; ?></h3>
                                                <p class="keterangan d-flex flex-column justify-content-center py-5 py-xl-4">
                                                    <?php
                                                    $num_char = 150;
                                                    $text = $ku['deskripsi'];
                                                    echo substr($text, 0, $num_char) . '...';
                                                    ?>
                                                </p>
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
                                <?php foreach ($event as $e) : ?>
                                    <div class="col-xxl-4 col-xl-4">
                                        <div class="card h-100 card-img-top mb-4">
                                            <img class="img" style="height: 200px" src="/assets/img/skynight.jpg" alt="...">
                                            <div class="card-img-overlay">
                                                <button class="close btn-hapus" type="button" data-toggle="modal" data-id="<?= $e['id']; ?>" data-target="#hapus"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-edit-kursus" type="button" data-id="<?= $e['id']; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button><br><br>
                                                <button class="close btn-detail" type="button" data-id="<?= $e['id']; ?>"><i class="fa fa-file-text" aria-hidden="true"></i></button>
                                            </div>
                                            <div class="card-footer">
                                                <h3 class="badge badge-primary"><?= $e['judul'] ?></h3>
                                                <p class="keterangan d-flex flex-column justify-content-center py-5 py-xl-4">
                                                    <?php
                                                    $num_char = 150;
                                                    $text = $e['deskripsi'];
                                                    echo substr($text, 0, $num_char) . '...';
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>