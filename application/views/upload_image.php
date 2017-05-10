<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
		<?php 
		echo $error_image;
		echo "<br/>";
		echo $error_name;
		?>
		<form action="<?php echo base_url()."index.php/mycontroller/upload"; ?>" method="post" enctype="multipart/form-data" >
			<p><input hidden type="text" name="companyid" value="<?php echo $row->CompanyID; ?>"></p>
			<p>Company Name : <input type="text" name="companyname" value="" /></p>
			<p>Company Image : <input type="file" name="userfile" /></p>
			<input type="submit" name="submit" value="upload" />
		</form>
</body>
</html>