<?php 
 include_once '../functions/database.php';
 $bbd = bbd();
 
//  include_once '../php/add.php';
include_once 'secure.php';


if(isset($_POST['nomarti'], $_POST['contenuarti'] , $_POST['descriarti'])) {
    if(!empty($_POST['nomarti']) AND !empty($_POST['contenuarti'])
     AND !empty($_POST['descriarti'])) {
        $nomarti = htmlspecialchars($_POST['nomarti']);
        $contenuarti = htmlspecialchars($_POST['contenuarti']);
        $descriarti = htmlspecialchars($_POST['descriarti']);
        $envoi = $bbd->prepare('INSERT INTO articles(nomarti,contenuarti,heurepost,descriarti) VALUES(?,?,NOW(),?)');
        $envoi->execute(array($nomarti,$contenuarti ,$descriarti ));
        $error = "Bien posté";
     } else {
         $error = 'rempplir les champs';
     }
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

                                    <input type="text" class="form-control" id="formin"  name="nomarti"
                                        placeholder="Le nom de l'article"  value="<?php $edit_article=['nomarti'];?>">
                                  
                                </div>

                                <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder=" Le contenu de l'article  " name="contenuarti" style="height: 100px">
                                     </textarea>
                                 </div>
                                   
                                </div>

                                <!-- <div class="mb-3">

                                    <input type="date" class="form-control" id="formin"  name="datepost"
                                   placeholder="Date de post">

                                </div> -->

                            <div class="mb-3">

                                <input type="text" class="form-control" id="formin"  name="descriarti"
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
                               
                                    <input type="submit" class="btn btn-primary"  value = "Ajouter " name="valider">
                                </div>
                      
                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>
</body>

</html>