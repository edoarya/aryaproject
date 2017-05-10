<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<style type="text/css">
.cont {
    width: 100%;
    position: absolute;
    left: 75%;
  }
.form-style-8{
    font-family: 'Open Sans Condensed', arial, sans;
    width: 1000px;
    padding: 150px;
    background: #4D4D4D;
    margin: 50px auto;
    box-shadow: 0px 0px 55px rgba(0, 0, 0, 0.32);
    -moz-box-shadow: 0px 0px 15px rgba(0, 0, 3, 0.22);
    -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
label {
    font-size: 20px;
    font-family: 'Open Sans Condensed', arial, sans;
    color: white;
}
.form-style-8 h1{
    width: 900px;
    background: #4D4D4D;
    text-transform: uppercase;
    font-family: 'Open Sans Condensed', sans-serif;
    color: #fff;
    font-size: 45px;
    font-weight: 200;
    padding: 20px;
    margin: -50px -50px 50px -105px;
    
}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 textarea,
.form-style-8 select 
{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    outline: none;
    display: block;
    width: 100%;
    padding: 7px;
    border: none;
    border-bottom: 1px solid #ddd;
    background: transparent;
    margin-bottom: 10px;
    font: 25px Arial, Helvetica, sans-serif;
    height: 45px;
    color: #3dba92;
}
.form-style-8 textarea{
    resize:none;
    overflow: hidden;
}
.form-style-8 input[type="button"], 
.form-style-8 input[type="submit"]{
    -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    box-shadow: inset 0px 1px 0px 0px #45D6D6;
    background-color: #2CBBBB;
    border: 1px solid #27A0A0;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    font-family: 'Open Sans Condensed', sans-serif;
    font-size: 14px;
    padding: 8px 18px;
    text-decoration: none;
    text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="submit"]:hover {
    background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
    background-color:#34CACA;
}
</style>


<div class="form-style-8">
<h1>FORM DATA KAS MASUK</h1>
   <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/kas/update"; ?>"  >
    <div class="form-group">
      <label class="col-lg-2 control-label">ID KAS</label>
        <div class="col-lg-4">
           <input type="text" name="id_kas" class="form-control" value="<?php echo $ks->id_kas; ?>" readonly>
        </div>
        <div class="col-lg-5">
            <input type="text" name="kode_dep" class="form-control" value="<?php echo $ks->nama_lengkap; ?>" readonly>
        </div>
      </div>

      <div class="form-group">
        <label class="col-lg-2 control-label">Jumlah Bayar</label>
          <div class="col-lg-10">
            <input type="text" name="jml_bayar" value="<?php echo $ks->jml_bayar; ?>" class="form-control">
          </div>
      </div>
       <div class="form-group">
        <label class="col-lg-2 control-label">Tanggal Bayar</label>
          <div class="col-lg-10">
            <input type="date" name="tgl_bayar" class="form-control m-b" value="<?php echo $ks->tgl_bayar; ?>">
          </div>
      </div>
      <div class="form-group">
        <label class="col-lg-2 control-label">Status</label>
          <div class="col-lg-10">
            <select class="form-control m-b" name="keterangan">
                <option value ="<?php echo $ks->keterangan; ?>">Pilih</option>
                <option value ="Terbayar">Terbayar</option>
                <option value ="Belum Terbayar">Belum Terbayar</option>
            </select>
          </div>
      </div>
        
      <div class="modal-footer">
        <button type="submit" class="btn btn-outline btn-primary">Simpan Perubahan</button>
        <a href="<?php echo base_url()."index.php/kas"; ?>" type="button" class="btn btn-outline btn-info" data-dismiss="modal">Batal</a>
      </div>
    </form>
</div>
<!-- 
<div class="wrapper wrapper-content animated fadeInRight ecommerce">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>FORM EDIT DATA <small>Edit data Dosen di bawah ini</small></h5>
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
                <form class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/kas/update"; ?>">

                     <div class="form-group">
                        <label class="col-lg-2 control-label">ID Kas</label>
                        <div class="col-lg-10">
                            <input name="id_kas" type="text" class="form-control" required="" value="<?php echo $ks->id_kas; ?>" readonly>
                            <span class="help-block m-b-none" id="kode"><small><i>*can not be changed</i></small></span>
                        </div>
                    </div>
                   <div class="form-group">
                        <label class="col-lg-2 control-label">Kode Depart.</label>
                        <div class="col-lg-10">
                            <input name="kode_dep" type="text"  class="form-control" value="<?php echo $ks->kode_dep; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Jumlah Bayar</label>
                        <div class="col-lg-4">
                            <div class="input-group date">
                                 <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                 <input name="jml_bayar" type="text" class="form-control" value="<?php echo $ks->jml_bayar; ?>">
                             </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="col-lg-2 control-label" for="date_added">Tanggal Bayar</label>
                            <div class="col-lg-4">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    <input id="date_added" name="tgl_bayar" type="date" class="form-control" value="<?php echo $ks->tgl_bayar; ?>" >
                            </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-lg-2 control-label">Status Pembayaran</label>
                        <div class="col-lg-3">
                            <select class="form-control m-b" name="keterangan">
                                <option value ="<?php echo $ks->keterangan; ?>">Pilih</option>
                                <option value ="Terbayar">Terbayar</option>
                                <option value ="Belum Terbayar">Belum Terbayar</option>
                            </select>
                        </div>
                    </div>
                   <div class="form-group">
                        <div class="hr-line-dashed"></div>
                            <div class="col-lg-offset-10 col-lg-10">
                                <a href="<?php echo base_url()."index.php/kas/update"; ?>">
                                    <button class="btn btn-sm btn-primary" type="submit">Update</button></a>
                                    <label id="batal" class="btn btn-default"><a href="<?php echo base_url()."index.php/kas"; ?>">Batal</a></label> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 -->


