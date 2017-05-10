
<input type="button" class="btn btn-primary" value="Alert basic" onclick="swal('Heres a message!');">
<input type="button" class="btn btn-info" value="Alert sukses" onclick="swal('Good job!', 'You clicked the button!', 'success');">
<input type="button" class="btn btn-danger" value="Alert error" onclick="swal('OOPS!', 'You clicked the button!', 'error');">
<input type="button" class="btn btn-danger btn-lg" value="Alert error" onclick="
swal({
		  title: 'Anda yakin untuk menyimpan?',
		  text: 'Periksa data inputan Anda lagi',
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#01b3fd',
		  cancelButtonColor: '#ef8a1d',
		  confirmButtonText: 'Ya, Simpan Data!',
		  cancelButtonText: 'Tidak, Batalkan proses!',
		  closeOnConfirm: false,
		  closeOnCancel: false
		},
		function(isConfirm){
		  if (isConfirm){
		  	window.location = 'dokumen/simpan';
		  }else{
		  	swal(
		  		'Cancel',
		  		'data anda berhasil',
		  		'error'
		  		);
		  	}
		  	});">
