<?php
	$ime_servera = "localhost";
	$kor_ime = "root";
	$lozinka = "";
	
	
	$konekcija = mysql_connect ($ime_servera, $kor_ime, $lozinka) or die("Greska pri konekciji!");
	
	$baza = mysql_select_db ("sajt_baza", $konekcija) or die ("Greska pri povezivanju sa bazom!");

	mysql_set_charset("utf8");
?>