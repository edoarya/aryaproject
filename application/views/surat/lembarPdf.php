<style type="text/css">
    #header {
        width: 97%;
        line-height: 1.3;
    }   
    .gbr {
    position: absolute;
    top: 10px;
    left: 0;
    }
     .gbr2 {

    position: absolute;
    top: 10px;
    right: 0;
    height: 140px;
    }
    .float1{
        border:1px;
        width: 20%;
    }
    .body{
        width: 95%;
        margin-left: 10px;
        line-height: 1.5;
        text-align: justify;
    }
    .footer{
        margin-left: 570px;
         line-height: 1.5;
    } 
</style>
<div id="header">
    <div class="" align="center">
        <h3>HIMPUNAN TEKNIK INFORMATIKA (HIMATIF)<br> SEKOLAH TINGGI PELITA BANGSA CIKARANG<br>
        <small style="font-size: 13px;">Jalan Inspeksi Kali Malang - Tegal Danas-Cibatu. 
         Cikarang Sel. Bekasi, Jawa Barat 17530.</small></h3>
    </div>
</div>
 <div class="gbr">
      <img  style="width: 110px;" src="<?php echo base_url()."/image/bem.png"; ?>" >
     </div>
     <div class="gbr2">
        <img  style="width: 130px; text-align: right;" src="<?php echo base_url()."/image/pb.png"; ?>" > 
     </div>
<hr>
<div class="body">
    <div class="isi1">
        <p>
        Nomor : <?php echo $pem->nomor; ?> <br>
        Perihal : <?php echo $pem->perihal; ?><br>
        </p>
        <p>
        Kepada Yth.<br>
        <?php echo $pem->kepada; ?><br>
        <?php echo $pem->posisi; ?>
        <br>
        di Tempat
        </p>
    </div>
    <br>
    <div class="isi2">
        <p>Dengan hormat,<br>
    <?php echo $pem->isi; ?></p>
    </div>
</div>
<br>
<div class="footer">
    <p>Cikarang, <?php echo date('d M Y'); ?>
        <br>Hormat kami,
    </p>
    <br>
    <br>
    <?php echo $pem->penulis; ?><br>
    Sekretaris
</div>