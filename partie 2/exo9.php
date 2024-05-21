<h1> Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle")

</p>

<h2>Résultat</h2>


<?php

$nomsRadio = ["Masculin", "Féminin", "Autre"];

echo afficherRadio($nomsRadio);

function afficherRadio ($nomsRadio) {
   $form ="";

    foreach($nomsRadio as $nomRadio) {
        $form .=" <input type='radio' value = '$nomRadio'>";
        $form .= "<label> $nomRadio <label><br>";
        

    }return $form;

}