<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-7">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h4>Form Tambah Data<small> - Dibawah ini adalah form tambah data dan upload dokumen</small></h4>
					<div class="ibox-tools">
							<a class="collapse-link">
							<i class="fa fa-chevron-up"></i>
							</a>
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-wrench"></i>
							</a>
							<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a></li>
							<li><a href="#">Config option 2</a></li>
							</ul>
							<a class="close-link">
							<i class="fa fa-times"></i>
							</a>
					</div>
				</div>
				<div class="ibox-content">

			<form method="POST" id="myform" action="<?php echo base_url()."index.php/dokumen/simpan"; ?>" enctype="multipart/form-data">
				<div class="form-group">
					
					<input type="text" name="kode_dok" class="form-control" disabled="" value="" >
					<small class="form-text text-muted">nilai pada kolom ini bersifat <i>auto-increment</i></small>
				</div>
				<div class="form-group">
					<label>Tanggal Input</label>
						<div class='input-group date'>
							<input type='date' class="form-control" required="" name="tanggal_tambah" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
					<div class="form-group">
						<label for="exampleTextarea">Keterangan / Catatan</label>
						<textarea class="form-control" id="exampleTextarea" rows="3" name="keterangan"></textarea>
					</div>
					<div class="form-group">
					<label for="exampleInputFile">File input Dokumen</label>
					<input type="file" id="myform" name="nama_dok" class="form-control-file" value="upload">
					<small id="fileHelp" class="form-text text-muted">Upload file dokumen anda disini.</small>
					</div>
					<hr>
					<div id="myform_errorloc" class="error_strings">
            		</div>
            		<input type="submit" id="tes" class="btn btn-primary dim" value="Simpan" onclick="
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
					  	window.location = 'simpan';
					  }else{
					  	swal(
					  		'Cancel',
					  		'data anda berhasil',
					  		'error'
					  		);
					  	}
					  	});">

					<button type="submit" class="btn btn-default dim">Simpan2</button>
					<button type="cancel" class="btn btn-default dim"><a href="<?php echo base_url()."index.php/dokumen"; ?>"> Batal</a></button>
					</div>
				</form>
			</div>
		</div>
	</div>
   </div>
</div>
