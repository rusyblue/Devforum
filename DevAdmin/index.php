<?php
    include_once '../php/admin.php';
   
   
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
    <link rel="stylesheet" href="../vendors/assets/css/main.css">
    <link rel="stylesheet" href="../vendors/assets/css/main2.css">


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
                            <h1 class="title">Connexion</h1>

                            <form method="POST" action="">
                                <div class="mb-3">

                                    <input type="text" class="form-control" id="formin" name="pseudo"
                                        placeholder="votre pseudo">
                                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div> -->
                                </div>
                                <div class="mb-3">

                                    <input type="password" class="form-control" id="formin" name="pwd"
                                        placeholder="votre mot de passe">
                                </div>
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

                                    <input type="submit" class="btn btn-primary" value="Se connecter " name="valider">
                                </div>

                            </form>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>