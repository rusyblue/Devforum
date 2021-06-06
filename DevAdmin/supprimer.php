<?php 
    include_once '../functions/database.php';
    $bbd = bbd();

    if (isset($_GET['idarti']) AND !empty($_GET['idarti'])) {
            
     $suppr_id = htmlspecialchars($_GET['idarti']);
     $suppr = $bbd->prepare('DELETE FROM articles WHERE idarti = ?');
     $suppr->execute(array($suppr_id));

     header('Location:article.php');
    }  
?>
 