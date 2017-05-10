<div class="wrapper wrapper-content">
	<div class="ibox-content">
		<div class="row">
			<div class="col-lg-12">
				<h1><i class="fa fa-file-word-o"></i> Tabel Upload Dokumen</h1>
				<small>Upload file berupa <strong>gambar & dokumen</strong> dibawah ini dengan benar</small>
				<hr>
				<div class="">
					<a href="#addData" data-toggle="modal" data-target="#addData" class="btn btn-primary btn-md"><i class="fa fa-plus-square"></i> Tambah Data</a>
				</div>
				<br/>
				<!-- <?php echo $this->session->flashdata('message');?> -->

				<div class="table-responsive">
                  <table class="table table-striped table-responsive" id="edo-copo">
					<thead> 
						<tr>
							<th>Dokumen Kode </th>
							<th>Dokumen </th>
							<th>Tanggal Input</th>
							<th>Keterangan</th>
							<th>Tindakan</th>	
						</tr>
					</thead>
					<tbody>
						<tr>
						<?php foreach($data as $row) {
						$newdate = date("d-m-Y", strtotime($row->tanggal_tambah));
						 ?>
							<td><?php echo $row->kode_dok; ?></td>
							<td><?php echo $row->nama_dok; ?></td>
							<td><?php echo $row->tanggal_tambah; ?><?php $newdate ?></td>
							<td><?php echo $row->keterangan; ?></td>
							<td>
					
					</button>

					<a href="<?php echo base_url()."index.php/dokumen/edit/".$row->kode_dok;?>" class="btn btn-default btn-xs"><i class="fa fa-pencil" ></i> Edit</a>
								<a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#edo-dokumen" data-kode="<?php echo $row->kode_dok; ?>" data-nama="<?php echo $row->nama_dok; ?>" ><i class="fa fa-trash "></i> Hapus</a>
							</td>
						</tr>					
                        <?php } ?>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- MODAL INSERT DATA -->
<div class="modal fade" id="addData" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title"><i class="fa fa-file-word-o"></i> Form Tambah Data Dokumen</h4>
      </div>
	<div class="modal-body">
		<div class="jumbotron">
			<h1><i class="fa fa-file-word-o"><i class="fa fa-file-pdf-o"> Dokumen</i></i></h1>
			<p>Isi dan upload file Anda dalam bentuk doc, docx, pdf atau text.</p><br/><hr>
			<div id="myform_errorloc" class="error_strings">
            </div>
			<form method="POST" id="myform" action="<?php echo base_url()."index.php/dokumen/simpan"; ?>" enctype="multipart/form-data">
				<div class="form-group">
					<label>Tanggal Input</label>
						<div class='input-group date'>
							<input type='date' class="form-control" required="" name="tanggal_tambah" />
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
						</div>
				</div>
					<div class="form-group">
						<label for="exampleTextarea">Keterangan / Catatan</label>
						<textarea class="form-control" id="exampleTextarea" rows="3" name="keterangan"></textarea>
					</div>
				<div class="form-group">
					<label for="exampleInputFile">File input Dokumen</label>
					<input type="file" id="nama_dok" name="nama_dok" required="" class="form-control-file" value="upload">
					<small id="fileHelp" class="form-text text-muted">Upload file dokumen anda disini.</small>
				</div>
				 <button type="submit" class="btn btn-primary" data-toogle="modal" data-target="myModal">Simpan</button>
				 <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
			</form>
	
		</div>
     </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php if($this->session->flashdata()) :?>
<div class="modal fade" id="myModal" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel"><?php echo $this->session->flashdata('message'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="text-center">
      <h1>Congratulation !</h1>
       <img style="width: 200px; height: 170px;" src="<?php echo base_url(); ?>assets/img/success.png">
      </div>
      </div>
      <div class="modal-footer">
      <button type="button" data-dismiss="modal" class="btn btn-block btn-outline btn-info">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endif ; ?>


<!-- MODAL HAPUS -->
<div class="modal inmodal fade" id="edo-dokumen" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Hapus Data</h4>
                <small class="font-bold">Tolong periksa kembali data yang akan dihapus.</small>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Matakuliah dengan Data :</p>
                Kode Dokumen: <div class="well kode-dokumen"></div>
                Nama Dokumen :<div class="well nama-dokumen"></div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white">
                <a class="my-link" href="<?php echo base_url()."index.php/dokumen/do_delete/"; ?>">Delete</a></button>
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/js/custom.js"></script>

