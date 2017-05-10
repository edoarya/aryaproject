<div class="wrapper wrapper-content">
		<div class="row">
			<h1>DATA TABEL SURAT PEMBERITAHUAN</h1>
			<small>Berikut ini adalah data tabel surat pemberitahuan</small>
			<br/>
			<br/>
			<a href="<?php echo base_url()."index.php/csurat/generate_pdf_report1"; ?>"></a>
			<div class="ibox-content">
				<div class="table-responsive">
					<table class="table table-striped table-hover " id="edo-copo">
						<div class="dropdown">
							<a href="<?php echo base_url()."index.php/csurat/sPem"; ?>" class="btn btn-outline btn-default" type="button"><i class="fa fa-hand-o-left"></i> Kembali</a>
							<button class="btn btn-outline btn-default" type="button"><i class="fa fa-print"></i> Cetak Laporan</button>
						</div><br/><br/>
						<?=$this->session->flashdata('pesan') ?>
						<thead>
							<tr>   
								<th>Nomor</th>
								<th>Kepada</th>
								<th>Psosisi</th>
								<th>Perihal</th>
								<th>Pengirim</th> 
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($data as $row){ ?>
							<tr>
								<td><?php echo $row->nomor; ?></td>
								<td><?php echo $row->kepada; ?></td>
								<td><?php echo $row->posisi; ?></td>
								<td><?php echo $row->perihal; ?></td>
								<td><?php echo $row->penulis; ?></td>
								<td class="center" >
									<a href="<?php echo base_url()."index.php/csurat/viewPem/".$row->nomor; ?>" class="btn btn-outline btn-info btn-rounded btn-xs"><i class="fa fa-info-circle"></i> View</a>
									<a href="<?php echo base_url()."index.php/csurat/edit_sPem/".$row->nomor; ?>" class="btn btn-outline btn-warning btn-rounded btn-xs"><i class="fa fa-pencil-square"></i> Edit</a>
									<button data-toggle="modal" data-target="#edo-sPem" data-nomor="<?php echo $row->nomor ?>" data-perihal="<?php echo $row->perihal ?>" class="btn btn-outline btn-danger btn-rounded btn-xs"><i class="fa fa-bitbucket"></i> Delete</button>
							</tr>
							<?php };?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--MODAL HAPUS-->
<div class="modal fade" id="edo-sPem" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="fa fa-trash big-icon"><h1 style="color: #aeb0b2;">Hapus data Surat
        <br/><small style="color: #aeb0b2;">Pastikan bahwa data yang anda ingin hapus telah benar.</small></h1></i>
      </div>
      <div class="modal-body">
      	Nomor surat : <div class="well nomor-surat"></div>
      	Perihal 	: <div class="well perihal-surat"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a class="my-link btn btn-outline btn-danger" href="<?php echo base_url()."index.php/csurat/hapus_sPem/" ?>">Hapus Data</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


