<h2>Gestion des professeurs</h2>
<br>
<?php
    $leProfesseur=null;

    if (isset($_GET['action']) && isset($_GET['idprofesseur'])) {
    $action=$_GET['action'];
    $idProfesseur = $_GET['idprofesseur'];
    switch ($action) {
        case 'sup': $unControleur->deleteProfesseur($idProfesseur);
            break;
        case 'edit':
            $leProfesseur=$unControleur->selectWhereProfesseur($idProfesseur);
            break;
    }
    }
    require_once("vue/vue_insert_professeur.php");

    if (isset($_POST['Modifier'])) {
        $unControleur->updateProfesseur($_POST);
        echo "<br>Modification réussie de la Professeur<br>";
    }

    if (isset($_POST['Valider'])) {
        $unControleur->insertProfesseur($_POST);
        echo "<br>Insertion réussie de la Professeur<br>";
    }

    if (isset($_POST['Filtrer'])){
        $mot=$_POST['mot'];
        $lesProfesseurs=$unControleur->selectLikeProfesseur($mot);
            } else {
    $lesProfesseurs=$unControleur->selectAllProfesseurs();
}
    require_once("vue/vue_les_professeurs.php");

        
?>