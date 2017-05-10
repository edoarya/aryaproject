<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<div class="wrapper wrapper-content">
	<div class="ibox-content">
		<div class="row">
			<div class="col-lg-12">
				<div class="btn-group">
					<a class="btn btn-outline btn-white" href="<?php echo base_url()."index.php/csurat/Hometemplate"; ?>"><i class="fa fa-home"></i> HOME</a>
	                <a class="btn btn-outline btn-info" href="<?php echo base_url()."index.php/csurat/tampilTabel"; ?>"><i class="fa fa-table"></i> View Tabel Data</a>
                </div>
				<br/>
				<br/>
				<h2>FORM ISIAN SURAT PEMBERITAHUAN </h3><small> Lengkapi kolom berikut ini dengan data yang benar dan akurat.</small><hr>
				<form method="post" action="<?php echo base_url()."index.php/csurat/simpan_spem"; ?>">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">No. Surat</span>
							<input type="text" name="nomor" class="form-control" placeholder="nomor surat" value="<?php echo $kode?>" readonly >
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-users"></i></span>
							<input type="text" name="kepada" placeholder="kepada" class="form-control" required>
							<span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
							<input type="text" name="posisi" class="form-control" placeholder="posisi">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-info"></i></span>
							<input type="text" name="perihal" placeholder="perihal" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" name="penulis" placeholder="penulis" class="form-control" required>
						</div>
					</div>
					<div class="form-group">
						<textarea name="isi" id="editor1" rows="5" cols="40">
							Ini adalah area konten surat
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
<!--SURAT MODAL-->
<div class="modal fade" id="viewSurat1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
				<h2 style="color: #fff" class="modal-title" id="myModalLabel"><i class="fa fa-image"></i> VIEW TEMPLATES</h2>
			</div>

			<div class="modal-body">
				<a class="btn btn-outline btn-info" >Pakai Template</a>
				<button class="btn btn-danger" data-dismiss="modal">Batal</button>
				<h2 style="color: #fff"></h2>
				<img style="height: 700px; width: 500px;" src="<?php echo base_url(); ?>uploads/dokumen/surat3.jpg"><br><br>
			</div>
			<div class="model-footer">
				
			</div>	
	</div>
</div>

<div class="modal fade" id="viewSurat2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
				<h2 style="color: #fff" class="modal-title" id="myModalLabel"><i class="fa fa-image"></i> VIEW TEMPLATES</h2>
			</div>
			<div class="modal-body">
				<a class="btn btn-outline btn-info" >Pakai Template</a>
				<button class="btn btn-danger" data-dismiss="modal">Batal</button>
				<h2 style="color: #fff"></h2>
				<img style="height: 700px; width: 500px;" src="<?php echo base_url(); ?>uploads/dokumen/surat1.jpg">
				<br/><hr/>
			</div>		
	</div>
</div>