<?php

include_once 'functions/database.php';
include_once 'functions/connexion.class.php';
$bbd = bbd();
if(isset($_SESSION ['id']))

/*  Une fois la session utilisateur est ouverte modification des informations personnelles  




         /* /////////////////////////////////////////////////

                VERFICIATION DES PARAMETRES ET TESTS

        /////////////////////////////////////////////////////

        */
{
    $requser = $bbd->prepare("SELECT * FROM blogeurs WHERE pseudo =?");

    $requser->execute(array($_SESSION['pseudo']));

    $user = $requser->fetch();
    

    if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) And $_POST['newpseudo'] != $_SESSION['pseudo'])

    {
        $newpseudo = htmlspecialchars($_POST['newpseudo']);

        $insertpseudo = $bbd->prepare("UPDATE blogeurs SET pseudo = ? WHERE id = ?");

        $insertpseudo->execute(array($newpseudo, $_SESSION['id']));

        header('Location: dashboard');


    }

    if(isset($_POST['newemail']) AND !empty($_POST['newemail']) And $_POST['newemail'] != $_SESSION['email'])
    {

        $newemail = htmlspecialchars($_POST['newemail']);

        $insertmail = $bbd->prepare("UPDATE blogeurs SET email = ? WHERE id = ?");

        $insertmail->execute(array($newemail, $_SESSION['id']));


        header('Location: dashboard');



    }

    if(isset($_POST['newpwd1']) AND !empty($_POST['newpwd2']) AND !empty($_POST['newpwd2']))

    {
        $pwd =sha1($_POST['newpwd1']);
        $pwd2= sha1($_POST['newpwd2']);


        if($pwd == $pwd2 )

        {
            $insertpwd = $bbd->prepare("UPDATE blogeurs SET pwd = ? WHERE id = ?");
            $insertpwd->execute(array($pwd, $_SESSION['id']));
            header('Location: dashboard');

        }

        else

        {

            $erreur = "Vos deux mots de passe ne correspondent pas";
            echo  '<div class="alert alert-warning">'.$erreur.'</div>';
        }
    }

    if(isset($_FILES['Avatar']) AND !empty($_FILES['Avatar']['name'])) {

      $tailleMax = 2097152;

      $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');

      if($_FILES['Avatar']['size'] <= $tailleMax) {

         $extensionUpload = strtolower(substr(strrchr($_FILES['Avatar']['name'], '.'), 1));

         if(in_array($extensionUpload, $extensionsValides)) {

            $chemin = "membres/avatars/".$_SESSION['id'].".".$extensionUpload;

            $resultat = move_uploaded_file($_FILES['Avatar']['tmp_name'], $chemin);

            if($resultat) {

               $updateavatar = $bbd->prepare('UPDATE blogeurs SET Avatar = :Avatar WHERE id = :id');

               $updateavatar->execute(array(

                  'Avatar' => $_SESSION['id'].".".$extensionUpload,

                  'id' => $_SESSION['id']
                  ));

               header('Location:dashboard');
            } else {
               $erreur = "Erreur durant l'importation de votre photo de profil";
            }

         } else {
            $erreur = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
         }
         
      } else {
         $erreur = "Votre photo de profil ne doit pas dépasser 2Mo";
      }
   }
   }
?>