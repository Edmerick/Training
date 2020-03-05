<?php
/**
 * Display contact entry file
 */
$letterGroups = array();
$oldContact = file_get_contents("contacts.json");
$oldContact = json_decode($oldContact);
for ($i=0; $i< count($oldContact); $i++){

    $firstLetter = substr ($oldContact[$i]["nom"], 0 , 1);
    $letterGroups[$firstLetter][] = $oldContact[$i]; 
}
// Sorting the letters
ksort($letterGroups); // sort multidimensional array by top-level keys

// Print results in HTML
foreach($letterGroups as $key => $persons){

// affiche la lettre en majuscle
   echo' <ul class="list-group">';
   echo '<li class="list-group-item active">' .ucfirst($key) .'</li>';
        for ($i=0; $i < count($persons) ; $i++) { 
            $person = $persons[$i];
            echo '<li class="list-group-item">'.$person["nom"].'</li>';
   echo '</ul>';
    }
    echo "<br>";
} 
?>