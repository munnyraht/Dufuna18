<?php
$Firstname = Array("Munirat ","Akinkunmi ","Babatunde ");
$hobby= array("Eating","Reading","Writing");
$arraylenght = count($Firstname);

for ($x=0; $x < $arraylenght; $x++){
    echo "My name is ".$Firstname[$x]." and my hobby is ".$hobby[$x]."<br>";
}
