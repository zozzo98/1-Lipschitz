<?php

	import "../libraries/php/Database.php";
	import "../libraries/php/Guadagno.php";
	
	$guadagno = new Guadagno();
	$guadagno->id = $_POST["id"];
	$guadagno->giorno = $_POST["giorno"];
	$guadagno->mese = $_POST["mese"];
	$guadagno->anno = $_POST["anno"];
	$guadagno->tipologia = $_POST["tipologia"];
	$guadagno->importo = $_POST["importo"];
	$guadagno->descrizione = $_POST["descrizione"];
	$guadagno->ripetitiva = $_POST["ripetitiva"];
	$guadagno->ogni_quanto = $_POST["ogni_quanto"];
	$guadagno->a_partire = $_POST["a_partire"];
	$guadagno->save();

?>