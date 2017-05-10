<table class="table table-bordered">
  <thead>
    <tr>
    <th>Tanggal</th>
    <th>Jumlah</th>
    <th>Keterangan</th>
    </tr>
  </thead>

  <tbody>
    <tr>
   
      <td><?php echo $show->tgl_bayar; ?></td>
      <td><?php echo $show->jml_bayar; ?></td>
      <td><?php echo $show->keterangan; ?></td>
    </tr>
</tbody>
</table>





  <!--MODAL-->
   <!--  <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-laptop modal-icon"></i>
                    <h4 class="modal-title">Modal title</h4>
                    <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                </div>
                <div class="modal-body">
                   
                    <table class="table table-stripped">
                      <thead>
                        <tr>
                          <th>Tanggal</th>
                          <th>Jumlah</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                        <?php foreach($show as $row) { ?>
                          <td><?php echo $row->tgl_bayar; ?></td>
                          <td><?php echo $row->jml_bayar; ?></td>
                        <?php } ?>
                        </tr>
                      </tbody>
                    </table>
                
                            <div class="form-group"><label>Sample Input</label> <input type="email" placeholder="Enter your email" class="form-control"></div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-white" href="<?php echo base_url()."index.php/detail_keuangan"; ?>">Close</a>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
        </div>
 -->