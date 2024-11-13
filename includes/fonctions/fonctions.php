<?php
function court_text($text,$nombre_caracteres){
    if(strlen($text)>22){ 
        $text = substr($text,0,$nombre_caracteres)." ...";
    } 
    return $text;
}