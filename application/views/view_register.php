<!DOCTYPE html>
<html>
<head>
	<title>User Registrasi</title>
</head>
<body>
	<h1>User Registrasi</h1>
	<p>Isi form dibawah ini</p>

	<?php echo form_open($base_url .'user/register'); 
	 
	 $username = array(
		'name'	=> 'username',
		'id'	=>	'username',
		'value'	=>	''
		);
	 $name = array(
		'name'	=> 'reg_username',
		'id'	=>	'reg_username',
		'value'	=>	''
		);
	 $email = array(
		'name'	=> 'email',
		'id'	=> 'email',
		'value'	=>	''
		);
	 $password = array(
		'name'	=> 'password',
		'id'	=>	'password',
		'value'	=>	''
		);
	 $password_conf = array(
		'name'	=> 'password_conf',
		'id'	=>	'password_conf',
		'value'	=>	''
		);
	?>

	<ul>
		<ll>
		<label>Username</label>
		<div>
			<?php echo form_input($username);?>
		</div>
		</ll>
		<ll>
		<label>Name</label>
		<div>
			<?php echo form_input($name);?>
		</div>
		</ll>
		<ll>
		<label>Email Address</label>
		<div>
			<?php echo form_input($email);?>
		</div>
		</ll>
		<ll>
		<label>Password</label>
		<div>
			<?php echo form_password($password);?>
		</div>
		</ll>
		<ll>
		<label>Retype Password</label>
		<div>
			<?php echo form_password($password_conf);?>
		</div>
		</ll>
		<br>

		<li>
			<?php echo validation_errors(); ?>
		</li>
		<li>
		<div>
			<?php echo form_submit(array('name' =>'register'),'Register');; ?>
		</div>
		</li>
		
	</ul>

<?php echo form_close();?>
</body>
</html>