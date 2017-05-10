<style type="text/css">
    
.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  }

</style>

<div class="wrapper wrapper-content animated  animated fadeInRightBig">
    <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins card">
                    <div class="ibox-title">
                        <h5>FORM INPUT DATA PRGRAM KERJA</h5>
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

                    <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/cproker/simpan_data"; ?>">
                    <div>
                     <h2><img style="height: 30px; width: 30px;" src="<?php echo base_url().'image/4.png'; ?>"> Waktu Pelaksanaan </h2>
                        <p>Isi kolom dibawah ini dengan keterangan kapan waktu pelaksanaan berlangsung hingga selesainya kegiatan.</p>
                   <hr/>
                   </div>
                    <div class="form-group">
                       <label class="col-lg-1 control-label">Mulai</label>
                        <div class="col-sm-4">
                            <div class="input-group m-b">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input name="jadwal_mulai" type="date"  class="calendar form-control" required>
                            </div>
                        </div>
                        <label class="col-lg-1 control-label">Selesai</label>
                        <div class="col-lg-4">
                            <div class="input-group m-b">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input name="jadwal_selesai" type="date"  class="calendar form-control" required>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <hr>
                    <div>
                        <h2><img style="height: 35px; width: 30px;" src="<?php echo base_url().'image/2.png'; ?>"> Rincian Kegiatan </h2>
                        <p>Isi kolom dibawah ini dengan aktifitas program kerja, departemen yang terkait, dan berikan catatan/keterangan bila perlu.</p>
                   <hr/>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <textarea class="form-control" type="text" rows="5" name="kegiatan" placeholder="nama kegiatan :" required></textarea>
                        </div>
                    </div>
                       <div class="form-group">
                            <div class="col-sm-5">
                          <?php
                            echo "
                              <select class='form-control m-b' name='id_struktur' id='select-struktur' required>
                              <option value='' disabled selected>Pilih Struktur</option>";
                                foreach ($data_join->result() as $row) {  
                                echo "<option value='".$row->id_struktur."'>".$row->nama_struktur."</option>";
                          }
                            echo"</select>";
                          ?>
                            </div>
                          </div>

                     <div class="form-group">
                        <div class="col-lg-12">
                            <textarea name="keterangan" rows="5" type="text" class="form-control" placeholder="Notes :" ></textarea>
                        </div>
                    </div>
                        <hr/>
                            <button class="btn btn-outline btn-primary" type="submit">Simpan</button>
                             <a class="btn btn-outline btn-default" href="<?php echo base_url()."index.php/cproker"; ?>">Refresh</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!-- TABEL -->
<div class="wrapper wrapper-content animated  animated fadeInLeftBig">
    <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins card">
                    <div class="ibox-title">
                        <h5>DATA TABEL PROGRAM KERJA</h5>
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
            <div class="table-responsive">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="fa fa-print"></i> Cetak Laporan
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li class="dropdown-header">Sort by :</li>
                          
                          <li><a href="<?php echo base_url()."index.php/cproker/generate_pdf_report"; ?>">All data</a></li>
                        </ul>
                    </div><br/><br/><br/>
                    <table class="table table-striped table-responsive" id="edo-copo" >
                    <thead>
                    <tr>
                        
                        <th>Struktur Dep.</th>
                        <th>Jadwal Mulai</th>
                        <th>Jadwal Selesai</th>
                        <th>Kegiatan</th>
                        <th>Keterangan</th>
                        <th>Tindakan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr> 
                    <?php foreach($data as $row) { ?>

                      <td><?php echo $row->nama_struktur; ?></td>
                      <td><?php echo $row->jadwal_mulai; ?></td>
                      <td><?php echo $row->jadwal_selesai; ?></td>
                      <td><?php echo $row->kegiatan; ?></td>
                      <td><?php echo $row->keterangan; ?></td>
                   
                        <td>
                            <a class="btn btn-info btn-rounded btn-outline btn-xs" href="<?php echo base_url()."index.php/proker/view/".$row->kode_proker; ?>">
                                <i class="fa fa-caret-square-o-right"></i>
                                View
                                </a>
                            <a class="btn btn-warning btn-rounded btn-outline btn-xs" href="<?php echo base_url()."index.php/cproker/tampil_edit/".$row->kode_proker; ?>">
                                <i class="fa fa-edit"></i>
                                Edit
                                </a>
                            <a class="btn btn-danger btn-rounded btn-outline btn-xs" data-toggle="modal" data-target="#edo-proker" data-kode="<?php echo $row->kode_proker; ?>"
                                  data-nama="<?php echo $row->kegiatan; ?>" >
                                <i class="fa fa-trash"></i>
                                Hapus
                                </a>
                        </td>
                    </tr>
                  <?php }
                  ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- MODAL hapus DATA-->
 <div class="modal inmodal fade" id="edo-proker" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Hapus Data</h4>
                <small class="font-bold">Tolong periksa kembali data yang akan dihapus.</small>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Program Kerja dengan Data :</p>
                Kode Proker: <div class="well kode-proker"></div>
                Nama Kegiatan :<div class="well nama-proker"></div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white">
                <a class="my-link" href="<?php echo base_url()."index.php/cproker/do_delete/"; ?>">Delete</a></button>
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


