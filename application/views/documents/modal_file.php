 <div class="modal inmodal" id="addDataFile" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <!-- <i class="fa fa-file modal-icon"></i> -->
                <img  style="width: 150px; height: 160px;" src="<?php echo base_url(); ?>image/doc_icon.png">
                <h4 class="modal-title">ADD DOCUMENT</h4>
                <small class="font-bold">Lengkapi kolom dibawah ini, Upload File Anda dengan ekstensi doc, docs, pdf atau xlsx.</small>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo base_url()."index.php/cdocument_file/simpan_file"; ?>" enctype="multipart/form-data">

                    <div class="form-group"><label>Judul File</label> <input type="text" placeholder="Masukan Judul File" class="form-control" name="judul" required>
                    </div>
                    <div class="form-group"><label>Tanggal Input</label><input type="date" name="tanggal_input" class="form-control" required></div>
                    <div class="form-group"><label>Desc.</label> <input type="text" name="keterangan" placeholder="Masukan Deskripsi" class="form-control" required>
                    </div>
                     <div class="form-group"><label>Upload File</label> <input type="file" name="userfile" placeholder="Masukan Deskripsi" class="form-control" required>
                    </div>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Simpan Data</button>
            </div>
             </form>
        </div>
    </div>
</div>
<!-- 
<?php if($this->session->flashdata()) :?>
<div class="modal fade" id="myModal" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel"><?php echo $this->session->flashdata('message'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="text-center">
      <h1>Berhasil !</h1>
       <img style="width: 200px; height: 170px;" src="<?php echo base_url(); ?>assets/img/success.png">
      </div>
      </div>
      <div class="modal-footer">
      <button type="button" data-dismiss="modal" class="btn btn-block btn-outline btn-info">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endif ; ?>
 -->