//Absen
const flashDaftar = $('.flash-data-daftarakun').data('flashdata');
console.log(flashDaftar);
// if (flashDaftar) {
// 	Swal.fire({
// 		icon: "info",
// 		title: "Data Akun",
// 		text: flashDaftar,
// 	});
// }

// tombol - hapus - absen
$(".tombol-hapus-portofolio").on("click", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");

    Swal.fire({
        title: "Apakah Anda Yakin?",
        text: "Portofolio Akan Dihapus!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Hapus Data!",
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    });
});