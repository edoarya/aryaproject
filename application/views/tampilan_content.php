<style type="text/css">
    .logo {
    height: 100px;
    width: 300px;
    margin-right: 900px;
    }
</style>


<div id="containerr"></div>
        <div class="row  border-bottom white-bg dashboard-header"> 
                    <div class="col-sm-3">
                        <h2>Welcome <strong>HIMATIF</strong>APP</h2>
                        <small>You have 42 messages and 6 notifications.</small>
                        <ul class="list-group clear-list m-t">
                            <li class="list-group-item fist-item">
                                <span class="pull-right">
                                    09:00 pm
                                </span>
                                <span class="label label-success">1</span> Please contact me
                            </li>
                            <li class="list-group-item">
                                <span class="pull-right">
                                    10:16 am
                                </span>
                                <span class="label label-info">2</span> Sign a contract
                            </li>
                            <li class="list-group-item">
                                <span class="pull-right">
                                    08:22 pm
                                </span>
                                <span class="label label-primary">3</span> Open new shop
                            </li>
                            <li class="list-group-item">
                                <span class="pull-right">
                                    11:06 pm
                                </span>
                                <span class="label label-default">4</span> Call back to Sylvia
                            </li>
                            <li class="list-group-item">
                                <span class="pull-right">
                                    12:00 am
                                </span>
                                <span class="label label-primary">5</span> Write a letter to Sandra
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="flot-chart dashboard-chart">
                            <div class="flot-chart-content" id="flot-dashboard-chart"></div>
                        </div> <?php foreach($htg as $row) { ?>
                        <div class="row text-left">
                            <div class="col-xs-4">
                                <div class=" m-l-md">
                                <span class="h4 font-bold m-t block">Rp. <?php
                                $kas =  $row->jml_bayar;
                                 echo $kas; ?></span>
                                <small class="text-muted m-b block">Kas Masuk Sementara</small>
                                </div>
                            </div>  
                            <div class="col-xs-4"><?php foreach($htg2 as $rw) { ?>
                                <span class="h4 font-bold m-t block">Rp. <?php
                                 $keluar = $rw->total;
                                 echo $keluar; ?></span>
                                <small class="text-muted m-b block">Annual sales revenue</small>
                            </div><?php } ?>
                            <div class="col-xs-4">
                                <span class="h4 font-bold m-t block">
                                <?php $hasil =$kas - $keluar;
                                echo "Rp".$hasil;
                                echo "</span>";
                                echo "<small class='text-muted m-b block'>Total Kas Hari ini</small>";
                                echo "</div>";
                            ?>
                          <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="statistic-box">
                        <h4>
                            Project Beta progress
                        </h4>
                        <p>
                            You have two project with not compleated task.
                        </p>
                            <div class="row text-center">
                                <div class="col-lg-6">
                                    <canvas id="polarChart" width="80" height="80"></canvas>
                                    <h5 >Kolter</h5>
                                </div>
                                <div class="col-lg-6">
                                    <canvas id="doughnutChart" width="78" height="78"></canvas>
                                    <h5 >Maxtor</h5>
                                </div>
                            </div>
                            <div class="m-t">
                                <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                            </div>

                        </div>
                    </div>

            </div>


<!--EMAIL FORM-->       
 <div class="wrapper wrapper-content animated fadeInRightBig">
    <div class="row">
            <div class="col-lg-6 ">
                <div class="widget navy-bg no-padding card">
                <?=$this->session->flashdata('pesan') ?>
                <img class="logo" src="<?php echo base_url()."assets/images/gmail.png"; ?>">
            </div>

            <div class="mail-box ">
                <div class="mail-body card">
                    <form class="form-horizontal" action="<?php echo base_url()."index.php/home/sendmail"; ?>" method="post">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kepada:</label>
                            <div class="col-sm-10">
                            <input name="to" placeholder="kepada" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Cc:</label>
                            <div class="col-sm-10">
                            <input name="cc" placeholder="cc" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Subject:</label>
                            <div class="col-sm-10">
                            <input name="subject" placeholder="subject" type="text" class="form-control" required >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Pesan:</label>
                            <div class="col-sm-10">
                                <textarea name="isi" rows="5" type="text" class="form-control" placeholder="Isi Pesan :" ></textarea>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        
                        <div class="mail-body text-right tooltip-demo">
                            <button type="submit" class="btn btn-primary btn-sm" title="Send"><i class="fa fa-reply"></i> Kirim</button>
                            <button class="btn btn-white btn-sm" ><i class="fa fa-times"></i> Batal</button>
                        </div>
                    </form>
                </div>
            <div class="clearfix"></div>
        </div>
    </div>




    <!--KEUANGAN-->
            <div class="col-lg-6">
                <div class="widget navy-bg no-padding card">
                    <div class="p-m">
                        <div class="widget style1">
                            <div class="row card">
                                <div class="col-xs-4 text-left">
                                    <i class="fa fa-indent fa-5x"></i>
                                </div>
                                    <div class="col-xs-8 text-right">
                                        <?php foreach($htg as $row) { ?>
                                            <span>Kas Masuk </span>
                                            <?php 
                                            echo "<h2 class='font-bold'>Rp. ";
                                            $masuk = $row->jml_bayar; 
                                            echo $masuk;
                                            echo "<br>";
                                            echo "<br>"; 
                                            echo "</h2>";
                                        foreach($htg2 as $rw){
                                            echo "<span>Pengeluaran</span>";
                                            echo "<h2>";
                                            $keluar = $rw->total;
                                            echo "<b>";
                                            echo "Rp. " . $keluar;
                                            echo "</b>";
                                            echo "<br>";
                                            echo "<br>";
                                            echo "<hr>";
                                            echo "<h1 class='m-xs'>Rp.". $total = $masuk - $keluar."</h1>";
                                            echo"<h3 class='font-bold no-margins'>
                                            Total Kas Hari Ini
                                            </h3>
                                            <small>Pemasukan sampai pada ".date('d M Y')."</small>";
                                            }
                                            ?>
                                        <?php } ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END-->
        </div>
    </div>

    <script type="text/javascript">
         //set notif welcome
        setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Pengolahan data HIMATIF', 'SELAMAT DATANG di ARYAPP');
            }, 1300);
            //end set notif welcome
    </script>

 