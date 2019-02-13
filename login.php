<?php
	@session_start();
	include 'konekcija.inc';
	
	if(isset($_REQUEST['btnLogin']))
	{
		$user = trim($_REQUEST['user']);
		$password = md5(trim($_REQUEST['password']));
		
		$upit = "SELECT * FROM korisnici WHERE user='$user' AND password='$password'";
		$rez = mysql_query ($upit, $konekcija);
		
		if(mysql_num_rows($rez) == 0)
		{
			$greske[] = "Greska prilikom logovanja!";
		}
		else
		{
			$r = mysql_fetch_array($rez);
			$_SESSION['uloga'] = $r['uloga'];
			$_SESSION['user'] = $r['user'];
			$_SESSION['id_korisnik'] = $r['id_korisnik'];
			$_SESSION['imeKorisnika'] = $r['imeKorisnika'];
			$_SESSION['adresa'] = $r['adresa'];
			$_SESSION['email']=$r['email'];
			
			
			switch($_SESSION['uloga'])
			{
				case 'admin':
					header('Location: index.php');
					break;
					
				case 'korisnik':
					header('Location: index.php');
					break;
			}
		}	
	
	}
?>		
<div id="content">
<div id="signup">
<form method="POST" action="index.php?ime_linka=login">
<h1>Login</h1>
<table>
<tr><td>User:</td>
<td><input class="input" name="user" id="user" onBlur="proveraUser();" type="text" placeholder="Example:marko"></td></tr>
<tr><td>Password:</label></td>
<td><input class="input" name="password" id="password" onBlur="proveraPassword();" type="password" placeholder="Example:abcde"></td></tr>
<tr><td><input class="submit bigButton" name="btnLogin" type="submit" value="Log in"></td></tr>
</table>
</form>
</div></div>





