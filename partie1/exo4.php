
<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome. </p>


<h2>Résultat</h2>


<?php

$phrase = "engage le jeu que je le gagne";
$phraseSansEspace = trim($phrase);
$verif = strrev($phraseSansEspace);

echo $verif;


