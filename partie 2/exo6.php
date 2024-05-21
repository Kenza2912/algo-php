<h1> Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.
Exemple :
$elements = ["Monsieur","Madame","Mademoiselle"];
alimenterListeDeroulante($elements);

</p>

<h2>Résultat</h2>

<?php
$elements = ["Monsieur", "Madame", "Mademoiselle"];

echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante ($elements) {
            echo "<select name = ' ' id = ' '>";
            
    foreach($elements as $element) {
        echo "<option value = '$element'>$element</option>";
       

    }return "</select>" ;
}


