<h3>Liste des promotions</h3>
<br>
<form action="#" method="post">
    Filtrer par : <input type="text" name="mot">
    <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>
<table border="1">
    <tr>
        <td>Id promotion</td><td>Désignation</td>
        <td>Salle de cours</td><td>Diplome préparé</td>
        <td>Operations</td>
    </tr>
    <?php
    if (isset($lesPromotions)) {
        foreach ($lesPromotions as $unePromotion) {
            echo "<tr>";
            echo "<td>".$unePromotion['idpromotion']."</td>";
            echo "<td>".$unePromotion['designation']."</td>";
            echo "<td>".$unePromotion['salle']."</td>";
            echo "<td>".$unePromotion['diplome']."</td>";
         
            echo "<td> <a href='index.php?page=1&action=sup&idPromotion=".$unePromotion['idpromotion']."'> 
            <img src='images/supprimer.png' height='40' width='40'> </a>";
            echo "<a href='index.php?page=1&action=edit&idPromotion=".$unePromotion['idpromotion']."'> <img src='images/editer.png' height='40' width='40'> </a></td>";
            echo "</tr>";
        }
    }
    ?>
</table>