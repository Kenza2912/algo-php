<h1> Exercice 14</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon forma

</p>

<h2>Résultat</h2>


<?php

$email = "elan@elan-formation.fr";
$email2 = "contact@elan";

echo emailBonFormat ($email);

function emailBonFormat ($email) {
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "L'adresse $email est une adresse e-mail valide";
    }else {
        echo "L'adresse $email est une adresse e-mail invalide";

    }
}

