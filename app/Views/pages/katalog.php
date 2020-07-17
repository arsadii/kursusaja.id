<div class="container text-center" style="width: 85%;">
    <div class="col-md-12" style="margin-top: 90px!important;">
        <h2 class="title" style="color: rgb(255, 103, 2)!important;">Katalog Kursus</h2>
    </div>
    <div class="cards">
        <div class="row">
            <?php foreach ($kursus as $k) :; ?>
                <div class="col-md-3">
                    <div class="card card-profile">
                        <div class="card-image">
                            <a href="/">
                                <img class="img" src="/assets/img/examples/<?= $k['gambar']; ?>" />
                            </a>
                        </div>
                        <div class="card-content">
                            <h4 class="judul">
                                <?php
                                $num_char = 50;
                                $text = $k['judul'];
                                echo substr($text, 0, $num_char) . '...';
                                ?>
                            </h4>
                            <h5>Rp. <?= $k['harga']; ?></h5>
                            <div class="footer">
                                <a href="/pages/detailkursus/<?= $k['id']; ?>" class="btn btn-danger">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="section features-5" style="background-color:#2f3337!important;">
    <div class="col-md text-center">
        <h2 class="title" style="color: #fff;">Mau Dapat Info Seputar Kursus Terbaru ?</h2>
    </div>
    <div class="container">
        <div class="row text-center">
            <h4 class="info-title text-center" style="color: #fff;">Ikuti Kami Di Sosial Media</h4>
            <button class="btn btn-just-icon btn-round btn-facebook">
                <i class="fa fa-facebook"></i>
            </button>
            <button class="btn btn-just-icon btn-round btn-instagram">
                <i class="fa fa-instagram"></i>
            </button>
        </div>
    </div>
</div>