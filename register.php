<?php
	@session_start();
	include ('konekcija.inc');
	
	if(isset($_SESSION['uloga']))
	{
		echo "<div id='ulogovan'><h1 id='ulogovanh1'>You are logged as:".$_SESSION['user']."</h1><a href='logout.php'>Logout</a></div>";
	}
?>

<div id="content">
	<div id="signup">
		<h1>Create an Account</h1>
	<form method="POST" action="index.php?ime_linka=register" >
<table>
<tr><td>Username: </td>
<td><input class="input" name="name" id="name" onBlur="proveraIme();" type="text" placeholder="Example:Marko Catic"></td></tr>
<tr><td>Address:</td>
<td><input class="input" name="address" id="address" onBlur="proveraAdresa();" type="text" placeholder="Example:Beograd 12"></td></tr>
<tr><td>User:</td>
<td><input class="input" name="user" id="user" onBlur="proveraUser();" type="text" placeholder="Example:markic"></td></tr>
<tr><td>Password:</td>
<td><input class="input" name="password" id="password" onBlur="proveraPassword();" type="password" placeholder="Example:12345"/></td></tr>
<tr><td>Email:</td>
<td><input class="input" name="email" id="email" onBlur="proveraEmail();" type="text" placeholder="Example:marko@gmail.com"></td></tr>
<tr><td><input class="submit bigButton" name="submit" type="submit" value="Create an account" >
</form></td></tr></table>

	</div>
	
	</div>
	
	<?php

if(isset($_REQUEST['submit']))
{
	$imeKorisnika = $_REQUEST['name'];
	$adresa = $_REQUEST['address'];
	$user = $_REQUEST['user'];
	$password = md5($_REQUEST['password']);
	$email = $_REQUEST['email'];
	
	
	$greske = array();
	
	$regIme = "/^[A-Z][a-z]{2,20}(\s[A-Z][a-z]{2,20})+$/";
	$regAdresa = "/^([A-z]{2,10}\s)+\d+$/";
	$regUser = "/^[a-z]{5,20}$/";
	$regEmail ="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
	
	
	if(!preg_match($regIme,$imeKorisnika))
	{
		$greske[] = "Niste dobro uneli ime korisnika!";
	}
	if(!preg_match($regAdresa,$adresa))
	{
		$greske[] = "Niste dobro uneli adresu!";
	}
	if(!preg_match($regUser,$user))
	{
		$greske[] = "Niste dobro uneli korisnicko ime!";
	}
	if(!preg_match($regEmail,$email))
	{
		$greske[] = "Niste dobro uneli email!";
	}
	
	
	
	if(count($greske)==0){
	$upit = "INSERT INTO korisnici VALUES ('','$imeKorisnika','$adresa','$user','$password','$email','korisnik')";
	$rez = mysql_query($upit , $konekcija);
	if($rez)
	{
		/* echo "Uspesno ste se ulogovali!"; */
	}
	}
	/*else
	{
		echo "<ul>";
		foreach($greske as $g)
		{
			echo "<li>".$g."</li>";
		}
		echo "</ul>";
	}*/
}

?>



<?php
	include ('zatvori.inc');
?>