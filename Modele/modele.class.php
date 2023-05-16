<?php
/*
Classe qui gère la connexion SGBD et l'ensemble
des injections/extractions
*/
class Modele {
    private $unPDO;
    
    
    public function __construct() {
        try{
        $this->unPDO=new PDO("mysql:host=localhost:3307;dbname=cfa_ecole_2023_266","root","");
        }
        catch(PDOException $exp){
            echo "Erreur de connexion : ".$exp->getMessage();
        }
    }

    // *********************************   GESTION DES PROMOTIONS
    public function insertPromotion($tab) {
        $requete="INSERT INTO promotion values(null, :designation, :salle, :diplome);";
        $donnees=array(":designation"=>$tab["designation"],
                        ":salle"=>$tab["salle"],
                        ":diplome"=>$tab["diplome"]);
        $insert = $this->unPDO->prepare($requete);
        $insert->execute($donnees);
    }
    public function selectAllPromotions() {
        $requete="Select * FROM promotion;";
        $select=$this->unPDO->prepare($requete);
        $select->execute();
        return $select->fetchAll();
    }

    public function deletePromotion($idpromotion) {
        $requete="DELETE FROM promotion WHERE idpromotion=:idpromotion;";
        $donnees=array(":idpromotion"=>$idpromotion);
        $delete=$this->unPDO->prepare($requete);
        $delete->execute($donnees);
    }

    public function updatePromotion($tab) {
        $requete="UPDATE promotion SET designation=:designation,
                        salle=:salle,diplome=:diplome 
                        WHERE idpromotion=:idpromotion;";
        $donnees=array(":designation"=>$tab["designation"],
                        ":salle"=>$tab["salle"],
                        ":diplome"=>$tab["diplome"],
                        ":idpromotion"=>$tab['idpromotion']);
        $update= $this->unPDO->prepare($requete);
        $update->execute($donnees);
        header("Refresh:0");
    }

    public function selectWherePromotion($idpromotion) {
        $requete = "SELECT * FROM promotion WHERE idpromotion=:idpromotion;";
        $donnees=array(":idpromotion"=>$idpromotion);
        $select=$this->unPDO->prepare($requete);
        $select->execute($donnees);
        return $select->fetch();
    }
    public function selectLikePromotions($mot) {
        $requete="SELECT * FROM promotion WHERE designation LIKE :mot OR salle LIKE :mot OR diplome LIKE :mot;";
        $donnees=array(":mot"=>"%".$mot."%");
        $select=$this->unPDO->prepare($requete);
        $select->execute($donnees);
        return $select->fetchAll();
    }
    // *********************************   GESTION DES ETUDIANTS
    // *********************************   GESTION DES PROFESSEURS
    public function insertProfesseur($tab) {
        $requete="INSERT INTO professeur values(null, :nom, :prenom, :email, :mdp, :diplome);";
        $donnees=array(":nom"=>$tab["nom"],
                        ":prenom"=>$tab["prenom"],
                        ":email"=>$tab["email"],
                        ":mdp"=>$tab["mdp"],
                        ":diplome"=>$tab["diplome"]);
        $insert = $this->unPDO->prepare($requete);
        $insert->execute($donnees);
    }
    public function selectAllProfesseurs() {
        $requete="Select * FROM professeur;";
        $select=$this->unPDO->prepare($requete);
        $select->execute();
        return $select->fetchAll();
    }

    public function deleteProfesseur($idProfesseur) {
        $requete="DELETE FROM professeur WHERE idprofesseur=:idprofesseur;";
        $donnees=array(":idprofesseur"=>$idProfesseur);
        $delete=$this->unPDO->prepare($requete);
        $delete->execute($donnees);
    }

    public function updateProfesseur($tab) {
        $requete="UPDATE professeur SET nom=:nom,
                        prenom=:prenom,email=:email,mdp=:mdp,diplome=:diplome 
                        WHERE idprofesseur=:idprofesseur;";
        $donnees=array(":nom"=>$tab["nom"],
                        ":prenom"=>$tab["prenom"],
                        ":email"=>$tab["email"],
                        ":mdp"=>$tab["mdp"],
                        ":diplome"=>$tab["diplome"],
                        ":idprofesseur"=>$tab['idprofesseur']);
        $update= $this->unPDO->prepare($requete);
        $update->execute($donnees);
        header("Refresh:0");
    }

    public function selectWhereProfesseur($idProfesseur) {
        $requete = "SELECT * FROM professeur WHERE idprofesseur=:idprofesseur;";
        $donnees=array(":idprofesseur"=>$idProfesseur);
        $select=$this->unPDO->prepare($requete);
        $select->execute($donnees);
        return $select->fetch();
    }
    public function selectLikeProfesseur($mot) {
        $requete="SELECT * FROM professeur WHERE nom LIKE :mot OR email LIKE :mot OR prenom LIKE :mot;";
        $donnees=array(":mot"=>"%".$mot."%");
        $select=$this->unPDO->prepare($requete);
        $select->execute($donnees);
        return $select->fetchAll();
    }
    // *********************************   GESTION DES ENSEIGNEMENTS 
}

?>