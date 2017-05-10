<!DOCTYPE html>
<html>
<head>

 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARYAAPP | Login</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	<title></title>

</head>
<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
   
        <div>
            <div>

                <h1 class="logo-name">eA+</h1>

            </div>
            <h3>Welcome to eA+</h3>
            <p>Silahkan <b>login</b> untuk dapat mengakses lebih banyak lagi fitur dan pengeturan lainnnya.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" method="POST" role="form" action="<?php echo base_url();?>index.php/login/getlogin";>
                <div class="form-group">
                    <input type="email" class="form-control" name="username" id="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
                     <?php
                    $info = $this->session->flashdata('info');
                    if (!empty($info)) {
                        echo $info;
                    }
                    ?>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="<?php echo base_url();?>assets/register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>edoApplication we app framework base on Bootstrap 3 &copy; 2016</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url();?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>


