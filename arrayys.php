<?php
/* There are three types of arrays

Syntex
    array();

 1. Indexed array-Arrays with a numeric index
 2. Assosciative array-Arrays with named keys
 3. Multidimensional array- Arrays containing one or more arrays
*/


//  $studen1 = "alamin";
//  $studen2 = "liza";
//  $studen3 = "alom";
//  $studen4 = "momin";
//  $studen5 = "shohid";
$name = array("alamin", "liza", "alom", "momin", "shohid");
$name[5] = "ali";
echo "<pre>";
print_r($name);
echo "<br>";

echo $name[0]. "<br>";
echo $name[3]. "<br>";
echo "<br>";
$arrayLength = count($name);
echo "The length is arrays ". $arrayLength;
echo "<br>";

echo "<ol>";
for($i=0; $i<$arrayLength; $i++){
    echo "<li> <a href='#'>$name[$i]</a> </li>";
    // echo "<li>".$name[$i]."</li>";
}
echo "</ol>";

?>