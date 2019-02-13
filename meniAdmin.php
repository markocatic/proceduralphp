<?php
	include('konekcija.inc');
	
	$upit = "SELECT * FROM meni WHERE uloga=3";
	$rez = mysql_query($upit, $konekcija);
	
	echo "<ul class='nav'>";
	while($r = mysql_fetch_array($rez)){
		if($r['id_meni']==1){
			echo "<li><a href='index.php?ime_linka=".$r['ime_linka']."'>".$r['ime_linka']."</a>";
		}
		else{
			if($r['id_meni']!=null){
				echo "<li><a href='index.php?ime_linka=".$r['ime_linka']."'>".$r['ime_linka']."</a>";
			}
			else{
				echo "<li><a href='#'>".$r['ime_linka']."</a>";
			}
		}
	}
	echo "</ul>";
	
?>