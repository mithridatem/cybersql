<?php
    include './model/model_utilisateur.php';
    include './manager/manager_utilisateur.php';
    include './view/view_add_user.php';

    //logique
    if(isset($_POST['submit'])){
        //tester si les champs sont remplis
        if(!empty($_POST['nom_utilisateur']) AND !empty($_POST['prenom_utilisateur'])
        AND !empty($_POST['mail_utilisateur']) AND !empty($_POST['password_utilisateur'])){
            $nom = cleanInput($_POST['nom_utilisateur']);
            $prenom = cleanInput($_POST['prenom_utilisateur']);
            $mail = cleanInput($_POST['mail_utilisateur']);
            $password = password_hash(cleanInput($_POST['password_utilisateur']), PASSWORD_DEFAULT);
            $user = new ManagerUtilisateur($nom,$prenom, $mail, $password);

        }
    }
?>