 <style type="text/css">
    #header {
        width: 100%;
        line-height: 1.3;
    
    }   
    .gbr {
    position: absolute;
    top: 0;
    left: 0;
    }
    .float1{
        border:1px;
        width: 20%;
    }
    .body{
        width: 90%;
        margin-left:35px;
        line-height: 1.5;
        text-align: justify;
    } 
    .skt{
	position: absolute;
	text-align: center;
	top: 800px;
	left: 550px;
    }
    .kakiIsi{
    position: absolute;
    text-align: center;
    top: 760px;
    left: 50px;
    }
    .kakiIsi2 {
    position: absolute;
    text-align: center;
    bottom: 95px;
    left: 33%;
    }
    .note {
    position: absolute;
    bottom: 30;
    font-size: 10px;
    font-style: italic;
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
      <img  style="width: 120px;" src="<?php echo base_url()."/image/bem.png"; ?>" >
 </div>
<hr>
<div class="body">
    <div class="isi1">
        <p style="text-align: right;">Cikarang, <?php echo date('d F Y'); ?></p>
        <p>Nomor : <?php echo $pem->no; ?> <br>
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
<p style="text-align: center;"><b>Hormat kami,</b></p>
<div class="foot">
    <div class="skt">
        Sekretaris HIMATIF
        <br><br>
        <br><br>
        <p style="text-transform: uppercase;"><b><?php echo $pem->penulis; ?></b>
        </p>
    </div>
    <div class="kakiIsi">
        <br><br>
        <p>Ketua Pelaksana</p>
        <br>
        <br>
        <p style="text-transform: uppercase;"><b><?php echo $pem->pj; ?></b></p>
    </div>
</div>
<div class="kakiIsi2">
        <br><br>
        <p>Mengetahui,
        <br>Ketua Badan Eksekutif Mahasiswa (BEM)</p>
        <br>
        <br>
        <p style="text-transform: uppercase;"><b><?php echo $pem->mengetahui; ?></b></p>
</div>
<div class="note">
	<p><b>Catatan :</b>
	<br><?php echo $pem->catatan; ?></p>
</div>