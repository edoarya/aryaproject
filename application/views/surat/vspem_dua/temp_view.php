<style type="text/css">
    .ny-container{
      
        font-family: times;
        line-height: 1.5;
        text-align: justify;
         width: 80%;

    }
    p {
        font-size: 20px;
        font-family: times;
    }
    hr {
        display: block;
        margin-top: 0.5em; 
        margin-bottom: 0.5em;
        margin-left: auto;
        margin-right: auto;
        border-style: inset;
        border-width: 3px;
    }
    .row {
       

    }
    img.atur{
    position: absolute;
    top: 30px;
    left: 20px;
    width:160px;
    }
    .kaki{
    text-align: right;
    }
    .kakiIsi {
        text-align: left;
        position: relative;
        bottom: 170px;
    }
        .kakiIsi2 {
        text-align: center;
        position: relative;
        bottom: 70px;
</style>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ny-container">
                <div class="row">
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="ibox-content p-xl">
                            <table align="center" border="0" cellpadding="1" style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td colspan="3">
                                            <div align="center">
                                                <span style="font-family: helvetica ; font-size: 30px;">
                                                <b>HIMPUNAN TEKNIK INFORMATIKA (HIMATIF)
                                                <br>SEKOLAH TINGGI PELITA BANGSA CIKARANG</b></span>
                                                <br><b>Jalan Inspeksi Kali Malang - Tegal Danas,Cibatu. Cikarang Sel. Bekasi, Jawa Barat 17530</b>
                                                <img class="atur" src="<?php echo base_url()."/image/bem.png"; ?>" >
                                                
                                                <hr>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="text-right">
                                    <a href="<?php echo base_url()."index.php/Csurat/cetakdok_spem_dua/".$pem->no; ?>" class="btn btn-white btn-md">
                                    <i class="fa fa-print"></i> Download PDF</a>
                                </div>
                                <div class="col-sm-6">
                                    <p>Nomor  : <?php echo $pem->no; ?></p>
                                    <p>Perihal : <?php echo $pem->perihal ?></p>
                                    <p>Kepada Yth.<br>
                                    <?php echo $pem->kepada; ?><br>
                                    <?php echo $pem->posisi; ?><br>
                                    Di Tempat</p>
                                </div>
                            <br/>
                            </div>
                            <br/>
                            <p>Dengan hormat,</p>
                            <p><?php echo $pem->isi; ?></p>
                            <br>
                            <br>
                            <div class="kaki">
                                <div class="">
                                    <p style="text-align: right;">Cikarang, <?php echo date('d F Y'); ?>
                                    <br>Hormat kami,</p>
                                    <br>
                                    <p>Sekretaris HIMATIF</p>
                                    <br><br>
                                    <p style="text-transform: uppercase;"><b><?php echo $pem->penulis; ?></b></p>
                                </div>
                                <div class="kakiIsi">
                                    <br><br>
                                    <p>Ketua Pelaksana</p>
                                    <br>
                                    <br>
                                    <p style="text-transform: uppercase;"><b><?php echo $pem->pj; ?></b></p>
                                </div>
                                <div class="kakiIsi2">
                                    <br><br>
                                    <p>Mengetahui,
                                    <br>Ketua Badan Eksekutif Mahasiswa (BEM)</p>
                                    <br>
                                    <br>
                                    <p style="text-transform: uppercase;"><b><?php echo $pem->mengetahui; ?></b></p>
                                </div>
                            </div>
                                <div>
                                    <br>
                                    <small><b>Catatan:</b>
                                    <br><?php echo $pem->catatan; ?></small>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    