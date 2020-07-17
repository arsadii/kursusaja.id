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
        $(".btn-edit-portofolio").click(function() {
            var id = $(this).data("id");
            $.ajax({
                type: "get",
                url: BASEURL + "/user/ambil_portfolio/" + id,
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    var portofolio = response.portofolio;
                    $("#id-portofolio").val(portofolio.id);
                    $("#judul-portofolio").val(portofolio.judul);
                    $("#keterangan-portofolio").val(portofolio.deskripsi);
                    $("#editportofolio").modal("show");
                }
            });
        });

        $("#form-ubah-portofolio").submit(function(e) {
            var id = $(this).data("id");
            e.preventDefault();
            $.ajax({
                type: "post",
                url: BASEURL + "/user/ubah_portofolio",
                method: 'post',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    console.log(response);
                    alert(response);
                    if (response == "Data berhasil diubah!") {
                        $("#ubah").modal("hide");
                        window.location.reload();
                    }
                }
            });
        })

        $("#tambah-portofolio").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: BASEURL + "/user/tambahportofolio",
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