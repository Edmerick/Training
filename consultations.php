<?php
/**
 * Display contact entry file
 */
$letterGroups = array();
$oldContact = file_get_contents("contacts.json");
$persons = json_decode($oldContact);
print_r($persons);
for ($i=0; $i < count($persons) ; $i++) { 
    $person = $persons[$i];
    echo '<li class="list-group-item">'.$person["nom"].'</li>';

   echo '</ul>';
}
?>