<?php
    class utilisateur{
        //attributs
        private ?int $id_utilisateur;
        private ?string $nom_utilisateur;
        private ?string $prenom_utilisateur;
        private ?string $mail_utilisateur;
        private ?string $password_utilisateur;
        private ?int $id_role;
        //constructeur
        public function __construct($nom, $prenom, $mail, $password){
            $this->nom_utilisateur = $nom;
            $this->prenom_utilisateur = $prenom;
            $this->mail_utilisateur = $mail;
            $this->password_utilisateur = $password;
        }
        //getter et setter
        public function getId():int{
            return $this->id_utilisateur;
        }
        public function getNom():string{
            return $this->nom_utilisateur;
        }
        public function getPrenom():string{
            return $this->prenom_utilisateur;
        }
        public function getMail():string{
            return $this->mail_utilisateur;
        }
        public function getPassword():string{
            return $this->password_utilisateur;
        }
        public function setNom($nom){
            $this->nom_utilisateur = $nom;
        }
        public function setPrenom($prenom){
            $this->prenom_utilisateur = $prenom;
        }
        public function setMail($mail){
            $this->mail_utilisateur = $mail;
        }
        public function setPassword($password){
            $this->password_utilisateur = $password;
        }
    }