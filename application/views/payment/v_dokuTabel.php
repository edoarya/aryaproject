<style type="text/css">
	.shadow {
		box-shadow: 10px 8px 5px 0 rgba(0, 0, 0, 0.2), 0 2px 2px 0 rgba(0, 0, 0, 0.19);
	}

	label.btn span {
	  font-size: 1.5em ;
	}

	label input[type="radio"] ~ i.fa.fa-circle-o{
	    color: #c8c8c8;    display: inline;
	}
	label input[type="radio"] ~ i.fa.fa-dot-circle-o{
	    display: none;
	}
	label input[type="radio"]:checked ~ i.fa.fa-circle-o{
	    display: none;
	}
	label input[type="radio"]:checked ~ i.fa.fa-dot-circle-o{
	    color: #7AA3CC;    display: inline;
	}
	label:hover input[type="radio"] ~ i.fa {
	color: #7AA3CC;
	}

	label input[type="checkbox"] ~ i.fa.fa-square-o{
	    color: #c8c8c8;    display: inline;
	}
	label input[type="checkbox"] ~ i.fa.fa-check-square-o{
	    display: none;
	}
	label input[type="checkbox"]:checked ~ i.fa.fa-square-o{
	    display: none;
	}
	label input[type="checkbox"]:checked ~ i.fa.fa-check-square-o{
	    color: #7AA3CC;    display: inline;
	}
	label:hover input[type="checkbox"] ~ i.fa {
	color: #7AA3CC;
	}

	div[data-toggle="buttons"] label.active{
	    color: #7AA3CC;
	}

	div[data-toggle="buttons"] label {
	display: inline-block;
	padding: 6px 12px;
	margin-bottom: 0;
	font-size: 14px;
	font-weight: normal;
	line-height: 2em;
	text-align: left;
	white-space: nowrap;
	vertical-align: top;
	cursor: pointer;
	background-color: none;
	border: 0px solid 
	#c8c8c8;
	border-radius: 3px;
	color: #c8c8c8;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none;
	}

	div[data-toggle="buttons"] label:hover {
	color: #7AA3CC;
	}

	div[data-toggle="buttons"] label:active, div[data-toggle="buttons"] label.active {
	-webkit-box-shadow: none;
	box-shadow: none;
	}
</style>

 <div class="wrapper wrapper-content animated fadeInRightBig">
 	<div class="row">
 		<div class="container card">
 			<div class="panel-group">
	 			<div class="panel panel-default">
	 				<div class="panel-heading">
			 			<h2 style="font-weight: bold;">Panel Heading</h2>
			 			<img style="width: 200px; height:50px;" src="<?php echo base_url("assets/images/logo_js.jpg"); ?>">
	 				</div>
	 					
	 			</div>

	 
	 				<div class="panel-heading shadow">
	 					<h2><i class="fa fa-desktop"> Detail Transaction</i>
	 					<a href="" class="btn btn-default btn-xs pull-right"><i class="fa fa-reply-all"></i> Edit Transaction</a></h2>
	 				</div>
	 					<div class="panel-body">
	 						<table class="table table-striped table-hover " >
	 							<thead>
	 							<?php foreach($join as $row) { ?>
	 							<tr>
	 								<td style="font-weight: bold;" >Course Type : <?php echo $row->type; ?></td>
	 								<td style="font-weight: bold;" >Store ID : <?php echo $row->STOREID; ?></td>
	 								<td style="font-weight: bold;" >Price : Rp. <?php echo $row->price; ?></td>
	 								<td style="font-weight: bold;" > | Area (Country) : <?php echo $row->country; ?> </td>
	 							</tr>
	 					
	 								<tr>
	 									<td>Nomor Invoice</td>
	 									<td><?php echo $row->TRANSIDMERCHANT; ?></td>
	 								</tr>
	 								<tr>
	 									<td>Buyer's Name</td>
	 									<td><?php echo $row->name; ?></td>
	 								</tr>
	 								<tr>
	 									<td>Email :</td>
	 									<td><?php echo $row->email; ?></td>
	 								</tr>
	 								<tr>
	 									<td>Handphone Number</td>
	 									<td><?php echo $row->hp; ?></td>
	 								</tr>
	 								<tr>
	 									<td>Address Shipping </td>
	 									<td><?php echo $row->address; ?></td>
	 								</tr>
	 							
	 							</thead>
	 						<?php }?>

	 						</table>
	 					</div>
	 					<div class="panel-heading shadow">
	 						<h2><i class="fa fa-money"> Payment Method</i></h2>
	 					</div>

