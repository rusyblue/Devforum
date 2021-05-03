<?php 
include_once 'functions/database.php';

class compte{

	private $pseudo;
	private $email;
	private $pwd;
	private $pwd2;
	
	public function __construct($pseudo,$email,$pwd,$pwd2){

		$pseudo = htmlspecialchars($pseudo);
		$email = htmlspecialchars($email);
	



		$this->pseudo = $pseudo;
		$this->email = $email;
		$this->pwd = $pwd;
		$this->pwd2 =$pwd2;
		$this->bbd = bbd();

	}

	public function verif(){

		if(strlen($this->pseudo) > 5 AND strlen($this->pseudo) < 20 ){ /*Pass bon*/

			   	$syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
			   	
			   	  $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

			   	if (preg_match($syntaxe, $this->email)) { /* EMAIL est bon */
			   		
			   		if(strlen($this->pwd) > 5 AND strlen($this->pwd) < 20 ){ 
			   			
			   			if ($this->pwd == $this->pwd2) { /*Bon pwd*/
			   				return 'ok';
			   			}
			   			else {
			   				return $erreur ='Les mots de passes ne sont pas identiques';
			   			}

			   		}
			   		else {/*mauvais format du mot de passe*/
			   			return $erreur ='Votre mot de passe doit compris entre  entre 5 et 20 caractéres';

			   		}
			   	}
			   	else {

						$req =$this->bbd->prepare('SELECT id FROM blogeurs WHERE email = ?');
				   $req->execute([$_POST['email']]);
				   $doublon = $req->fetch();
				   if ($doublon) {
					   return $erreur = "Adresse email déja utilisé";
				   }

			   		$erreur = 'Syntaxe de l\'adresse email incorrect!';
					   return $erreur;
					   
				   }
				   

		}
		else {

			$erreur = "En remplissant le formulaire,<br>veuillez vérifier pseudo doit compris entre  entre 5 et 20 caractéres";
			return $erreur;

		}

	}

	public function enregistrement(){


		$requete = $this->bbd->prepare('INSERT INTO blogeurs(pseudo,email,pwd,Avatar) VALUES(:pseudo,:email,:pwd,:Avatar)');
		
		$requete->execute(array(
			'pseudo'=> $this->pseudo,
			'email'=> $this->email,
			'pwd'=> $this->pwd,
			'Avatar' => $this->Avatar
		));


		return 1;
	}

	// Fonction session
	public function session(){
		$requete = $this->bbd->prepare('SELECT id FROM blogeurs WHERE pseudo = :pseudo');
		$requete->execute(array('pseudo'=> $this->pseudo));
		$requete = $requete->fetch();
		$_SESSION['id'] = $requete['id'];
		$_SESSION['pseudo'] = $this->pseudo;

		return 1;

	}
	// public function doublon(){

	// 	$requete = $this->bbd->prepare('SELECT * FROM blogeurs WHERE email = :email');
	// 	$requete->execute(array('email'=> $this->email));
	// 	$mailexist = $requete->rowcount();
	// 	$requete = $requete->fetch();
	


	// 	if ($mailexist ==0) {

		
	// 	}
	// 	 else

    //   {

    //     return 1;
    //   }


	// 	}

     

	}
