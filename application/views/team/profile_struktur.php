<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row m-b-lg m-t-lg">
		<div class="col-md-6">
			<div class="profile-image">
			<img class="img-circle circle-border m-b-md" width="120px;" height="120px" alt="profile" src="<?php echo base_url()."assets/uploads/".$data->foto; ?>">
			</div>
				<div class="profile-info">
					<div class="">
						<div>
							<h2 class="no-margins">
							<?php echo $data->nama_lengkap; ?>
							</h2>
							<h4><?php echo $data->jabatan; ?></h4>
							<small>
							There are many variations of passages of Lorem Ipsum available, but the majority
							have suffered alteration in some form Ipsum available.
							</small>
						</div><br/>
						<a href="<?php echo base_url()."index.php/struktur_div/detail_struktur/"; ?>" title="kembali ke list struktur" class="btn btn-outline btn-primary btn-xs dim" type="button"><i class="fa fa-mail-reply"> kembali</i></a>
					</div>
				</div>
		</div>

		<div class="col-md-3">
			<table class="table small m-b-xs">
				<tbody>
					<tr>
						<td>
						<strong>142</strong> Projects
						</td>
						<td>
						<strong>22</strong> Followers
						</td>
					</tr>
					<tr>
						<td>
						<strong>61</strong> Comments
						</td>
						<td>
						<strong>54</strong> Articles
						</td>
					</tr>
					<tr>
						<td>
						<strong>154</strong> Tags
						</td>
						<td>
						<strong>32</strong> Friends
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-md-3">
			<small>Total Program Kerja Hari ini</small>
			<?php foreach($htg as $row) { ?>
			<h2 class="no-margins"><?php echo $row->id_struktur; ?> <small>project</small></h2>
			<?php } ?>
			<div id="sparkline1"></div>
		</div>
	</div>
	 <?=$this->session->flashdata('pesan') ?>
	 <?=$this->session->flashdata('notif') ?>
		<div class="row">
			<div class="col-lg-3">
				<div class="ibox">
					<div class="ibox-content card">
						<h3>Tentang <?php echo $data->nama_struktur; ?></h3>
						<p class="small">
						<?php echo $data->visi_misi; ?>.
						<br/>
						<br/>
						</p>

						<div class="ibox">
							<div class="ibox-content">
								<h3>Personel Departemen</h3>
								<p class="small">
								If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
								anything embarrassing
								</p>
								<div class="user-friends">
									<?php foreach($ft as $rw) { ?>
									<a href="<?php echo base_url()."assets/uploads/".$rw->foto; ?>">
									<img alt="image" class="img-circle" src="<?php echo base_url()."assets/uploads/".$rw->foto; ?>"></a>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>

			     <div class="ibox card">
		            <div class="ibox-content">
		                <h3><i class="fa fa-envelope"></i> Pesan (Email) Pribadi</h3>

		                <p class="small">
		                    Kirimkan email/pesan anggota yang di tuju.
		                </p>
		                <form method="POST" action="<?php echo base_url()."index.php/struktur_div/sendmail"; ?>">
		                <div class="form-group">
	                    <input type="email" class="form-control" name="to" placeholder="Kepada" required autocomplete="off"><br>
	                    <input type="email" class="form-control" name="cc" placeholder="Cc" autocomplete="off"><br>
	                    <input type="text" class="form-control" name="subject" placeholder="Subject" required autocomplete="off">
	                  
		                </div>
		                <div class="form-group">
		                 
		                    <textarea name="pesan" class="form-control" placeholder="Isi Pesan" rows="3"></textarea>
		                </div>
		                <input type="submit" class="btn btn-outline btn-primary " name="send" value="Kirim Pesan">
		                </form>
		            </div>
		        </div>
			</div>
				<div class="row">
					<div class="col-lg-8">
						<div class="ibox-content">
							<div class="ibox-title">
	                            <h4>Program Kerja Struktur Departemen <strong><?php echo $data->nama_struktur; ?></strong> </h4>
								<a href="<?php echo base_url()."index.php/struktur_div/cetak_allProker2/".$cetak2->id_struktur; ?>" class="btn btn-primary pull-right"><i class="fa fa-print"></i> Download All</a> 
								<button type="button" class="btn btn-primary btn-outline pull-right" data-toggle="modal" data-target="#exampleModal">Buat Schedule Baru</button>

	                        </div>
	                      	<div class="ibox-content">   
								<div class="project-list">
									<table class="table table-bordered table-hover" id="edo-copo">
										<tbody>
										<?php foreach($prkr as $row) { ?>
											<tr>
													<td class="project-title">
													
													<a href="#"><?php echo $row->kegiatan; ?></a>
												
													<br/>
													<small><strong>Jadwal Proker :</strong> <?php echo $row->jadwal_mulai; ?> - <?php echo $row->jadwal_selesai; ?> </small>
												</td>

												<td class="project-completion">
													<small>Status Program Kerja: <?php echo $row->status; ?></small>
													<div class="progress progress-mini">
														<div style="width:<?php echo $row->status; ?>" class="progress-bar"></div>
													</div>
												</td>

												<td class="project-actions">
												<a href="<?php echo base_url()."index.php/struktur_div/cetakproker/".$row->kode_proker; ?>" class="btn btn-white btn-sm"><i class="fa fa-caret-square-o-right"></i> View </a>
													<a href="<?php echo base_url()."index.php/struktur_div/delete_proker/".$row->kode_proker; ?>" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Delete </a>
													<a href="<?php echo base_url()."index.php/cproker/tampil_edit/".$row->kode_proker; ?>" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
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
		</div>
</div>


<script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kegiatan <strong>ProgamKerja</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url()."index.php/struktur_div/simpan_proker/"; ?>">
          <div class="form-group">
            <label for="recipient-name" class="form-control-label"><small>Kegiatan</small></label>
            <div class="input-group">
            	<span class="input-group-addon"><i class="fa fa-bar-chart-o"></i></span>
            <textarea type="text" class="form-control" name="kegiatan"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="form-control-label"><small>Jadwal Mulai</small></label>
             <div class="input-group">
            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            	<input type="date" class="form-control" name="jadwal_mulai" >
            	<input type="hidden" class="form-control" name="id_struktur" value="<?php echo $data->id_struktur; ?>" >
            </div>
          </div>

          <div class="form-group">
            <label for="message-text" class="form-control-label"><small>Jadwal Selesai</small></label>
             <div class="input-group">
            	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
            	<input type="date" class="form-control" name="jadwal_selesai">
            </div>
          </div>

        <div class="form-group">
			<textarea name="isi" id="editor1" rows="5" cols="40">
				Tulislah Tentang Persiapan Proker
			</textarea>
			<script>
				CKEDITOR.replace('isi');
			</script>
		</div>

		 <div class="form-group">
            <label for="message-text" class="form-control-label"><small>Persentase Proker</small></label>
             <div class="input-group">
            	<span class="input-group-addon"><i class="fa fa-">%</i></span>
            	<input type="text" class="form-control" name="status" placeholder="persentase proker">
            </div>
          </div>
          
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
      </div>
      
    </div>
  </div>
</div>
