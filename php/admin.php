<?php 
 include_once '../functions/database.php';
 $bbd = bbd();
    if(isset($_POST['valider']))
    {
        // if(!empty($_POST['pseudo']) AND !empty($_POST['pwd'])){

     $pseudo= htmlspecialchars($_POST['pseudo']);
     $pwd=  sha1($_POST['pwd']);
  if(!empty($pseudo) AND !empty($pwd))
  {
    //requete préparée
     $requser=$bbd->prepare("SELECT * FROM users WHERE pseudo= ? AND pwd= ?");
     $requser->execute(array($pseudo,  $pwd)); // declaration de la variable requser
     $userexist= $requser->rowCount();
     if($userexist == 1)
     {
        $_SESSION =$requser->fetch();
        $_SESSION['iduser'] = $_SESSION['iduser'];
        $_SESSION['pseudo']=$_SESSION['pseudo'];
        $_SESSION['pwd']=$_SESSION['pwd'];
        header('Location:../DevAdmin/article.php');
        // $error="Bienvenue !";

     }
     else{
       $error="Mauvais pseudo ou mot de passe !";
     }

  } else {
            $error = "Veuillez remplir les informations !";
        }
    }  
     
?>