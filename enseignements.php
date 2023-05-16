<h2>Gestion des enseignements</h2>
<br>
<?php
    $lesPromotions=$unControleur->selectAllPromotions();
    $lesProfesseurs=$unControleur->selectAllProfesseurs();

    require_once("vue/vue_insert_enseignement.php");
    require_once("vue/vue_les_enseignements.php");
?>