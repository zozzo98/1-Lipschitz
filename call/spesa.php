<?php

	import "../libraries/php/Database.php";
	import "../libraries/php/Spesa.php";
	
	$spesa = new Spesa();
	$spesa->id = $_POST["id"];
	$spesa->giorno = $_POST["giorno"];
	$spesa->mese = $_POST["mese"];
	$spesa->anno = $_POST["anno"];
	$spesa->tipologia = $_POST["tipologia"];
	$spesa->importo = $_POST["importo"];
	$spesa->descrizione = $_POST["descrizione"];
	$spesa->ripetitiva = $_POST["ripetitiva"];
	$spesa->ogni_quanto = $_POST["ogni_quanto"];
	$spesa->a_partire = $_POST["a_partire"];
	$spesa->save();

?>