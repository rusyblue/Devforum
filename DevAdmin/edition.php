<?php 
session_start();
 include_once '../functions/database.php';
 $bbd = bbd();
 
//  include_once '../php/add.php';
include_once 'secure.php';

if(isset($_POST['update'])) {
  
    if(isset($_POST['newnomarti'], $_POST['newcontenuarti'] , $_POST['newdescriarti'])) {
       
        $newnomarti = htmlspecialchars($_POST['newnomarti']);
        $newcontenuarti = htmlspecialchars($_POST['newcontenuarti']);
        $newdescriarti = htmlspecialchars($_POST['newdescriarti']);
    $requser = $bbd->prepare("SELECT * FROM articles WHERE idarti = ?");

    $requser->execute(array($_SESSION['nomarti']));

    $user = $requser->fetch();


    if(isset($_POST['nomarti']) AND !empty($_POST['contenuarti']) And $_POST['descriarti'] != $_SESSION['idarti'])

    {
        $newnomarti = htmlspecialchars($_POST['newnomarti']);

        $insertpseudo = $bbd->prepare("UPDATE articles SET nomarti = ? WHERE idarti = ?");

        $insertpseudo->execute(array($newnomarti, $_SESSION['idarti']));

        header('Location: article.php');

    }

    

    if(isset($_POST['nomarti']) AND !empty($_POST['contenuarti']) And $_POST['descriarti'] != $_SESSION['idarti'])

    {
        $newcontenuarti = htmlspecialchars($_POST['newcontenuarti']);

        $insertpseudo = $bbd->prepare("UPDATE articles SET contenuarti = ? WHERE idarti = ?");

        $insertpseudo->execute(array($newcontenuarti, $_SESSION['idarti']));

        header('Location: article.php');

    }

     

    

    if(isset($_POST['nomarti']) AND !empty($_POST['contenuarti']) And $_POST['descriarti'] != $_SESSION['idarti'])

    {
        $newdescriarti = htmlspecialchars($_POST['newdescriarti']);

        $insertpseudo = $bbd->prepare("UPDATE articles SET descriarti = ? WHERE idarti = ?");

        $insertpseudo->execute(array($newdescriarti, $_SESSION['idarti']));

        header('Location: article.php');

    }

     
    }
    
    
    



     
     
}
else{
    $error = "Veuilez mettre à jour ";
}
 
 
 ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Forum</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="./vendors/assets/css/main.css">
    <link rel="stylesheet" href="/vendors/assets/css/main2.css">

    <link rel="icon" type="image/png" href="./vendors/assets/images/logo.png" />

    <link href="./vendors/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- <script src="./Js/ParticleJs/particles.js"></script> -->



</head>

<body>
    <div class="auth">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 mx-auto">
                    <div class="auth__card card">
                        <div class="container">
                            <div class="auth__card__header">
                                <a href="/">
                                    <img src="../vendors/assets/images/logo.png" class="logo">
                                </a>
                            </div>
                            <h1 class="title">AJout d'article</h1>

                            <form method="POST" action=""  enctype="multipart/form-data"> 
                                <div class="mb-3">

                                    <input type="text" class="form-control" id="formin"  name="newnomarti"
                                        placeholder="Le nom de l'article"   value="<?php echo $_SESSION['nomarti'];?>">
                                  
                                </div>

                                <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder=" Le contenu de l'article  " value="<?php echo $_SESSION['contenuarti'];?>" name="newcontenuarti" style="height: 100px">
                                     </textarea>
                                 </div>
                                   
                                </div>

                                <!-- <div class="mb-3">

                                    <input type="date" class="form-control" id="formin"  name="datepost"
                                   placeholder="Date de post">

                                </div> -->

                            <div class="mb-3">

                                <input type="text" class="form-control" id="formin"  name="newdescriarti" value="<?php echo $_SESSION['descriarti'];?>"
                                placeholder="Description de l'article ">

                            </div>


                                <!-- <div class="mb-3">

                                    <input type="file" class="form-control" id="formin" name="avatar"
                                        placeholder="votre mot de passe">
                                       
                                </div> -->
                                <!-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                                    <?php
                                        if(isset($error)){
                                            echo ' <div class="alert alert-warning" role="alert">'.$error.'</div>';
                                        }
                                    ?>
                                <div class="d-flex justify-content-center">
                               
                                    <input type="submit" class="btn btn-primary"  value = "Mettre à jour  " name="update">
                                </div>
                      
                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>
</body>

</html>