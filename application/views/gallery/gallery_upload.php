 <style type="text/css">
	.card{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	text-align: center;
	}
	.zoom:hover {
	background: #a3a3a3;
	transform: scale(2.10);
	box-shadow: 0 7px 10px #000;
	}
</style> 

 <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox float-e-margins card">
                <div class="ibox-title">
                    <h2><i class="fa fa-qrcode"> Data Tabel Gallery</i></h2>
                    <a class="btn btn-outline btn-rounded btn-white" href="<?php echo base_url('index.php/gallery/'); ?>"><i class="fa fa-upload"> Upload</i></a>
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
                           <thead>
                            <tr>   
                                <th>No.</th> 
                                <th>Nama Gambar</th>
                                <th>Keterangan</th>
                                <th>Tindakan</th>
                            </tr>
                            </thead>
                            <tbody>
                           <?php foreach($data as $row) { ?>
                              <tr>

                                <td><?php echo $row->no; ?></td>
                                <td><img style="width: 70px;" class="zoom" src="<?php echo base_url()."assets/uploads/galeri-himatif/".$row->nama_gambar; ?>"> <?php echo $row->nama_gambar; ?></td>
                                <td><?php echo $row->keterangan; ?></td>
                              
                                <td class="center" >
                                    <a class="btn btn-danger btn-rounded btn-outline btn-xs" data-toggle="modal" data-target="#edo-dvs" data-kode="<?php echo $row->no; ?>" data-nama="<?php echo $row->nama_gambar; ?>" ><i class="fa fa-trash" ></i> hapus</a>
                                </td>
                            </tr>
                              <?php } ?>
                         </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>


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
             
                <a class="my-link btn btn-outline btn-danger" href="<?php echo base_url()."index.php/gallery/do_delete/"; ?>">Delete</a>
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>