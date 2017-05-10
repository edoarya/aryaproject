<!DOCTYPE html>
<html>
<head>
  <title>Registrasi</title>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fontawesome.io/icons/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
   *  {
    margin: 0px;
    padding: 0px;
      }

    #image{
    position: relative;
    z-index: -1
      }

    #content{
      height: 700px;
      width: 100%;
      box-shadow: 0 0 1.5em black;
      margin-top: -10px;
      background-color: #fff;
      position: relative;
      z-index: 1;
        }

   .form-style-6{
  
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 600px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
    }
    .form-style-6 h1{
      background: #43D1AF;
      padding: 20px 0;
      font-size: 140%;
      font-weight: 300;
      text-align: center;
      color: #fff;
      margin: -16px -16px 16px -16px;
    }
    .form-style-6 input[type="text"],
    .form-style-6 input[type="date"],
    .form-style-6 input[type="password"],
    .form-style-6 input[type="datetime"],
    .form-style-6 input[type="email"],
    .form-style-6 input[type="number"],
    .form-style-6 input[type="search"],
    .form-style-6 input[type="time"],
    .form-style-6 input[type="url"],
    .form-style-6 textarea,
    .form-style-6 select 
    {
      -webkit-transition: all 0.30s ease-in-out;
      -moz-transition: all 0.30s ease-in-out;
      -ms-transition: all 0.30s ease-in-out;
      -o-transition: all 0.30s ease-in-out;
      outline: none;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      width: 100%;
      background: #fff;
      margin-bottom: 5%;
      border: 1px solid #ccc;
      padding: 4%;
      color: #555;
      font: 95% Arial, Helvetica, sans-serif;
    }
    .form-style-6 input[type="text"]:focus,
    .form-style-6 input[type="date"]:focus,
    .form-style-6 input[type="password"]:focus,
    .form-style-6 input[type="datetime"]:focus,
    .form-style-6 input[type="email"]:focus,
    .form-style-6 input[type="number"]:focus,
    .form-style-6 input[type="search"]:focus,
    .form-style-6 input[type="time"]:focus,
    .form-style-6 input[type="url"]:focus,
    .form-style-6 textarea:focus,
    .form-style-6 select:focus
    {
      box-shadow: 0 0 5px #43D1AF;
      padding: 2%;
      border: 1px solid #43D1AF;
    }

    .form-style-6 input[type="submit"],
    .form-style-6 input[type="button"]{
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      width: 100%;
      padding: 3%;
      background: #43D1AF;
      border-bottom: 2px solid #30C29E;
      border-top-style: none;
      border-right-style: none;
      border-left-style: none;  
      color: #fff;
    }
    .form-style-6 input[type="submit"]:hover,
    .form-style-6 input[type="button"]:hover{
      background: #2EBC99;
    }

    .card{
      box-shadow: 0 4px 20px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.30);
      text-align: center;
    }

    /*slide image*/

</style>
   
  
  <script type="text/javascript">
    var ypos,image;
    function parallex(){
      ypos = window.pageYOffset;
      image = document.getElementById('image');
      image.style.top = ypos * .5 + 'px';
    }
    window.addEventListener('scroll',parallex);
  </script>

</head>

<body>

 <div id="slider-wrapper">
    <a class="slide" href=""><img class="mySlides" height="730px" width="100%" id="image" src="<?php echo base_url()."assets/images/kom3.jpg"; ?>"></a>
    </div>
  <div id="content">
    <div class="jumbotron">
    <?=$this->session->flashdata('pesan') ?>

    <h1 style="text-align: center;">Form Registrasi Pengguna</h1>
    <p style="text-align: center;" >Lengkapi data dibawah ini untuk membuat sebuah akun baru. <br>
    Jika sudah mempunyai akun, silahkan <strong> Login</strong></p>
      
      <div class="form-style-6 card">
      <h2> Form Registrasi User</h2>

        <form method="POST" action="<?php echo base_url()."index.php/register/simpan"; ?>" >
        
        <div class="form-group">
          <div class="input-group">
            <span style="background-color: #30C29E; color: #fff;"  class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off" required />
            <span style="background-color: #30C29E; color: #fff;" class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="email" name="username" id="email" placeholder="Email Address" autocomplete="off" required /><span id="email_result"></span>
          </div>
        </div>

        <span style="background-color: #30C29E; color: #fff;" class="input-group-addon"><i class="fa fa-key">Password</i></span>
        <input type="password" name="password"  id="password" placeholder="Your Password" autocomplete="off" required/>
        <input type="password" name="passconf" id="confirm_password" placeholder="Re-Type Password" autocomplete="off" required />
        

        <script type="text/javascript">
           $(document).ready(function(){
            $('#email').change(function(){
              var email = $('#email').val();
              if(email != '')
              {
                $.ajax({
                  url:"<?php echo base_url(); ?>register/simpan";
                  method:"POST";
                  data:{email:email},
                  success:function(data){
                    $('#email_result').html(data);
                  }
                });
              }
            });
          });

          var password = document.getElementById("password")
          , confirm_password = document.getElementById("confirm_password");

          function validatePassword(){
          if(password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Password tidak sama!!");
          } else {
          confirm_password.setCustomValidity('');
          }
          }

          password.onchange = validatePassword;
          confirm_password.onkeyup = validatePassword;
        </script>

       
  

        <input type="submit" value="Registrasi Akun" />
        </form>

      <br/>
      <small>Sudah Punya Akun?</small>
      <button type="button" class="btn btn-primary btn-xs" class="modal-edo" data-toggle="modal" data-target="#myModal">Go to Login</button>
      </div>
    </div>
  </div>



  <!-- Modal -->
    <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content animated bounceIn">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-key modal-icon"></i>
                    <h4 class="modal-title">Login Pengguna</h4>
                    <small class="font-bold">Masukkan username dan password anda.</small>
                </div>
                <div class="modal-body">
                     <form autocomplete="off" method="POST" class="m-t" role="form" action="<?php echo base_url(); ?>index.php/login/getlogin">
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Email" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password"  autocomplete="off" required>

                        </div>
                        <button  style="background-color: #30C29E; color: #fff;" type="submit" class="btn btn-primary block full-width m-b">Login</button><br>
                        <button type="button" class="modal" id="slideOutUpRight" class="btn btn-danger block full-width m-b">Close</button>
                    </form>
                    <p class="m-t">
                        <small>Arya Application &copy; 2017</small>
                    </p>
  
                    </div>
                </div>
            </div>
        </div>
                    <center>
                      <p class="m-t">
                      <small>Arya&trade; Application &copy; 2017</small>
                    </p>
                  </center>

    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url(); ?>assets/js/plugins/iCheck/icheck.min.js"></script>
  
  </body>
</html>