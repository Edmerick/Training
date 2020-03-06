<?php
/**
 * Display contact entry file
 */
include_once "menus.html";
$letterGroups = array();
$oldContact = file_get_contents("contacts.json"); //Get the information in already in contact.json
$people = json_decode($oldContact, true);         //Decode the json format in object php format
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

    // Display  the letter in capital
        echo '<li class="list-group-item active">' .ucfirst($key) .'</li>';
        for ($i=0; $i < count($persons) ; $i++) { 
            $person = $persons[$i];
            echo '<li class="list-group-item">'.$person["nom"].' '.$person["prenom"].'<img src="img/modify.jpg"></li>';  
            //$position = array_search('nom', $person);
            //print_r($persons[$position]);
            }
        echo "<br>";

    }
    echo'<div>';
echo'<div>';


?>