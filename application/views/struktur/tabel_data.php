<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12"> 
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Data Struktur</h5>
                    <div class="ibox-tools">
                            <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i></a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"></a>
                            <a class="close-link">
                            <i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="ibox-content">
                        <div class="">
                            <a class="btn btn-primary" href="<?php echo base_url()."index.php/struktur/add_data"; ?>"> Tambah Data</a>
                            <a class="btn btn-white" href="<?php echo base_url()."index.php/struktur/slide_data"; ?>"> View Data</a>
                        </div><br/>
                      <table class="table table-striped table-responsive" id="edo-copo">
                        <thead>
                            <tr>
                                <th>Kode Struktur</th>
                                <th>Nama Struktur</th>
                                <th>Jumlah Anggota</th>
                                <th>Tindakan</th>
                            </tr>
                        <tbody>
                             <tr>
                             <?php foreach($data as $row) {?>
                                <td><?php echo $row->kode_struktur; ?></td>
                                <td><?php echo $row->nama_struktur; ?></td>
                                <td><?php echo $row->jml_anggota; ?></td>
                                <td>
                                    <a class="btn btn-warning btn-rounded btn-outline btn-xs" href="<?php echo base_url()."index.php/struktur/edit/".$row->kode_struktur; ?>" ><i class="fa fa-pencil"></i> Edit</a>
                                    <a class="btn btn-danger btn-rounded btn-outline btn-xs" data-toggle="modal" data-target="#edo-struktur" data-kode="<?php echo $row->kode_struktur ?>" data-nama="<?php echo $row->nama_struktur; ?>" ><i class="fa fa-trash"></i>  Hapus </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div> 
        </div>
    </div>
</div>
<div class="modal inmodal fade" id="edo-struktur" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content animated flipInY">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Hapus Data</h4>
                <small class="font-bold">Tolong periksa kembali data yang akan dihapus.</small>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus Matakuliah dengan Data :</p>
                Kode struktur: <div class="well kode-struktur"></div>
                Nama struktur :<div class="well nama-struktur"></div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white">
                <a class="my-link" href="<?php echo base_url()."index.php/struktur/do_delete/"; ?>">Delete</a></button>
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




        

