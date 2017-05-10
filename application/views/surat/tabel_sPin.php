<div class="wrapper wrapper-content">
	<div class="ibox-content">
		<div class="row">
			<h1>DATA TABEL SURAT PEMBERITAHUAN</h1>
			<small>Berikut ini adalah data tabel surat pemberitahuan</small>
			<br/>
			<br/>		
<div class="ibox-content">
	<div class="table-responsive">
		<table class="table table-striped table-hover " id="edo-copo">
			<div class="dropdown">
				<a href="<?php echo base_url()."index.php/csurat/sPin"; ?>" class="btn btn-outline btn-default" type="button"><i class="fa fa-hand-o-left"></i> Kembali</a>
				<button class="btn btn-outline btn-default" type="button"><i class="fa fa-print"></i> Cetak Laporan</button>
			</div><br/><br/>
			<thead>
				<tr>   
					<th>Nomor</th>
					<th>Tujuan</th>
					<th>Perihal</th>
					<th>Pengirim</th>
					<th>Isi</th>
					<th>Tindakan</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($join as $row){ ?>
				<tr>
					<td><?php echo $row->no_surat; ?></td>
					<td><?php echo $row->penerima; ?></td>
					<td><?php echo $row->perihal; ?></td>
					<td><?php echo $row->isi; ?></td>
					<td><?php echo $row->nama_lengkap; ?></td>
					<td class="center" >
						<a href="<?php echo base_url(),"index.php/csurat/generate_pdf_report/".$row->no_surat; ?>" class="btn btn-outline btn-white btn-rounded btn-xs"><i class="fa fa-print"></i> Print</a>
						<a href="#" class="btn btn-outline btn-warning btn-rounded btn-xs"><i class="fa fa-pencil-square"></i> Edit</a>
						<a href="#" class="btn btn-outline btn-danger btn-rounded btn-xs"><i class="fa fa-bitbucket"></i> Delete</a>
					</td>
				</tr>
				<?php };?>
			</tbody>
		</table>
	</div>
</div>