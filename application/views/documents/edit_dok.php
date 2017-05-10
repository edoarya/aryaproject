<!-- <div class="wrapper wrapper-content">
	<div class="row">
		<div class="col-lg-12 b-r">
			<div class="ibox-content">
			<h1><i class="fa fa-file"> Form Update Dokumen</i></h1>
			<small>Berikut ini adalah tampilah Update(ubah) yang terdapat data sebelumya.</small>
			<hr>
			<form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/cdocument_file/simpan_edit"; ?>" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-2">
					<h1>Form Update Dokumen</h1>
		            <i class="fa fa-edit big-icon"></i>
		            <small>Periksa kembali data yang telah di update sebelum Anda Menyimpan</small>
		        </div>

				<div class="form-group">
					<div class="col-lg-7">
						<label class=" label-control">Judul Dokumen</label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="judul" value="<?php echo $dkm->judul; ?>">
					</div>
				
					<div class="col-lg-7">
					<br/>
						<label class="label-control"><i class="fa fa-calendar"></i> Tanggal Input (update)</label>
					</div>
					<div class="col-sm-4">
						<input type="date" class="form-control" name="tanggal_input" value="<?php echo $dkm->tanggal_input; ?>">
					</div>

					<div class="col-lg-7">	<br/>
						<label class="label-control"><i class="fa fa-pencil"></i> Keterangan / note</label>
						<input type="text" class="form-control" name="keterangan" value="<?php echo $dkm->keterangan; ?>">
					</div>
				</div>
					<div class="col-lg-10">
						<a class="btn btn-outline btn-primary" type="submit" href="<?php echo base_url()."index.php/cdocument_file/simpan_edit"; ?>"" ><i class="fa fa-check-square-o"></i> Update</a>
						<a class="btn btn-outline btn-warning" type="button" ><i class="fa fa-mail-reply"></i> Batal</a>
					</div>
			</form>	
			</div>
		</div>
	</div>
</div> -->


<div class="wrapper wrapper-content animated fadeInRight">
     <div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM TAMBAH DATA <small>Masukan data Mata kuliah di bawah ini</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a></li>
                                <li><a href="#">Config option 2</a></li>
                            </ul>
                            <a class="close-link">
                            <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                  <form class= "form-horizontal" method="POST" action="<?php echo base_url()."index.php/cdocument_file/simpanUpdate/"; ?>" enctype="multipart/form-data">
                     <div class="form-group">
                       
                        <div class="col-lg-7">
                            <input type="hidden" class="form-control" name="id_dokumen" type="text" class="form-control" value="<?php echo $dkm->id_dokumen; ?>">
                        </div>
                     </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Judul Dokumen</label>
                        <div class="col-lg-7">
                            <input class="form-control" name="judul" type="text" class="form-control" value="<?php echo $dkm->judul; ?>">
                        </div>
                     </div>
                        <div class="form-group">
                       		<label class="col-lg-2 control-label">Tanggal Update</label>
                       	 	<div class="col-lg-4">
                            	<input class="form-control" name="tanggal_input" type="date" class="form-control" value="<?php echo $dkm->tanggal_input; ?>">
                        	</div>
                     	</div>

                     <div class="form-group">
                        	<label class="col-lg-2 control-label">Keterangan</label>
                       	 <div class="col-lg-7">
                            <input class="form-control" name="keterangan" type="text" class="form-control" value="<?php echo $dkm->keterangan; ?>">
                        </div>
                     </div>	
                      <div class="form-group">
                        	<label class="col-lg-2 control-label">Update File Upload</label>
                       	 <div class="col-lg-7">
                            <input class="form-control" name="userfile" type="file" class="form-control" value="<?php echo $dkm->nama_file; ?>"><small><i>before :</i></small>
                            <input type="text" class="form-control" value="<?php echo $dkm->nama_file; ?>" readonly>
                        </div>
                     </div>	
                    <div class="form-group">
                        <div class="hr-line-dashed"></div>
                            <div class="col-lg-offset-10 col-lg-10">
                            <button type="submit" class="btn btn-info">Simpan Update</button>
                                <label id="batal" class="btn btn-default"><a href="<?php echo base_url()."index.php/cdocument_file"; ?>">Batal</a></label> 
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      </div>
                      </div>

                          
                       
                     
