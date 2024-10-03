<?php

$fruits=array("apple","orange","kiwi","papaya","mango");

$fruits[5]="berry";
$fruits[6]="pineapple";
array_splice($fruits,0,3);
print_r($fruits);

?>