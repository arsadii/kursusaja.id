<header class="page-header page-header-dark bg-img-cover overlay overlay-80 d-flex flex-column justify-content-center" style="background-image: url('../assets/img/1.jpg')">
    <div class="page-header-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 text-center" data-aos="fade-up">
                    <h1 class="page-header-title">Cari Kursus ? Ya Kursusaja.id</h1>
                    <p class="page-header-text">Temukan kursus yang terbaik buat kamu.</p>
                    <form class="page-header-signup">
                        <div class="form-row justify-content-center">
                            <div class="col-lg-6 col-md-8">
                                <div class="form-group mr-0 mr-lg-2"><label class="sr-only" for="inputSearch">Cari Kursus...</label><input class="form-control form-control-solid rounded-pill" id="inputSearch" type="text" placeholder="Cari Kursus..."></div>
                            </div>
                            <div class="col-lg-3 col-md-4"><button class="btn btn-orange btn-block btn-marketing rounded-pill" type="submit"><i class="fa fa-search" aria-hidden="true"></i> Cari</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="bg-white py-10">
    <div class="container">
        <div class="row justify-content-center" data-aos="zoom-out">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h1>Kursus</h1>
                    <p class="lead">Temukan kursus yang cocok buat kamu dibawah ini.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($kursus as $k) :; ?>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <a class="card mb-5 lift" href="/pages/detailkursus/<?= $k['id']; ?>"><img class="card-img-top" src="/assets/img/layanan/<?= $k['gambar']; ?>" title="<?= $k['judul']; ?>" alt="...">
                        <div class="card-body text-center py-3">
                            <h6 class="card-title mb-0">
                                <?= $k['judul']; ?>
                            </h6>
                            <div class="small mb-2">Rp. <?= $k['harga']; ?></div>
                            <div class="small">
                                Nama Lembaga
                            </div>
                        </div>
                        <div class="card-footer text-center text-xs">
                            Bergabung <i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="text-center" data-aos="fade-up" data-aos-delay="200"><a class="btn btn-orange rounded-pill lift" href="/pages/katalog">Lihat Lainnya</a></div>
    <div class="svg-border-rounded text-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
            <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
    </div>
</section>
<section class="bg-light py-10">
    <div class="container">
        <div class="row justify-content-center" data-aos="zoom-out">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h1>Event</h1>
                    <p class="lead">Ada event menarik nih dibawah ini.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($event as $e) :; ?>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <a class="card mb-5 lift" href="/pages/detailevent/<?= $e['id']; ?>"><img class="card-img-top" src="/assets/img/layanan/<?= $e['gambar']; ?>" title="<?= $e['judul']; ?>" alt="...">
                        <div class="card-body text-center py-3">
                            <h6 class="card-title mb-0">
                                <?= $e['judul']; ?>
                            </h6>
                            <div class="small mb-2">Rp. <?= $e['harga']; ?></div>
                            <div class="small">
                                Lama Lembaga
                            </div>
                        </div>
                        <div class="card-footer text-center text-xs">
                            Bergabung <i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="text-center" data-aos="fade-up" data-aos-delay="200"><a class="btn btn-orange rounded-pill lift" href="/pages/event">Lihat Lainnya</a></div>
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
            <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
    </div>
</section>
<section class="bg-white py-10">
    <div class="container mb-4">
        <div class="row justify-content-center" data-aos="zoom-out">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2>Portfolio</h2>
                    <p class="lead">Berikut adalah hasil desain dari beberapa pengguna dari Kursusaja.id</p>
                </div>
            </div>
        </div>
        <div class="card-columns card-columns-portfolio">
            <a class="card card-portfolio" data-aos="fade-right" data-aos-delay="200" href="/"><img class="card-img-top" src="/assets/img/portfolio/1.jpg" title="Study" alt="">
            </a><a class="card card-portfolio" data-aos="fade-up" data-aos-delay="200" href="/"><img class="card-img-top" src="/assets/img/portfolio/2.jpg" title="Skynight" alt="">
            </a><a class="card card-portfolio" data-aos="fade-left" data-aos-delay="200" href="/"><img class="card-img-top" src="/assets/img/portfolio/3.png" title="Flew" alt="">
            </a>
        </div>
    </div>
    <div class="text-center" data-aos="fade-up" data-aos-delay="200"><a class="btn btn-orange rounded-pill lift" href="/pages/portfolio">Lihat Lainnya</a></div>
    <div class="svg-border-rounded text-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
            <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
    </div>
</section>
<section class="bg-light py-10">
    <div class="container col-md-10">
        <div class="row justify-content-center" data-aos="zoom-out">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2>Bagaimana Cara Menggunakan Kursusaja.id ?</h2>
                    <p class="lead">Ikuti Langkah-Langkah Dibawah Ini</p>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-3 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="700">
                <div class="features mb-4">
                    <div class="card-body">
                        <img class="img-fluid" src="../assets/img/search1.png" alt="">
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <h3>Step 1</h3>
                    <p class="mb-0">Cari Kursus Yang Kamu Inginkan</p>
                </div>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="1400">
                <div class="features mb-4">
                    <div class="card-body">
                        <img class="img-fluid" src="../assets/img/search2.png" alt="">
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <h3>Step 2</h3>
                    <p class="mb-0">Lihat Detail Kursus Agar Kamu Lebih Yakin</p>
                </div>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0" data-aos="fade-down" data-aos-delay="2100">
                <div class="features mb-4">
                    <div class="card-body">
                        <img class="img-fluid" src="../assets/img/sign.png" alt="">
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <h3>Step 3</h3>
                    <p class="mb-0">Daftarkan Dirimu Di Kursusaja.id</p>
                </div>
            </div>
            <div class="col-lg-3 mb-5 mb-lg-0" data-aos="fade-left" data-aos-delay="2800">
                <div class="features mb-4">
                    <div class="card-body">
                        <img class="img-fluid" src="../assets/img/complete.png" alt="">
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <h3>Step 4</h3>
                    <p class="mb-0">Pantau Progress Belajarmu Hingga Selesai</p>
                </div>
            </div>
        </div>
    </div>
    <div class="svg-border-waves text-dark">
        <svg class="wave" style="pointer-events: none" fill="currentColor" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
            <defs>
                <style>
                    .a {
                        fill: none;
                    }

                    .b {
                        clip-path: url(#a);
                    }

                    .d {
                        opacity: 0.5;
                        isolation: isolate;
                    }
                </style>
                <clipPath id="a">
                    <rect class="a" width="1920" height="75" />
                </clipPath>
            </defs>
            <title>wave</title>
            <g class="b">
                <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48" />
            </g>
            <g class="b">
                <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10" />
            </g>
            <g class="b">
                <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24" />
            </g>
            <g class="b">
                <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150" />
            </g>
        </svg>
    </div>
</section>
</main>
</div>