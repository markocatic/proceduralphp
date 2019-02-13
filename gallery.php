<?php
	@session_start();
	include('konekcija.inc');

?>
				
<div id="galerija">						
	<?php
		$upit = "SELECT * FROM slike WHERE id_galerije=1";
		$rez = mysql_query($upit , $konekcija);
		
		if(mysql_num_rows($rez)>0)
		{
			while($red = mysql_fetch_array($rez))
			{
				echo "<div>";
				echo "<a href='slike/galerija1/".$red['putanja_slike']."' ><img src='slike/galerija1/".$red['putanja_slike']."' alt='telefon'/></a>";
				echo "<div></div>";
				echo "</div>";	
			}
		}
	?>
</div>


<?php
	include('zatvori.inc');
?>