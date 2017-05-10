

<div class="wrapper wrapper-content animated fadeInRight">   
    <div class="row">
        <div class="ibox-content p-xl">
           
                  <h1>Laporan Keuangan Bulan</h1>
                  <p>Berikut ini adalah laporan Detail (rinci) bulanan. Laporan disusun berdasarkan data kas yang telah masuk</p>
                   <hr>
    
                        <div class="text-right">
                            <a href="" class="btn btn-white btn-md">
                            <i class="fa fa-print"></i> Download PDF</a>
                        </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <table>
                            <tbody>
                              <tr>
                              <?php foreach($ctk as $row) { ?>
                                <td><b>Periode</b></td>
                                <td> &nbsp; :</td>
                                <td>&nbsp; <?php echo $row->tgl_bayar ?></td>
                              </tr>

                              <tr>
                                <td>Total</td>
                                <td>&nbsp; :</td>
                                <td>&nbsp; <?php echo $row->jml_bayar ?></td>
                              </tr>
                         <?php }?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

                      
                  
    