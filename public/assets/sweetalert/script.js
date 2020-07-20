const profil = $('.profil').data('profil');
if (profil) {
    Swal.fire({
        title: "Data Profil",
        text: profil,
        icon: "info"
    });
}

const portofolio = $('.portofolio').data('portofolio');
if (portofolio) {
    Swal.fire({
        title: "Data Portofolio",
        text: portofolio,
        icon: "info"
    });
}

// tombol - hapus - portofolio
$(".btn-hapus-portofolio").on("click", function (e) {
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