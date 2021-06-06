<?php
session_start();
require_once 'functions/database.php';

$_SESSION['id']='';

 session_destroy();


echo "<script>window.open('forum','_self')</script>";
   
 ?>
