<h1> Exercice 3</h1>

<p>Afficher un lien hypertexte permettant d’accéder au site d’Elan Formation. Le lien devra s’ouvrir 
dans un nouvel onglet (_blank).
</p>

<h2>Résultat</h2>


<!-- <a href="https://elan-formation.fr/accueil"> lien Elan formation</a> -->

<?php

$lienElan = "https://elan-formation.fr/accueil";



echo "<a href = '$lienElan' target='_blank'> Lien Elan formation </a>";
