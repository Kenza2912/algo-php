<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge : </p>
<ul>
    <li>Poussin : entre 6 et 7 ans </li>
    <li>Pupille : entre 8 et 9 ans </li>
    <li>Minime : entre 10 et 11 ans </li>
    <li>Cadet : à partir de 12 ans </li>
    <li>Si la catégorie n’est pas gérée, merci de le préciser.</li>


</ul>

<h2>Résultat</h2>

<?php

$age = 10;

if($age >= 12) {
    $resultat = "Cadet";

}elseif($age >= 10) {
    $resultat = "Minime";

}elseif($age >= 8) {
    $resultat = "Pupille";

}elseif($age >= 6) {
    $resultat = "Poussin";
}else {
    $resultat = "Catégorie non géreé";
}


echo "L'enfant qui a $age ans appartient à la catégorie « $resultat » ";


