<div class="wrapper wrapper-content animated fadeInRight">
		<div class="row">
			
			<a href="<?php echo base_url()."index.php/csurat/generate_pdf_report1"; ?>"></a>
			<div class="ibox-content">
				<div class="table-responsive">
					<table class="table table-striped table-hover" id="edo-copo">
						<div class="dropdown">
							<a href="<?php echo base_url()."index.php/csurat/spem_dua"; ?>" class="btn btn-outline btn-default" type="button"><i class="fa fa-hand-o-left"></i> Kembali</a>
							<button class="btn btn-outline btn-default" type="button"><i class="fa fa-print"></i> Cetak Laporan</button>
						</div><br/><br/>
						<?=$this->session->flashdata('pesan') ?>
						<thead>
							<tr>   
								<th>Nomor</th>
								<th>Kepada</th>
								<th>Posisi</th>
								<th>Perihal</th>
								<th>Pengirim</th> 
								<th>Mengetahui</th> 
								<th>Ketua / Penanggung jawab</th> 
								<th>Tindakan</th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($data as $row){  ?>
							<tr>
								<td><?php echo $row->no; ?></td>
								<td><?php echo $row->kepada; ?></td>
								<td><?php echo $row->posisi; ?></td>
								<td><?php echo $row->perihal; ?></td>
								<td><?php echo $row->penulis; ?></td>
								<td><?php echo $row->mengetahui; ?></td>
								<td><?php echo $row->pj; ?></td>
								<td class="center" >
									<a href="<?php echo base_url()."index.php/csurat/tampiltemp_dua/".$row->no; ?>" class="btn btn-outline btn-info btn-rounded btn-xs"><i class="fa fa-info-circle"></i> View</a>
									<a href="<?php echo base_url()."index.php/csurat/edit_sPem2/".$row->no; ?>" class="btn btn-outline btn-warning btn-rounded btn-xs"><i class="fa fa-pencil-square"></i> Edit</a>
									<button data-toggle="modal" data-target="#edo-sPem2" data-no="<?php echo $row->no ?>" data-perihal="<?php echo $row->perihal ?>" class="btn btn-outline btn-danger btn-rounded btn-xs"><i class="fa fa-bitbucket"></i> Delete</button>
							</tr>
							<?php };?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<!--MODAL HAPUS-->
<div class="modal fade" id="edo-sPem2" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="fa fa-trash big-icon"><h1 style="color: #aeb0b2;">Hapus data Surat
        <br/><small style="color: #aeb0b2;">Pastikan bahwa data yang anda ingin hapus telah benar.</small></h1></i>
      </div>
      <div class="modal-body">
      	Nomor surat : <div class="well no-surat"></div>
      	Perihal 	: <div class="well perihal-surat"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a class="my-link btn btn-outline btn-danger" href="<?php echo base_url()."index.php/csurat/hapus_sPem2/" ?>">Hapus Data</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


