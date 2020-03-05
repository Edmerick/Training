<?php
/**
 * Display contact entry file
 */
include_once "menus.html";
$letterGroups = array();
$oldContact = file_get_contents("contacts.json");
$people = json_decode($oldContact, true);
for ($i=0; $i< count($people); $i++){

    $firstLetter = substr ($people[$i]["nom"], 0 , 1);
    $letterGroups[$firstLetter][] = $people[$i]; 
}
// Sorting the letters
ksort($letterGroups); // sort multidimensional array by top-level keys
echo'<div class="row justify-content-center">';
    echo'<div class="col-6">';
    // Print results in HTML
    foreach($letterGroups as $key => $persons){

    // affiche la lettre en majuscle
        echo '<li class="list-group-item active">' .ucfirst($key) .'</li>';
                for ($i=0; $i < count($persons) ; $i++) { 
                    $person = $persons[$i];
                    echo '<li class="list-group-item">'.$person["nom"].' '.$person["prenom"].'</li>';
                }
            echo "<br>";

    }
    echo'<div>';
echo'<div>';
?>