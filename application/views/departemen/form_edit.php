 <div class="wrapper wrapper-content animated tada">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h2><i class="fa fa-pencil"> Form Update Departemen</i></h2>
                        <small> Dibawah ini adalah form ubah Departemen.</small>
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
                    <div class="row">
                        <div class="col-sm-9 b-r">
                        <?=$this->session->flashdata('pesan') ?>
                            <form method="POST" action="<?php echo base_url()."index.php/departemen/simpan_ubah"; ?>" enctype="multipart/form-data">
                                 <div class="form-group">
                                    <label>Kode Dep</label>
                                    <input type="text" class="form-control" name="kode_dep" value="<?php echo $dep->kode_dep; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $dep->nama_lengkap; ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label>Struktur</label>  
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
                               
                                <div class="form-group">
                                     <label class="label-control">Jabatan</label>
                                    <div class="input-group">
                                        <select name="jabatan" class="chosen-select form-control" style="width:350px;" tabindex="2" >
                                            <option value="<?php echo $dep->jabatan; ?>"><?php echo $dep->jabatan; ?></option>
                                            <option value="Ketua Dept">Ketua Dept.</option>
                                            <option value="Bendahara">Sekretaris</option>
                                            <option value="Bendahara">Bendahara</option>
                                            <option value="Anggota">Anggota</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>No.Hp</label>
                                    <input type="text" name="hp" class="form-control" value="<?php echo $dep->hp; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $dep->email; ?>">
                                </div>
                                
                                 <div class="form-group">
                                    <label>Update Upload Image</label> 
                                    <input type="file" name="userfile" class="form-control" value="<?php echo $dep->foto; ?>" required >
                                </div> 
                                
                                <button type="submit" class="btn btn-outline btn-primary">Simpan ubah</button>
                                <a href="<?php echo base_url()."index.php/departemen"; ?>" class="btn btn-outline btn-warning">Batal</a>
                            </form>
                        </div>
                        <div class="col-sm-2">
                            <p class="text-center">
                            <h1>Form Update Image</h1>
                            <img src="<?php echo base_url()."assets/uploads/".$dep->foto;  ?>" width="300px" class="img-thumbnail">
                            <small>Periksa kembali data yang telah di update sebelum Anda Menyimpan</small>
                            </p>
                            <hr>
                            <button type="button" class="btn btn-outline btn-link btn-xs">
                            <a href="<?php echo base_url()."index.php/departemen"; ?>"> <p>< Back to Departemen</p> </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 