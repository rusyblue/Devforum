<?php
include_once 'functions/database.php';
$bbd = bbd();

class connexion{

	private $pseudo;
	private $pwd;

	public function __construct($pseudo,$pwd) {
		$this->pseudo = $pseudo;
		$this->pwd = $pwd;
		$this->bbd = bbd();

	}

	public function verif(){

		$requete = $this->bbd->prepare('SELECT * FROM blogeurs WHERE pseudo = :pseudo');
		$requete->execute(array(
			'pseudo'=> $this->pseudo));
		$reponse = $requete->fetch();
		if ($reponse) {

			if ($this->pwd == $reponse['pwd']) {
				return 'ok';
				
			}
			else {
				return $erreur = ' Le mot de passe est incorrect';
			}
			

		}
		else {
			return $erreur = 'L\'utilisateur  est inexistant';

		}
	}
	public function session(){
		$requete = $this->bbd->prepare('SELECT id FROM blogeurs WHERE pseudo = :pseudo');
		$requete->execute(array('pseudo'=> $this->pseudo));
		$requete = $requete->fetch();
		$_SESSION['id'] = $requete['id'];
		$_SESSION['pseudo'] = $this->pseudo;

		return 1;

	}
}