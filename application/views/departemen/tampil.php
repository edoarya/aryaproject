
      <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Data Tabel Department</h5>
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
                    <div class="">
                        <table class="table table-bordered " id="edo-copo">
                            <thead>
                            <tr>
                                <th>Kode Departemen</th>
                                <th>Nama Departemen</th>          
                                <th>Nama Lengkap</th>
                                <th>Jabatan</th>
                                <th>Tindakan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <?php foreach($data as $row) { ?>
                                <td><?php echo $row->kode_dep; ?></td>
                                <td><?php echo $row->nama_dep; ?></td>
                                <td><?php echo $row->nama_lengkap; ?></td>
                                <td><?php echo $row->jabatan; ?></td>                                         
                                <td>
                                    <a href="<?php echo base_url()."index.php/divisi/simpankas/".$row->kode_dep; ?>">Pilih</a>
                                </td>                                         
                            </tr>
                              <?php } ?>
                         </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

                            
                        
                   
