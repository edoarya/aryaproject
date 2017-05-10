<!-- Tambah Data Dokumen -->
<div class="modal fade" id="tambahdok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Penduduk</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url()."index.php/dokumen/simpan"; ?>" enctype="multipart/form-data">
            <div class="form-group">
                  <label for="tanggalLahir">Tanggal Input</label>
                  <input class="form-control" type="date" name="tanggal_tambah" placeholder="Tanggal Input" required>
            </div>
            <div class="form-group">
                  <label for="nama">Nama</label>
                  <input class="form-control" type="file" name="nama_dok" placeholder="Nama dokumen" required>
            </div>

            <div class="form-group">
                  <label for="alamat">Keterangan</label>
                  <textarea class="form-control" name="keterangan" required>
                  </textarea>
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Insert</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Edit Data Dokumen -->
<div class="modal fade" id="editdok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Data Dokumen</h4>
      </div>
      <div class="modal-body">
    <div class="jumbotron">
      <h1><i class="fa fa-edit">Edit Dokumen</i></h1>
      <p>Ubah dan upload file Anda sesuai dengan data benar.</p><br/><hr>
      <div id="myform_errorloc" class="error_strings">
            </div>
      <form method="POST" id="myform" action="<?php echo base_url()."index.php/dokumen/simpanEdit"; ?>" enctype="multipart/form-data">

      <input type="text" name="entity-key" class="hidden">

      <div class="well kode-dokumen">
        <div class="form-group">
          <label>Tanggal Input</label>
            <div class='input-group date'>
              <input type='date' class="form-control tanggal_tambah" name="tanggal_tambah" />
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
              </span>
            </div>
        </div>
      </div>
          <div class="form-group">
            <label for="exampleTextarea">Keterangan / Catatan</label>
            <textarea class="form-control" id="exampleTextarea" rows="3" name="keterangan"></textarea>
          </div>
        <div class="form-group">
          <label for="exampleInputFile">File input Dokumen</label>
          <input type="file" id="nama_dok" name="nama_dok" required="" class="form-control-file" value="upload">
          <small id="fileHelp" class="form-text text-muted">Upload file dokumen anda disini.</small>
        </div>
      <div class="modal-footer">
        <input class="id" type="hidden" name="id">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Hapus Data Penduduk -->
<div class="modal fade" id="hapusdok" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Data Penduduk</h4>
      </div>
      <div class="modal-body">
        
          <div class="text-delete"></div>
            
      </div>
      <div class="modal-footer">
        <form method="post" action="<?=base_url()?>penduduk/hapusPenduduk">
            <input class="id" type="hidden" name="id">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>




