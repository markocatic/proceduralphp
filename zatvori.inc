<?php
	include('konekcija.inc');
	if(isset($konekcija))
	{
		mysql_close($konekcija);
	}
?>