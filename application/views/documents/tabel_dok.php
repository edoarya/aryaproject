<style type="text/css">
	.card{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	text-align: center;
	}
</style>

<div class="wrapper wrapper-content animated fadeInRightBig">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox-content card">
			<h2><i class="fa fa-file"> Dokumen Upload File</i></h2>
			<hr>
			<hr>
				<a class="btn btn-outline btn-primary" href="#" type="button" data-toggle="modal" data-target="#addDataFile"><i class="fa fa-plus"></i> Tambah Data</a><br/><br/>
			<?=$this->session->flashdata('pesan') ?>
			<table class="table table-striped table-responsive" id="edo-copo">
				<thead>
					<tr>
						<th>ID</th>
						<th>Judul</th>
						<th>Tanggal Input</th>
						<th>Keterangan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($data->result() as $row) { ?>
					<tr>
						<td><?php echo $row->id_dokumen; ?></td>
						<td><?php echo $row->judul; ?></td>
						<td><?php echo $row->tanggal_input; ?></td>
						<td><?php echo $row->keterangan; ?></td>
						<td>
							<a class="btn btn-info btn-rounded btn-outline btn-xs" href="#">View</a>
							<a class="btn btn-warning btn-rounded btn-outline btn-xs" href="<?php echo base_url()."index.php/cdocument_file/update/".$row->id_dokumen; ?>" >Edit</a>
							<a class="btn btn-danger btn-rounded btn-outline btn-xs" data-toggle="modal" data-target="#deleteDataFile" data-kode="<?php echo $row->id_dokumen; ?>" data-nama="<?php echo $row->judul; ?>">Delete</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>

 <div class="modal inmodal" id="deleteDataFile" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <i class="fa fa-trash modal-icon"></i>
                
                <h4 class="modal-title">DELETE DOCUMENT</h4>
                <small class="font-bold"><b>File akan di hapus secara Permanen</b>, <br/>Apakah anda yakin ingin menghapus data berikut ini :</small>
            </div>
            <div class="modal-body">
              ID Dokumen :  <div class="well kode-dok"></div>
              Judul      : <div class="well nama-dok"></div>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline btn-white" data-dismiss="modal">Tutup</button>
              <a class="my-link btn btn-outline btn-warning" href="<?php echo base_url()."index.php/cdocument_file/hapus/"; ?>">Hapus</a></button>
            </div>
             
        </div>
    </div>
</div>
