<?php session_start();

include_once 'functions/database.php';
include_once 'functions/connexion.class.php';
$bbd = bbd();
if (isset($_POST['pseudo']) and isset($_POST['pwd'])) {

  $connexion = new connexion($_POST['pseudo'], $_POST['pwd']);
  $verif = $connexion->verif();
  if ($verif == 'ok') {

    if ($connexion->session()) {
      header('Location: dashboard');
    }
  } else {
    $erreur = $verif;
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Forum</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="./vendors/assets/css/main.css">
    <link rel="stylesheet" href="./vendors/assets/css/main2.css">
    <link rel="stylesheet" href="./vendors/assets/css/forum.css">


    <link rel="icon" type="image/png" href="./vendors/assets/images/logo.png" />

    <link href="./vendors/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- <script src="./Js/ParticleJs/particles.js"></script> -->



</head>

<body>

    <style>

    </style>
    <?php
             include_once('./php/nav.php');
        ?>
    <h5>Une interaction entre tous les étudiants comme une communauté. </h5>

    <div class="auth2">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 mx-auto" id="particles-js">

                    <script src="./Js/particles.js"></script>

                    <script src="./Js/app.js"></script>


                    <div class="auth__card card" id="test2">
                        <div class="container">
                            <div class="auth__card__header">
                                <a href="/">
                                    <img src="./vendors/assets/images/logo.png" class="logo">
                                </a>
                            </div>
                            <h1 class="title">Identifiez-vous</h1>

                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <i class="fa fa-user ic on"></i>
                                    <input type="text" class="form-control" id="formin" name="pseudo"
                                        placeholder="Utilisateur">

                                </div>

                                <div class="mb-3">
                                    <i class="fa fa-key icon"></i>
                                    <input type="password" class="form-control" id="formin" name="pwd"
                                        placeholder=" Mot de passe: ">

                                </div>

                                <?php
                                        if(isset($erreur)){
                                            echo ' <div class="alert alert-warning" role="alert">'.$erreur.'</div>';
                                        }
                                    ?>
                                <div class="d-flex justify-content-center">
                                    <input type="submit" class="btn btn-default" name="connectform" value="Connexion">

                                </div>
                                <div class="clearfix">
                                    <br>
                                    <p> Cliquez sur le lien pour

                                        <a href="compte.php">Créer un compte </a>
                                    </p>

                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>
</body>

</html>