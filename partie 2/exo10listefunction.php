

<?php



$elements = ["Monsieur", "Madame", "Mademoiselle"];

echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante ($elements) {
            echo "<select name = ' ' id = ' '>";
            
    foreach($elements as $element) {
        echo "<option value = '$element'>$element</option>";
       

    }return "</select>" ;
}

$nomsInput = [ "Nom", "Prenom", "adresse","email","ville","sexe"];


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

$nomsRadio = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];

echo afficherRadio($nomsRadio);

function afficherRadio ($nomsRadio) {
   $form ="";

    foreach($nomsRadio as $nomRadio) {
        $form .=" <input type='radio' value = '$nomRadio'>";
        $form .= "<label> $nomRadio <label><br>";
      

    }return $form;
    
}

echo "<button> Soumettre</button>";