<!DOCTYPE html>
<html>
<head>
    <title>Date et heures</title>
</head>
<body>
<?php
//1)
$date = "14/07/2019";
$dateObj = DateTime::createFromFormat('d/m/Y', $date);
$weekNumber = $dateObj->format('W');

echo "Le numéro de semaine de la date $date est : $weekNumber<br><br>";

//2)
$today = new DateTime(); // Date actuelle
$endOfTraining = new DateTime('2024-04-11'); // Date de fin de la formation (remplacez par votre date de fin)

$interval = $today->diff($endOfTraining);

$daysRemaining = $interval->days;

echo "Il reste $daysRemaining jours jusqu'à la fin de la formation.<br><br>";

//3)
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        return true;
    } else {
        return false;
    }
}

$year = 2024; // Remplacez cette année par celle que vous souhaitez vérifier

if (isLeapYear($year)) {
    echo "$year est une année bissextile.";
} else {
    echo "$year n'est pas une année bissextile.";
}
echo "<br><br>";

//4)
$date = "32/17/2019";
list($day, $month, $year) = explode('/', $date);

if (checkdate($month, $day, $year)) {
    echo "La date $date est valide.";
} else {
    echo "La date $date est erronée.";
}

//5)
$heureCourante = date('H\hi'); // Format 'H' pour les heures et 'i' pour les minutes

echo "<br><br>Il est actuellement $heureCourante.<br><br>";

//6)
$dateCourante = new DateTime(); // Crée un objet DateTime pour la date courante
$dateCourante->add(new DateInterval('P1M')); // Ajoute 1 mois

echo "La date courante plus 1 mois est : " . $dateCourante->format('d/m/Y');


//7)
$timestamp = 1000200000;
$date = date("Y-m-d H:i:s", $timestamp);
echo "<br><br>La date correspondante au timestamp 1000200000 est : $date";
?>
</body>
</html>