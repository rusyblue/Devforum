<?php session_start();
header('content-type: text/html;charset=utf-8');
include_once 'functions/database.php';
include_once 'functions/addsujet.class.php';
$bbd = bbd();
if (!isset($_SESSION['id'])) {
  
  header('Location: forum');
}
else {
  ?>
<?php
if (isset($_POST['name']) AND isset($_POST['sujet'])) {
  
  $addsujet = new addsujet($_POST['name'], $_POST['sujet'] ,$_POST['categorie']);
  $verif = $addsujet->verif();
  if ($verif=="ok") {
      if($addsujet->insert()){

        header('Location: dashboard.php?sujet='.$_POST['name']);
      }

  }
  else { /*si erreur*/
        $erreur = $verif;
  }
}

 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sujet  blogeur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="./vendors/assets/css/main.css">
    <link rel="stylesheet" href="./vendors/assets/css/main2.css">

    <link rel="icon" type="image/png" href="./vendors/assets/images/logo.png" />
    <link rel="stylesheet" href="./vendors/assets/css/forum.css">

    <link href="./vendors/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <!-- <script src="./Js/ParticleJs/particles.js"></script> -->



</head>


<nav class="navbar navbar-expand-lg navbar ">

<div class="navbar-top">

    <ul class=" navbar-top--nav">
        <li class=" navbar-top--item">
            <a class="nav-link" href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i><span
                    class="sr-only"></span></a>
        </li>
        <li class=" navbar-top--item">
            <a class="nav-link" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        </li>

    </ul>
</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <!-- <a class="navbar-brand" href="#">Hidden brand</a> -->
    <div class="navbar-bottom">

        <ul class=" navbar-top--nav">
            <!-- <div class="navbar-bottom--logo">
                <a href="/">
                    <img src="./vendors/assets/images/logo.png" alt="Dev Forum - Logo">
                </a>
            </div> -->
            <li class="nav-item active">
                <a class="nav-link" href="#">Tutoriels <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./blog.php">Blog</a>
            </li>
            <li class=" navbar-top--item">
                <a class="nav-link" href="profil">Modifier </a>
            </li>
            <li class=" navbar-top--item">

             <a  class="nav-link" href="logout"> <i class="fa fa-sign-out"  ></i> </a>
               
      
            </li>
        
        </ul>

    </div>
    
      
        
    <div class="image_outer_container">
        <!-- <p class="text-end"> {{session}}</p> -->
       
   <?php
          
        echo ' <div class="green_icon2"></div><p class="text-end"> ' . $_SESSION['pseudo'] . ' </p>';?>
        
        <div class="green_icon"></div>
        <div class="image_inner_container">

            <img src="membres/avatars/<?php echo $_SESSION['id']; ?>.jpg"
                class="img-fluid">
               

        </div>

    </div>
</div>
</nav>

 
<body>
 
<div id="sujetadd" >

      <!-- <a class="navbar-brand" href="#"><h2>Ajout d'un sujet  </h2></a> -->

  </div>



<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 mx-auto" >
            <div class="auth__card card" >
                <div class="container">
                    <h1 class="title">Ajouter un sujet </h1>

                    <form method="POST" class="panel panel-inhert" action=
                    "addsujet.php?categorie=<?php echo $_GET['categorie'];?> ">
                        <div class="mb-3">
                            <i class="fa fa-user ic on"></i>
                            <input type="text" class="form-control" id="formin" name="name"
                                placeholder="Sujet">
                        </div>

                        <div class="mb-3">
                            <i class="fa fa-user ic on"></i>
                            <textarea id="editor" class="form-control"  name="sujet" placeholder="Votre contenu"></textarea>
                            <input type="hidden" value="<?php echo $_GET['categorie'];?>" name="categorie" />
                        </div>

                       

                        <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-default" name="envoi" value="Ajouter le sujet">

                        </div>
                       
                    </form>
           

                </div>
                <?php
            if(isset($erreur))
            {
                echo '<div class="alert alert-warning">'.$erreur.'</div>';
            }
            ?>
            </div>
        </div>
</div>
      



</body>
        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>

 
</html>
 

  <?php
}
    ?>
