<h3>Ajout d'un etudiant</h3>
<br>
<form action="#" method="post">
    Nom etudiant <br>
    <input type="text" name="nom"> <br>
    Prenom etudiant <br>
    <input type="text" name="prenom"> <br>
    Email etudiant <br>
    <input type="text" name="email"> <br>
    Mdp etudiant <br>
    <input type="password" name="mdp"> <br>
    Adresse etudiant <br>
    <input type="text" name="adresse"> <br>
    Email etudiant <br>
    <select name="statut">
        <option value="alternant">Alternant</option>
        <option value="initial">Initial</option>
    </select> <br>
    La promotion :<br>
    <select name="idpromotion">
    <?php
    foreach ($lesPromotions as $unePromotion) {
        echo "<option value='".$unePromotion['idpromotion']."'>";
        echo $unePromotion['designation'];
        echo "</option>";
    }
    ?>
    </select>

    <input type="reset" name="Annuler" value="Annuler"> <br>
    <input type="submit" name="Valider" value="Valider"> <br>
</form>