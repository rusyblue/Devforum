<?php 
session_start();
include_once 'functions/database.php';
include_once 'functions/connexion.class.php';
    include_once 'functions/traitprofil.php';
    $bbd = bbd();

  

    if (!isset($_SESSION['id'])) {



        header('Location: index.php');
      }else {
       
         
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profil | Blogeur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./vendors/assets/css/profil.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <hr>
    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10">
                <h3>
                    {{}}
                </h3>
            </div>
            <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image"
                        class="img-circle img-responsive"
                        src="./vendors/assets/images/logo.png"></a></div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <!--left col-->

                
                <div class="text-center">
             
             
                        
                        <img src="membres/avatars/<?php echo $_SESSION['id']; ?>.jpg"
                            class="img-circle img-responsive">
                           
                       
             
                        <!-- http://ssl.gstatic.com/accounts/ui/avatar_2x.png -->
                    <h6>Charger une photo</h6>
                     
                </div>
                </hr><br>


                <!-- <div class="panel panel-default">
                    <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                    <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
                </div> -->


                <!-- <ul class="list-group">
                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125
                    </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78
                    </li>
                </ul>

                <div class="panel panel-default">
                    <div class="panel-heading">Social Media</div>
                    <div class="panel-body">
                        <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i
                            class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i
                            class="fa fa-google-plus fa-2x"></i>
                    </div>
                </div> -->

            </div>
            <!--/col-3-->
            <div class="col-sm-9">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">Profil de
                            <?php print $_SESSION['pseudo'] ;?>
                        </a></li>

                </ul>


                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <hr>
                        <form class="form" action="" method="post"  enctype="multipart/form-data" id="registrationForm">
                       
                            <div class="form-group">

                                <div class="col-xs-6">
                                <label for="nom">Pseudo</label>
                                       <input type="text" class="form-control" id="nom" placeholder="Entrer votre nom" name="newpseudo"value="<?php echo $_SESSION['pseudo'];?>">
                                </div>
                            </div>
                             
 

                            <div class="form-group">
                              <div class="col-xs-6">
                               <label for="mdp">Mot de passe:</label>
                               <input type="password" class="form-control" id="pwd" placeholder="Entrer votre mot de passe" name="newmdp">

                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-xs-6">
                              <label for="mdp">Confirmation mot de passe </label>
                                <input type="password" class="form-control" id="pwd" placeholder="Confirmez votre mot de passe" name="newmdp2">
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-xs-6">
                              <label for="mdp">Charger une photo</label>
                              <input type="file" class="text-center center-block file-upload" name="Avatar" >
                              </div>
                            </div>
 
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <br>
                                    <button class="btn btn-lg btn-success" type="submit" name="update_edition"><i
                                            class="glyphicon glyphicon-ok-sign"></i> Enregistrer </button>
                                    <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                                        Reset</button>
                                </div>
                            </div>
                        </form>
                        <?php
            if(isset($erreur)) { echo $erreur;}
          ?>

                        <hr>

                    </div>
            

                </div>
                <!--/tab-pane-->
            </div>
            <!--/tab-content-->

        </div>
        <!--/col-9-->
    </div>
    <!--/row-->

    <script>
        $(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});
});
    </script>

</body>

</html>
<?php
}
?>