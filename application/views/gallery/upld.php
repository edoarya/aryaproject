<style type="text/css">
    .card{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      text-align: center;
    }
    .btn-file {
    position: relative;
    overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
    .but{
        margin-left: 400px;box-shadow: 0 3px 8px #3cc5d5;
    }
    .but:hover {
       box-shadow: 0 7px 10px #f13915;
    }

    .efek{
       box-shadow: 0 3px 8px #3cc5d5;
    }
    .efek:hover {
        background: #a3a3a3;
        transform: scale(1.2);
       box-shadow: 0 7px 10px #f13915;
    }


    /* CSS EDIT *//**** BASE ****/
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }


    /* dfd*/
    .hide-bullets {
        list-style:none;
        margin-left: -40px;
        margin-top:20px;
    }

    .thumbnail {
        padding: 0;
    }

    .carousel-inner>.item>img, .carousel-inner>.item>a>img {
        width: 100%;
    }

    .col-sm-3 a {
        border: 1px solid transparent;
        border-radius: 0;
        transition: all 3s ease;
    }

    .col-sm-3 a:hover {
        border: 1px solid #ff4647;
        border-radius: 100% 60% / 30% 10%;
        background: linear-gradient(rgba(56,123,131,0.7),rgba(56,123,131,0.7));
    }

</style>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="ibox-content" style="background-color: #555657;">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color: #fff;">Galeri Aktifitas HIMATIF </h1><hr>
                    <form id="" class="form-horizontal" method="POST" action="<?php echo base_url()."index.php/gallery/do_upload"; ?>" enctype="multipart/form-data">
                        <div class="container">
                            <div class="col-lg-10">
                                <div class="form-group">
                                    <label>Upload Image</label>
                                    <div class="input-group">
                                         <span class="input-group-btn"> 
                                            <span class="btn btn-primary btn-file"> 
                                                Browse… <input type="file" name="userfile" class="form-control" >
                                            </span> 
                                        </span>
                                        <input type="text" class="form-control" placeholder="Masukan Deskripsi Gambar" name="keterangan" required>
                                    </div><br>
                                   <button type="submit" class="btn btn-outline btn-warning but"><i class="fa fa-upload"></i> Upload Image</button>
                                </div>
                            </div>
                        </div>
                    </form> 

                </div>
            </div>
        </div>
        <?=$this->session->flashdata('pesan') ?>

    <div class="container">
        <h1>Galeri Himpunan Teknik Informatika (HIMATIF) </h1>
        <blockquote>
            <p>.
                <br>Halaman ini adalah halaman untuk memposting gambar-gambar dari aktifitas yang telah di dokumentasikan oleh departemen tertentu. Pengguna dapat mengupload gambar pada kolom bagian di atas. Kemudian jika gambar telah di simpan, maka gambar akan muncul pada bagian bawah.</p>
                <a class="btn btn-outline btn-warning" href="<?php echo base_url('index.php/gallery/tabel'); ?>"><i class="fa fa-table"> Cek Tabel</i></a>
        </blockquote>
        <br>
        <!-- The container for the list of example images -->
        <div id="links">
            <div class="jendela">
                <?php foreach($data as $row) { ?>
                <a data-gallery="" title="Galeri Himatif" href="<?php echo base_url()."assets/Uploads/galeri-himatif/".$row->nama_gambar; ?>">
                <img class="card efek" style="height: 200px; width: 200px" src="<?php echo base_url()."assets/Uploads/galeri-himatif/".$row->nama_gambar; ?>">
                </a>
                <?php } ?>
            </div>
        </div>
        <br>

        <div id="blueimp-gallery" class="blueimp-gallery">
            <div class="slides"></div>
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
                <div class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" aria-hidden="true">×</button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body next">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left prev">
                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                    Previous
                                </button>
                                <button type="button" class="btn btn-primary next">
                                    Next
                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>