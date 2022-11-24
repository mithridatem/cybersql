<?php
   if($_SESSION['id_role'] == 1){
      //connexion à la base de données
      $bdd = new PDO('mysql:host=localhost;dbname=cyber', 'utilisateur','Adrar@31000',
      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
   }
   elseif($_SESSION['id_role'] == 2){
      //connexion à la base de données
      $bdd = new PDO('mysql:host=localhost;dbname=cyber', 'admin','Adrar@31000',
      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
   }
   else{
      $bdd = new PDO('mysql:host=localhost;dbname=cyber', 'utilisateur','Adrar@31000',
      array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
   }
?>
