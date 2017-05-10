<!--FORM-->
<link href="<?php echo base_url(); ?>assets/css/plugins/select2/select2.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<style type="text/css">
.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
</style> 

<div class="wrapper wrapper-content animated fadeInRight"> 
  <div class="row">
    <div class="col-lg-9">
      <div class="ibox float-e-margins card">
          <div style=" border: 2px; padding: 10px; margin-left: 0; background-color:#494949; color: #fff; font-family: Century;" class="ibox-title">
              <h5>FORM INPUT KAS</h5>
            <div class="ibox-tools">
                <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
                </a>
            </div>
          </div>
          <div style=" border: 2px; padding: 10px; margin-left: 0; background-color:#f1f1f2; color: #000; font-family: Century;" class="ibox-content">
            <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/kas/simpan"; ?>" onsubmit="return validasi_input(this)" >
               <div class="form-group">
              <label class="col-lg-2 control-label">Nama</label>
                <div class="col-lg-10">
                  <select class="form-control" name="kode_dep">
                    <option value="" >pilih</option>
                    <?php foreach($join2 as $row){ ?>
                    <option value="<?php echo $row->kode_dep; ?>"> <?php echo $row->nama_lengkap; ?>
                    </option>
                    <?php }; ?>
                  </select> 
                </div>
              </div>

              <div class="form-group"> 
                <label class="col-lg-2 control-label">Jumlah Bayar</label>
                  <div class="col-lg-10">
                    <input type="text" name="jml_bayar" placeholder="masukan pembayaran" class="form-control" required>
                  </div>
              </div>
               <div class="form-group">
                <label class="col-lg-2 control-label">Tanggal Bayar</label>
                  <div class="col-lg-5">
                    <input type="date" name="tgl_bayar" class="form-control m-b" required>
                  </div>
              </div>
         
              <div class="modal-footer">
                <button type="submit" class="btn btn-outline btn-primary">Simpan</button>
                <a href="<?php echo base_url()."index.php/kas"; ?>" type="button" class="btn btn-outline btn-info" data-dismiss="modal">Refresh</a>
              </div>
            </form>
          </div>
    </div>
</div>

<!-- TOTAL MASUK -->
 <div class="col-lg-3">
    <div class="jumbotron card">
       <h2><b>Total Kas Masuk HIMATIF</b></h2>
       <p>Total kas yang masuk pada <?php echo date('j F, Y'); ?></p>
       <hr>
      <div class="ibox float-e-margins">
          <div class="ibox-title">
              <span class="label label-success pull-right">Daily</span>
              <h5>Pemasukan</h5>
          </div>
          <div class="ibox-content">
          <?php foreach($htg as $row) { ?>
              <h2 class="no-margins">Rp. <?php echo $row->jml_bayar; ?></h2>
          <?php } ?>
              <div class="stat-percent font-bold text-success">
                <i class="fa fa-bolt"></i>
              </div>
              <small>Total income</small>
          </div>
      </div>
    </div>
  </div>
</div>

<!--TABLE-->
<div class="tbl">
  <div class="wrapper wrapper-content animated fadeInRight">
      <?=$this->session->flashdata('pesan') ?> 
      <div class="row">
          <div class="col-lg-12">
           

            <div class="ibox float-e-margins card">
                <div style="border: 2px; padding: 10px; margin-left: 0; background-color:#494949; color: #fff; font-family: Century;" class="ibox-title">
                    <h5>Data Tabel Kas</h5>
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
             

<form method="post" action="<?php echo base_url()."index.php/kas/report"; ?>">      
    <table>
      <thead>
        <tr>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
             <select class="form-control" name="bulan" id="select2">
                  <option value="" >Pilih Bulan </option>
                  <?php foreach($bln as $row) { ?>
                  <option><?php echo $row->tgl_bayar; ?></option>
                  <?php } ?>
             </select>
          </td>
          <td>
          <a href="<?php echo base_url()."index.php/kas/month_report/tgl_bayar"?>" type="submit" class="btn btn-outline btn-white"><i class="fa fa-print"></i>  View Report</a> 
          </td>
        </tr>
      </tbody>
    </table>
  </form>
  <br>

                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover" id="edo-copo" >
                            <thead>
                            <tr>
                                <th> Kas ID</th>
                                <th >Nama Anggota</th>
                                <th >Jumlah Pembayaran</th>
                                <th >Tanggal Bayar</th>
                                <th >Status</th>
                                <th >Tindakan</th>
                            </tr>
                            </thead>
                            <tbody>
                              <tr>
                               <?php foreach($data as $row) { ?>
                                  <td><?php echo $row->id_kas;?></td>
                                  <td><?php echo $row->nama_lengkap;?></td>
                                  <td><?php echo $row->jml_bayar;?></td>
                                  <td><?php echo $row->tgl_bayar; ?></td>
                                  <td><?php echo $row->keterangan;?></td>
                                  <td>
                                    <a href="<?php echo base_url()."index.php/kas/month_report/".$row->tgl_bayar; ?>" class="btn btn-outline btn-info btn-rounded btn-xs" href="">
                                    <i class="fa fa-edit"></i> Print</a>
                                    <a href="<?php echo base_url()."index.php/kas/edit/".$row->id_kas; ?>"  class="btn btn-outline btn-warning btn-rounded btn-xs" href="">
                                    <i class="fa fa-edit"></i> ubah</a>
                                    <button data-toggle="modal" data-target="#edo-kas" data-kode="<?php echo $row->id_kas; ?>" data-nama="<?php echo $row->nama_lengkap; ?>" class="btn btn-outline btn-danger btn-rounded btn-xs"  >
                                    <i class="fa fa-trash"></i> hapus</button>
                                  </td> 
                              </tr>
                            <?php }; ?>
                            </tbody>
                          </table>
                      </div>
                  </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>           
<!--modal hapus-->
<div class="modal inmodal fade" id="edo-kas" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Hapus Data</h4>
                <small class="font-bold">Tolong periksa kembali data yang akan dihapus.</small>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Data Kas Masuk Berikut :</p>
                ID KAS: <div class="well kode-kas"></div>
                Nama :<div class="well nama-kas"></div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white">
                <a class="my-link" href="<?php echo base_url()."index.php/kas/do_delete/"; ?>">Delete</a></button>
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>assets/js/plugins/select2/select2.full.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".select2_demo_3").select2({
                placeholder: "Select",
                allowClear: true
            });
  });

  function validasi_input(form){
      if (form.jml_bayar.value != ""){
      var x = (form.jml_bayar.value);
      var status = true;
      var list = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
      for (i=0; i<=x.length-1; i++)
      {
      if (x[i] in list) cek = true;
      else cek = false;
     status = status && cek;
      }
      if (status == false)
      {
       $.bootstrapGrowl('Data harus berisi Angka!.',{
        type: 'danger',
        delay: 2000,
        });
      form.jml_bayar.focus();
      return false;
      }
      }
      return (true);
      }
</script>


