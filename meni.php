<?php
	include('konekcija.inc');
	$upit= "SELECT * FROM meni WHERE uloga=1";
	$rez = mysql_query($upit, $konekcija);
	
	echo "<ul class='nav'>";
	while($red = mysql_fetch_array($rez))
	{
		if($red['id_meni']==1)
		{
			echo "<li><a href='index.php?ime_linka=".$red['ime_linka']."'>".$red['ime_linka']."</a>";
		}
		else
		{
			if($red['id_meni']!=null)
			{
				echo "<li><a href='index.php?ime_linka=".$red['ime_linka']."'>".$red['ime_linka']."</a>";
			}
			else{
				echo "<li><a href='#'>".$r['ime_linka']."</a>";
			}
		}
		echo "</li>";
	}
	echo "</ul>";
	
	include('zatvori.inc');
?>