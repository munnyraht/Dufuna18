<?php
$temp = 48;
if ($temp<= 20 ) {
    echo "It is really cold today";
}
elseif($temp<30 and $temp>20 ){
    echo "The weather is just perfect";
}
elseif( $temp>=30 and $temp<40){
    echo "It is so hot today";
}
elseif( $temp>=40){
    echo" Am in the Sahara Desert";
}
?>