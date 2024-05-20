
<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome. </p>


<h2>Résultat</h2>


<?php


$phrase = "engage le jeu que je le gagne";

function phrasePalindrome ($phrase) {
    $result = str_replace(" ","",$phrase);
    $result = strrev($result);

    return $result;

}

if(phrasePalindrome($phrase) == str_replace(" ","",$phrase) ) {
    $result = "La phrase $phrase est palindrome";

}else {
    $result = "La phrase $phrase n'est pas un palindrome";

}
echo $result;


// $phraseSansEspace = trim($phrase);


