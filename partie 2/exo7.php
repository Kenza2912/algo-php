<h1> Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.


</p>

<h2>Résultat</h2>

<?php

$elements = [
    "choix 1" => false,
    "choix 2" => true,
    "choix 3" => false,
];

echo genererChecbox($elements);

function genererChecbox ($elements) {
    $result = " ";
    foreach($elements as $element => $checked) {
       $result .= "<input type='checkbox' >";
       $result .= "<label> $element </label> <br>";

    }
    return $result;


}