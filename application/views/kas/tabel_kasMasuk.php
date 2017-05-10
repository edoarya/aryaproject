<div class="wrapper wrapper-content animated fadeInRight">
  <div class="ibox float-e-margins">
      <div style=" padding: 10px; margin-left: 0; background-color:#0fc587; color: #ffffff; font-family: Century;" class="ibox-title">
          <h5>FORM INPUT KAS</h5>
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
    <?=$this->session->flashdata('pesan') ?>
    <?=$this->session->flashdata('hapus') ?>
    <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/kas_masuk/simpan_data"; ?>" enctype="multipart/form-data" >
      <div class="form-group">
        <label class="col-lg-2 control-label">Nama Lengkap</label>
        <div class="col-lg-8">
          <input name="nama_lengkap" type="text" placeholder="masukan nama lengkap" class="form-control" required>
        </div>
      </div>
      <div class="form-group"><label class="col-sm-2 control-label">Struktur</label>
        <div class="col-sm-5">
      <?php
        echo "
          <select class='form-control m-b' name='id_struktur' id='select-struktur' required>
          <option value='' disabled selected>Pilih</option>";
            foreach ($data_join->result() as $row) {  
            echo "<option value='".$row->id_struktur."'>".$row->nama_struktur."</option>";
      }
        echo"</select>";
      ?>
        </div>
      </div>
      <div class="form-group">
      <label class="col-lg-2 control-label">Jumlah Pembayaran</label>
        <div class="col-lg-8">
            <div class="input-group m-b">
                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                <input name="jml_bayar" type="text"  class="form-control" required>
            </div>
        </div>
      </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Tanggal Pembayaran</label>
      <div class="col-lg-5">
            <div class="input-group m-b">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
               <input type="date" name="tgl_bayar" placeholder="masukan waktu Pembayaran" class="form-control" required>
            </div>
      </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Note*</label>
        <div class="col-lg-8">
          <textarea rows="3" name="keterangan" class="form-control"></textarea>
        </div>
    </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-outline btn-primary">Simpan</button>
        <a href="<?php echo base_url()."index.php/kas_masuk"; ?>" type="button" class="btn btn-outline btn-info" data-dismiss="modal">Refresh</a>
      </div>
    </form>
  </div>
</div>

  <!--Tabel -->
      <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox float-e-margins">
                <div style=" padding: 10px; margin-left: 0; background-color:#0fc587; color: #ffffff; font-family: Century;" class="ibox-title">
                    <h5>DATA TABEL KAS</h5>
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
                  <div class="table-responsive">
                        <table class="table table-striped table-hover " id="edo-copo">
                        <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="fa fa-print"></i> Cetak Laporan
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li class="dropdown-header">Sort by :</li>
                          <li><a href="<?php echo base_url()."index.php/kas_masuk/generate_report_nama"; ?>">Departemen</a></li>
                          <li><a href="<?php echo base_url()."index.php/kas_masuk/generate_pdf_report"; ?>">All data</a></li>
                        </ul>
                    </div><br/><br/>
                            <thead>
                            <tr>   
                                <th>Nama pembayar</th> 
                                <th>Nama Struktur</th>
                                <th>Jumlah bayar</th>
                                <th>Tanggal bayar</th>
                                <th>Status</th>
                                <th>Tindakan</th>
                            </tr>
                            </thead>
                            <tbody>
                              <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="center" >
                                    <a class="btn btn-warning btn-rounded btn-outline btn-xs"><i class="fa fa-edit"></i> ubah</a>
                                    <a class="btn btn-danger btn-rounded btn-outline btn-xs" data-toggle="modal"><i class="fa fa-trash" ></i> hapus</a>
                                </td>
                            </tr>
                         </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

<!-- MODAL HAPUS -->
<div class="modal inmodal fade" id="edo-dvs" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Hapus Data</h4>
                <small class="font-bold">Tolong periksa kembali data yang akan dihapus.</small>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Program Kerja dengan Data :</p>
                Kode Departemen : <div class="well kode-dvs"></div>
                Nama Departemen : <div class="well nama-dvs"></div>
            </div>
            <div class="modal-footer">
             
                <a class="my-link btn btn-outline btn-danger" href="<?php echo base_url()."index.php/departemen/do_delete/"; ?>">Delete</a>
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

 

                            
                        
                   
