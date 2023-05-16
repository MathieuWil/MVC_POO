<?php
    require_once("modele/modele.class.php");

    class Controleur {
        private $unModele;

        public function __construct() {
            $this->unModele=new Modele();
        }
// PARTIE PROMOTION

        public function insertPromotion ($tab){
            $this->unModele->insertPromotion($tab);
        }
        public function selectAllPromotions(){
            $lesPromotions=$this->unModele->selectAllPromotions();
            return $lesPromotions;
        }
        public function selectLikePromotions($mot){
            $lesPromotions=$this->unModele->selectLikePromotions($mot);
            return $lesPromotions;
        }
        public function deletePromotion($idPromotion)
        {
            $this->unModele->deletePromotion($idPromotion);
        }
        public function updatePromotion($tab){
            $this->unModele->updatePromotion($tab);
        }
        public function selectWherePromotion($idPromotion){
            return $this->unModele->selectWherePromotion($idPromotion);
        }

// PARTIE ETUDIANT

// PARTIE PROFESSEUR
        public function insertProfesseur ($tab){
            $this->unModele->insertProfesseur($tab);
        }
        public function selectAllProfesseurs(){
            $lesProfesseurs=$this->unModele->selectAllProfesseurs();
            return $lesProfesseurs;
        }
        public function selectLikeProfesseur($mot){
            $lesProfesseurs=$this->unModele->selectLikeProfesseur($mot);
            return $lesProfesseurs;
        }
        public function deleteProfesseur($idProfesseur)
        {
            $this->unModele->deleteProfesseur($idProfesseur);
        }
        public function updateProfesseur($tab){
            $this->unModele->updateProfesseur($tab);
        }
        public function selectWhereProfesseur($idProfesseur){
            return $this->unModele->selectWhereProfesseur($idProfesseur);
        }

    }
?>