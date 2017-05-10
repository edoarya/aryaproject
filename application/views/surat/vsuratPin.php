<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<div class="wrapper wrapper-content">
	<div class="ibox-content">
		<div class="row">
			<div class="col-lg-12">
				<h1>Data Surat Pinjaman Alat</h1>
				<p>Di bawah ini adalah tampilan template dan form isian SURAT PEMINJAMAN ALAT PRASARANA. Anda bisa mengisi data-data yang terkait dengan
				kebutuhan sesuai dengan template ini. Pilih button <b>View Template</b> untuk melihat Format surat.</p>
				<br/>
				<button data-toggle="modal" data-target="#viewSurat" class="btn btn-outline btn-primary"><i class="fa fa-windows" ></i> View Template</button>
				<a class="btn btn-outline btn-info" href="<?php echo base_url()."index.php/csurat/tampil_SPin"; ?>"><i class="fa fa-table"></i> View Tabel Data</a>
				<br/>
				<br/>
				<h2>FORM ISIAN SURAT PEMINJAMAN </h3><small> Lengkapi kolom berikut ini dengan data yang benar dan akurat.</small><hr>
				<form method="post" action="<?php echo base_url()."index.php/cSurat/simpan_sPin"; ?>">
					<!-- <div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-link"></i></span>
							<input type="text" name="no_surat" class="form-control" placeholder="nomor surat">
						</div>
					</div> -->
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-users"></i></span>
							<input type="text" name="penerima" placeholder="kepada" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-file"></i></span>
							<input type="text" name="perihal" placeholder="perihal" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
                     		<span class="input-group-addon"><i class="fa fa-male"></i></span>
                          <?php
                            echo "
                              <select class='form-control m-b' name='kode_dep' id='select-dep' required>
                              <option value='' disabled selected>Pilih Pengirim</option>";
                                foreach ($data_join->result() as $row) {  
                                echo "<option value='".$row->kode_dep."'>".$row->nama_lengkap."</option>";
                          }
                            echo"</select>";
                          ?>
                            </div>
                    </div><br/>
					<div class="form-group">
						<textarea name="isi" id="editor1" rows="5" cols="40">
							Ini adalah area konten surat
						</textarea>
						<script>
							CKEDITOR.replace('isi');
						</script>
					</div><hr>
					<button class="btn btn-outline btn-primary" type="submit">Simpan Surat</button>
					<button class="btn btn-outline btn-danger">Batalkan</button>
				</form>

			</div>
		</div>
	</div>
</div>


<!--SURAT MODAL-->
<div class="modal fade" id="viewSurat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
				<h2 style="color: #fff" class="modal-title" id="myModalLabel"><i class="fa fa-image"></i> VIEW TEMPLATES</h2>
			</div>
			<div class="modal-body">
			
				<h2 style="color: #fff"></h2>
				<img style="height: 700px; width: 500px;" src="<?php echo base_url(); ?>uploads/dokumen/surat1.jpg">
				<br/><hr/>
			</div>		
	</div>
</div>