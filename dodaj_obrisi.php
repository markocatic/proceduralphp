<?php
include('konekcija.inc');
	if(isset($_REQUEST['btnBrisi'])){
				$za_brisanje=$_REQUEST['brisanje'];
				
				foreach($za_brisanje as $id){
					$upit="DELETE FROM slike WHERE id_slike=".$id;
					$rezultat=mysql_query($upit, $konekcija);
				}
			}

?>
<?php
	include('konekcija.inc');
	
	
	$ispis = "SELECT * FROM slike";
			
	$rezultat = mysql_query($ispis, $konekcija);
			
	if(mysql_num_rows($rezultat) == 0){
		echo "Trenutno nema podataka u bazi!";
	}
	else{
		
		echo "<h4 align='center'> Brisanje Korisnika: </h4>";
		echo "<center>
		<form method='post' action='index.php?ime_linka=dodaj_obrisi'>
			<table  id='adminTabela'>
				<tr>
					<th>RB</th>
					<th>ID Galerije</th>
					<th>Naziv</th>
					<th>Putanja</th>
					<th>Brisanje</th>
				</tr>";
		$i=1;
		while($r=mysql_fetch_array($rezultat)){
			echo   "<tr>
						<td>".$i."</td>
						<td>".$r['id_galerije']."</td>
						<td>".$r['naziv_slike']."</td>
						<td>".$r['putanja_slike']."</td>
						
						<td><center><input type='checkbox' name='brisanje[]' value='".$r['id_slike']."'/></center></td>
					</tr>";
				$i++;
		}
		echo "  <tr>
					<td colspan='9'><center><input type='submit' id='btn' name='btnBrisi' value='Izbrisi'/></center></td>
				</tr>
				</table>
				</center>
				</form>";
	}
?>
<h4 align="center"> Unos korisnika </h4>
<form method="POST" action="index.php?ime_linka=dodaj_obrisi" id='formaUpis'>
	<table id="adminTabela">
		<tr>
			<th>ID:</th>
			<td><input type="text" name="id_slike" id="id"/></td>
		</tr>
		<tr>
			<th>ID GALERIJE:</th><td><input type="text" name="id_galerije" id="polje"/></td>
		</tr>
			<tr>
			<th>NAZIV:</th><td><input type="text" name="naziv_slike" id="polje"/></td>
			</tr>
			<tr>
			<th>PUTANJA:</th><td><input type="text" name="putanja_slike" id="polje"/></td>
			</tr>
			<td colspan="2" align="center"><input type="submit" value="Unos" name="btnUnos" id="btn"/></td>
		</tr>
	</table>
</form>	
<?php 
	if(isset($_REQUEST['btnUnos'])){
	$id = $_REQUEST['id_slike'];
			$id_galerije = $_REQUEST['id_galerije'];
			$naziv_slike = $_REQUEST['naziv_slike'];
			$putanja_slike = $_REQUEST['putanja_slike'];
	
	$upit = "INSERT INTO slike VALUES ($id,$id_galerije,'$naziv_slike','$putanja_slike')";
	$rez = mysql_query($upit , $konekcija);
	}
?> 