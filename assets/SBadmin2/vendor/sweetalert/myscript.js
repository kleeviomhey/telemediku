const flashData = $('.flash-data').data('flashdata');
console.log(flashData);
if (flashData) {
	Swal.fire({
		icon: 'success',
		title: 'Data',
		text: 'Berhasil ' + flashData,
	});
}

// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah Anda Yakin?',
		text: "Data Ini Akan Dihapus!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Hapus Data!'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});
