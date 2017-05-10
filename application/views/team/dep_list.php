<div class="wrapper wrapper-content">
<div class="ibox-content">
<div class="row">
        <div class="col-lg-7">
        <h1><i class="fa fa-bank"> Strktur Organisasi HIMATIF</i></h1>
        <small>Ini adalah tampilan Struktur Organisasi Internal Kampus 'Himpunan Teknik Informatika' Angkatan 2016-2017.
        <p>Berkaitan dengan pengesahan yang dilaksanakan pada tahun 2016-2017 dengan jumlah anggota atau pengurus yang telah disahkan oleh pihak kampus atau oleh anggota resmi HIMATIF sendiri.</p></small>
        <br/>
        <a href="<?php echo base_url()."index.php/struktur_div/detail_struktur";?>" class="btn btn-outline btn-info" >view detail proker</a>
        </div>

        <div class="col-lg-4">
            <h3>List /Daftar Anggota Kepengurusan HIMATIF 2016-2017</h3>
            <small>Pada Fitur ini, menampilkan Nama-nama dalam bentuk List, berupa nama kepengurusan resmi HIMATIF. Sesuai dengan masa jabat yang tertera pada AD/ART ataupun pengesahan dari pihak kampus.</small>
            <h3>Rincian Kegiatan/Aktifitas Program Kerja Detail HIMATIF 2016-2017</h3>
            <small>
            Pada Fitur ini, menjelaskan tentang personal yang tergabung dalam kegiatan atau aktifitas yang terkait dengan Program Kerja yang belum, sedang dan atau telah dilaksanakan.</small>
        </div>
        <br/>
    </div>
</div>



        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox card">
                        <div class="ibox-title">
                            <h5>Form Tambah Data Struktur</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                FORM STRUKTUR DIVISI
                            </h2>
                            <p>
                                Berikut ini adalah form isian untuk menambahkan data struktur divisi.
                            </p>
                            <form id="form" action="<?php echo base_url()."index.php/struktur_div/add_struktur"; ?>" method="POST" class="wizard-big">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                    
                                                <label>Struktur *</label>
                                                <input name="nama_struktur" type="text" class="form-control" required>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label>Deskripsi</label>
                                                <textarea name="visi_misi" rows="5" class="form-control" required> masukan tujuan (deskrispi) secara singkat
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-soundcloud" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline btn-primary">Simpan Data</button>
                                    
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



         