<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
<style type="text/css">
.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}
</style> 

<!--FORM-->
<div class="wrapper wrapper-content animated fadeInLeftBig">
  <div class="container card">
      <div class="ibox-title">
          <h2><i class="fa fa-file"> Form Input Departemen</i></h2>
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
    <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/departemen/simpan_data"; ?>" enctype="multipart/form-data" onsubmit="return validasi_input(this)" >

      <div class="form-group">
        <div class="col-lg-2"><label class="label-control">Nama Lengkap </label><br></div>
        <div class="col-lg-10"><div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-user"></i></span> 
          <input name="nama_lengkap" type="text" placeholder="masukan nama lengkap" class="form-control">
          </div>
        </div>
      </div>

      <div class="form-group">

        <div class="col-lg-2"><label class="label-control">Struktur </label><br></div>
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

        <div class="col-lg-2"><label class="label-control">Nama Jabatan </label><br></div>
        <div class="col-sm-5">
            <select class="form-control m-b" name="jabatan">
                <option value ="">Pilih Jabatan</option>
                <option value ="ketua">Ketua</option>
                <option value ="Sekretaris">Sekretaris</option>
                <option value ="Bendahara">Bendahara</option>
                <option value ="Anggota">Anggota</option>
            </select>
        </div>
      </div>
      <div class="form-group">
        
        <div class="col-lg-2"><label class="label-control">No. Handphone </label><br></div>
          <div class="col-lg-10"><div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-mobile"></i></span> 
            <input type="numeric" name="hp" placeholder="masukan no hp" class="form-control" required>
            </div>
          </div>
      </div>
       <div class="form-group">
    
        <div class="col-lg-2"><label class="label-control">Email </label><br></div>
          <div class="col-lg-10"><div class="input-group m-b"><span class="input-group-addon"><i class="fa fa-envelope"></i></span> 
            <input type="email" name="email" placeholder="masukan email" class="form-control" required>
            </div>
          </div>
      </div>
      <div class="form-group">
      
        <div class="col-lg-2"><label class="label-control">Upload Foto</label><br></div>
            <div class="col-lg-10">
              <div class="input-group m-b">
                <input name="userfile" type="file" class="form-control" required>
                <span class="input-group-btn"> <button type="file" class="btn btn-primary"><i class="fa fa-folder-open-o"></i></button> </span>
              </div>
            </div>
      </div>
        <button type="submit" class="btn btn-outline btn-primary">Simpan</button>
        <a href="<?php echo base_url()."index.php/departemen"; ?>" type="submit" class="btn btn-outline btn-info" data-dismiss="modal">Refresh</a>
    </form>
  </div>
  </div>
  </div>


  <!--Tabel -->
      <div class="wrapper wrapper-content animated fadeInRightBig">
            <div class="ibox float-e-margins card">
                <div class="ibox-title">
                    <h2><i class="fa fa-qrcode"> Data Tabel Departemen</i></h2>
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
                          <li><a href="<?php echo base_url()."index.php/departemen/generate_report_nama"; ?>">Departemen</a></li>
                          <li><a href="<?php echo base_url()."index.php/departemen/generate_pdf_report"; ?>">All data</a></li>
                        </ul>
                    </div><br/><br/>
                            <thead>
                            <tr>   
                                <th>Kode Depart</th> 
                                <th>Nama Lengkap</th>
                                <th>Struktur Departemen</th>
                                <th>Jabatan</th>
                                <th>hp</th>
                                <th>email</th>
                                <th>Dir.Foto</th>
                                <th>Tindakan</th>
                            </tr>
                            </thead>
                            <tbody>
                           <?php foreach($data as $row) { ?>
                              <tr>

                                <td><?php echo $row->kode_dep; ?></td>
                                <td><?php echo $row->nama_lengkap; ?></td>
                                <td><?php echo $row->nama_struktur; ?></td>
                                <td><?php echo $row->jabatan; ?></td>                                
                                <td><?php echo $row->hp; ?></td>
                                <td><?php echo $row->email; ?></td>
                                <td><?php echo $row->foto; ?></td>
                              
                                <td class="center" >
                                    <a class="btn btn-warning btn-rounded btn-outline btn-xs" href="<?php echo base_url()."index.php/departemen/edit/".$row->kode_dep; ?>"><i class="fa fa-edit"></i> ubah</a>
                                    <a class="btn btn-danger btn-rounded btn-outline btn-xs" data-toggle="modal" data-target="#edo-dvs" data-kode="<?php echo $row->kode_dep; ?>" data-nama="<?php echo $row->nama_lengkap; ?>" ><i class="fa fa-trash" ></i> hapus</a>
                                </td>
                            </tr>
                              <?php } ?>
                         </tbody>
                        </table>
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

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript">
    function validasi_input(form){
    if(form.nama_lengkap.value == ""){
       toastr.error('Kolom Nama Lengkap Tidak Boleh Kosong !', 'KESALAHAN!', {timeOut: 4000})
      form.hp.focus();
      return false;
    }
    if (form.hp.value != ""){
    var x = (form.hp.value);
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
     toastr.error('No.Handphone Harus Berupa Angka!', 'KESALAHAN!', {timeOut: 4000})
    form.hp.focus();
    return false;
    }
    }
    return (true);
    }
</script>
 

                            
                        
                   
