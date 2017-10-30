<?php

	class Spesa{
		
		public $id;
		public $giorno;
		public $mese;
		public $anno;
		public $tipologia;
		public $importo;
		public $descrizione;
		public $ripetitiva;
		public $ogni_quanto;
		public $a_partire;

		function SpesabyId($cf){
			
			$query = 'SELECT * FROM Uscita WHERE id ="'.$id.'"';
			$db = new database();
			$connessione = $db->connetti();
			$connessione->set_charset("UTF8");
			$result = mysqli_query($connessione,$query);
			$db->disconnetti();
			
			while($row = mysqli_fetch_array($result)){
 			
		 		$this->id = $row["id"];
				$this->giorno = $row["giorno"];
				$this->mese = $row["mese"];
				$this->anno = $row["anno"];
				$this->tipologia = $row["tipologia"];
				$this->importo = $row["importo"];
				$this->descrizione = $row["descrizione"];
				$this->ripetitiva = $row["ripetitiva"];
				$this->ogni_quanto = $row["ogni_quanto"];
				$this->a_partire = $row["a_partire"];
 			
 			}

			
		}
		
		function save(){
			
			$query = 'INSERT INTO Uscita (giorno,mese,anno,tipologia,importo,descrizione,ripetitiva,ogni_quanto,a_partire) VALUES ("'.$this->giorno.'","'.$this->mese.'","'.$this->anno.'","'.$this->tipologia.'","'.$this->importo.'","'.$this->descrizione.'","'.$this->ripetitiva.'","'.$this->ogni_quanto.'","'.$this->a_partire.'")';
			
			$db = new database();
			$connessione = $db->connetti();
			$db->eseguiQuery($query,$connessione);
			$db->disconnetti();	
			
		}
		
	}

?>