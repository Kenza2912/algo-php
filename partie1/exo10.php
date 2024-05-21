<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.  </p>


<h2>Résultat</h2>


<?php

$montantPayer = 152;
$MontantVerse = 200;
$aRendre = $MontantVerse - $montantPayer;
$restePayer = $MontantVerse - $montantPayer;
$nb10 = 0;
$nb5 = 0;
$nb2 = 0;
$nb1 = 0;

while($restePayer>10) {
    $nb10++;
    $restePayer-=10;
}
while($restePayer>5) {
    $nb5++;
    $restePayer-=5;
}
while($restePayer>2) {
    $nb2++;
    $restePayer-=2;
}
while($restePayer>=1) {
    $nb1++;
    $restePayer-=1;
}

echo "Montant à payer : $montantPayer € <br>";
echo "Montant versé : $MontantVerse € <br>";
echo "Reste à payer : $aRendre € <br>";

echo $nb10." billets de 10 € " .$nb5. " billet de 5 € " .$nb2. " pièce de 2€ " .$nb1. " pièce de 1 €";

// tant que le reste à payer >10 alors j'incrémente le nombre de billets 10 de 1 et je soustrais 10 au nombre à payer
// si le reste à payer et > 5 $i=++ et je soustrais 5 au reste à payer

// tant que 

