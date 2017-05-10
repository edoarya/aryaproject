<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>ARYAaPP | Dashboard</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/modif.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/full.css">
        <link href="<?php echo base_url()."assets/css/bootstrap.min.css";?>" rel="stylesheet">
        <link href="<?php echo base_url()."assets/font-awesome/css/font-awesome.css";?>" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/alert/css/alertify.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
         <link href="<?php echo base_url();?>assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
         <link href="<?php echo base_url();?>assets/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
        <!-- STRUKTUR TABEL  -->
        <link href="<?php echo base_url();?>assets/css/plugins/slick/slick.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/plugins/slick/slick-theme.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/plugins/jQueryUI/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/plugins/jqGrid/ui.jqgrid.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/alert/alertify.css" >
        <link href="<?php echo base_url();?>assets/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

        <!-- Gritter -->
        <link href="<?php echo base_url(); ?>assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    </head>
    
    <body>
        <div id="wrapper">
            <!-- MENUS-->
            <?php $this->load->view('tampilan_menu') ?>
            <!-- MENUS-->

            <div id="page-wrapper" class="gray-bg dashbard-2">
            <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                <form role="search" class="navbar-form-custom" action="">
                    <div class="form-group">
                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                    </div>
                </form>
            </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li><span class="m-r-sm text-muted welcome-message">Welcome to ARYAPP+ .</span>
                    </li>
                    <li><a href="<?php echo base_url(); ?>index.php/home/logout">
                        <i class="fa fa-sign-out"></i> Log out</a>
                    </li> 
                </ul>
            </nav>
            </div>

            <!-- CONTENT HEADER-->
            <div  class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2><?php echo $judul; ?></h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url()."index.php/home" ?>">Home</a>
                            </li>
                            <li class="active">
                                <strong><?php echo $sub_judul; ?></strong>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- END - CONTENT HEADER-->

                    <!-- CONTENT-->
                    <?php $this->load->view($content) ?>
                    <!-- CONTENT-->

                        
                    <div class="footer">
                        <div class="pull-right">
                            10GB of <strong>250GB</strong> Free.
                        </div>
                        <div>
                            <strong>Copyright</strong> Example Company &copy; 2014-2015
                        </div>
                    </div>
                </div>
             </div>
  
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="<?php echo base_url()."assets/js/jquery-2.1.1.js";?>" ></script>
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js";?>"></script>
    <script src="<?php echo base_url()."assets/js/plugins/metisMenu/jquery.metisMenu.js";?>"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    <!--CKEDITOR-->
    <script src="<?php echo base_url();?>ckeditor/ckeditor.js"></script>
     <!-- slick carousel-->
    <script src="<?php echo base_url();?>assets/js/plugins/slick/slick.min.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.min.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/plugins/dataTables/datatables.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url();?>assets/js/inspinia.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/pace/pace.min.js"></script>
    <!-- jQuery UI -->
    <script src="<?php echo base_url();?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
     <!-- jqGrid -->
    <script src="<?php echo base_url();?>assets/js/plugins/jqGrid/i18n/grid.locale-en.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jqGrid/jquery.jqGrid.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lightbox.js"></script>
    <!--============================================-->
      <!-- Chosen -->
    <script src="<?php echo base_url();?>assets/js/plugins/chosen/chosen.jquery.js"></script>
   <!-- JSKnob -->
   <script src="<?php echo base_url();?>assets/js/plugins/jsKnob/jquery.knob.js"></script>
   <!-- Input Mask-->
    <script src="<?php echo base_url();?>assets/js/plugins/jasny/jasny-bootstrap.min.js"></script>
   <!-- Uplaod VERIFIKASI DOKUMEN -->
    <script src="<?php echo base_url();?>assets/js/plugins/clockpicker/clockpicker.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/alert/alertify.js" ></script>
     <!-- jQuery UI -->
    <script src="<?php echo base_url()."assets/js/plugins/jquery-ui/jquery-ui.min.js"; ?>"></script>
    <!-- GITTER -->
    <script src="<?php echo base_url()."assets/js/plugins/gritter/jquery.gritter.min.js"; ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url()."assets/js/plugins/sparkline/jquery.sparkline.min.js"; ?>"></script>
    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url()."assets/js/demo/sparkline-demo.js"; ?>"></script>
    <!-- ChartJS-->
 <!--  -->
    <!-- Toastr -->
    <script src="<?php echo base_url()."assets/js/plugins/toastr/toastr.min.js"; ?>"></script>
    <!-- graphic -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="<?php echo base_url()."assets/js/main.js"; ?>"></script>
    <!-- modal_hapus -->
    <script src="<?php echo base_url()."assets/js/hapus_modal.js"; ?>"></script>




 </body>
</html>
