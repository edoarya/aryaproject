<head>
    <title>Upload Gambar (Image), Rename dan Resize</title> <!-- variabel diambil dari controller -->
    
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet"> <!-- Custom styles for this template -->
<style>

    body{
        margin:20px 10%;
    }
</style>
</head>

<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
<div class="panel panel-default">
  <div class="panel-heading"><b> Daftar File IMage</b></div>
  <div class="panel-body">
    
    <?=$this->session->flashdata('pesan')?>
    <p>
        <a href="<?=base_url()?>upload/insert" class="btn btn-success">Tambah</a>
    </p>
  <table class="table table-bordered table-striped">
    <tr>
      <th>NIM</th>
      <th>Nama Mahasiswa</th>
      <th>alamat</th>
      <th>telp</th>
      <th>email</th>
      <th>foto</th>
    </tr>
  <?php foreach ($query as $row){ ?>
    <tr>
      <td><?=$row->nim;?></td>
      <td><?=$row->nama_mhs;?></td>
      <td><?=$row->alamat;?></td>
      <td><?=$row->telp;?></td>
      <td><?=$row->email;?></td>
      <td><img  src="<?=base_url()?>assets/hasil_resize/<?=$row->foto;?>"></td>
    </tr>
<?php } ?>
  </table>

</div>
</div>
</div>