<h4 align="center"> Unos korisnika </h4>
<form method="POST" action="index.php?ime_linka=admin" id='formaUpis'>
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