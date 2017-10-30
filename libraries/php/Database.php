<?php

	class Database	{
 
    	private $nomehost = "8889";							
    	private $nomeuser = "root"; 
    	private $password = "root"; 
    	private $database_name = "casa_zolotti";		
   		private $attiva = false;

    	public function Connetti() {
    		
    		if(!$this->attiva)	{
    		
    			$connessione = mysqli_connect($this->nomehost,$this->nomeuser,$this->password,$this->database_name);
    			return $connessione;
        	
        	}
        	
    	}
    	
		public function Disconnetti()	{
        
        	if($this->attiva)	{
        
                if(mysqli_close())	{
        
         			$this->attiva = false; 
             		return true; 
        
                }else{
        
                    return false; 
        
                }
        
        	}
 		
 		}
 		
	}

?>