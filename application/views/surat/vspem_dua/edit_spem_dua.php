<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>

<div class="wrapper wrapper-content animated fadeInRight">
	<div class="ibox-content">
		<div class="row">
			<div class="col-lg-12">
				<div class="btn-group">
					<a class="btn btn-outline btn-white" href="<?php echo base_url()."index.php/csurat/Hometemplate"; ?>"><i class="fa fa-home"></i> HOME</a>
	                <a class="btn btn-outline btn-info" href="<?php echo base_url()."index.php/csurat/tampiltabel_dua"; ?>"><i class="fa fa-table"></i> View Tabel Data</a>
                </div>
				<br/> 
				<br/>
				<h2>FORM EDIT SURAT PEMBERITAHUAN 2</h3><small> Ubah kolom berikut ini dengan data yang benar dan akurat.</small><hr>
				<form method="post" action="<?php echo base_url()."index.php/csurat/update_sPem2/"; ?>">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">No.</span>
							<input type="text" name="no" class="form-control" value="<?php echo $pem->no; ?>" readonly >
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							<input type="text" name="tgl_input" class="form-control" value="<?php echo date('Y/m/d'); ?>" >
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-users"></i></span>
							<input type="text" name="kepada" placeholder="kepada" class="form-control" value="<?php echo $pem->kepada; ?>">
							<span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
							<input type="text" name="posisi" class="form-control" placeholder="posisi" value="<?php echo $pem->posisi; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-info"></i></span>
							<input type="text" name="perihal" placeholder="perihal" class="form-control" value="<?php echo $pem->perihal; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" name="penulis" placeholder="penulis" class="form-control" value="<?php echo $pem->penulis; ?>">
						</div>
					</div>
					<div class="form-group">
						<textarea name="isi" id="editor1" rows="5" cols="40">
						<?php echo $pem->isi; ?>
						</textarea>
						<script>
							CKEDITOR.replace('isi');
						</script>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-tag"></i></span>
							<input type="text" name="mengetahui" placeholder="mengetahui" class="form-control" value="<?php echo $pem->mengetahui; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-male"></i></span>
							<input type="text" name="pj" placeholder="ketua pelaksana / penanggung jawab" class="form-control" value="<?php echo $pem->pj; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
							<input type="text" name="catatan" placeholder="Masukan Catatan jika ada" class="form-control" value="<?php echo $pem->catatan; ?>">
						</div>
					</div>
					<hr>
					<button class="btn btn-outline btn-primary" type="submit">Simpan Perubahan</button>
					<a href="<?php echo base_url()."index.php/csurat/tampiltabel_dua"; ?>" class="btn btn-outline btn-danger">Batalkan</a>
				</form>
			</div>
		</div>
	</div>
</div>