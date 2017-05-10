<!-- <div class="wrapper wrapper-content animated fadeInRight">
    <div class="col-lg-12">
        <div class="ibox float-e-margins"> -->
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                <h5>FORM TAMBAH DATA <small>Masukan data Program Kerja di bawah ini</small></h5>
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
                    <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/proker/simpan"; ?>" onsubmit="cekkolom()" ;>
                       <div class="form-group">
                        <label class="col-lg-2 control-label">Jadwal Mulai</label>
                        <div class="col-lg-4">
                            <input name="jadwal_mulai" type="date"  class="calendar form-control" required="">
                        </div>
                        <label class="col-lg-1 control-label">Jadwal Selesai</label>
                        <div class="col-lg-4">
                            <input name="jadwal_selesai" type="date"  class="calendar form-control" required="">
                        </div>
                    </div>
                         <div class="form-group">
                        <label class="col-lg-2 control-label">Kegiatan</label>
                        <div class="col-lg-10">
                            <input name="kegiatan" type="text"  class="form-control" required="">
                        </div>
                    </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Keterangan</label>
                        <div class="col-lg-10">
                            <textarea name="keterangan" rows="5" type="text"  class="form-control" required=""></textarea>
                        </div>
                    </div>
                  
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Kode Struktur</label>
                        <div class="col-lg-10">
                            <input name="kode_struktur" type="text"  class="form-control" required>
                    </div>        
                    
                    <div class="form-group">
                        <div class="hr-line-dashed"></div>
                            <div class="col-lg-offset-10 col-lg-10">
                                <a href="<?php echo base_url()."index.php/proker/simpan"; ?>"><button class="btn btn-sm btn-primary" type="submit">Simpan</button></a>
                                <label id="batal" class="btn btn-default"><a href="<?php echo base_url()."index.php/proker"; ?>">Batal</a></label>         
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                        
                            
