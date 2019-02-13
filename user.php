<?php
include 'konekcija.inc';
@session_start();
?>
<h1 class="profilh1">Profile: </h1>
<table id="korTabela">

	<tr>
		<td class="levitd">Index:</td>
		<?php
			echo"<td class='desnitd'>".$_SESSION['id_korisnik']."</td>";
		?>
	</tr>
	<tr>
		<td class="levitd"> Name:</td>
		<?php 
			echo "<td class='desnitd'>".$_SESSION['imeKorisnika']."</td>";
		?>
	</tr>
	<tr>
		<td class="levitd">Address:</td>
		<?php 
			echo "<td class='desnitd'>".$_SESSION['adresa']."</td>";
		?>
	</tr>
	<tr>	
		<td class="levitd">Username:</td>
		<?php 
			echo "<td class='desnitd'> ".$_SESSION['user']."</td>";
		?>	
	</tr>
	<tr>
	<td class="levitd">Email:</td>
		<?php 
			echo "<td class='desnitd'>".$_SESSION['email']."</td>";
		?>
	</tr>
	<tr>
		<td class="levitd"> Role: </td>
		<?php 
			echo "<td class='desnitd'>".$_SESSION['uloga']."</td>";
		?>
	</tr>


</table>