<div class="wrapper wrapper-content animated fadeInRight">
     <div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>FORM TAMBAH DATA <small>Masukan data Mata kuliah di bawah ini</small></h5>
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
                        <form class= "form-horizontal" method="POST" action="<?php echo base_url()."index.php/struktur/update"; ?>">
                         <div class="form-group">
                           <label class="col-lg-2 control-label">Kode Struktur</label>
                           <div class="col-lg-10">
                            <input name="kode_struktur" type="text" placeholder="masukan kode" class="form-control" required="" value="<?php echo $str->kode_struktur; ?>" readonly>
                                <span class="help-block m-b-none">
                                <small><i>*kolom ini wajib diisi</i></small></span>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Struktur</label>
                        <div class="col-lg-3">
                            <input name="nama_struktur" type="text" placeholder="masukan nama struktur" class="form-control" value="<?php echo $str->nama_struktur; ?>">
                        </div>
                    
                  <label class="col-sm-1 control-label">Jumlah Anggota</label>
                         <div class="col-sm-2">
                            <select class="form-control m-b" name="jml_anggota">
                                <option value="<?php echo $str->jml_anggota; ?>"><?php echo $str->jml_anggota; ?></option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="hr-line-dashed"></div>
                            <div class="col-lg-offset-10 col-lg-10">
                                <a href="<?php echo base_url()."index.php/struktur/update"; ?>"><button class="btn btn-sm btn-primary" type="submit">Update</button></a>
                                <label id="batal" class="btn btn-default"><a href="<?php echo base_url()."index.php/struktur"; ?>">Batal</a></label> 
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      </div>
                      </div>

                          
                       
                     
                