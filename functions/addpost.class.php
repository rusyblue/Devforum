<?php include_once 'functions/database.php';

class addpost{

	private $sujet;
	private $name;
	private $bbd;

	public function __construct($name , $sujet) {

	
		$this->sujet = htmlspecialchars($sujet);
		$this->name = htmlspecialchars($name);
		$this->bbd = bbd();

	}

	public function verif(){

			
			if (strlen($this->sujet) > 0) { /*Si on n'a bien un sujet */

				return 'ok';
			}
			else {
				
				return $erreur ='Veuillez entrer le contenu du sujet';

				
			}
		
		
	}

	public function insert(){
		

		$requete2 = $this->bbd->prepare('INSERT INTO postsujet(propri,contenu,datepost,sujet) VALUES(:propri,:contenu,now(),:sujet)');
		$requete2->execute(array('propri'=>$_SESSION['id'],'contenu' => $this->sujet,'sujet'=> $this->name));

		return 1;
	}
}

