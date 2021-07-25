<?php
/*
the PHP foreach loop is mainly used for looping through the values of an array. It loops over the array, and each value for the current array element is assigned to $value, and the array pointer is advanced by one to go the next element in the array.

The foreach loop works only on arrays , and is used to loop through each key/value pair in an array.

*/

/*
Syntex
foreach($arrary as $value){
    code to be executed;
}
*/
$student = array("alamin", "shohid", "Popy", "Abrar");

echo "<ol>";
foreach($student as $name){
    echo "<li>" .$name. "</li>";
}
echo "</ol>";
?>