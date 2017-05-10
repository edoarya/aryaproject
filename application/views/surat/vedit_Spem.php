<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<div class="wrapper wrapper-content">
	<div class="ibox-content">
		<div class="row">
			<div class="col-lg-12">
				<h1>DATA SURAT PEMBERITAHUAN</h1>
				<p>Di bawah ini adalah tampilan template dan form isian SURAT PEMBERITAHUAN. Anda bisa mengisi data-data yang terkait dengan
				kebutuhan sesuai dengan template ini. Pilih button <b>View Template</b> untuk melihat Format surat.</p>
				<br/>
				<button data-toggle="modal" data-target="#viewSurat" class="btn btn-outline btn-primary"><i class="fa fa-windows" ></i> View Template</button>
				<a class="btn btn-outline btn-info" href="<?php echo base_url()."index.php/csurat/tampilTabel"; ?>"><i class="fa fa-table"></i> View Tabel Data</a>
				<br/>
				<br/>
				<h2>FORM ISIAN SURAT PEMBERITAHUAN </h3><small> Lengkapi kolom berikut ini dengan data yang benar dan akurat.</small><hr>
				<form method="post" action="<?php echo base_url()."index.php/csurat/update_sPem"; ?>">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">No. Surat</span>
							<input type="text" name="nomor" class="form-control" placeholder="nomor surat" value="<?php echo $pem->nomor?>" readonly >
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-users"></i></span>
							<input type="text" name="kepada" value="<?php echo $pem->kepada; ?>" class="form-control" required>
							<span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
							<input type="text" name="posisi" class="form-control" value="<?php echo $pem->posisi; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-info"></i></span>
							<input type="text" name="perihal" value="<?php echo $pem->perihal; ?>" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" name="penulis" value="<?php echo $pem->penulis; ?>" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<textarea name="isi" id="editor1" rows="5" cols="40">
							<?php echo $pem->isi; ?>
						</textarea>
						<script>
							CKEDITOR.replace('isi');
						</script>
					</div><hr>
					<button class="btn btn-outline btn-primary" type="submit">Simpan Surat</button>
					<a href="<?php echo base_url()."index.php/csurat/spem"; ?>" class="btn btn-outline btn-danger">Batalkan</a>
				</form>
			</div>
		</div>
	</div>
</div>