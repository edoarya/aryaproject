<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-13">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h2><i class="fa fa-edit">FORM EDIT DATA</i></h2>
                    <small>Ubah data Dokumen di bawah ini</small>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i></a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a></li>
                                    <li><a href="#">Config option 2</a></li>
                                </ul>
                                    <a class="close-link">
                                    <i class="fa fa-times"></i></a>
                        </div>
                </div>
			<div class="ibox-content">
				<form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/dokumen/simpanEdit"; ?>" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-sm-2 control-label">Document Code</label>
						<div class="col-sm-4">
							<p class="form-control-static"><?php echo $dkm->kode_dok; ?></p>
						</div>
					</div>
					<hr>
					<div class="form-group">
						<label class="col-sm-2 control-label">Tanggal Revisi</label>
						<div class="col-sm-4">
							<input type="date" class="form-control" id="inputPassword" value="<?php echo $dkm->tanggal_tambah; ?>">
						</div>
						<label class="col-sm-2 control-label"> File Uploader</label>
						<div class="col-sm-4">
							<p class="form-control-static"><?php echo $dkm->nama_dok; ?></p>
							<input type="file" class="form-control" name="nama_dok" id="myform" value="<?php echo $dkm->nama_dok; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-4"></div>
					</div>
						<hr>
					<div class="form-group">
						<textarea class="form-control" rows="2" name="keterangan" >Note : <?php echo $dkm->keterangan; ?></textarea>
					</div>
					<hr>
					<button type="submit" class="btn btn-primary">Update</button>
					<a type="submit" class="btn btn-warning" href="<?php echo base_url()."index.php/dokumen"; ?>" >
						Cancel
					</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

