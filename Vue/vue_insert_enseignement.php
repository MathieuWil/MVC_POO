<h3>Ajout d'un etudiant</h3>
<br>
<form action="#" method="post">
    Matiere enseignée <br>
    <input type="text" name="matiere"> <br>
    Coefficient <br>
    <input type="text" name="coef"> <br>
    Nombre d'heures dans l'année <br>
    <input type="text" name="nbheures"> <br>
    Année universitaire <br>
    <input type="text" name="annee"> <br>


    La promotion <br>
    <select name="idpromotion">
<?php
    foreach ($lesPromotions as $unePromotion) {
        echo "<option value='".$unePromotion['idpromotion']."'>";
        echo $unePromotion['designation'];
        echo "</option>";
    }
?>
        <option value=""></option>
    </select> <br>
    Le professeur <br>
    <select name="idprofesseur">
<?php
    foreach ($lesProfesseurs as $unProfesseur) {
        echo "<option value='".$unProfesseur['idprofesseur']."'>";
        echo $unProfesseur['nom']." ".$unProfesseur['prenom'];
        echo "</option>";
    }
?>
    <option value=""></option>
    </select>


    <input type="reset" name="Annuler" value="Annuler"> <br>
    <input type="submit" name="Valider" value="Valider"> <br>
</form>