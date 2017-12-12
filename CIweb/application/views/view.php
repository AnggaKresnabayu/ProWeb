<!DOCTYPE html>
<html>
<head>
	<title>Objek Wisata Bandung</title>
	<link href="https://fonts.googleapis.com/css?family=Sacramento|Tangerine" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/Navbar.css" rel="stylesheet">  
	<link href="<?php echo base_url(); ?>css/View.css" rel="stylesheet">  
</head>

<body  background="<?php echo base_url(); ?>Gambar/cloud.jpg">
 <div class="navbar">
  <nav>
    <ul>
      <li><a href="home">Home</a></li>
      <li><a href="view">View</a></li>
      <li><a href=#>List</a>
        <ul>
          <li><a href="lst">Wisata Budaya</a></li>
          <li><a href="lts">Wisata Alam</a></li>
        </ul>
      </li>
      <li><a href="about">About Us</a></li>
	  <li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li><li><a></a></li>
	  <li><a><?php echo $_SESSION['username']; ?></a></li>
      <li><a href="<?php echo base_url(); ?>auth/logout">logout</a></li>
      <a href="https://facebook.com/"><img src="<?php echo base_url(); ?>Gambar\facebook.png" width=2.5%></a>
      <a href="https://twitter.com/"><img src="<?php echo base_url(); ?>Gambar\twitter2.png" width=2.5%></a>
      <a href="https://instagram.com/"><img src="<?php echo base_url(); ?>Gambar\instagram1.png" width=2.5%></a>
    </ul>
  </nav>
</div>
<!-- !PAGE CONTENT! -->
	<div class="p2-content" style="max-width:2000px">
<!-- Header -->
	<div class="p2-opacity">
	<span class="p2-button p2-xxlarge p2-white p2-right" onclick="p2_open()"><i class="fa fa-bars"></i></span> 
	<div class="p2-clear"></div>
	<header class="p2-center p2-margin-bottom">
</header>
</div>
<!-- Photo Grid -->
<div class="p2-row" id="myGrid">
  <div class="p2-one">
  <a href="lst">
  	<img src="<?php echo base_url(); ?>Gambar/TangkubanPerahu1.jpg" style="width:1330px; height:300px">
  </a>
  	<br>
  <a href="lts">
    <img src="<?php echo base_url(); ?>Gambar/GedungSate.jpg" style="width:1330px; height:300px">
   </a>
</div>
</body>
</html>