<?php
/**
 * Display details of a person
 * based on their ID using 
 * Binary Search
 */

 require_once("header.php");

/**
 * Binary search 
 * TODO: Documentation on binary search
 * 
 */
function get_id_binary_search($arr=null, $x){

    if($arr == null){
        $text = file_get_contents("contacts.json");
        $arr = json_decode($text, true);
    }
    // check for empty array 
    if (count($arr) === 0) return false; 
    $low = 0; 
    $high = count($arr) - 1; 
      
    while ($low <= $high) { 
          
        // compute middle index 
        $mid = floor(($low + $high) / 2); 
        
        // element found at mid 
        if($arr[$mid]["id"] == $x) { 
            return $arr[$mid]; 
        } 
  
        if ($x < $arr[$mid]["id"]) { 
            // search the left side of the array 
            $high = $mid -1; 
        } 
        else { 
            // search the right side of the array 
            $low = $mid + 1; 
        } 
    } 
      
    // If we reach here element x doesnt exist 
    return false; 

}

 if (isset($_GET["id"])){
    
    $id = (int) $_GET["id"];

    $person = get_id_binary_search($arr=null, $id);
    if($person!=false){
        var_dump($person);
    }

 }else{

    //echo "Sorry, you need to provide an ID";
 }

 require_once("footer.php");
