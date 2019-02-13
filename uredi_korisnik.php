<?php
	include('konekcija.inc');
	if(isset($_REQUEST['btnBrisi'])){
				$za_brisanje=$_REQUEST['brisanje'];
				
				foreach($za_brisanje as $id){
					$upit="DELETE FROM korisnici WHERE id_korisnik=".$id;
					$rezultat=mysql_query($upit, $konekcija);
				}
			}
	
	if(isset($_REQUEST['btnIzmeni'])){
			include 'konekcija.inc';
			$id = $_REQUEST['id_korisnik'];
			$imeKorisnika = $_REQUEST['imeKorisnika'];
			$adresa = $_REQUEST['adresa'];
			$user = $_REQUEST['user'];
			$password = md5($_REQUEST['password']);
			$email = $_REQUEST['email'];
			$uloga = $_REQUEST['uloga'];
			
			$upit = "UPDATE korisnici SET imeKorisnika='".$imeKorisnika."',adresa='".$adresa."' , user='".$user."', password='".$password."',email='".$email."' , uloga='".$uloga."' WHERE id_korisnik=".$id;  
			$rezultat = mysql_query($upit, $konekcija);
		}
		
	
	
	$ispis = "SELECT * FROM korisnici";
	$rezultat = mysql_query($ispis,$konekcija);
	
	if(mysql_num_rows($rezultat) == 0)
	{
		echo "Trenutno nema podataka u bazi!";
	}
	else
	{
		echo "<div id='urediKorisnikdiv'> <h4 align='center'> Izmena korisnika: </h4>";
		echo "<center>
				<table id='adminTabela'>
				<tr>
					<th>Id</th>
					<th>Ime</th>
					<th>Adresa</th>
					<th>Korisnicko ime</th>
					<th>Lozinka</th>
					<th>Email</th>
					<th>Uloga</th>
				</tr>";
		while($r=mysql_fetch_array($rezultat)){
			echo   "<tr>
						<td>".$r['id_korisnik']."</td>
						<td>".$r['imeKorisnika']."</td>
						<td>".$r['adresa']."</td>
						<td>".$r['user']."</td>
						<td>".$r['password']."</td>
						<td>".$r['email']."</td>
						<td>".$r['uloga']."</td>
					</tr>";
		}
		echo "</table></center>";
	}
?>
<form method="post" action="index.php?ime_linka=uredi_korisnik" id='formaIzmena'>
	<table id="adminTabela">
		<tr>
			<th>ID:</th>
			<td><input type="text" name="id_korisnik" id="id"/></td>
		</tr>
		<tr>
			<th>IME:</th><td><input type="text" name="imeKorisnika" id="polje"/></td>
		</tr>
			<tr>
			<th>ADRESA:</th><td><input type="text" name="adresa" id="polje"/></td>
			</tr>
			<tr>
			<th>USER:</th><td><input type="text" name="user" id="polje"/></td>
			</tr>
			<tr>
			<th>PASSWORD:</th><td><input type="text" name="password" id="polje"/></td>
			</tr>
			<tr>
			<th>EMAIL:</th><td><input type="text" name="email" id="polje"/></td>
			</tr>
			<tr>
			<th>ROLE:</th><td><input type="text" name="uloga" id="polje"/></td>
			</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Izmeni" name="btnIzmeni" id="btn"/></td>
		</tr>
	</table>
</form>
<h4 align="center"> Unos korisnika </h4>
<form method="POST" action="index.php?ime_linka=uredi_korisnik" id='formaUpis'>
	<table id="adminTabela">
		<tr>
			<th>ID:</th>
			<td><input type="text" name="id_korisnik" id="id"/></td>
		</tr>
		<tr>
			<th>IME:</th><td><input type="text" name="imeKorisnika" id="polje"/></td>
		</tr>
			<tr>
			<th>ADRESA:</th><td><input type="text" name="adresa" id="polje"/></td>
			</tr>
			<tr>
			<th>USER:</th><td><input type="text" name="user" id="polje"/></td>
			</tr>
			<tr>
			<th>PASSWORD:</th><td><input type="text" name="password" id="polje"/></td>
			</tr>
			<tr>
			<th>EMAIL:</th><td><input type="text" name="email" id="polje"/></td>
			</tr>
			<tr>
			<th>ROLE:</th><td><input type="text" name="uloga" id="polje"/></td>
			</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Unos" name="btnUnos" id="btn"/></td>
		</tr>
	</table>
</form>	
<?php 
	if(isset($_REQUEST['btnUnos'])){
	$id = $_REQUEST['id_korisnik'];
	$imeKorisnika = $_REQUEST['imeKorisnika'];
	$adresa = $_REQUEST['adresa'];
	$user = $_REQUEST['user'];
	$password = md5($_REQUEST['password']);
	$email = $_REQUEST['email'];
	$uloga = $_REQUEST['uloga'];
	
	$upit = "INSERT INTO korisnici VALUES ($id,'$imeKorisnika','$adresa','$user','$password','$email','$uloga')";
	$rez = mysql_query($upit , $konekcija);
	}
?> 
</div>
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
		<form method='post' action='index.php?ime_linka=uredi_korisnik'>
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




