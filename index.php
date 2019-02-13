<?php
	@session_start();
	include ('konekcija.inc');
?> 
<html>
<head>
<title>Home page | AirCell Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="AirCell,	phone shop, phones, samsung, iphone, huawei, discounts, variety, smartphones">
<meta name="description" content="AirCell Phone Shop – Online phone shop where you can find all your favourite smart phones for the best prices available! Join us now">
<link rel="stylesheet" href="style.css" type="text/css">
<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
<script src="action.js" type="text/javascript"></script>
<script src="login.js" type="text/javascript"></script>
<script src="feedback.js" type="text/javascript"></script>
</head>
<body>
<div id="header">
	<div id="logo">
		<a href="index.php">
			<img src="slike/logo.png" alt="logo">
			</a>
	</div>
	<!-- <div id="login">
		<form action="/index.php?btnLogin=1" method="POST" name="loginForm" id="loginForm">
		<table>
			<tbody><tr>
				<td class="letters">
					Username: 
				</td>
				<td>
					<input type="text" name="tbLoginUsername" id="tbLoginUsername" class="loginArea">
					<span class="redStar" id="spanLoginUsername"></span>
				</td>
			</tr>
			<tr>
				<td class="letters">
					Password: 
				</td>
				<td>
					<input type="password" name="tbLoginPassword" id="tbLoginPassword" class="loginArea">
					<span class="redStar" id="spanLoginPassword"></span>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="button" name="btnLogin" value="Log In" id="btnLogin" class="button" onclick="loginCheck();">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<a href="index.php?ime_linka=register">Don't have an account?</a>
				</td>
			</tr>
			<tr>
				<td></td>
				<td id="loginErrors"></td>
			</tr>
		</tbody></table>
	</form>
	</div>-->
	</div>
<div id="navMenu">
	
	<?php
						
					if(@$_SESSION['uloga']==''){
						include("meni.php");
					}
					if(@$_SESSION['uloga']=='admin'){
						include("meniAdmin.php");
					}
					if(@$_SESSION['uloga']=='korisnik'){
						include("meniKorisnik.php");
					}
				?>
</div>
<div id="cont1">
	<?php
					$stranica = @$_GET['ime_linka'];
					switch($stranica)
					{
						case 'contact' :include ('contact.php');
										break;
						case 'buy' :include ('buy.php');
										break;
						case 'gallery' :include ('gallery.php');
										break;
						case 'login' :include ('login.php');
										break;
						case 'author' :include ('author.php');
										break;
						case 'register' :include ('register.php');
										break;
						case 'user' :include ('user.php');
										break;
						case 'admin' : include ('admin.php');
										break;
						case 'feedback' :include ('feedback.php');
										break;
						case 'basket' :include ('korpa.php');
										break;
						case 'logout' :include ('logout.php');
										break;
						case 'profile' :include ('user.php');
										break;
						case 'uredi_korisnik' :include ('uredi_korisnik.php');
										break;
						case 'uredi_galerija' :include ('uredi_galerija.php');
										break;
						case 'dodaj_obrisi' :include('dodaj_obrisi.php');
										break;
						default : include('home.php');
									break;
						
									
					}
				
				?>

</div>

<div id="footer">
	<div id="footerTop">
		<div class="footerM">
			<h3>General</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?ime_linka=buy">Buy</a></li>
				<li><a href="index.php?ime_linka=gallery">Gallery</a></li>
				
			</ul>
		</div>
		<div class="footerM">
			<h3>Account</h3>
			<ul>
				<li><a href="index.php?ime_linka=user">My account</a></li>
				<?php 
				if(!isset($_SESSION['uloga'])) {
					echo "
				<li><a href='index.php?ime_linka=register'>Join us</a></li>
				<li><a href='index.php?ime_linka=login'>Log In</a></li>" ;}
				
				?>
			</ul>
		</div>
		<div class="footerM">
			<h3>About</h3>
			<ul>
				<li><a href="index.php?ime_linka=author">Author</a></li>
				<li><a href="index.php?ime_linka=contact">Contact</a></li>
				<li><a href="index.php?ime_linka=feedback">Feedback</a></li>
				
			</ul>
		</div>
		<div class="footerM">
			<h3>Organization</h3>
			<ul>
				<li><a href="sitemap.xml">Sitemap</a></li>
				<li><a href="dokumentacija.pdf">Documentation</a></li>
			</ul>
		</div>
	
	
	</div>
	<div class="clear"></div>
	<div id="footerBottom">
		<p>
			Disclaimer: I do not own most of the content and images.<br>All rights belong to their respective owners.<br>This is a school project.
		</p>
		<p>
			Sources: <a href="http://www.mobilnisvet.com/" target="_blank">www.mobilnisvet.com</a>,
			<a href="http://www.gsmmobile.com/" target="_blank">www.gsmmobile.com</a>
		</p>
		<p>
			Website design by Marko Ćatić<br>
			Copyright 2016©
		</p>
	
	
	</div>

</div>

</body>
<?php 
	include 'zatvori.inc';




?>
</html>