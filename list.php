<?php
/**
 * Display contact entry file
 */
include_once "header.php";
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
        for ($i=0; $i < count($persons) ; $i++):
            $person = $persons[$i];
        ?>  
            <!-- https://fontawesome.com/v4.7.0/cheatsheet/ -->
            <li class="list-group-item">
                <div class="row">
                    <div class="col-8">
                        <?php echo $person["nom"]; ?>
                    </div>
                    <div class="col-4">
                        <a href=""><i class="fa fa-edit"></i></a>
                        <a href="view.php?id=<?php echo $person["id"]; ?>"><i class="fa fa-eye"></i></a>
                        <a href=""><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </li>  
        <?php
        endfor;
        echo "<br>";

    }
    echo'<div>';
echo'<div>';


?>