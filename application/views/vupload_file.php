<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Upload File</title>
</head>
<body>
	<?php
	echo form_open_multipart('cupload_file');
	?>
	<table>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul" class="form-control"></td>
		</tr>
		<tr>
			<td>Upload File</td>
			<td><input type="file" name="userfile" class="form-control"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Simpan"></td>
		</tr>
	</table>
	<?php
	echo form_close();
	echo br();
	?>
	<table>
		<tr>
			<td>No.</td>
			<td>Judul</td>
		</tr>
		<?php
		$no=1;
		foreach($hasil->result() as $row):
		?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $row->judul; ?></td>
	</tr>
	<?php
	$no++;
	endforeach;
	?>
	</table>
</body>
</html>