<html>
    <head>
        <meta charset="utf-8">
        <title>Boucles</title>
    </head>
    <body>
<?php
    echo "Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant:<br>";
    for ($ia =1; $ia <= 150; $ia +=2){
        echo $ia ."";
    }

    echo "<br><br>Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers<br>";
    for ($ib = 0; $ib < 500; $ib++) {
        echo "Je dois faire des sauvegardes régulières de mes fichiers\n";
    }
?>
        <h2>Table de multiplication de 1 à 9</h2>
        <table border="1">
            <tr>
                <th>&nbsp;</th>
<?php
    for ($ic = 1; $ic <= 9; $ic++) {
        echo "<th>$ic</th>";
    }                
?>
            </tr>
<?php
    for ($i = 1; $i <= 9; $i++) {
        echo "<tr>";
        echo "<th>$i</th>";
            for ($j = 1; $j <= 9; $j++) {
               $result = $i * $j;
                echo "<td>$result</td>";
            }
            echo "</tr>";
    }
?>
        </table>
    </body>
</html>