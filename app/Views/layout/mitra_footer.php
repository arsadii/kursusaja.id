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
            <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button><a href="/pages/logout" class="btn btn-danger" type="button">Keluar</a></div>
        </div>
    </div>
</div>
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Yakin Ingin Menghapus Layanan ?</h5>
            </div>
            <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button><a href="/" class="btn btn-danger" type="button">Hapus</a></div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambahkursus" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kursus</h5>
            </div>
            <div class="modal-body">
                <form role="form" id="tambah-kursus" class="card card-body">
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="judulkursus">
                                Judul
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="judulkursus" name="judulkursus" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="deskripsikursus">
                                Keterangan
                            </label>
                        </div>
                        <div class="col-md">
                            <textarea class="form-control form-control-solid" id="deskripsikursus" name="deskripsikursus" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="hargakursus">
                                Harga
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="hargakursus" name="hargakursus" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="daerahkursus">
                                Daerah
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="daerahkursus" name="daerahkursus" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="tanggalmulaikursus">
                                Tanggal Mulai
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="tanggalmulaikursus" name="tanggalmulaikursus" type="date" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="lamakursus">
                                Lama Kursus
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="lamakursus" name="lamakursus" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="gambarkursus">
                                Upload Gambar
                            </label>
                        </div>
                        <div class="col-md">
                            <input type="hidden"><input type="file" name="gambarkursus">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button>
                        <button class="btn btn-danger" type="submit">Tambah</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editlayanan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Layanan</h5>
            </div>
            <div class="modal-body">
                <form role="form" id="form-ubah-layanan" class="card card-body">
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="inp-judul-kursus">
                                Judul
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="inp-id-kursus" name="inp-id-kursus" type="text" placeholder="" hidden>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="inp-judul-kursus" name="inp-judul-kursus" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="inp-keterangan-kursus">
                                Keterangan
                            </label>
                        </div>
                        <div class="col-md">
                            <textarea class="form-control form-control-solid" id="inp-keterangan-kursus" name="inp-keterangan-kursus" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="inp-harga-kursus">
                                Harga
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="inp-harga-kursus" name="inp-harga-kursus" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="inp-daerah-kursus">
                                Daerah
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="inp-daerah-kursus" name="inp-daerah-kursus" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="inp-tanggal-kursus">
                                Tanggal Mulai
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="inp-tanggal-kursus" name="inp-tanggal-kursus" type="date" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="inp-gambar-kursus">
                                Upload Gambar
                            </label>
                        </div>
                        <div class="col-md">
                            <input type="hidden"><input type="file" id="inp-gambar-kursus" name="inp-gambar-kursus">
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
<div class="modal fade" id="tambahpromosi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jtambah">Tambah Promosi</h5>
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
<div class="modal fade" id="editpromosi" tabindex="-1" role="dialog" aria-hidden="true">
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
            <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger" type="button">Simpan</button></div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/assets/js/back.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
<script src="/assets/js/chart-area-demo.js"></script>
<script src="/assets/js/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="/assets/js/datatables-demo.js"></script>
<script>
    function previewImg() {
        const gambar = document.querySelector('#gambar');
        const gambarLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        gambarLabel.textContent = gambar.files[0].name;

        const fileGambar = new FileReader();
        fileGambar.readAsDataURL(gambar.files[0]);

        fileGambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<script>
    var BASEURL = "<?= base_url() ?>";

    $(document).ready(function() {
        $(".btn-edit-kursus").click(function() {
            var id = $(this).data("id");
            $.ajax({
                type: "get",
                url: BASEURL + "/mitra/ambil_data_kursus/" + id,
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    var kursus = response.kursus;
                    $("#inp-id-kursus").val(kursus.id);
                    $("#inp-judul-kursus").val(kursus.judul);
                    $("#inp-keterangan-kursus").val(kursus.deskripsi);
                    $("#inp-harga-kursus").val(kursus.harga);
                    $("#inp-gambar-kursus").val(kursus.gambar);
                    $("#inp-daerah-kursus").val(kursus.daerah);
                    $("#inp-tanggal-kursus").val(kursus.tgl_mulai);

                    $("#editlayanan").modal("show");
                }
            });
        });

        $("#form-ubah-layanan").submit(function(e) {
            var id = $(this).data("id");
            e.preventDefault();
            $.ajax({
                type: "post",
                url: BASEURL + "/mitra/update_data_kursus",
                method: 'post',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    alert(response);
                    if (response == "Data berhasil diubah!") {
                        $("#ubah").modal("hide");
                        window.location.reload();
                    }
                }
            });

        })

        $("#ubah-profil-mitra").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: BASEURL + "/mitra/ubahprofil",
                method: 'post',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    alert(response);
                    if (response == "Data berhasil diubah!") {
                        $("#ubah").modal("hide");
                        window.location.reload();
                    }
                }
            });
        })

        $("#tambah-kursus").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: BASEURL + "/mitra/tambahkursus",
                method: 'post',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    alert(response);
                    if (response == "Data berhasil diubah!") {
                        $("#ubah").modal("hide");
                        window.location.reload();
                    }
                }
            });
        })
    });
</script>
</body>