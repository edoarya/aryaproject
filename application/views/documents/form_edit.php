 <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h2><i class="fa fa-file"> Form Update Dokumen</i></h2>
                        <small> Dibawah ini adalah form ubah dokumen.</small>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-9 b-r">
                               <form method="POST" action="<?php echo base_url()."index.php/cdocument_file/simpan_edit/"; ?>" enctype="multipart/form-data">
                                    <div class="form-group"><label>Judul File</label> <input type="text" placeholder="Masukan Judul File" class="form-control" name="judul" value="<?php echo $dkm->judul; ?>">
                                    </div>
                                    <div class="form-group"><label>Tanggal Input</label><input type="date" name="tanggal_input" class="form-control" value="<?php echo $dkm->tanggal_input; ?>"></div>
                                    <div class="form-group"><label>Desc.</label> <input type="text" name="keterangan" placeholder="Masukan Deskripsi" class="form-control" value="<?php echo $dkm->keterangan; ?>">
                                    </div>
                                     <div class="form-group"><label>Upload File</label> 
                                        <input type="file" name="userfile" class="form-control" value="<?php echo $dkm->nama_file; ?>" >
                                    </div>
                                         <a href="<?php echo base_url()."index.php/cdocument_file/simpan_edit"; ?>">
                                    <button class="btn btn-sm btn-primary" type="submit">Update File</button></a>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
                            
                                </div>
                                </form>
                            </div>
                            <div class="col-sm-2">
                                <p class="text-center">
                                <h1>Form Update Dokumen</h1>
                                    <i class="fa fa-edit big-icon"></i>
                                    <small>Periksa kembali data yang telah di update sebelum Anda Menyimpan</small>
                                    <hr>
                                    <button type="button" class="btn btn-outline btn-link btn-xs"><p><< Back to Home</p></button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>