<?php
	session_start();
	
	if(isset($_SESSION['uloga']))
	{
		unset($_SESSION['uloga']);
		unset($_SESSION['user']);
		unset($_SESSION['id_korisnik']);
		
		session_destroy();
		header('Location:index.php?ime_linka=login');
	}
	else
	{
		header('Location:login.php?ime_linka=login');
	}
?>