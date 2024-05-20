<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales. </p>


<h2>Résultat</h2>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9,];

function calculerMoyenne(array $notes,) : string | float | array {
    $nbNotes = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round($sommeNotes / $nbNotes, 2);
   
    
    return "Les notes obtenues par l'élève sont : " .implode(" ",$notes). "<br> 
    Sa moyenne générale est donc de : " .$moyenne. "<br>";
}


echo calculerMoyenne($notes);



