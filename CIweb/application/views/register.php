<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?php echo base_url(); ?>css/LogIn.css" rel="stylesheet">

	<title>Register Page</title>

</head>

<body>


	<div class="col-lg-5 col-lg-offset-2">
		<h1>Register Page:</h1>

		<p>Fill in the details to register on our website!</p>
		<?php if (isset($_SESSION['success'])){?>
			<div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
			<?php
		} ?>
		<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
		<form method="POST">
			<div class="form-group">
				<label for="username">Username:</label>
				<input class="form-control" name="username" id="username" type="text">
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input class="form-control" name="email" id="email" type="text">
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input class="form-control" name="password" id="password" type="password">
			</div>

			<div class="form-group">
				<label for="password">Confirm Password:</label>
				<input class="form-control" name="password2" id="password" type="password">
			</div>

			<div class="form-group">
				<label for="gender">Gender:</label>
				<select class="form-control" id="gender" name="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</div>
			<div class="form-group">
				<label for="phone">Phone:</label>
				<input class="form-control" name="phone" id="phone" type="text">
			</div>

			<div class="text-center">
				<button class="btn btn-primary" name="register">Register</button>
			</div>
		</form>
	</div>