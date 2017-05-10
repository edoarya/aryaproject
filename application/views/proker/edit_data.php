<style type="text/css">
    
.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  }

</style>

<div class="wrapper wrapper-content animated pulse">
    <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins card">
                    <div class="ibox-title">
                        <h5>FORM UBAH DATA PROGRAM KERJA</h5>
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
                    <?=$this->session->flashdata('pesan') ?> <!--Notif sukses-->
                    <?=$this->session->flashdata('gagal') ?> <!--Notif gagal-->

                    <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/cproker/simpan_edit"; ?>">
                    <div>
                     <h2><img style="height: 30px; width: 30px;" src="<?php echo base_url().'image/4.png'; ?>"> Waktu Pelaksanaan </h2>
                   </div>
                   <hr/>
                   <div class="form-group">
                        <label class="col-lg-1 control-label">Kode Proker</label>
                        <div class="col-lg-10">
                           <input type="text" class="form-control" name="kode_proker" value="<?php echo $prk->kode_proker; ?>" readonly>
                       </div>
                   </div>
                    <div class="form-group">
                       <label class="col-lg-1 control-label">Mulai</label>
                        <div class="col-sm-4">
                            <div class="input-group m-b">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input name="jadwal_mulai" type="date"  class="calendar form-control" value="<?php echo $prk->jadwal_mulai; ?>">
                            </div>
                        </div>
                        <label class="col-lg-1 control-label">Selesai</label>
                        <div class="col-lg-4">
                            <div class="input-group m-b">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input name="jadwal_selesai" type="date"  class="calendar form-control" value="<?php echo $prk->jadwal_selesai; ?>">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div>
                        <h2><img style="height: 35px; width: 30px;" src="<?php echo base_url().'image/2.png'; ?>"> Rincian Kegiatan </h2>
                        
                   <hr/> 
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <input name="kegiatan" type="text"  class="form-control" placeholder="kegiatan" value="<?php echo $prk->kegiatan; ?>">
                        </div>
                    </div>
                       <!--  -->
                     <div class="form-group">
                        <div class="col-lg-12">
                            <textarea name="keterangan" rows="5" type="text"  class="form-control" placeholder="Notes :" ><?php echo $prk->keterangan; ?></textarea>
                        </div>
                    </div>
                        <hr/>
                            <button class="btn btn-outline btn-primary" type="submit">Simpan Perubahan</button>
                             <a class="btn btn-outline btn-warning" href="<?php echo base_url()."index.php/struktur_div/detail_struktur/"; ?>">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
