<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>FORM TAMBAH DATA <small>Masukan data Departemen di bawah ini</small></h5>
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
           

                <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/divisi/simpan"; ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Depart.</label>
                        <div class="col-lg-10">
                            <input name="nama_dep" type="text" placeholder="masukan nama depart" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Lengkap</label>
                        <div class="col-lg-10">
                            <input name="nama_lengkap" type="text" placeholder="masukan nama lengkap" class="form-control">
                        </div>
                    </div>
                     <div class="form-group"><label class="col-sm-2 control-label">Jabatan</label>
                        <div class="col-sm-2">
                            <select class="form-control m-b" name="jabatan">
                                <option value ="">Pilih</option>
                                <option value ="ketua">Ketua</option>
                                <option value ="Sekretaris">Sekretaris</option>
                                <option value ="Bendahara">Bendahara</option>
                                <option value ="Anggota">Anggota</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Kontak</label>
                        <div class="col-lg-10">
                            <input type="text" name="kontak" placeholder="masukan salah satu (email/telp)" class="form-control">
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-lg-2 control-label">Foto</label>
                        <div class="col-lg-10">
                            <input name="userfile" type="file" class="form-control" value="upload">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="hr-line-dashed"></div>
                            <div class="col-lg-offset-10 col-lg-10">
                                <!-- <a href="#"> -->
                                    <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                                    <label id="batal" class="btn btn-default"><a href="<?php echo base_url()."index.php/divisi"; ?>">Batal</a></label> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



