<?php
include('konekcija.inc');
	if(isset($_REQUEST['btnBrisi'])){
				$za_brisanje=$_REQUEST['brisanje'];
				
				foreach($za_brisanje as $id){
					$upit="DELETE FROM korisnici WHERE id_korisnik=".$id;
					$rezultat=mysql_query($upit, $konekcija);
				}
			}
	?>
<?php
	include('konekcija.inc');
	
	
	$ispis = "SELECT * FROM korisnici";
			
	$rezultat = mysql_query($ispis, $konekcija);
			
	if(mysql_num_rows($rezultat) == 0){
		echo "Trenutno nema podataka u bazi!";
	}
	else{
		
		echo "<h4 align='center'> Brisanje Korisnika: </h4>";
		echo "<center>
		<form method='post' action='index.php?ime_linka=admin'>
			<table  id='adminTabela'>
				<tr>
					<th>RB</th>
					<th>Ime</th>
					<th>Adresa</th>
					<th>User</th>
					<th>Password</th>
					<th>Email</th>
					<th>Uloga</th>
					
					<th>Brisanje</th>
				</tr>";
		$i=1;
		while($r=mysql_fetch_array($rezultat)){
			echo   "<tr>
						<td>".$i."</td>
						<td>".$r['imeKorisnika']."</td>
						<td>".$r['adresa']."</td>
						<td>".$r['user']."</td>
						<td>".$r['password']."</td>
						<td>".$r['email']."</td>
						<td>".$r['uloga']."</td>
						<td><center><input type='checkbox' name='brisanje[]' value='".$r['id_korisnik']."'/></center></td>
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