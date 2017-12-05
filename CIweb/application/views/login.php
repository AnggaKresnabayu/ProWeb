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

          <form class="fl" action="" method="post">
            <input class="itpw" name="username" id="username" type="text" placeholder="Username"><br>
            <input class="itpw" name="password" id="password" type="password" placeholder="Password"><br>
            <input class="its" type="submit" name="login" value="LOGIN">
          </form>
          <a href="<?php echo base_url(); ?>index.php/auth/register">Silahkan register</a>

      </div>

    </div>

  </body>
</html>