<form action="http://staging.doku.com/Suite/Receive" method="post" id="form1" name="form1">
<?php foreach($join as $row) { ?>
 
  <input name="MALLID" type="hidden" value="4174" >
  <input name="BASKET" type="text" value="<?php echo $row->type; ?>,<?php echo number_format($row->price,2,".",""); ?>,1,<?php echo number_format($row->price,2,".",""); ?>" >
  <input name="CHAINMERCHANT" type="hidden" value="NA" >
  <input name="AMOUNT" type="text" value="<?php echo number_format($row->price,2,".",""); ?>" >
  <input name="PURCHASEAMOUNT" type="hidden" value="<?php echo number_format($row->price,2,".",""); ?>" >
  <input type="text" name="TRANSIDMERCHANT" value="<?php echo $row->TRANSIDMERCHANT; ?>">
      <?php 
        $a = number_format($row->price,2,".",""); //di ambil dari data harga 
        $b = 4174;      //mallid
        $c = "48Bq1CK5lrlC";    // sharedkey type dari myshortcart
        $d = $row->TRANSIDMERCHANT; // invoice (transidmerchant)
        $WORD = sha1($a.$b.$c.$d);   // rumus untuk mendapatkan WORDS
        echo "<input class='form-control' type='hidden' name='WORDS' value=$WORD>";
      ?>
  <input name="WORDS" type="hidden" value="bf60356e2e41eff0d561c88e8b4386dc496b48ff" >
  <input name="CURRENCY" type="hidden" value="360" >
  <input name="PURCHASECURRENCY" type="hidden" value="360" >
  <input name="COUNTRY" type="hidden" value="ID" >
  <input name="SESSIONID" type="hidden" value="234asdf234" >
  <input name="REQUESTDATETIME" type="text" value="<?php echo date('Ymdhis'); ?>" >
  <input name="NAME" type="text" value="<?php echo $row->name; ?>" >
  <input name="EMAIL" type="text" value="<?php echo $row->email; ?>">
  <input type="submit" name="submit" value="submit" class="btn btn-danger">
  <?php } ?>
</form>