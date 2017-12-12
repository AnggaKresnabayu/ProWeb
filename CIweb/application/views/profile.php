<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Objek Wisata Bandung</title>
    <link href="https://fonts.googleapis.com/css?family=Sacramento|Tangerine" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/Navbar.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/LogIn.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>
  <body  background="<?php echo base_url(); ?>Gambar/cloud.jpg">
    <div id="login">
      <div class="center">
        <h1>Profile Page</h1>
       <?php if (isset($_SESSION['success'])){ ?>
      <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
      <?php
      } ?>

      HALO, <?php echo $_SESSION['username']; ?>

      <br><br>

      <form action="<?php echo base_url() ?>index.php/users/home2">
        <button class="its" name="edit">Edit Konten</button>
      </form>

      <a href="<?php echo base_url(); ?>index.php/auth/logout">Logout</a>

      </div>
    </div>

  </body>
</html>