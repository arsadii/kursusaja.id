<div class="page-header header-filter" data-parallax="true" style="background-image: url('/assets/img/1.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 class="title">Cari Kursus ? Ya Kursusaja</h2>
                <form role="search">
                    <div class="form-group form-primary">
                        <input type="text" class="form-control" placeholder="Cari Kursus Kamu Disini">
                    </div>
                    <h4 class="title">Temukan Kursus Yang Terbaik Buat Kamu</h4>
                </form>
                <button type="submit" class="btn btn-primary btn-raised btn-fab btn-fab-mini"><i class="material-icons">search</i></button>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="section">
        <div class="container text-center" style="width: 85%;">
            <div class="col-md text-center">
                <h2 class="title" style="color: rgb(255, 103, 2)!important;">Kursus</h2>
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
                                    <h4 class="judul"><?= $k['judul']; ?></h4>
                                    <h5>Rp. <?= $k['harga']; ?></h5>
                                    <div class="footer">
                                        <a href="/pages/detailkursus/<?= $k['id']; ?>" class="btn btn-danger">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a href="/Pages/Katalog" class="btn btn-danger">Tampil Lebih Banyak</a>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container text-center" style="width: 85%;">
            <div class="col-md text-center">
                <h2 class="title" style="color: rgb(255, 103, 2)!important;">Event</h2>
            </div>
            <div class="cards">
                <div class="row">
                    <?php foreach ($event as $e) :; ?>
                        <div class="col-md-3">
                            <div class="card card-profile">
                                <div class="card-image">
                                    <a href="/">
                                        <img class="img" src="/assets/img/examples/<?= $e['gambar']; ?>" />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <h4 class="judul"><?= $e['judul']; ?></h4>
                                    <h5>Rp. <?= $e['harga']; ?></h5>
                                    <div class="footer">
                                        <a href="/pages/detailevent/<?= $e['id']; ?>" class="btn btn-danger">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a href="/Pages/Event" class="btn btn-danger">Tampil Lebih Banyak</a>
            </div>
        </div>
    </div>
    <div class="section" id="carousel">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card card-raised card-carousel">
                        <div id="carousel-slide" class="carousel slide" data-ride="carousel">
                            <div class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-slide" data-slide-to="0" class=""></li>
                                    <li data-target="#carousel-slide" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-slide" data-slide-to="2" class="active"></li>
                                    <li data-target="#carousel-slide" data-slide-to="3" class=""></li>
                                    <li data-target="#carousel-slide" data-slide-to="4" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img src="assets/img/Burung.png" alt="Awesome Image">
                                    </div>
                                    <div class="item">
                                        <img src="assets/img/ceo.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="item active">
                                        <img src="assets/img/Levi.jpg" alt="Awesome Image">
                                    </div>
                                    <div class="item">
                                        <img src="assets/img/Flew.png" alt="Awesome Image">
                                    </div>
                                    <div class="item">
                                        <img src="assets/img/Nome.png" alt="Awesome Image">
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-slide" data-slide="prev">
                                    <i class="material-icons">keyboard_arrow_left</i>
                                </a>
                                <a class="right carousel-control" href="#carousel-slide" data-slide="next">
                                    <i class="material-icons">keyboard_arrow_right</i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section features-5" style="background-color: rgb(250, 250, 250)!important;" id="how">
    <div class="col-md-8 col-md-offset-2 text-center">
        <h2 class="title">Bagaimana Menggunakan Kursusaja.id ?</h2>
    </div>
    <div class="container" style="width: 80%;">
        <div class="row">
            <div class="col-sm-3">
                <div class="info">
                    <img src="assets/img/search1.png" width="200px" alt="">
                </div>
                <h4 class="info-title text-center">1. Cari Kursus Yang Kamu Inginkan</h4>
            </div>
            <div class="col-sm-3">
                <div class="info">
                    <img src="assets/img/search2.png" width="200px" alt="">
                </div>
                <h4 class="info-title text-center">2. Lihat Detail Kursus Agar Kamu Lebih Yakin</h4>
            </div>
            <div class="col-sm-3">
                <div class="info">
                    <img src="assets/img/sign.png" width="200px" alt="">
                </div>
                <h4 class="info-title text-center">3. Daftarkan Dirimu Dikursusaja.id</h4>
            </div>
            <div class="col-sm-3">
                <div class="info">
                    <img src="assets/img/complete.png" width="200px" alt="">
                </div>
                <h4 class="info-title text-center">4. Pantau Progress Belajarmu Hingga Selesai</h4>
            </div>
        </div>
    </div>
</div>
<div class="section section-image">
    <div class="container" style="width: 80%;">
        <div class="row">
            <div class="col-md-8">
                <h2 class="title" style="color:#fff!important">Tentang Kami</h2>
            </div>
            <div class="col-md-6">
                <img src="assets/img/Logo Panjang.png" width="300px" alt="">
                <h4>Berdiri sejak Januari 2020</h4>
                <p>Kursusaja.id adalah platform penyedia kursus, yang mempertemukan para calon peserta kursus dan jasa penyedia layanan kursus. Fokus kursus adalah kursus keterampilan, yang akan menambah value pesertanya sehingga dapat dengan mudah mendapatkan pekerjaan.</p>
                <h4>Visi :</h4>
                <p>Membantu mengurangi angka pengangguran dan mendorong kualitas perekonomian masyarakat melalui edukasi keterampilan kerja.</p>
            </div>
            <div class="col-md-3">
                <div class="card card-pricing card-margin" style="background-color: transparent!important; color:#000!important;box-shadow:none!important">
                    <div class="card-content">
                        <h3 class="category" style="margin: 0!important"><b>Layanan</b></h3>
                        <ul>
                            <li><a href="/"><b>Kelas Kursus</b></a></li>
                            <li><a href="/"><b>Daftar Jadi Mitra</b></a></li>
                            <li><a href="/"><b>Event</b></a></li>
                            <li><a href="/"><b>KURMA</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-pricing card-margin" style="background-color: transparent!important; color:#000!important;box-shadow:none!important">
                    <div class=" card-content">
                        <h3 class="category" style="margin: 0!important"><b>Kontak</b></h3>
                        <ul>
                            <li><a href="/"><b>Instagram</b></a></li>
                            <li><a href="/"><b>Facebook</b></a></li>
                            <li><a href="/"><b>WhatsApp</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>