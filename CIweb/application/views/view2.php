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
      <li><a href="home2">Home</a></li>
      <li><a href="view2">View</a></li>
      <li><a href=#>List</a>
        <ul>
          <li><a href="lst2">Wisata Budaya</a></li>
          <li><a href="lts2">Wisata Alam</a></li>
        </ul>
      </li>
      <li><a href="about2">About Us</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/users/profile">Profil Saya</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/auth/logout">Logout</a></li>
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
  <a href="Page 3 (List1).html">
  	<img src="<?php echo base_url(); ?>Gambar/TangkubanPerahu1.jpg" style="width:1330px; height:300px">
  </a>
  	<br>
  <a href="Page 4 (List2).html">
    <img src="<?php echo base_url(); ?>Gambar/GedungSate.jpg" style="width:1330px; height:300px">
   </a>
</div>
</body>
</html>