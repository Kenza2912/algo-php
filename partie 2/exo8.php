<h1> Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran

</p>

<h2>Résultat</h2>
<img src="" alt="">

<?php

$url= "https://my.mobirise.com/data/userpic/764.jpg";

echo repeterImage ($url,4);
        
function repeterImage ($url,$nbRepetitions,) {
    echo "<img src= $url alt='image'>";

    // echo "<enctype"
    for($i = 1; $i < $nbRepetitions; $i++) {
    echo "<img src= $url alt='image'>";

    } 
}

