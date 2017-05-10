<style>
	.card{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	text-align: left;
	}

	input {
	
	padding: 12px 20px; 
	border-radius: 10px;

	}

	input[type=submit]:hover {
	background-color: red;
	border: none;
	border-radius: 50px;
	}
	.boxShadowClass {

	}
	.container {
	background-color: #fff;
	padding:50px;
	border-radius: 50px;
	}
	img {
	width: 250px;
	height: 50px;
	}
	.orange-hg {
		color: #E03906;
	}
	.bold {
	font-weight: bold;
	}
	h3 {
	line-height: 20px;
	font-size: 24px;
	margin: 10px 0;
	margin-top: 10px;
    margin-right: 0px;
    margin-bottom: 10px;
    margin-left: 0px;
	}
</style>

 <?=$this->session->flashdata('pesan') ?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="container card">
		<h1 style="font-size: 50px;"><i class="fa fa-cc-visa"></i>
		<i class="fa fa-cc-discover"></i>
		<i class="fa fa-cc-paypal"></i> <b>Payment</b>form</h1>
		<hr style="border-color: grey; border-bottom:double;">
		
		<form action="<?php echo base_url()."index.php/doku/simpan"; ?>" class="form-horizontal" method="POST" >
			
			<div class="form-group">
				<div class="col-lg-12">
					<input type="hidden" name="course_id" class="form-control" readonly>
				</div> 
			</div>

			<div class="form-group">
				<div class="col-lg-12">
					<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-file"><small> INV</small></i></span>
						<input type="text" name="TRANSIDMERCHANT" class="form-control" value="InV<?php echo date('Mdhis');?>" readonly>
					</div>
					
					
				</div> 
			</div>
			
			<div class="form-group">
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-tags"></i></span>
							<?php
								echo "
								<select class='form-control m-b' name='kode_course' required>
								<option value='' disabled selected>Choose Course</option>";
								foreach ($crs->result() as $row) {  
								echo "<option value='".$row->kode_course."'>".$row->type."</option>";
								}
								echo"</select>";
						
							?>
					</div>
				</div>
			

				<div class="col-sm-6">
					<div class="input-group">
					<input name="MALLID" type="hidden" value="2045" >
						<span class="input-group-addon"><i class="fa fa-tags"></i></span>
						<select class="form-control" name="lessons" disabled="">
							<option value="">Lessons</option>
							<option value="">L1</option>
							<option value="">L2</option>
							<option value="">L3</option>
							<option value="">L4</option>
						</select>
					</div>
				</div>
			</div>

				<div class="form-group">
					<div class="col-lg-8">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input name="name" type="text" placeholder="Enter your name.." class="form-control">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-8">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input name="email" type="text" placeholder="Enter your Email.." class="form-control">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-8">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							<input name="hp" type="text" placeholder="enter your mobile number.." class="form-control">
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-6">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-tags"></i></span>
							<select class="form-control" name="country">
								<option value="" disabled selected> Select Country</option>
								<option value="">Afganistan</option>
								<option value="Argentina">Argentina</option>
								<option value="30000.00">Australia</option>
								<option value="Australia">Bangladesh</option>
								<option value="Brazil">Brazil</option>
								<option value="Cameron">Cameron</option>
								<option value="Canada">Canada</option>
								<option value="Chile">Chile</option>
								<option value="China">China</option>
								<option value="Denmark">Denmark</option>
								<option value="England">England</option>
								<option value="France">France</option>
								<option value="Japan">Japan</option>
								<option value="Indonesia">Indonesia</option>
								<option value="USA">USA</option>
								<option value="Other">Other</option>
							</select>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-lg-8">
						<label>Shipping Address</label>
						<textarea name="address" rows="7" class="form-control" placeholder="shipping address"></textarea>
					</div>
				</div>


<?php foreach($join as $row) { ?>
	<input name="MALLID" type="hidden" value="4174" >
	<input name="BASKET" type="hidden" value="<?php echo $row->type; ?>,<?php echo number_format($row->price,2,".",""); ?>,1,<?php echo number_format($row->price,2,".",""); ?>" >
	<input name="CHAINMERCHANT" type="hidden" value="NA" >
	<input name="AMOUNT" type="hidden" value="<?php echo number_format($row->price,2,".",""); ?>" >
	<input name="PURCHASEAMOUNT" type="hidden"
	value="<?php echo number_format($row->price,2,".",""); ?>" >

	<?php 
	$a = number_format($row->price,2,".",""); //di ambil dari data harga 
	$b = 4174; 			//mallid
	$c = "48Bq1CK5lrlC";    // sharedkey type dari myshortcart
	$d = $row->TRANSIDMERCHANT; // invoice (transidmerchant)
	$WORD = sha1($a.$b.$c.$d);   // rumus untuk mendapatkan WORDS
	echo "<input class='form-control' type='hidden' name='WORDS' value=$WORD>";
	?>

	<input name="CURRENCY" type="hidden" value="360" >
	<input name="TRANSIDMERCHANT" type="hidden" value="<?php echo $row->TRANSIDMERCHANT; ?>" >
	<input name="PURCHASECURRENCY" type="hidden" value="360" >
	<input name="COUNTRY" type="hidden" value="<?php echo $row->country; ?>" >
	<input name="SESSIONID" type="hidden" value="<?php echo $row->course_id; ?>" >
	<input name="NAME" type="hidden" value="<?php echo $row->name; ?>" >
	<input name="EMAIL" type="hidden" value="<?php echo $row->email; ?>">
	<input name="REQUESTDATETIME" type="hidden" value="<?php echo date('Ymdhis'); ?>" >
	<!-- NOTIFY URL -->
<?php } ?>									
	<button type="submit" class="btn btn-primary btn-sm">
	<i class="fa fa-floppy-o"></i> | <small><b>Simpan</b>Data</small></button>
	<a class="btn btn-info btn-sm" href="<?php echo base_url()."index.php/doku/"; ?>" >
	<i class="fa fa-laptop"></i> | <small><b>View</b>Data</small></a>
		</form>
	</div>
</div>




