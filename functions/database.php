<?php

function bbd(){
	
	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bbd = new PDO("mysql:host=localhost;dbname=noforum","root","",$pdo_options);
		
        } 

catch (Exception $e)


{
		die('Erreur: ' .$e->getMessage());
}
	return $bbd;

}


?>