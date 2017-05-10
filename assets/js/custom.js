$(document).on("click", '.tombol', function(e){
	var id = $(this).data('id');
	var nama = $(this).data('nama');
	var tanggal = $(this).data('tanggal');
	var keterangan = $(this).data('keterangan');

	$(".id").val(id);
	$(".nama_dok").val(nama);
	$(".tanggal_tambah").val(tanggal);
	$('.keterangan').html("<textarea class=\"form-control\" name=\"keterangan\" required>" +keterangan+"</textarea>");

	$(".text-delete").text("Apakah anda yakin akan menghapus data dengan nama " + nama + "?");
});