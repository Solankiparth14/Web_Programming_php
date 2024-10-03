<?php

$ro=array(
   "india"=>"delhi",
   "italy"=>"rome",
   "spain"=>"madrid",
   "russia"=>"moscow",
   "moldova"=>"chisinau"
);

ksort($ro);
print_r($ro);
echo"<br>";
krsort($ro);
print_r($ro);
?>