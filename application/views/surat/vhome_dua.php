<!DOCTYPE html>
<html>
<head>
  <title>Tutorial Parallax Scrolling</title>
  <style>
  	.container {
  max-width: 960px;
  margin: 0 auto;
}
section.section:last-child {
  margin-bottom: 0;
}
section.section h2 {
  margin-bottom: 40px;
  font-family: "Roboto Slab", serif;
  font-size: 30px;
}
section.section p {
  margin-bottom: 40px;
  font-size: 16px;
  font-weight: 300;
}
section.section p:last-child {
  margin-bottom: 0;
}
section.section.content {
  padding: 40px 0;
}
section.section.parallax {
  height: 600px;
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
section.section.parallax h1 {
  color: rgba(255, 255, 255, 0.8);
  font-size: 48px;
  margin: 0 auto;
  line-height: 600px;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  text-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
section.section.parallax a {
  color: rgba(255, 255, 255, 0.8);
  font-size: 20px;
  margin: 0 auto;
 position: absolute;
 bottom: 750px;
 left: 630px;
  text-align: center;
  text-shadow: 0 0 15px rgba(2, 3, 10, 40);
}
section.section.parallax-1 {
  background-image: url("<?php echo base_url();?>image/buk.jpg");
}
section.section.parallax-2 {
  background-image: url("<?php echo base_url();?>image/buk.jpg");
}
section.section.parallax-3 {
  background-image: url("<?php echo base_url();?>image/letter.jpg");
}
section.section.parallax-4 {
  background-image: url("<?php echo base_url();?>image/letter.jpg");
}
 
@media all and (min-width: 600px) {
  section.section h2 {
    font-size: 42px;
  }
  section.section p {
    font-size: 20px;
  }
  section.section.parallax h1 {
    font-size: 96px;
  }
}
@media all and (min-width: 960px) {
  section.section.parallax h1 {
    font-size: 160px;
  }
}

  </style>
</head>
<body style="margin:0 auto;">
  <section class="section parallax parallax-1">
  <div class="container animated fadeInRight">
    <h1>Surat 1</h1>
  </div>
</section>
 
<section class="section content">
  <div class="container animated fadeInRight">
    <h2>Surat Pemberitahuan 1</h2>
    <p>Tampilan pada Surat Pemberitahuan 1 adalah di bentuk dengan format penulisan surat standar, yaitu :</p>
    <P><ul>
    	<li>2 (dua) Logo, terletak di sebelah kanan dan kiri di bagian Header</li>
    	<li>Nama Kop.Surat, Tertera Nama Instansi dan alamat di bagian Header</li>
    	<li>Nomor dan Perihal Surat</li>
    	<li>Isi Surat, dimana pengguna dapat menuliskan isi surat.</li>
    	<li>Penulis atau pengirim, terletak pada sisi kanan, sekaligus dengan tanggal penulisan.</li>
    </ul></P>
    <p>Klik <b>View Template</b> Jika anda ingin melihat dan klik <b>Pakai Template</b> Jika itu adalah merupakan pilihan template anda yang sesuai dengan kebutuhan Anda.</p>
     <button data-toggle="modal" data-target="#viewSurat1"  class="btn btn-outline btn-primary dropdown-toggle">View Template</button>
  </div>
</section>
 
<section class="section parallax parallax-2">
  <div class="container">
    <h1>Surat 2</h1>
  </div>
</section>
 
<section class="section content">
  <div class="container animated fadeInRight">
    <h2>Surat Pemberitahuan 2</h2>
    <p>Tampilan Surat Pemberitahuan ke-2 ini biasanya digunakan untuk keperluan Pemberitahuan Kegiatan/acara. Tampilan pada Surat Pemberitahuan 2 adalah di bentuk dengan format penulisan surat standar, yaitu :</p>
    <P><ul>
    	<li>1 (satu) Logo, terletak pada sisi kiri di bagian Header</li>
    	<li>Nama Kop.Surat, Tertera Nama Instansi dan alamat di bagian Header</li>
    	<li>Nomor dan Perihal Surat</li>
    	<li>Isi Surat, dimana pengguna dapat menuliskan isi surat.</li>
    	<li>Penulis atau pengirim, terletak pada sisi kanan, sekaligus dengan tanggal penulisan.</li>
    	<li>Ketua Pelaksana, terletak pada sisi kiri.</li>
    	<li>Mengetahui, terletak pada sisi tengah.</li>
    </ul></P>
    <p>Klik <b>View Template</b> Jika anda ingin melihat dan klik <b>Pakai Template</b> Jika itu adalah merupakan pilihan template anda yang sesuai dengan kebutuhan Anda. </p>
     <button data-toggle="modal" data-target="#viewSurat2"  class="btn btn-outline btn-primary dropdown-toggle">View Template</button>
  </div>
</section>
 
<section class="section parallax parallax-3">
  <div class="container">
    <h1>Surat 3</h1>
  </div>
</section>
 
<section class="section content">
  <div class="container">
    <h2>Surat Peminjaman</h2>
    <p>Tampilan Surat Peminjaman ini biasanya digunakan untuk keperluan ijin Peminjaman Prasarana,seperti peminjaman tempat, [eralatan, dan lain sebagainya. Tampilan pada Surat Peminjaman ini dibentuk dengan format penulisan surat standar, yaitu :</p>
    <P><ul>
    	<li>2 (satu) Logo, terletak pada sisi kanan dan sisi kiri di bagian Header</li>
    	<li>Nama Kop.Surat, Tertera Nama Instansi dan alamat di bagian Header</li>
    	<li>Nomor dan Perihal Surat</li>
    	<li>Isi Surat, dimana pengguna dapat menuliskan isi surat.</li>
    	<li>Penulis atau pengirim, terletak pada sisi kanan, sekaligus dengan tanggal penulisan.</li>
    	<li>Menyetujui, terletak pada sisi kiri.</li>
    	<li>Mengetahui, terletak pada sisi tengah.</li>
    </ul></P>
    <p>Klik <b>View Template</b> Jika anda ingin melihat dan klik <b>Pakai Template</b> Jika itu adalah merupakan pilihan template anda yang sesuai dengan kebutuhan Anda. </p>
     <button data-toggle="modal" data-target="#viewSurat3"  class="btn btn-outline btn-primary dropdown-toggle">View Template</button>
  </div>
</section>

<section class="section parallax parallax-4">
  <div class="container">
   <a data-toggle="modal" data-target="#viewSurat4"  class="btn btn-outline btn-primary dropdown-toggle">View Template</a>
    <h1>Surat 4</h1>
   

    <!-- <h1>
    </h1> -->

  </div>
</section>

<section class="section content">
  <div class="container">
    <h2>Surat Dispensasi</h2>
    <p>Tampilan Surat Peminjaman ini biasanya digunakan untuk keperluan ijin Peminjaman Prasarana,seperti peminjaman tempat, [eralatan, dan lain sebagainya. Tampilan pada Surat Peminjaman ini dibentuk dengan format penulisan surat standar, yaitu :</p>
    <P><ul>
    	<li>2 (satu) Logo, terletak pada sisi kanan dan sisi kiri di bagian Header</li>
    	<li>Nama Kop.Surat, Tertera Nama Instansi dan alamat di bagian Header</li>
    	<li>Nomor dan Perihal Surat</li>
    	<li>Isi Surat, dimana pengguna dapat menuliskan isi surat.</li>
    	<li>Penulis atau pengirim, terletak pada sisi kanan, sekaligus dengan tanggal penulisan.</li>
    	<li>Menyetujui, terletak pada sisi kiri.</li>
    	<li>Mengetahui, terletak pada sisi tengah.</li>
    </ul></P>
    <p>Klik <b>View Template</b> Jika anda ingin melihat dan klik <b>Pakai Template</b> Jika itu adalah merupakan pilihan template anda yang sesuai dengan kebutuhan Anda. </p>
     <button data-toggle="modal" data-target="#viewSurat4"  class="btn btn-outline btn-primary dropdown-toggle">View Template</button>
  </div>
</section>

</body>
</html>


<!-- MODAL TEMPLATE SURAT PEMBERITAHUAN -->
<div class="modal fade" id="viewSurat1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
			</div>

			<div class="modal-body">
				<a href="<?php echo base_url()."index.php/csurat/sPem"; ?>" class="btn btn-outline btn-info" >Pakai Template</a>
				<button class="btn btn-danger" data-dismiss="modal">Batal</button>
				<h2 style="color: #fff"></h2>
				<img style="height: 700px; width: 500px;" src="<?php echo base_url(); ?>uploads/dokumen/surat3.jpg"><br><br>
			</div>
	</div>
</div>
<div class="modal fade" id="viewSurat2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
				<h2 style="color: #fff" class="modal-title" id="myModalLabel"><i class="fa fa-image"></i> VIEW TEMPLATES</h2>
			</div>
			<div class="modal-body">
				<a href="<?php echo base_url()."index.php/csurat/spem_dua"; ?>" class="btn btn-outline btn-info" >Pakai Template</a>
				<button class="btn btn-danger" data-dismiss="modal">Batal</button>
				<h2 style="color: #fff"></h2>
				<img style="height: 700px; width: 500px;" src="<?php echo base_url(); ?>uploads/dokumen/surat1.jpg">
				<br/>
			</div>		
	</div>
</div>

<!--MODAL SURAT PEMINJAMAN-->
<div class="modal fade" id="viewSurat3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
				<h2 style="color: #fff" class="modal-title" id="myModalLabel"><i class="fa fa-image"></i> VIEW TEMPLATES</h2>
			</div>
			<div class="modal-body">
				<a href="<?php echo base_url()."index.php/csurat/sPin"; ?>" class="btn btn-outline btn-info" >Pakai Template</a>
				<button class="btn btn-danger" data-dismiss="modal">Batal</button>
				<h2 style="color: #fff"></h2>
				<img style="height: 700px; width: 500px;" src="<?php echo base_url(); ?>image/pinjam.jpg">
				<br/>
			</div>		
	</div>
</div>

<!--MODAL SURAT DISPENSASI-->
<div class="modal fade" id="viewSurat4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
				<h2 style="color: #fff" class="modal-title" id="myModalLabel"><i class="fa fa-image"></i> VIEW TEMPLATES</h2>
			</div>
			<div class="modal-body">
				<a href="<?php echo base_url()."index.php/csurat/sPin"; ?>" class="btn btn-outline btn-info" >Pakai Template</a>
				<button class="btn btn-danger" data-dismiss="modal">Batal</button>
				<h2 style="color: #fff"></h2>
				<img style="height: 700px; width: 500px;" src="<?php echo base_url(); ?>image/dispen.jpg">
				<br/>
			</div>		
	</div>
</div>

