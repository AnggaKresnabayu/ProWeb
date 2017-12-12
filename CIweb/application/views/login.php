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

          <h2>Silahkan Login :)</h2> <!-- membuat judul pembuka -->

          <?php if (isset($_SESSION['error'])){ ?>
      <div class="validasi-error"> <?php echo $_SESSION['error']; ?></div>
      <?php
      } ?>

      <?php echo validation_errors('<div class="validasi-error">','</div>'); ?>

          <form class="fl" action="" method="post">
            <input class="itpw" name="username" id="username" type="text" placeholder="Username"><br>
            <input class="itpw" name="password" id="password" type="password" placeholder="Password"><br>
            <input class="its" type="submit" name="login" value="LOGIN">
          </form>
<<<<<<< HEAD
          <a href="<?php echo base_url(); ?>auth/register">Silahkan register</a>
		  <a>-----------------------------</a>
		  <a href="<?php echo base_url(); ?>login">Kelola Web</a>
=======
          Belum punya akun? Silahkan <a href="<?php echo base_url(); ?>index.php/auth/register">register</a>
>>>>>>> 331ed6d9eef3ca5be34082d6b822b76a28a8b074

      </div>

    </div>

  </body>
</html>