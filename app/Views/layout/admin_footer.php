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
                <h5 class="modal-title">Edit Data</h5>
            </div>
            <div class="modal-body">
                <form class="card card-body" role="form" id="form-edit-akun">
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="inp-username">
                                Username
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="inp-username" name="inp-username" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="inp-namalengkap">
                                Nama Lengkap
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="inp-namalengkap" name="inp-namalengkap" rows="3"></input>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="inp-ttl">
                                Tempat, Tanggal Lahir
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="inp-ttl" name="inp-ttl" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="inp-alamat">
                                Alamat
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="inp-alamat" name="inp-alamat" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="inp-nohp">
                                No. Hp
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="inp-nohp" name="inp-nohp" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md text-center">
                            <label for="inp-email">
                                Email
                            </label>
                        </div>
                        <div class="col-md">
                            <input class="form-control form-control-solid" id="inp-email" name="inp-email" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-primary" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger" type="button">Simpan</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="inp-nama-peserta" class="modal-title">Detail Peserta</h5>
            </div>
            <div class="modal-body">
                <div class="card-body text-center">
                    <img class="img-fluid mb-4" id="gambar" style="width: 200px;height: 200px;border-radius:100%" src="/assets/img/profil/pengguna/<?= $user['gambar'] ?>">
                    <h3 id="nama" class="text-black"><span>Nama Peserta</span></h3>
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
        $(".btn-detail").click(function() {
            var id = $(this).data("id");
            var img = $("gambar").text();
            $.ajax({
                type: "get",
                url: BASEURL + "/admin/ambil_data_akun/" + id,
                dataType: "json",
                data: {
                    id: pengguna
                },
                success: function(response) {
                    console.log(response);
                    var pengguna = response.pengguna;
                    var img = new Image();
                    img.onload = function() {
                        $("#gambar").attr('src', pengguna.gambar);
                    }
                    $("#nama").attr('span' + pengguna.nama_lngkp);
                    $("#detail").modal("show");
                }
            });
        });

        // Menghandle ketika tombol edit diklik
        $(".btn-edit").click(function() {
            var id = $(this).data("id"); // Mengambil data id dari elemen menggunakan property id
            // Minta data ke server dengan id yg bersangkutan
            $.ajax({
                type: "get",
                url: BASEURL + "/admin/ambil_data_akun/" + id,
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    // Datanya di server nanti direturn, sehingga bisa diterima via reponse ini
                    var pengguna = response.pengguna;
                    // Populate data kursus ke form
                    $("#inp-username").val(pengguna.username);
                    $("#inp-namalengkap").val(pengguna.nama_lngkp);
                    $("#inp-ttl").val(pengguna.ttl);
                    $("#inp-alamat").val(pengguna.alamat);
                    $("#inp-nohp").val(pengguna.hp);
                    $("#inp-email").val(pengguna.email);
                    // !!! Lanjutkan sesuai dengan field-field yang lainnya
                    // Buka modal
                    $("#editdata").modal("show");
                }
            });
        });

        // Menghandle ketika form ubah layanan disubmit
        $("#form-edit-akun").submit(function(e) {
            var id = $(this).data("id");
            e.preventDefault();
            $.ajax({
                type: "post",
                url: BASEURL + "/admin/update_data_akun",
                method: 'post',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response); // Cek responsenya di browser console

                    // Tampilkan pesan ke user ketika ubah data berhasil
                    // Pesannya bisa dikembalikan via response, sama seperti pas get data
                    // namun kali ini cuma string biasa yg berisi pesan sukses
                    alert(response);

                    // Tutup kembali modalnya ketika selesai
                    $("#editdata").modal("hide");
                }
            });
        })
    });
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