<!--FORM METHOD PAYMENT-->
		<form action="<?php echo base_url()."index.php/doku/integrate_doku"; ?>" method="post" id="form1" name="form1">
			<div class="panel-body">
				<div class="form-group">
					<hr> Choose Your Payment:
					<br>
					<div class="btn-group btn-group card" data-toggle="buttons">
						<label class="btn active">
							<input type="checkbox" name='PAYMENTCHANNEL' value="05" checked>
								<i class="fa fa-square-o fa-2x"></i>
								<i class="fa fa-check-square-o fa-2x"></i>
								<span> ATM Bersama</span>
						</label>
						<img style="width: 250px;" alt src="<?php echo base_url()."image/tf.png"; ?>"><br/>
						<br>

						<label class="btn">
							<input type="checkbox" name='PAYMENTCHANNEL' value='15'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span> Credit Card</span>
						</label>
						<img style="width: 150px;" src="<?php echo base_url()."image/credit_card.png"; ?>"><br/><br/>

						<label class="btn">
							<input type="checkbox" value="04" name='PAYMENTCHANNEL'><i class="fa fa-square-o fa-2x"></i><i class="fa fa-check-square-o fa-2x"></i><span> Doku Wallet</span>
						</label>
						<img style="width: 150px;" src="<?php echo base_url()."image/doku.png"; ?>"><br/>

						<?php foreach($join as $row) { ?>
						<input name="MALLID" type="hidden" value="2045" >
						<input name="BASKET" type="hidden" value="testing item,<?php echo $row->price; ?>,1,<?php echo $row->price; ?>" >
						<input name="CHAINMERCHANT" type="hidden" value="NA" >
						<input name="AMOUNT" type="hidden" value="<?php echo $row->price; ?>" >
						<input name="PURCHASEAMOUNT" type="hidden" value="<?php echo $row->price; ?>" >
						<input name="TRANSIDMERCHANT" type="hidden" value="<?php echo $row->TRANSIDMERCHANT; ?>" >

						<?php 
							$a = $row->price; //di ambil dari data harga ditambah format .00
							$b = "G9v2h9T5T7F2";    // shared type dari myshortcart
							$c = $row->TRANSIDMERCHANT; // invoice
							$WORD = sha1($a+$b+$c);   // rumus untuk mendapatkan WORDS
						
							echo "<input class='form-control' type='hidden' name='WORDS' value=$WORD>";
						?>

						<input name="CURRENCY" type="hidden" value="360" >
						<input name="PURCHASECURRENCY" type="hidden" value="360" >
						<input name="COUNTRY" type="hidden" value="ID" >
						<input name="SESSIONID" type="hidden" value="234asdf234" >
						<input name="REQUESTDATETIME" type="hidden" value="20151212000000" >
						<input name="NAME" type="hidden" value="<?php echo $row->name; ?>" >
						<input name="EMAIL" type="hidden" value="<?php echo $row->email; ?>">
						<input type=hidden name="STOREID" value="<?php echo $row->STOREID; ?> ">
						<?php }?>
					</div>
				</div>
			</div>
						<button type="submit" class="btn btn-danger btn-lg" value="Checkout Payment">
						Submit Payment</button>
		</form>

			</div>
		</div>
	</div>
</diV>