<!DOCTYPE html>
<html>
<head>
	<title>Objek Wisata Bandung</title>
  	<link href="https://fonts.googleapis.com/css?family=Sacramento|Tangerine" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/Navbar.css" rel="stylesheet">  
  <link href="<?php echo base_url(); ?>css/Marjan.css" rel="stylesheet">  
</head>
<body  background="<?php echo base_url(); ?>Gambar/cloud.jpg">
 <div class="navbar">
  <nav>
    <ul>
      <li><a href="<?php echo base_url(); ?>home">Home</a></li>
      <li><a href="<?php echo base_url(); ?>view">View</a></li>
      <li><a href=#>List</a>
        <ul>
          <li><a href="<?php echo base_url(); ?>lst">Wisata Budaya</a></li>
          <li><a href="<?php echo base_url(); ?>lts">Wisata Alam</a></li>
        </ul>
      </li>
      <li><a href="<?php echo base_url(); ?>about">About Us</a></li>
	  <li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li>
	  <li><a><?php echo $_SESSION['username']; ?></a></li>
      <li><a href="<?php echo base_url(); ?>auth/logout">logout</a></li>
      <a href="https://facebook.com/"><img src="<?php echo base_url(); ?>Gambar\facebook.png" width=2.5%></a>
      <a href="https://twitter.com/"><img src="<?php echo base_url(); ?>Gambar\twitter2.png" width=2.5%></a>
      <a href="https://instagram.com/"><img src="<?php echo base_url(); ?>Gambar\instagram1.png" width=2.5%></a>
    </ul>
  </nav>
</div>
<div class="marjan">
	<div class="kanan"></div>
	<div class="kiri"></div>
	
	<div class="tengah">
	<?php 
        foreach ($peg->result() as $row) {
			if($row->nip == "A1"){
          ?>
	<h1><center><?php echo $row->nama;?></center></h1>
	<img src="<?php echo base_url(); ?>Gambar/Udjo.jpg" height="30%" width="50%"> 
	<p><?php echo $row->alamat;?></p>
	
	<h2>Daya Tarik Wisata Saung Angklung Udjo</h2>
	<p><?php echo $row->tempat_lahir;?></p>
	
	<h2>Harga & Tarif Wisata Budaya Saung Angklung Udjo</h2>
	<p><?php echo $row->email;?></p>
	 <?php
        }
		}
       ?>
	</div>
</body>
</html>