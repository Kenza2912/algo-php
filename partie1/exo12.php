<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch.
Exemple : tableau ➔ Mickaël => FRA, Virgile => ESP, Marie-Claire => ENG  </p>


<h2>Résultat</h2>

<?php

$langues = [ 
    "français" => "Salut",
    "anglais"=> "Hello",
    "espagnol"=> "Hola",
];

$prenoms = [
    "Mickael" => "FRA",
    "Virgile"=> "ESP",
    "Marie-Claire"=> "ENG",
];

ksort($prenoms);
foreach($prenoms as $prenom => $langue )  {
    switch($langues) {
        case $langue: echo "" ;
        break;
        case 
        break;
        case 
        break;
        default
    }


}
