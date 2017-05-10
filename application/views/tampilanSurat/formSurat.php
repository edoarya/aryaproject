<form method="post" action="<?php echo base_url()."index.php/letters/csurat/do_upload";?>" enctype="multipart/form-data">
	<div class="form-group">
		<label>jenis surat</label>
		<input type="text" name="jenis_surat" class="form-control">
	</div>
	<div class="form-group">
		<label style="color: #fff">Upload Gambar</label>
		<input type="file" name="userfile" class="form-control">
		<input type="submit" value="upload" />
	</div>
	<a href="<?php echo base_url()."index.php/letters/csurat/do_upload";?>" type="submit" class="btn btn-primary">Simpan</a>
</form>