
   <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Data Tabel Department</h5>
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
                        <div class="">
                        <a data-toggle="modal" data-target="#addDepart" class="btn btn-outline btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                        </div>
                     
                        <br/>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover " id="edo-copo">
                            <thead>
                            <tr>
                                <th>ID Kas</th>       
                                <th>Jumlah bayar</th>
                                <th>Tanggal Bayar</th>
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
                                <td class="center" >
                                    <a class="btn btn-warning btn-rounded btn-outline btn-xs" ><i class="fa fa-edit"></i> ubah</a>
                                    <a class="btn btn-danger btn-rounded btn-outline btn-xs"><i class="fa fa-trash" ></i> hapus</a>
                                </td>
                            </tr>
                       
                         </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<!-- MODAL INSERT DATA --> 
<div class="modal fade" id="addDepart" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title"><i class="fa fa-calculator"></i> Form Input Departemen</h4>
      </div>
    <div class="modal-body">
            <h1><i class="fa fa-calculator"> Data Kas</i></h1>
            <p>Input data kas dengan benar di form berikut ini.</p><br/><hr>
            <div id="myform_errorloc" class="error_strings">
            </div>
            <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/kas/simpan"; ?>">
              <div class="form-group">
                <label class="col-lg-2 control-label">Nominal Bayar</label>
                  <div class="col-lg-7">
                    <div class="input-group m-b">
                      <span class="input-group-addon">Rp.</span>
                      <input name="jml_bayar" type="text" placeholder="masukan pembayaran" class="form-control" required>
                      <span class="input-group-addon">0.0</span>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Tanggal Bayar</label>
                <div class="col-lg-7">
                  <div class="input-group m-b">
                      <span class="input-group-addon">date</span>
                      <input type="date" name="kontak" class="form-control" required>
                  </div>
                </div>
              </div>
                <div class="form-group"><label class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-5">
                      <select class="form-control m-b" name="jabatan">
                          <option value ="">Pilih</option>
                          <option value ="ketua">Lunas</option>
                          <option value ="Sekretaris">Nunggak</option>
                      </select>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline btn-primary" data-toogle="modal" data-target="#myModal">
                Simpan</button>
                <button type="button" class="btn btn-outline btn-warning" data-dismiss="modal">
                Batal</button>
              </div>
            </form>
     </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

