<?php
	include 'konekcija.inc';
	$upit = "SELECT * FROM admin_meni";
	$rez = mysql_query($upit, $konekcija);
	
	echo "<table id='admin_menitabela'>";
	while($red = mysql_fetch_array($rez))
	{
		if($red['id_ameni']==1)
		{
			echo "<tr><td><a href='index.php?ime_linka=".$red['ime_linka']."'>".$red['ime_linka']."</a></td>";
		}
		else
		{
			if($red['id_ameni']!=null)
			{
				echo "<td><a href='index.php?ime_linka=".$red['ime_linka']."'>".$red['ime_linka']."</a></td>";
			}
			else{
				echo "<td><a href='#'>".$r['ime_linka']."</a></td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
?>