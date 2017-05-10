<style type="text/css">
    .cop {
        text-align: center;
        width: 95%;
    }
    .header {
        font-family: times;
        line-height: 1.5;
        text-align: justify;
    }
    .body {
        margin-left: 20px;
        width: 95%;
    }

    hr {
        display: block;
        margin-top: 0.5em; 
        margin-bottom: 0.5em;
        margin-left: auto;
        margin-right: auto;
        border-style: inset;
        border-width: 1px;
        border-color: grey;
        width: 90%;
    }
    .tanggal{
        text-align: right;
       
    }
    .ny-container{
      
        font-family: times;
        line-height: 1.5;
        text-align: justify;
        

    }
   
</style>
<div class="body">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox-content p-xl">
                <div class="cop">
                    <h3>PROGRES PROGRAM KERJA DEPARTEMEN
                    <strong><?php echo strtoupper($prkr->nama_struktur); ?></strong>
                    </h3>

                </div><hr style="border-width: 3px; border-color:black;">
                <div class="tanggal">
                    <strong>Tanggal :</strong>
                    <?php echo date('d m Y'); ?>
                </div>
                <div class="header">
                <p>Perihal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rincian Progress Program Kerja <br>
                Departemen : <?php echo $prkr->nama_struktur; ?></p>
                </div>
                <br/>
                <br/>
                <br/>
      

                <br>
                <div class="ny-container">
                <p>Berdasarkan program kerja yang ada di masing-masing departemen, maka berikut ini adalah salah satu data program kerja dari departemen <b><?php echo $prkr->nama_struktur; ?></b> mengenai progres atau perkembangan program kerja yang tersebut diatas. Berikut adalah rincian singkat program kerja :</p>

                <p>Program Kerja :<br> <?php echo $prkr->kegiatan; ?></p>
                <p>Waktu Pelaksanaan :<br>
                <small><b><?php echo $prkr->jadwal_mulai; ?> - </b></small>
                <small><b><?php echo $prkr->jadwal_selesai; ?></b></small>
                </p><hr style="border-width: 40%;">

               <p><b>Progress :</b>
               <?php echo $prkr->keterangan; ?>
               </p>
               <hr>
               <div style="text-align: right;">
                   Total Progress Program Kerja Departemen <b><?php echo $prkr->nama_struktur; ?></b>  : <?php echo $prkr->status; ?>
               </div>
            </div>
                </div>
            </div>
    </div>
</div>

 