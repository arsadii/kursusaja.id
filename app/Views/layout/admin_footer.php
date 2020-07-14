<footer class="footer mt-auto footer-light text-center">
    <div class="container-fluid">
        <div class="copyright">
            &copy; <script>
                document.write(new Date().getFullYear())
            </script> Kursusaja.id - All Right Reserved
        </div>
    </div>
</footer>
</div>
<div class="modal fade" id="keluar" tabindex="-1" role="dialog" aria-labelledby="jkeluar" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jkeluar">Yakin Ingin Keluar ?</h5>
            </div>
            <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button><a href="<?= base_url('/pages/logout'); ?>" class="btn btn-danger" type="button">Keluar</a></div>
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

<!-- Templates Upload Foto -->
<script>
    function previewImg() {
        const gambar = document.querySelector('#gambar');
        const gambarLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        gambarLabel.textContent = gambar.files[0].name;
        fileGambar.readAsDataURL(sampul.files[0])

        fileGambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/assets/js/back.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
<script src="/assets/js/chart-area-demo.js"></script>
<script src="/assets/js/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="/assets/js/datatables-demo.js"></script>
</body>