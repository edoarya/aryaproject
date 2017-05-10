<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARYAAPP | Login </title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
<style type="text/css">
body{
    background-image: url("<?php echo base_url()."assets/images/HIMATIF2.jpg"; ?>");
    background-repeat: no-repeat;
    background-position: right top;
    background-attachment: fixed;
}
</style>
</head>

<body class="">
<div class="bg">
<!-- <img style="width: 1700px" src="<?php echo base_url()."assets/images/kom2.jpg"; ?>"> -->
</div>
    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div style="color: white" class="col-md-6">
            <h1><strong>HIMATIF</strong> | Himpunan Teknik Informatika</h1><hr>
                <h2 class="font-bold">Welcome to AR+</h2>

                <p>
                    Himatif data processing applications are the solution of our problems in managing, inspecting, and maintaining confidential data.
                </p>

                <p>
                    Applications there are some very interesting features, both in the design of the structure, as well as functional. Such features can be set according to the willingness of users.
                    
                </p>

                <p>
                    It poses the processing of user data, accounts, finance, income, expenses, and setting the work plan.
                </p>

                <p>
                    <small>This application is expected to enable users to feel the ease in data processing organization, without any errors, damage or problems commonly faced before.</small>
                </p>

            </div>
            <div class="col-md-6 ">
                <div style="opacity: 0.8;filter: alpha(opacity=50); "  class="ibox-content">
                    <form method="POST" class="m-t" role="form" action="<?php echo base_url(); ?>index.php/login/getlogin">
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
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
                    <p class="m-t">
                        <small>Arya Application &copy; 2017</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Arya Application - hima- tif
            </div>
            <div class="col-md-6 text-right">
               <small>© 2016-2017</small>
            </div>
        </div>
    </div>

</body>

</html>
