<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARYAAPP | Login </title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
 
    <link href="<?php echo base_url(); ?>assets/css/full.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>
<body>
<style type="text/css">
	 img{
	width: 100%;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
}
body{
	margin: 0;
}
.container {

	background-color: rgba
}
</style>
<div class="container">
	<img src="<?php echo base_url()."assets/img/bg-login.jpg"; ?>">
			 <form method="POST" class="m-t" role="form" action="<?php echo base_url(); ?>index.php/login/getlogin">
		        <div class="form-group">
		            <input type="text" name="username" id="username" class="form-control" placeholder="Username" autocomplete="off" required="">
		        </div>
		        <div class="form-group">
		            <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off" required="">
		        <?php
		        $info = $this->session->flashdata('info');
		            if(!empty($info)){
		                echo $info;
		            }

		        ?>

		        </div>
		        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

		        <p class="text-muted text-center">
		            <small>Tidak punya akun ?</small>
		        </p>
		        <a class="btn btn-sm btn-white btn-block" href="<?php echo base_url()."index.php/register"; ?>">Buat akun baru</a>
		    </form>
		    	
		</div>
</body>
</html>