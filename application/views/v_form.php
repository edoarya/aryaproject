<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form Input Data</h2>
  <form method="POST" action="<?php echo base_url()."index.php/c_controller/simpanData"; ?>">
    <div class="form-group">
      <label>Nama :</label>
      <input type="text" class="form-control" name="nama" placeholder="Enter Nama">
    </div>
    <div class="form-group">
      <label>Nomor Induk:</label>
      <input type="text" class="form-control" name="nim" placeholder="Enter NIM">
    </div>
    <div class="form-group">
      <label>Alamat:</label>
      <input type="text" class="form-control" name="alamat" placeholder="Enter Address">
    </div>

    <button type="submit" class="btn btn-default">Submit Data</button>
  </form>
</div>
<br/>
<br/>
<div class="wrapper wrapper-content animated fadeInLeftBig">
  <div class="container card">
<form method="post" action="<?php echo base_url()."index.php/c_controller"; ?>">
  <input type="text" placeholder="Seacrh by Nama" name="keyword" />
  <input type="submit" value="Search" class="btn btn-danger" />
</form>
  <table class="table table-stripped">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
      </tr>
      <tbody>
      <?php foreach($results as $row) { ?>
        <tr>
          <td><?php echo $row->nim; ?></td>
          <td><?php echo $row->nama; ?></td>
          <td><?php echo $row->alamat; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </thead>
  </table>
</div>
</div>
</body>
</html>
