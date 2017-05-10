<div class="container" style="margin-top:10px;">
	<div class="row form-group">
        <div class="col-xs-12 col-lg-12">
            <div class="panel panel-default">
            
                <div class="panel-image">
                  <?php foreach($data as $row)
                    { 
                    ?>
                     <a data-lightbox="Vacation" title="<?php echo $row->nama_lengkap; ?>" href="<?php echo base_url()."uploads/".$row->foto; ?>">
                        <img style=" height: 80px;width: 100px; box-shadow: 3px" class="thumbnail" src="<?php echo base_url()."uploads/".$row->foto; ?>"></a>
                    <label for="toggle-1"></label>
                </div>
                <input type="checkbox" id="toggle-1" class="panel-image-toggle">
                <div class="panel-body">
                    <h4>Title of Image</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper et.</p>
                </div>

                <div class="panel-footer text-center">
                    <a href="#download"><span class="glyphicon glyphicon-download"></span></a>
                    <a href="#facebook"><span class="fa fa-facebook"></span></a>
                    <a href="#twitter"><span class="fa fa-twitter"></span></a>
                    <a href="#share"><span class="glyphicon glyphicon-share-alt"></span></a>
                </div>

            </div>
            
        </div>
          <?php } ?> 
	</div>
</div>