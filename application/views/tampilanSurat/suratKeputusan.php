
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