<!DOCTYPE html>
<html>
<head>
	<title>Objek Wisata Bandung</title>
	<link href="https://fonts.googleapis.com/css?family=Sacramento|Tangerine" rel="stylesheet">
  <link href="<?php echo base_url(); ?>css/Navbar.css" rel="stylesheet">  
  <link href="<?php echo base_url(); ?>css/Grid.css" rel="stylesheet">  
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
		<h1><b>Wisata Budaya Bandung</b></h1>
		<p><b>Menapaki kearifan lokal yang terpancar dari Bandung</b></p>
	</header>
</div>
<!-- Photo Grid -->
<div class="p2-row" id="myGrid" style="margin-bottom:120px">
  <div class="p2-one">
  	<a href="list1">
  	<img src="<?php echo base_url(); ?>Gambar/Braga.jpg" style="width:100%">
  </a>
  	<a href="list2">
    <img src="<?php echo base_url(); ?>Gambar/Goa.jpg" style="width:100%">
   </a>
   <a href="list1">
   	<img src="<?php echo base_url(); ?>Gambar/Jaarbeurs.jpg" style="width:100%">
   </a>
    <a href="list2">
   	<img src="<?php echo base_url(); ?>Gambar/Udjo.jpg" style="width:100%">
   </a>
    <a href="list1">
   	<img src="<?php echo base_url(); ?>Gambar/GedungMerdeka.jpg" style="width:100%">
   </a>
  </div>
 <div class="p2-two">
 	<a href="list2">
 	<img src="<?php echo base_url(); ?>Gambar/TamanBudaya.jpg" style="width:100%">
 	</a>
 	<a href="list1">
    <img src="<?php echo base_url(); ?>Gambar/Rumentang.jpg" style="width:100%">
	</a>
	<a href="list2">
   	<img src="<?php echo base_url(); ?>Gambar/GedungSate.jpg" style="width:100%">
   </a>
   <a href="list2">
   	<img src="<?php echo base_url(); ?>Gambar/SriBaduga.jpg" style="width:100%">
   	</a>
   	<a href="list2">
   	<img src="<?php echo base_url(); ?>Gambar/Pos.jpg" style="width:100%">
   </a>
  </div>
  <div class="p2-third">
  	<a href="Page 3.1.html">
  	<img src="<?php echo base_url(); ?>Gambar/Mahmud.jpg" style="width:100%">
  	</a>
  	<a href="Page 3.2.html">
    <img src="<?php echo base_url(); ?>Gambar/Cireundeu2.jpg" style="width:100%">
	</a>
	<a href="Page 3.1.html">
   	<img src="<?php echo base_url(); ?>Gambar/Menggugat.jpg" style="width:100%">
   </a>
   <a href="Page 3.2.html">
   	<img src="<?php echo base_url(); ?>Gambar/MuseumBarli.jpg" style="width:100%">
   </a>
   <a href="Page 3.1.html">
   	<img src="<?php echo base_url(); ?>Gambar/KampungAdatCikondang.jpg" style="width:100%">
	</a>
  </div>
</div>
</body>
</html>