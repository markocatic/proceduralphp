<?php
	
	
	if(isset($_REQUEST['btnIzmeni'])){
			include 'konekcija.inc';
			$id = $_REQUEST['id_slike'];
			$id_galerije = $_REQUEST['id_galerije'];
			$naziv_slike = $_REQUEST['naziv_slike'];
			$putanja_slike = $_REQUEST['putanja_slike'];
			
			
			$upit = "UPDATE slike SET id_galerije='".$id_galerije."', naziv_slike='".$naziv_slike."' , putanja_slike='".$putanja_slike."' WHERE id_slike=".$id;  
			$rezultat = mysql_query($upit, $konekcija);
		}
		
	
	
	$ispis = "SELECT * FROM slike";
	$rezultat = mysql_query($ispis,$konekcija);
	
	if(mysql_num_rows($rezultat) == 0)
	{
		echo "Trenutno nema podataka u bazi!";
	}
	else
	{
		echo "<h4 align='center'> Izmena korisnika: </h4>";
		echo "<center>
				<table id='adminTabela'>
				<tr>
					<th>Id</th>
					<th>Id_galerije</th>
					<th>Naizv</th>
					<th>Putanja slike</th>
				</tr>";
		while($r=mysql_fetch_array($rezultat)){
			echo   "<tr>
						<td>".$r['id_slike']."</td>
						<td>".$r['id_galerije']."</td>
						<td>".$r['naziv_slike']."</td>
						<td>".$r['putanja_slike']."</td>
					</tr>";
		}
		echo "</table></center>";
	}
?>
<form method="post" action="index.php?ime_linka=uredi_galerija" id='formaIzmena'>
	<table id="adminTabela">
		<tr>
			<th>ID:</th>
			<td><input type="text" name="id_slike" id="id"/></td>
		</tr>
		<tr>
			<th>ID_GALERIJA:</th><td><input type="text" name="id_galerije" id="polje"/></td>
		</tr>
			<tr>
			<th>NAZIV:</th><td><input type="text" name="naziv_slike" id="polje"/></td>
			</tr>
			<tr>
			<th>PUTANJA:</th><td><input type="text" name="putanja_slike" id="polje"/></td>
			</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Izmeni" name="btnIzmeni" id="btn"/></td>
		</tr>
	</table>
</form>



