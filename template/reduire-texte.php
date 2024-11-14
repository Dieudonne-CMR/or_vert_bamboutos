<?php $des = $values->description;
    $long= 50;
    if(strlen($des)>$long){
    $values->description = substr($des, 0, $long)."  ".".".".".".".".";
    }
 ?>