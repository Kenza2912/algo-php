<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre  </p>


<h2>Résultat</h2>

<?php


$tableDeMultiplication = 8;
echo "Table de 8:<br>";

// for($i = 1; $i <= 10; $i++) {
//     $resultat = $tableDeMultiplication * $i;
  
//     echo "$tableDeMultiplication x $i = $resultat <br>";
// }
$a= 1;
while($a <= 10) {
    $resultat = $tableDeMultiplication * $a;
    $a++;
  
    echo "$tableDeMultiplication x $a = $resultat <br>"; 
}