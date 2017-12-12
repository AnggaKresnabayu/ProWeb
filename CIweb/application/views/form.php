<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DAFTAR WISATA</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"> 
	<link href="<?php echo base_url(); ?>./css/LogIn.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width , initial-scale=1">
</head>
<body>
	<div id="login">
      <div class="center">
			<center><h1>ISI WISATA</h1></center>
			<br/>
		   <form action="<?php echo base_url('index.php/login/input_data') ?>" method="post">
				<div>
					<label>ID Wisata :</label>
					<input type="text" class="form-control" name="nip">
				</div>
				<div>
					<label>Nama Wisata :</label>
					<input type="text" class="form-control" name="nama">
				</div>
		      <div class="form-group">
					<label>Deskripsi :</label>
		         <textarea class="form-control" rows="10" name="alamat"></textarea>
				</div>
				<div class="form-group">
					<label>Daya Tarik :</label>
					<textarea class="form-control" rows="10" name="tempat_lahir"></textarea>
				</div>
				<div class="form-group">
					<label>Harga dan Tarif:</label>
					<textarea class="form-control" rows="10" name="email"></textarea>
				</div>
		     <input type="submit" class="btn btn-primary" value="Submit" name="submit">
			 </form>
			<a href="<?php echo base_url(); ?>login/tampil_data">Lihat Data</a>
	    </div>
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>