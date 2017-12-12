<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>DAFTAR PEGAWAI</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"> 
	<link href="<?php echo base_url(); ?>./css/LogIn.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width , initial-scale=1">
</head>
<body>
    <div id="login">
      <div class="center">
            <center><h1>EDIT WISATA</h1></center>
            <br/>
            <form action="<?php echo base_url('index.php/login/update_data') ?>" method="post">
                <div class="form-group">
                    <label>ID Wisata: </label>
                    <input type="text" class="form-control" name="nip" value="<?php echo $peg->nip;?>">
                </div>
                <div class="form-group">
                    <label>Nama Wisata:</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $peg->nama;?>">
                </div>
                <div class="form-group">
                    <label>Deskripsi :</label>
                    <textarea type="text" rows="10" name="alamat" value="<?php echo $peg->alamat;?>"><?php echo $peg->alamat;?></textarea>
                </div>
                <div class="form-group">
                    <label>Daya Tarik :</label>
                    <textarea class="form-control" rows="10" name="tempat_lahir" value="<?php echo $peg->tempat_lahir;?>"><?php echo $peg->tempat_lahir;?></textarea>
                </div>
                <div class="form-group">
                    <label>Lokasi dan Tarif :</label>
                    <textarea class="form-control" rows="10" name="email" value="<?php echo $peg->email;?>"><?php echo $peg->email;?></textarea>
                </div>
             <input type="submit" class="btn btn-primary" value="Update" name="update">
             </form>        
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>