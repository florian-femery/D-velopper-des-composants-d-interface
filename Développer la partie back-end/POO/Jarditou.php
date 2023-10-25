<?php
    require_once 'classes/Employe.php';
    require_once 'classes/Magasin.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gestion des employés</title>
    </head>
    <body>
        <h1>Liste des employés :</h1>
        <ul>
            <li><?php echo $employe1->envoyerOrdreTransfert(); ?></li>
            <li><?php echo $employe2->envoyerOrdreTransfert(); ?></li>
            <li><?php echo $employe3->envoyerOrdreTransfert(); ?></li>
            <li><?php echo $employe4->envoyerOrdreTransfert(); ?></li>
            <li><?php echo $employe5->envoyerOrdreTransfert(); ?></li>
        </ul>

        <h2>Mode de restauration des employés</h2>
        <ul>
            <li><?php echo "Employé 1 : " . $employe1->$magasin->restaurant; ?></li>
            <li><?php echo "Employé 2 : " . $employe2->$magasin->restaurant; ?></li>
            <li><?php echo "Employé 3 : " . $employe3->$magasin->restaurant; ?></li>
            <li><?php echo "Employé 4 : " . $employe4->$magasin->restaurant; ?></li>
            <li><?php echo "Employé 5 : " . $employe5->$magasin->restaurant; ?></li>
        </ul>
    </body>
</html>