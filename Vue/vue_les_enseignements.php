<h3>Liste des promotions</h3>
<br>
<form action="#" method="post">
    Filtrer par : <input type="text" name="mot">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1">
    <tr>
        <td>Id enseignement</td><td>Matière</td>
        <td>Coefficient</td><td>Nombre d'heures</td><td>Année universitaire</td>
        <td>La promotion</td><td>Le professeur</td>
        <td>Operations</td>
    </tr>
    <?php
    if (isset($lesEnseignements)) {
        foreach ($lesEnseignements as $unEnseignement) {
            echo "<tr>";
            echo "<td>".$unEnseignement['idenseignement']."</td>";
            echo "<td>".$unEnseignement['matiere']."</td>";
            echo "<td>".$unEnseignement['coef']."</td>";
            echo "<td>".$unEnseignement['nbheures']."</td>";
            echo "<td>".$unEnseignement['annee']."</td>";
            echo "<td>".$unEnseignement['idpromotion']."</td>";
            echo "<td>".$unEnseignement['idprofesseur']."</td>";
            echo "<td> <a href=''> <img src='images.supprimer.png' height='40' width='40'> </a></td>";
            echo "<td> <a href=''> <img src='images.editer.png' height='40' width='40'> </a></td>";
            echo "</tr>";
        }
    }
    ?>
</table>