<!--FORM-->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/alert/css/themes/default.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<style type="text/css">
  .card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
  }
</style>


<?=$this->session->flashdata('pesan') ?>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="col-lg-9">
    <div class="ibox float-e-margins card">
      <div class="ibox-title">
          <h2><i class="fa fa-qrcode"> Form Pengeluaran</i></h2>
          <div class="ibox-tools">
            <a class="collapse-link">
            <i class="fa fa-chevron-up"></i></a>
          </div>
      </div>
     
      <div style=" border: 2px; padding: 10px; margin-left: 0; background-color:#ffffff; color: #000; font-family: Century;" class="ibox-content" >
      <!--FORM -->
        <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/pengeluaran/simpan"; ?>" >
            <div class="form-group">
                <label class="col-lg-2 control-label">Nama Pengeluaran</label>
                <div class="col-lg-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-pencil"></i> </span>
                        <input type="text" name="nama" placeholder="Masukan Pengeluaran" class="form-control" required>
                    </div>
                </div>
            </div>
                  
                  <div class="form-group">
                      <label class="col-lg-2 control-label">Total Pengeluaran</label>
                    <div class="col-lg-10">
                      <div class="input-group">
                        <span class="input-group-addon">Rp.</span>
                        <input type="text" name="total" placeholder="Masukan Total Pengeluaran" class="form-control" required>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-2 control-label">Tanggal Keluar</label>
                      <div class="col-lg-5">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input type="date" name="tgl_bayar" class="form-control m-b" required>
                      </div>
                    </div>
                  </div>                        
                  
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Detail Pengeluaran</label>
                      <div class="col-lg-10">
                        <textarea cols="5" name="ket" class="form-control"></textarea>
                      </div>
                  </div>
   
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <a href="<?php echo base_url()."index.php/pengeluaran"; ?>" type="button" class="btn btn-outline btn-info" data-dismiss="modal">Refresh</a>
        </form>
      </div>
    </div>
  </div>
<!--tabel Total pengeluran-->
    <div class="col-lg-3">
      <div class="jumbotron card">
        <h2><b>Total Pengeluaran HIMATIF</b></h2>
        <p>Total Pengeluaran yang terhitung pada <?php echo date('j F, Y'); ?></p>
          <hr>
          <div class="ibox float-e-margins">
            <div class="ibox-title">
              <span class="label label-success pull-right">Daily</span>
              <h5>Pengeluaran</h5>
            </div>
            <div class="ibox-content">
                <?php foreach($htg as $rw) { ?>
                <h2 class="no-margins">Rp. <?php echo $rw->total; ?></h2>
                <?php }?>
              <div class="stat-percent font-bold text-success"><i class="fa fa-bolt"></i>
              </div>
            <small>Total income</small>
            </div>
          </div>
      </div>
    </div>
          <div class="ibox float-e-margins card">
            <div class="ibox-title">
                <h2><i class="fa fa-qrcode"> Data Tabel Pengeluaran</i></h2>
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
                   
                    <br/>
                    <br/>
                    
                    <thead>
                      <tr>   
                      <th>Nama Pengeluaran</th>
                      <th>Tanggal Pengeluaran</th>
                      <th>Total Pengeluaran</th>
                      <th>Detail Pengeluaran</th>
                      <th>Tindakan</th>
                      </tr>
                    </thead>
                    
                    <tbody>
                      <?php foreach($data as $row) { ?>
                      <tr>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->tgl_bayar; ?></td>
                        <td><?php echo $row->total; ?></td>
                        <td><?php echo $row->ket; ?></td>
                        <td class="center">
                        <a class="btn btn-warning btn-rounded btn-outline btn-xs" href=""><i class="fa fa-edit"></i> ubah</a>
                        <a class="btn btn-danger btn-rounded btn-outline btn-xs" data-toggle="modal" data-target="#edo-keluar" data-kode="<?php echo $row->id_pengeluaran; ?>" data-nama="<?php echo $row->nama; ?>" ><i class="fa fa-trash" ></i> hapus</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
              </div>
          </div>
        </div>
      </div>

<!--modal hapus-->
<div class="modal inmodal fade" id="edo-keluar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Hapus Data</h4>
                <small class="font-bold">Tolong periksa kembali data yang akan dihapus.</small>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Data Kas Masuk Berikut :</p>
                ID KAS: <div class="well kode-keluar"></div>
                Nama :<div class="well nama-keluar"></div> 
            </div>
            <div class="modal-footer">
      
                <a class="my-link" href="<?php echo base_url()."index.php/pengeluaran/hapus/"; ?>">Delete</a>
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> 


<script type="text/javascript">
  
</script>