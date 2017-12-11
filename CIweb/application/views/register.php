<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Objek Wisata Bandung</title>
	<link href="<?php echo base_url(); ?>css/LogIn.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width , initial-scale=1">
</head>

<body background="./Gambar/cloud.jpg">


	<div id="login">
      <div class="center">
		<h1>Register Page:</h1>

		<p>Fill in the details to register on our website!</p>
		<?php if (isset($_SESSION['success'])){?>
			<div class="sukses"> <?php echo $_SESSION['success']; ?></div>
			<?php
		} ?>
		<?php echo validation_errors('<div class="validasi-error">','</div>'); ?>
		<form class="fl" method="POST">
		<div>
				<label for="username">Username:</label>
				<input class="itpw" name="username" id="username" type="text">
			</div>

			<div>
				<label for="email">Email:</label>
				<input class="itpw" name="email" id="email" type="text">
			</div>

			<div>
				<label for="password">Password:</label>
				<input class="itpw" name="password" id="password" type="password">
			</div>

			<div>
				<label for="password">Confirm Password:</label>
				<input class="itpw" name="password2" id="password" type="password">
			</div>

			<div>
				<label for="gender">Gender:</label>
				<select class="itpw" id="gender" name="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
			<div>
				<label for="phone">Phone:</label>
				<input class="itpw" name="phone" id="phone" type="text">
			</div>

			<div>
				<button class="its" name="register">Register</button>
			</div>
		</form>

		<form action="login">
			<button class="its" name="kelogin">Login</button>
		</form>
	</div>
	</div>