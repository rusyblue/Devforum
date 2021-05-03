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
    <title>Dev Forum</title>
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
        <div class="posts" id="particles-js">
            <!-- <script src="./Js/particles.js"></script>

            <script src="./Js/app.js"></script> -->
            
            <div class="tutorial-banner container" >
                <div class="row" style="max-width: 100%;height: 100%">
                    <div class="col-lg-6 col-md-12">
                        <div class="tutorial-header">
                            <h1 class="tutorial-header--title">Blog</h1>
                            <p class="tutorial-header--desc">
                                Restez toujours à jour et découvrez
                                des astuces sur la programmation à travers
                                <strong class="text-orange">
                                    nos articles
                                </strong>.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 tutorial-illustration--wrapper">
                        <div class="tutorial-illustration">
                           <svg id="a47bc909-72c0-4996-baf1-6f4140acb8df" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="644.4629" height="569.05811" viewBox="0 0 644.4629 569.05811"><path d="M837.76318,506.37231H295.423a16.51866,16.51866,0,0,1-16.5-16.5V184.07251H854.26318v305.7998A16.51867,16.51867,0,0,1,837.76318,506.37231Z" transform="translate(-277.76855 -165.47095)" fill="#e6e6e6"/><path d="M816.18017,474.78882H317.00561a8.50958,8.50958,0,0,1-8.5-8.5V224.155a8.50958,8.50958,0,0,1,8.5-8.5H816.18017a8.50951,8.50951,0,0,1,8.5,8.5V466.28882A8.50951,8.50951,0,0,1,816.18017,474.78882Z" transform="translate(-277.76855 -165.47095)" fill="#fff"/><path d="M855.41772,195.21851H277.76855V181.97095a16.51867,16.51867,0,0,1,16.5-16.5H838.91772a16.51867,16.51867,0,0,1,16.5,16.5Z" transform="translate(-277.76855 -165.47095)" fill="#6c63ff"/><path d="M435.07983,382.07983H346.23437a8.50958,8.50958,0,0,1-8.5-8.5V315.1731a8.50958,8.50958,0,0,1,8.5-8.5h88.84546a8.5095,8.5095,0,0,1,8.5,8.5v58.40673A8.5095,8.5095,0,0,1,435.07983,382.07983Z" transform="translate(-277.76855 -165.47095)" fill="#e6e6e6"/><path d="M790.72387,316.12866H510.009a4.72778,4.72778,0,1,1,0-9.45556H790.72387a4.72778,4.72778,0,0,1,0,9.45556Z" transform="translate(-277.76855 -165.47095)" fill="#e6e6e6"/><path d="M790.72387,349.94946H510.009a4.72754,4.72754,0,1,1,0-9.45508H790.72387a4.72754,4.72754,0,0,1,0,9.45508Z" transform="translate(-277.76855 -165.47095)" fill="#e6e6e6"/><path d="M790.72387,383.77075H510.009a4.72778,4.72778,0,1,1,0-9.45556H790.72387a4.72778,4.72778,0,0,1,0,9.45556Z" transform="translate(-277.76855 -165.47095)" fill="#e6e6e6"/><polygon points="419.548 556.311 407.288 556.311 401.456 509.023 419.55 509.023 419.548 556.311" fill="#a0616a"/><path d="M398.53106,552.80763h23.64387a0,0,0,0,1,0,0v14.88687a0,0,0,0,1,0,0H383.64421a0,0,0,0,1,0,0v0A14.88686,14.88686,0,0,1,398.53106,552.80763Z" fill="#2f2e41"/><polygon points="470.548 556.311 458.288 556.311 452.456 509.023 470.55 509.023 470.548 556.311" fill="#a0616a"/><path d="M449.53106,552.80763h23.64387a0,0,0,0,1,0,0v14.88687a0,0,0,0,1,0,0H434.64421a0,0,0,0,1,0,0v0A14.88686,14.88686,0,0,1,449.53106,552.80763Z" fill="#2f2e41"/><path d="M746.75526,710.91364H734.27553a4.5264,4.5264,0,0,1-4.48438-4.12793L719.21523,579.38727a1.49993,1.49993,0,0,0-2.98414-.05274l-15.1892,127.61133a4.50246,4.50246,0,0,1-4.46851,3.96778h-15.324a4.50533,4.50533,0,0,1-4.49781-4.47559c-.03369-8.01563-.08838-16.08984-.14306-24.165-.48633-71.92187-.98926-146.292,14.02856-175.42773l.137-.26563,54.19239-.92676.136.29786c16.39624,35.83007,11.41968,115.875,6.60694,193.2832l-.46314,7.459A4.50686,4.50686,0,0,1,746.75526,710.91364Z" transform="translate(-277.76855 -165.47095)" fill="#2f2e41"/><circle cx="443.31365" cy="219.86366" r="24.56103" fill="#a0616a"/><path d="M687.59706,511.0943l.67676-28.16016-4.87232-21.97168a35.41574,35.41574,0,0,1,7.87525-31.11816,34.87749,34.87749,0,0,1,29.21948-12.11523h.00025q.53064.041,1.064.08886a35.02345,35.02345,0,0,1,24.13135,12.90723,35.43053,35.43053,0,0,1,7.76416,26.57422l-5.89429,51.5166Z" transform="translate(-277.76855 -165.47095)" fill="#6c63ff"/><path d="M666.73325,561.56408a10.05578,10.05578,0,0,0,.52738-15.41031l13.82828-32.95084-18.25062,3.42765-10.33354,30.76518a10.11027,10.11027,0,0,0,14.2285,14.16832Z" transform="translate(-277.76855 -165.47095)" fill="#a0616a"/><path d="M771.0768,565.51366a10.05582,10.05582,0,0,1,.35026-15.41536L759.496,516.41406l18.026,4.4605,8.56637,31.30329a10.11027,10.11027,0,0,1-15.01158,13.33581Z" transform="translate(-277.76855 -165.47095)" fill="#a0616a"/><path d="M668.9286,545.41754a4.50175,4.50175,0,0,1-1.83911-.39258l-10.52075-4.71289a4.49406,4.49406,0,0,1-2.44409-5.48535l17.6477-54.81933,6.82007-41.29981a11.09066,11.09066,0,1,1,21.74121,4.335l-10.36547,44.292L673.23354,542.23a4.49738,4.49738,0,0,1-4.30494,3.1875Z" transform="translate(-277.76855 -165.47095)" fill="#6c63ff"/><path d="M769.29091,545.41754A4.49738,4.49738,0,0,1,764.986,542.23L748.2599,487.36578l-10.374-44.32324a11.09067,11.09067,0,1,1,21.74121-4.335l6.83765,41.37207,17.63037,54.74707a4.49444,4.49444,0,0,1-2.44434,5.48535L771.13,545.025A4.50175,4.50175,0,0,1,769.29091,545.41754Z" transform="translate(-277.76855 -165.47095)" fill="#6c63ff"/><path d="M721.58714,358.18541c-6.82592-2.95688-15.743.7224-18.49775,7.63236-1.71446,4.30049-1.19131,9.151-.24607,13.68316s2.29287,9.055,2.148,13.6824-2.138,9.5386-6.24293,11.67936c-2.45278,1.27913-5.3218,1.42137-7.98081,2.18427s-5.40346,2.54653-5.78641,5.28618c-.57932,4.14451,4.448,7.30118,4.41447,11.48585-.03556,4.43388-5.57661,7.06694-6.2948,11.44242a7.59532,7.59532,0,0,0,2.929,6.75,19.90727,19.90727,0,0,0,6.88422,3.33272,118.80963,118.80963,0,0,0,59.2554,3.37627c3.91827-.78155,7.951-1.83834,10.99547-4.42573s4.78579-7.11653,3.03581-10.70836c-2.62352-5.38475-10.95329-5.69164-13.85626-10.931-1.74133-3.14282-.93971-7.0012-.57307-10.57543.94687-9.23058,3.13144-20.01391.83832-29.00512-2.07178-8.12333-6.5704-18.62032-13-24-4.61353-3.86016-13.42156-2.10141-19.31795-.91059Z" transform="translate(-277.76855 -165.47095)" fill="#2f2e41"/><path d="M921.23145,734.52905h-350a1,1,0,0,1,0-2h350a1,1,0,0,1,0,2Z" transform="translate(-277.76855 -165.47095)" fill="#ccc"/><path d="M884.37762,711.75751c-14.41968,19.311-44.352,21.34351-44.352,21.34351s-6.55353-29.27679,7.86615-48.58777,44.352-21.34357,44.352-21.34357S898.79724,692.44648,884.37762,711.75751Z" transform="translate(-277.76855 -165.47095)" fill="#e6e6e6"/><path d="M810.9209,719.017c9.51507,12.74273,29.2666,14.084,29.2666,14.084s4.32446-19.31891-5.19062-32.06165-29.2666-14.084-29.2666-14.084S801.40582,706.2743,810.9209,719.017Z" transform="translate(-277.76855 -165.47095)" fill="#e6e6e6"/></svg>

                        </div>
                    </div>
                </div>
                
            </div>
            <ul class="nav nav-tabs posts-tabs">
                        <li class="nav-item"> <a class="nav-link" href="/php_">PHP</a> </li>
                        <li class="nav-item"> <a class="nav-link" href=" ">Javascript</a> </li>
                        <li class="nav-item"> <a class="nav-link" href=" ">PHP</a> </li>
                            </ul>

         <div class="posts--content">
        <div class="container">
            <div class="row">
                    <?php
                    $affichage = $bbd->query('SELECT idarti,nomarti,idcat,contenuarti FROM articles ORDER BY idarti DESC');

                    if (isset($_GET['recherche']) AND !empty($_GET['recherche'])) {

                        $recherche = htmlspecialchars($_GET['recherche']);
                      
                        $envoi = $bbd->query('SELECT  idarti,nomarti,idcat,contenuarti FROM  articles WHERE nomarti  LIKE "%'.$recherche .'%" ORDER BY idarti DESC');
                    }
                    ?>
                      <?php if ($affichage ->rowCount() > 0 ) { ?>

                                    <div class="col-md-12 col-lg-4">
                                    <?php while ($a = $affichage->fetch()) { ?>
                    <div class="posts-card">
                        <div class="posts-card__logo">
                            <img src="/storage/blog/posts/covers/1612888136.png" alt="">
                        </div>

                        <h5 class="posts-card__title"><?= $a['nomarti'] ?></h5>
                        <span class="posts-card__tag"></span>

                        <div class="posts-card__content">
                        <?= $a['contenuarti'] ?>
                        </div>

         <a href=" article.php?idarti=<?= $a['idarti'] ?> "class="btn posts-card__link d-flex justify-content-center align-items-center">
                         <span class="mr-2">

                               <?php //echo stripslashes($a ['nomarti'])?>
                               Lire
                            </span> 
                             <i class="la la-arrow-right"></i>
                        </a>

                    </div>
                </div>
                
<?php }?>

            
                <?php 
} else 
?>

               
              
            </div>  <hr>
                <div>
                    
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