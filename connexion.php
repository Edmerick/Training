<?php 
/**
 * 
 */
    //$item=array();

    if (isset($_POST['valider'])) {
        //Get information from user:
        $nom = $_POST['nom'];
        $prenoms = $_POST['prenoms'];
        $sexe = $_POST['sexe'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];

        //create the array with the information of the form
        $item = array(
            "id"=> time(),
            "nom"=> $nom,
            "prenom"=> $prenoms,
            "sexe"=> $sexe,
            "age"=> $age,
            "email"=> $email,
            "contact"=> $contact);
        }
//function addDatatoOld($item) {
//Get the lod informations in the folder contacts.json
$oldContact = file_get_contents("contacts.json");
$oldContact = json_decode($oldContact);
//Add the informations to the form to the old informations in the folder contacts 
array_push($oldContact, $item);
/**return $oldContact;
}
addDatatoOld($item);
**/
$newContact = $oldContact;
$file = fopen("contacts.json", "w+" );
if (isset($file)) {
    fwrite($file, json_encode($newContact));
    echo 'Data saved succesfull';
    header("Location: index.php");
} 
else {echo 'Data is not saved';
}
fclose($file);


?>
        