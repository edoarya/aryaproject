 <script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<style type="text/css">
.thumbnail {
    position:relative;
    overflow:hidden;
}
 
.caption {
    position:absolute;
    top:-100%;
    right:0;
    background:rgba(32, 170, 168, 0.75);
    width:100%;
    height:100%;
    padding:2%;
    text-align:center;
    color:#fff !important;
    z-index:2;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.thumbnail:hover .caption {
    top:0%;
}
.labelku {
	color: #33ccb1;
}
hr {
	border-color: #33ccb1;
}

</style>

<div class="well">
	<div class="jumbotron">
		<h1>AREA TEMPLATES LETTER'S</h1>
		<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
		Learn more</p>
		<p><a class="btn btn-outline btn-info" role="button" data-toggle="modal" data-target="#viewTemp">View All Templates</a></p>
		<div class="container">
			<div class="row">
			<?php foreach($data as $row){ ?>    
				<div class="col-md-3 col-sm-4 col-xs-6">       
		            <div class="thumbnail">
		                <div class="caption">
		                    <h2><?php  echo $row->jenis_surat; ?></h2>
		                    <small>Klik <b>create new</b> jika ingin membuat surat baru dengan menggunakan template ini</small>
		                    <br><br/>
		                    <a href="<?php echo base_url()."index.php/letters/csurat/tampilSurat1/".$row->kode_surat; ?>" class="btn btn-outline btn-warning btn-rounded">Create New</a></p>
		                </div>
		                <img style="height: 370px;" src="<?php echo base_url()."uploads/dokumen/".$row->contoh_gambar; ?>">
		            </div>
		        </div>
		        <?php };?>
		   </div>
		</div>
	</div>
</div>

<!--MODAL-->
		<div class="modal fade" id="mySurat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
						<h4 style="color: #fff" class="modal-title" id="myModalLabel">Template Surat 1</h4>
					</div>
					<div class="modal-body">
						<div class="labelku">
							<form class="form-inline" method="post" action="<?php echo base_url()."index.php/letters/csurat/simpanData"; ?>">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-male"></i></span>
										<input type="text" class="form-control" placeholder="Nama Lengkap">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-file-text"></i></span>
										<input type="text" class="form-control" name="no_daftar" placeholder="No Pendaftaran">
									</div>
								</div><hr>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-home"></i></span>
										<input type="text" class="form-control" placeholder="Tempat" name="tempat">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
										<input type="text" class="form-control" placeholder="tanggal lahir" name="tgl_lahir">
									</div>
								</div><hr>
								<div class="form-group">
									<select class="form-control">
										<option value="" disabled selected>Pilih Agama</option>
										<option>Islam</option>
										<option>Kristen</option>
										<option>Budha</option>
										<option>Katolik</option>
										<option>Hindu</option>
									</select>
								</div>
								<div class="form-group">
									<select class="form-control">
										<option value="" disabled selected>Pilih Pekerjaan</option>
										<option>Karyawan</option>
										<option>Buruh</option>
										<option>Wiraswasta</option>
										<option>Katolik</option>
										<option>Pegawai</option>
										<option>Others</option>
									</select>
								</div><hr>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-phone"></i></span>
										<input type="numeric" name="telp" placeholder="telp/HP" class="form-control">
									</div>
								</div><br/><br/>
								<div class="form-group">
									<textarea name="alamat" cols="45" rows="3" placeholder="Alamat" class="form-control"></textarea>
								</div><hr>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-smile-o"></i></span>
										<input type="text" name="ortu" placeholder="nama orangtua" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" name="wali" placeholder="nama wali (jika ada)" class="form-control">
									</div>
								</div><hr>
								<div class="form-group">
									<textarea name="editor1" id="editor1" rows="5" cols="40">
										Ini adalah area konten surat
									</textarea>
									<script>
										CKEDITOR.replace('editor1');
									</script>
								</div><hr>
								<button type="submit" class="btn btn-primary">Simpan Data</button>
								<button class="btn btn-outline btn-danger">Batalkan</button>
							</form>
						</div>				
					</div>
				</div>
			</div>

<!--MODAL VIEW TEMPLATE ALL-->
<div class="modal fade" id="viewTemp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
				<h2 style="color: #fff" class="modal-title" id="myModalLabel"><i class="fa fa-image"></i> VIEW TEMPLATES</h2>
			</div>
			<div class="modal-body">
			<?php foreach($data as $row) { ?>
				<h2 style="color: #fff"><?php echo $row->jenis_surat; ?></h2>
				<img style="height: 700px; width: 500px;" src="<?php echo base_url()."uploads/dokumen/".$row->contoh_gambar; ?>">
				<br/><hr/>
			<?php }; ?>
			</div>		
	</div>
</div>