<?php
    class ManagerUtilisateur extends Utilisateur{

        public function addUser($bdd){
            $nom = $this->getNom();
            $prenom = $this->getPrenom();
            $mail = $this->getMail();
            $password = $this->getPassword();
            $id_role = 1;
            $req = $bdd->prepare('INSERT INTO utilisateur(nom_utilisateur,
            prenom_utilisateur, mail_utilisateur, password_utilisateur, id_role)
            values(?,?,?,?,?)');
            $req->bindParam(1, $nom, PDO::PARAM_STR);
            $req->bindParam(2, $prenom, PDO::PARAM_STR);
            $req->bindParam(3, $mail, PDO::PARAM_STR);
            $req->bindParam(4, $password, PDO::PARAM_STR);
            $req->bindParam(5, $id_role, PDO::PARAM_INT);
            $req->execute();
        }
        public function getUserByMail($bdd){
            $mail = $this->getMail();
            $req = $bdd->prepare('SELECT id_utilisateur, nom_utilisateur, prenom_utilisateur, 
            mail_utilisateur, password_utilisateur, id_role
             FROM utilisateur WHERE mail_utilisateur = ?');
            $req->bindParam(1, $mail, PDO::PARAM_STR);
            $req->execute();
            $data = $req->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
    }
?>