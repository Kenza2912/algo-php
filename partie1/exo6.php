<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)  </p>


<h2>Résultat</h2>

<?php

$prixUnitaire = 9.99;
$nbQuantite = 5;
$tauxTva = 1.2;
$resultat = $prixUnitaire * $nbQuantite * $tauxTva;

echo "Prix unitaire de l'article : " .$prixUnitaire. " € <br>";
echo " Quantité : " .$nbQuantite. " <br>";
echo " Taux de TVA : " . $tauxTva. " <br>";
echo "Le montant de la facture à régler est de : " .$resultat. " €";





