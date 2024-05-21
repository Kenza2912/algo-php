<h1> Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle")

</p>

<h2>Résultat</h2>


<?php

$nomsRadio = ["Masculin", "Féminin", "Autre"];

echo afficherRadio($nomsRadio);

function afficherRadio ($nomsRadio) {

    foreach($nomsRadio as $nomRadio) {
        $result="<input type='radio'>";
        $result .= " value='.$nomRadio.' ";


    }return $result;
}