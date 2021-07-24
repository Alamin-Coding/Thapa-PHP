<?php
$data = "Hi! I am MD. Al-amin";
$replace = str_replace("I am MD.", "My name is Md.", "$data");
$replaceCaseInsesetive = str_ireplace("al-amin", "Huda", "$data");


echo $replace. "<br>";
echo $replaceCaseInsesetive;
?>