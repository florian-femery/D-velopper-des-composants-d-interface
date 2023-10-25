<!DOCTYPE html>
<html>
<head>
    <title>Tableaux</title>
</head>
<body>
    <h1>Tableau des mois et du nombre de jours</h1>
    <table>
        <tr>
            <th>Mois</th>
            <th>Nombre de jours</th>
        </tr>
        <?php
        // Création du tableau associatif en PHP
        $moisJours = array(
            "Janvier" => 31,
            "Février" => 28, // 29 en année bissextile
            "Mars" => 31,
            "Avril" => 30,
            "Mai" => 31,
            "Juin" => 30,
            "Juillet" => 31,
            "Août" => 31,
            "Septembre" => 30,
            "Octobre" => 31,
            "Novembre" => 30,
            "Décembre" => 31
        );

        // Afficher le tableau
        foreach ($moisJours as $mois => $jours) {
            echo "<tr>";
            echo "<td>$mois</td>";
            echo "<td>$jours</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2>Tableau trié par nombre de jours</h2>
    <table>
        <tr>
            <th>Mois</th>
            <th>Nombre de jours</th>
        </tr>
        <?php
        // Trier le tableau en fonction du nombre de jours
        asort($moisJours);
        
        // Afficher le tableau trié
        foreach ($moisJours as $mois => $jours) {
            echo "<tr>";
            echo "<td>$mois</td>";
            echo "<td>$jours</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>