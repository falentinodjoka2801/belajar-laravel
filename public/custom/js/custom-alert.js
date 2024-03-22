async function konfirmasi(title, html){
    return Swal.fire({
        title   :   title,
        html    :   html,
        type    :   'question',
        showCancelButton    :   true,
        cancelButtonText    :   'Tidak',
        showConfirmButton   :   true,
        confirmButtonText   :   'Ya, lanjutkan',
        confirmButtonColor: '#28a745',
        focusCancel :   true
    }).then((konfirmasi) => {
        return konfirmasi.value;
    });
}

async function notifikasi(title, html, type){
    return Swal.fire({
        title   :   title,
        html    :   html,
        type    :   type
    });
}