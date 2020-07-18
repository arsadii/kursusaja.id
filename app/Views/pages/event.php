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
        <div class="row mb-5">
            <?php foreach ($event as $e) :; ?>
                <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <a class="card lift" href="/pages/detail_event/<?= $e['id']; ?>"><img class="card-img-top" src="/assets/img/layanan/<?= $e['gambar']; ?>" title="<?= $e['judul']; ?>" alt="...">
                        <div class="card-body text-center py-3">
                            <h6 class="card-title mb-0">
                                <?php
                                $num_char = 50;
                                $text = $e['judul'];
                                echo substr($text, 0, $num_char) . '...';
                                ?>
                            </h6>
                            <div class="small mb-2">Rp. <?= $e['harga']; ?></div>
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
    <div class="svg-border-rounded text-white">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
            <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0" /></svg>
    </div>
</section>
<section class="bg-white py-10">
    <div class="container">
        <div class="row justify-content-center" data-aos="zoom-out">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h1>Mau Dapat Info Seputar Kursus Terbaru ?</h1>
                    <p class="lead">Jangan Lupa Follow Social Media Kami Dibawah Ini.</p>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
                <a class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4 lift" href="/" title="Facebook">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                </a>
                <h2>Facebook</h2>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up">
                <a class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4 lift" href="/" title="Instagram">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                </a>
                <h2>Instagram</h2>
            </div>
            <div class="col-lg-4" data-aos="fade-left">
                <a class="icon-stack icon-stack-xl bg-gradient-primary-to-secondary text-white mb-4 lift" href="/" title="WhatsApp">
                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                </a>
                <h2>WhatsApp</h2>
            </div>
        </div>
    </div>
</section>
</main>
</div>