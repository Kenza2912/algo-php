<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.  
Attention, la valeur générée devra être arrondie à 2 décimales. </p>


<h2>Résultat</h2>

<?php

$nbFranc = 100;
$tauxChange = 0.1524;
$nbEuro = $nbFranc * $tauxChange;


echo "Montant en francs : " .$nbFranc. "<br>";
echo " $nbFranc francs = " .$nbEuro. " € ";






