<h1> Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
Exemple :
$nomsInput = ["Nom","Prénom","Ville"];
afficherInput($nomsInput);

</p>

<h2>Résultat</h2>



<?php

$nomsInput = [ "Nom", "Prenom", "Ville"];


echo afficherInput ($nomsInput);

function afficherInput ($nomsInput) {
    $form = "<form action= ' ' method = 'post' >";

    foreach($nomsInput as $value) {
        $form.=" 
            <label> $value</label> <br>
            <input> <br>
            ";



    }return $form;

}
