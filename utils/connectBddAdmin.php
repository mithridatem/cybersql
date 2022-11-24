<?php
   //connexion à la base de données
   $bdd = new PDO('mysql:host=localhost;dbname=cyber', 'admin','Adrar@31000',
   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>
