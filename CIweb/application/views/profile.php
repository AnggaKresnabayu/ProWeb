<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Objek Wisata Bandung</title>
	<link href="<?php echo base_url(); ?>css/LogIn.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
  <body background="./Gambar/cloud.jpg">
    <div id="login">
      <div class="center">
        <h1>Profile Page</h1>
       <?php if (isset($_SESSION['success'])){?>
      <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
      <?php
      } ?>

      HALO, <?php echo $_SESSION['username']; ?>

      <br><br>

      <a href="<?php echo base_url(); ?>auth/logout">Logout</a>

      </div>
    </div>

  </body>
</html>