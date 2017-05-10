<div class="wrapper wrapper-content">
	<div class="ibox-content">
		<div class="row">
			<div class="col-lg-12">
				<h1><i class="fa fa-file-word-o"></i> Tabel Upload Dokumen</h1>
				<small>Upload file berupa <strong>gambar & dokumen</strong> dibawah ini dengan benar</small>
				<hr>
			<div class="">
			<button class="btn btn-link" data-toggle="modal" data-target="#tambahdok"><span class="glyphicon glyphicon-plus"></span>Tambah Data</button>
			</div>
			<br/>

			<!-- TABEL -->
					<div class="table-responsive">
						<table class="table table-striped table-responsive" id="edo-copo">
							<thead>
								<tr>
									<th>KODE</th>
									<th>Tanggal Input</th>
									<th>Nama Dokumen</th>
									<th>Keterangan</th>
									<th>Tindakan</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($data as $row) { ?>
								<tr>
									<td><?php echo $row->kode_dok ?></td>
									<td><?php echo $row->tanggal_tambah ?></td>
									<td><?php echo $row->nama_dok ?></td>
									<td><?php echo $row->keterangan ?></td>
									<td>
										<button type="button" class="btn btn-success tombol"
										 data-toggle="modal"
										 data-target="#editdok"
										 data-tanggal="<?php $row->tanggal_tambah ?>"
										 data-nama="<?php $row->nama_dok ?>"
										 data-keterangan="<?php $row->keterangan ?>"
										 ><span class="glyphicon glyphicon-pencil"></span></button>

										<button type="button" class="btn btn-danger tombol"
										 data-toggle="modal"
										 data-target="#hapusdok"
										 data-id="<?=$row->kode_dok?>"
										 data-nama="<?=$row->nama_dok?>"
										 ><span class="glyphicon glyphicon-trash"></span>
										 </button>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
						
					</div>
				</div>
			</div>
		</div>


		<!-- Tambah Data Dokumen -->
<div class="modal fade" id="tambahdok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Penduduk</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url()."index.php/dokumen/simpan"; ?>" enctype="multipart/form-data">
            <div class="form-group">
                  <label for="tanggalLahir">Tanggal Input</label>
                  <input class="form-control" type="date" name="tanggal_tambah" placeholder="Tanggal Input" required>
            </div>
            <div class="form-group">
                  <label for="nama">Nama</label>
                  <input class="form-control" type="file" name="nama_dok" placeholder="Nama dokumen" required>
            </div>

            <div class="form-group">
                  <label for="alamat">Keterangan</label>
                  <textarea class="form-control" name="keterangan" required>
                  </textarea>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Insert</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Edit Data Dokumen -->
<div class="modal fade" id="editdok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Data Dokumen</h4>
      </div>
      <div class="modal-body">
    <div class="jumbotron">
      <h1><i class="fa fa-edit">Edit Dokumen</i></h1>
      <p>Ubah dan upload file Anda sesuai dengan data benar.</p><br/><hr>
      <div id="myform_errorloc" class="error_strings">
            </div>
      <form method="POST" action="<?php echo base_url()."index.php/dokumen/simpanEdit"; ?>" enctype="multipart/form-data">
      <div class="well kode-dokumen">
        <div class="form-group">
          <label>Tanggal Input</label>
            <div class='input-group date'>
              <input type='date' class="form-control tanggal_tambah" name="tanggal_tambah" />
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
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
      <div class="modal-footer">
        <input class="id" type="hidden" name="id">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Hapus Data Penduduk -->
<div class="modal fade" id="hapusdok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Data Penduduk</h4>
      </div>
      <div class="modal-body">
        
          <div class="text-delete"></div>
            
      </div>
      <div class="modal-footer">
        <form method="post" action="<?=base_url()?>penduduk/hapusPenduduk">
            <input class="id" type="hidden" name="id">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).on("click", '.tombol', function(e){
	var kode_dok = $(this).data('kode_dok');
	var tanggal_tambah = $(this).data('tanggal');
	var nama_dok = $(this).data('nama');
	var keterangan = $(this).data('keterangan');

	$(".kode_dok").val(kode_dok);
	$(".tanggal_tambah").val(tanggal_tambah);
	$(".nama_dok").val(nama_dok);
	};

	$('.keterangan').html("<textarea class=\"form-control\" name=\"keterangan\" required>" +keterangan+"</textarea>");

	$(".text-delete").text("Apakah anda yakin akan menghapus data dengan nama_dok " + nama_dok + "?");
});
</script>





