<?php
 include_once './functions/database.php';
 $bbd = bbd();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Forum Article</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="./vendors/assets/css/main.css">

    <link rel="icon" type="image/png" href="./vendors/assets/images/logo.png" />

    <link href="./vendors/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <!-- <script src="./Js/ParticleJs/particles.js"></script> -->



</head>

<body>


    <!-- <script src="https://threejs.org/build/three.js"></script> -->

    <main class="main-wrapper" id="root">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

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
                        <li class=" navbar-top--item">
                            <a class="nav-link" href="./index">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class=" navbar-top--item">
                            <a class="nav-link" href="#">Features</a>
                        </li>

                    </ul>
                    
                </div>
                <form class="navbar-bottom--search-form-group" action=" " method="GET">
    <i class="fa fa-search navbar-bottom--search-icon"></i>
    <input type="text" class="navbar-bottom--search-form-input"  placeholder="Rechercher un article"  name="recherche">
</form>
            </div>
        </nav>
       
        <?php 
         if(isset($_GET["idarti"] ) && !empty($_GET['idarti']))
         {
            $affichage  = "SELECT * FROM articles WHERE idarti =" .$_GET['idarti'];
   

            $request = $bbd->prepare($affichage );
            $request = $bbd->query($affichage );
            $article = $request->fetch();
            if($request->rowCount() ==0)
            {
                header('Location:blog'); 
                
            }


         }
         else{
              header('Location:blog');
              
         }
  

         ?>
        
        <div class="py-4 post-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        
                        <style>
                        
                        .ml-auto, .mx-auto {
                     margin-left: auto!important;
                              }</style>
                            <div class="col-sm-10 mx-auto">
                                <div class="div post-content__header">
                                    <div class="post-content__header__image">
                                    <img src="./vendors/assets/images/Storage/<?= $article['imagearti'] ?> " alt=" ">
                                    </div>

                                    <h3 class="post-content__header__title"> 
                                       <?=$article['nomarti']; ?>
                                    </h3>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                    <a href=" #" class="posts-card__tag" style="font-size: .75rem;"> <?=$article['nomarti']; ?></a>

                                    <small> <?=$article['heurepost'];  ?></small>
                                    </div>
                                </div>

                                <hr>
                                <div class="post-content">
                                <h2><b style=""> </b></h2 >
                                <h2><b style=""><br></b></h2>
                                <h2><span style="font-size: 18px;">Nous allons faire un petit rappel sur deux concepts qu’on a vus précédemment. </span></h2>
                                <p><span style="font-size: 18px;">On peut voir les détails de ce concept dans le code suivant:</span></p>
                                <div style="background-color: black; color:white; font-size: 14px; line-height: 19px; white-space: pre;">
                                <?=$article['descriarti']; ?>
                                </div>

                            </div>
                            
                            
                            

                            
                    </div>



                         <div class="col-md-12 col-lg-4">
                                <div class="row" style="position: sticky; top: 1rem;">
                                <div class="col-sm-10 mx-auto">
                                    <div class="posts-description">
                                        <div class="px-4 pt-4 pb-2">
                                        <h6 class="tutorial--suggestion-list-title">Description</h6>
                                        </div>
                                        <p class="px-4 pb-4">
                                        <?= $article['contenuarti'] ?>
                                            </p>
                                        <div class="post-content--suggestion-list pt-lg-4">
                                            <div class="container">
                                            <h6 class="post-content--suggestion-list-title mb-4">Categories</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
              </div>
           </div>
        </div>
    </main>

    <footer class="footer">
        <style>
            .footer {
    margin-top: 120rem;
    position: relative;
     
}

@media (max-width: 992px) {
    .footer {
    margin-top: 34rem;
    
    top: 340rem;
    position: relative;
    bottom: 60rem;
   
    
    margin-top: -167px;
}
}
        </style>

        <div class="footer__top py-2">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 footer__top--text text-center">
                        <span class="text-white ">
                            Rejoignez la communauté <strong>Dev Forum</strong> en ligne
                        </span>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 footer__top--icons">
                        <span class="text-white hide-on-md">
                            Suivez nous sur
                        </span>
                        <ul class="footer--social--list footer__top--social-list ">
                            <li class="footer__top--social-item">
                                <a href="  " target="_blank"
                                    title="Page Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="footer__top--social-item">
                                <a href="  " target="_blank"
                                    title="Page Youtube">
                                    <i class="fa fa-youtube-play"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-4 pt-4">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <h5 class="widget-title">Se former</h5>
                    <ul class="widget--list">
                        <li class="widget--item">
                            <a href="https://devforum.com/tutoriels" class="widget--link">Tutoriels</a>
                        </li>
                        <li class="widget--item">
                            <a href="https://devforum.com/blog" class="widget--link">Blog</a>
                        </li>
                    </ul>
                </div> <!-- end about us -->

                <div class="col-lg-4 col-md-12">
                    <h5 class="widget-title">Liens utiles</h5>
                    <ul class="widget--list">
                        <li class="widget--item">
                            <a href="https://devforum.com/contact" class="widget--link"
                                data-turbolinks="false">Contact</a>
                        </li>
                        <li class="widget--item">
                            <a href="#" class="widget--link">L'équipe Dev Forum</a>
                        </li>
                    </ul>
                </div> <!-- end about us -->

                <div class="col-lg-4 col-md-12">
                    <h5 class="widget-title">Nous contacter</h5>
                    <ul class="widget--list">
                        <li class="widget--item">
                            <span class="widget--link">
                                <strong>Email:</strong> devforumtogo@gmail.com
                            </span>
                        </li>
                        <li class="widget--item">
                            <span class="widget--link">
                                <strong>Téléphone:</strong> +228 93192439
                            </span>
                        </li>
                        <li class="widget--item">
                            <span class="widget--link">
                                <strong>Adresse:</strong> Togo , Lomé.
                            </span>
                        </li>
                    </ul>
                </div> <!-- end about us -->
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <div class="copyright">
                    <img src="./vendors/assets/images/logo.png" alt="" class="logo">
                    <span class="copyright-text">
                        Dev Forum ©
                        <script> document.write(new Date().getFullYear());</script>
                        <span class="hide-on-sm"> | All rights reserved</span>
                    </span>
                </div>
            </div>
        </div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>


</html>