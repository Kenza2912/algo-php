<h1> Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.</p>

<h2>Résultat</h2>

<?php

// $date = "2018-02-23";
// $dateTime = new DateTime($date);

// setlocale(LC_TIME,'fr');

// echo formaterDateFr($date);

// function formaterDateFr( $date) {
//    $result = $dateTime->format("d/m/Y");
//    return $result;
// }

// $dateTime1 = $dateTime->format("d/m/Y");
// $dateTime1 = $dateTime1.date('l d F Y');


// echo $dateTime1;

// echo date_format($dateRime1 , 'l-mF-o'),


// ***************************************************************

function formaterDateFr($dateString) {
    $date = new DateTime($dateString);

    $joursSemaine = array(
        'Monday' => 'lundi',
        'Tuesday' => 'mardi',
        'Wednesday' => 'mercredi',
        'Thursday' => 'jeudi',
        'Friday' => 'vendredi',
        'Saturday' => 'samedi',
        'Sunday' => 'dimanche',
    );

    $mois = array(
        'January' => 'janvier',
        'February' => 'février',
        'March' => 'mars',
        'April' => 'avril',
        'May' => 'mai',
        'June' => 'juin',
        'July' => 'juillet',
        'August' => 'août',
        'September' => 'septembre',
        'October' => 'octobre',
        'November' => 'novembre',
        'December' => 'décembre',
    );

    $dateFr = strtr($date->format('l j F Y'), $joursSemaine + $mois);    
    //strtr = La donnée retournée est une string dans laquelle toutes les clés du tableau ont été remplacées par les valeurs correspondantes. 
    echo $dateFr;
}
formaterDateFr("2018-02-23");


// function formaterDateFr($date) {
//     $fmt = new IntlDateFormatter(
//         'fr_FR', //locale
//         IntlDateFormatter::FULL, // date
//         IntlDateFormatter::NONE, // heure
//         'Europe/Paris', // fuseau horaire
//         IntlDateFormatter::GREGORIAN // type calendrier
//     );
        
//     echo 'La date affiché devrait être : ' . $fmt->format($date);
//     return;
// }

// echo formaterDateFr($date);

