<style type="text/css">
.card{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: left;
}
</style> 
<div class="wrapper wrapper-content animated fadeInRight">
<div class="container card">
	<h1>PAYMENT INTEGRATION STRIPE</h1>
	<div id="body">
		
		<hr>

<form action="<?php echo base_url()."index.php/pembayaran/checkout"; ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Alamat">
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Address</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
   <div class="form-group">
    <label>Metode Pembayaran</label>
    <select class="form-control" id="exampleSelect1">
    <option value="" >Pilih Metode</option>
      <option value="bank_trans">Bank Transfer</option>
      <option value="doku">Credit Card</option>
      <option value="wallet" >DOKU Wallet</option>
      </select>
  </div>
  <div class="container">
   <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_lfdTeKOoHqY7FIH91GE857rr" 
    data-amount="999"
    data-name="Edo Arya"
    data-description="Widget"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-currency="eur">
  </script>
  </div>
  <br>
</form>
	</div>
	</div>
	</div>