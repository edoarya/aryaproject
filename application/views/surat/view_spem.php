<style type="text/css">
    .ny-container{
      
        font-family: times;
        line-height: 1.5;
        text-align: justify;

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
    img.atur{
    position: absolute;
    top: 30px;
    left: 20px;
    width:160px;
    }
     img.atur2{
    position: absolute;
    top: 30px;
    right: 40px;
    }
    .kaki{
    text-align: right;
    }
    .kakiIsi {

    }
</style>

<div class="wrapper wrapper-content animated fadeInRight">
        <div class="ny-container">
            <div class="row">
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
                                        <img class="atur2" alt="pb" src="<?php echo base_url()."/image/pb.png"; ?>" >
                                        <hr>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="text-right">
                            <a href="<?php echo base_url()."index.php/Csurat/cetakdok/".$pem->nomor; ?>" class="btn btn-white btn-md">
                            <i class="fa fa-print"></i> Download PDF</a>
                        </div>
                        <div class="col-sm-6">
                            <p>Nomor  : <?php echo $pem->nomor; ?></p>
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
                        <div class="kakiIsi">
                        <p>Cikarang, <?php echo date('d F Y'); ?></p>
                        <p>Hormat kami,</p>
                        <br><br>
                        <p><u><?php echo $pem->penulis; ?></u>
                        <br>Sekretaris HIMATIF</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>