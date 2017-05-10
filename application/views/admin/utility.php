<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Forgot password</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="passwordBox animated fadeInDown">
        <div class="row ">
            <div class="col-md-12">
                <div class="ibox-content ">
                    <h2 class="font-bold">Pengaturan Akun</h2>
                    <p>
                       Masukan Akun / User ID <strong>Administrator</strong> untuk dapat mengatur akun dan menampilkan page selanjutnya.
                    </p>
                    <?php
                        $info = $this->session->flashdata('info');
                            if(!empty($info)){
                                echo $info;
                            }
                        ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="m-t" role="form" method="POST" action="<?php echo base_url(); ?>index.php/home/getlogin">
                                <div class="form-group">
                                    <input type="email" name="username" class="form-control" placeholder="Email address" required=""><br>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                    <input type="hidden" name="status" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary block full-width m-b">Submit Akun</button>
                                <a href="<?php echo base_url()."index.php/home/"; ?>" type="button" class="btn btn-danger block full-width m-b">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
    </div>
</body>
</html>
