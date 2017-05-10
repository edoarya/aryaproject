<br/>
<br/>  
 <?=$this->session->flashdata('pesan') ?>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <?php foreach($data as $row){ ?>
                <div class="col-sm-4">
                  <div class="ibox">
                    <div class="ibox-title">
                         <a href="<?php echo base_url()."index.php/struktur_div/detail_proker"; ?>" class=""></a>
                        <h5><?php echo $row->nama_struktur; ?></h5>

                   <div class="dropdown pull-right">
                    <button class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Opsional
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url()."index.php/struktur_div/show_struktur/".$row->id_struktur; ?>">
                            <i class="fa fa-desktop"></i> VIEW</a></li>
                      
                      <li><a href="<?php echo base_url()."index.php/struktur_div/edit/".$row->id_struktur; ?>">
                            <i class="fa fa-pencil-square"></i> EDIT</a></li>
                      
                      <li><a data-toggle="modal" data-target="#hapus-struktur" data-id="<?php echo $row->id_struktur; ?>" data-nama="<?php echo $row->nama_struktur; ?>">
                            <i class="fa fa-trash"></i> DELETE</a></li>
                    </ul>
                  </div>
                     </div> 
                    <div class="ibox-content card">
                            <h4>Deskripsi</h4>
                            <p>
                            <?php echo $row->visi_misi ?>
                            </p>
                    </div>
                </div>
             </div>
              <?php }?>
            </div>
          

<!-- modal delete -->
<div class="modal inmodal" id="hapus-struktur" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <i class="fa fa-pencil-square modal-icon"></i>
                <h4 class="modal-title">HAPUS DATA STRUKTUR</h4>
                <small class="font-bold">Data ini akan di hapus secara <b>permanen</b>. Apakah anda yakin ingin menghapusnya?</small>
            </div>
           
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Dosen dengan Data :</p>
                ID : <div class="well id-struktur"></div>
                Departemen/struktur :<div class="well nama-struktur"></div> 
            </div>
            <div class="modal-footer"> 
                <a class="edo-link" href="<?php echo base_url()."index.php/struktur_div/do_delete/"; ?>">Delete</a>
                <button type="button" class="btn btn-outline btn-warning" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
