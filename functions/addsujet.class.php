<?php include_once 'functions/database.php';
$bbd = bbd();
class addsujet{

	private $name;
	private $sujet;
	private $categorie;
	private $bbd;

	public function __construct($name,$sujet, $categorie) {

		$this->name = htmlspecialchars($name);
		$this->sujet = htmlspecialchars($sujet);
		$this->categorie = htmlspecialchars($categorie);
		$this->bbd = bbd();

	}

	public function verif(){

		if (strlen($this->name)  > 2  AND strlen($this->name)  < 60  ) {
			
			if (strlen($this->sujet) > 0) { /*Si on n'a bien un sujet */

				return 'ok';
			}
			else {
				
				return $erreur ='Veuillez entrer le contenu du sujet';

				
			}
		} 
		else { /*Si le nom du sujet est mauvais*/
			return $erreur = 'Le nom du sujet doit contenir entre 2 et 20 caractéres';
		}
	}

	public function insert(){
		$requete = $this->bbd->prepare('INSERT INTO sujet(name,categorie) VALUES(:name,:categorie)');
		$requete->execute(array('name'=>$this->name,'categorie'=> $this->categorie));

		$requete2 = $this->bbd->prepare('INSERT INTO postsujet(propri,contenu,datepost,sujet) VALUES(:propri,:contenu,now(),:sujet)');
		$requete2->execute(array('propri'=>$_SESSION['id'],'contenu' => $this->sujet,'sujet'=> $this->name));

		return 1;
	}
}

