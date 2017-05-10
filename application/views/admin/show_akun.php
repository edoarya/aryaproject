<style type="text/css">

#container {
  width: 300px;
  margin: 25px auto;
}



.signup {
  float: left;
  width: 300px;
  padding: 30px 20px;
  background-color: white;
  text-align: center;
  border-radius: 5px 0 0 5px;
}
.signupModal {
  float: left;
  width: 580px;
  padding: 50px 20px;
  background-color: white;
  text-align: center;
  border-radius: 5px 0 0 5px;
}

[type=text] {
  display: block;
  margin: 0 auto;
  width: 80%;
  border: 0;
  border-bottom: 1px solid rgba(0,0,0,.2);
  height: 45px;
  line-height: 45px;  
  margin-bottom: 10px;
  font-size: 1em;
  color: rgba(0,0,0,.4);
}
[type=email] {
  display: block;
  margin: 0 auto;
  width: 80%;
  border: 0;
  border-bottom: 1px solid rgba(0,0,0,.2);
  height: 45px;
  line-height: 45px;  
  margin-bottom: 10px;
  font-size: 1em;
  color: rgba(0,0,0,.4);
}
[type=password] {
  display: block;
  margin: 0 auto;
  width: 80%;
  border: 0;
  border-bottom: 1px solid rgba(0,0,0,.2);
  height: 45px;
  line-height: 45px;  
  margin-bottom: 10px;
  font-size: 1em;
  color: rgba(0,0,0,.4);
}

[type=submit] {
  margin-top: 25px;
  width: 80%;
  border: 0;
  background-color: #53CACE;
  border-radius: 5px;
  height: 50px;
  color: white;
  font-weight: 400;
  font-size: 1em;
}

[type='text']:focus {
  outline: none;
  border-color: #53CACE;
}

</style>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-9">
                    <div class="ibox">
                         <?=$this->session->flashdata('pesan') ?>
                        <div class="ibox-content card">
                            <div class="table-responsive">
                                <table class="table shoping-cart-table">
                                <?php foreach($show as $row){ ?>
                                    <tbody>
                                    <tr>
                                        
                                        <td class="desc">
                                            <h3>
                                            <a href="#" class="text-navy">
                                            <strong><?php echo $row->username; ?></strong>
                                            </a>
                                            </h3>
                                            <p class="small">
                                               Status : 
                                               <strong> <?php echo $row->status; ?></strong> |
                                               Password :
                                               <strong> <?php echo $row->password; ?></strong> |
                                               Nama : 
                                               <strong> <?php echo $row->nama_lengkap; ?></strong> 
                                            </p>
                                        </td>
                                        <td>   
                                          <a data-toggle="modal" data-target="#editModal" data-id_username="<?php echo $row->id_username; ?>"
                                          data-username="<?php echo $row->username; ?>"
                                          data-password="<?php echo $row->password; ?>"
                                          data-status="<?php echo $row->status; ?>">
                                          </a>
                                            <a href="<?php echo base_url()."index.php/home/do_delete/".$row->id_username; ?>" class="btn btn-danger btn-xs">Hapus</button>
                                        </td>
                                          <td>
                                            <a data-toggle="modal" data-target="#edo-hps" data-kode="<?php echo $row->id_username; ?>" data-username="<?php echo $row->username; ?>" class="btn btn-warning btn-xs">Edit Data</a>
                                              </td>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div><hr>
                    </div>

                </div>
                <div class="col-md-3">
                   <div id='container card'>
                      <div class='signup'>
                         <form method="POST" action="<?php echo base_url()."index.php/home/admin_save"; ?>"> 
                            <h2>Form Input Data <strong>Admin</strong></h2><hr>
                               <input type='hidden'  name="id_username" id="id_username" />
                               <input type='text'  name="nama_lengkap" id="nama_lengkap" placeholder='Nama:' required  />
                               <input type='text' id="username" name="username" id="username" placeholder='Email/Username:' required/>
                               <input type='password' id="password" name="password" id="password" placeholder='Password:' required />
                               <input type='password' name="confirm_password" id="confirm_password" placeholder='Retype Password:' required />
                               <input type='text' name="status" placeholder='Status:' id="status" required />
                               <input name="insert" type='submit' value="Insert" />
                         </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
    var password = document.getElementById("password"), 
    confirm_password = document.getElementById("confirm_password");
    function validatePassword(){
        if(password.value != confirm_password.value){
        confirm_password.setCustomValidity("Password Tidak Sama!");
        }else{
        confirm_password.setCustomValidity('');
            }
        } 
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>



<!-- Modal edit -->
<div id="edo-hps" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Update Data<strong>Admin</strong></h2>
      </div>
      <div class="modal-body signupModal">
      
           <form method="POST" action="<?php echo base_url()."index.php/home/admin_update"; ?>"> 
              <h2>Form Input Data <strong>Admin</strong></h2><hr>
                 <input type='hidden'  name="id_username" value="<?php echo $row->id_username; ?>" />
                 <input type='text'  name="nama_lengkap" value="<?php echo $row->nama_lengkap; ?>" />
                 <input type='text' id="username" name="username" value="<?php echo $row->username; ?>" />
                 <input type='password' id="password" name="password" value="<?php echo $row->password; ?>" />
                 <input type='text' name="status" value="<?php echo $row->status; ?>" />
                 <input name="insert" type='submit' value="Update Data" />
           </form>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
  $('#editModal').on('shown.bs.modal', function(e){
        var btn     = $(e.relatedTarget);
        var id_username     = btn.data('id_username');
        var username        = btn.data('username');
        var password        = btn.data('password');
        var status          = btn.data('status');

        var modal   = $(this);

        var myLink  = modal.find('.my-link');
        var newLink = myLink.attr('href') + id_username;
        myLink.attr('href', newLink);
        
        modal.find('#id_username').text(id_username);
        modal.find('#username').text(username);
        modal.find('#password').text(password);
        modal.find('#status').text(status);
    });

</script>