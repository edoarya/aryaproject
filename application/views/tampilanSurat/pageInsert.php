<style type="text/css">
	input.transparent-input{
		color: #fff;
       background-color:rgba(210, 221,0,0);
       border:none !important;
   }
</style>

<div class="wrapper wrapper-content">
	<div class="container">

	 <?=$this->session->flashdata('pesan') ?>
		<div class="ibox-content">
			<h2>Letter Data Table</h2>
			<p>Ini adalah tampilan tabel data dan Form isian Surat</p>
			<a data-toggle="modal" data-target="#insertData" class="btn btn-outline btn-primary">Add Data Letter</a>
			<table class="table table-condensed">
				<thead>
					<tr>
						<th>Jenis Surat</th>
						<th>Tampilan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($data as $row) {?>
					<tr>
						<td><?php echo $row->jenis_surat ?></td>
						<td><?php echo $row->contoh_gambar ?></td>
						<td>
							<a href="#"><label class="label label-info">View</label></a>
							<a href="#"><label class="label label-warning">Edit</label></a>
							<a href="#"><label class="label label-danger">Hapus</label></a>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- MODAL INSERT DATA-->
	<div class="modal fade" id="insertData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
						<h2 style="color: #fff" class="modal-title" id="myModalLabel"><i class="fa fa-file"></i> Add Data Surat</h2>
					</div>
					<div class="modal-body">

						<form method="post" action="<?php echo base_url()."index.php/letters/csurat/do_upload";?>" enctype="multipart/form-data">
							
							<div class="form-group">
								<label style="color: #fff">Jenis Surat</label>
								<input type="text" name="jenis_surat" class="form-control">
							</div>
							<div class="form-group">
								<label style="color: #fff">Upload Gambar</label>
								<input type="file" name="userfile" class="form-control">
							</div>
							<button type="submit" class="btn btn-primary">Simpan</button>
							<button type="button" class="btn btn-outline btn-warning" data-dismiss="modal"> Close</button>
						</form>
					</div>		
			</div>
	</div>