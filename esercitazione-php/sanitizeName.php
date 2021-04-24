<?php

function sanitizeName($name){ //sanitize name è la funzione 
    //i controlli dei valori con le reg expression la metto all'nizio della funzione
    $withoutscript = preg_replace("/<script\b[^>]*>(.*?)<\/script>/m","", $name);
    $withoutHTMLtags = strip_tags($withoutscript);
    $withoutnumbers = preg_replace ("/\d/","", $withoutHTMLtags);
    $withoutcenterspace = preg_replace ("/\B /", "", $withoutnumbers);
    $withoutspace = trim ($withoutcenterspace);
    $explodeName = explode(" " , $withoutspace);
    $skynnyName = preg_replace("/[^a-z .A-Z]+/", "", $explodeName);//valido solo le stringhe che contangono valori alfabetici ed elimino quelle alfanumeriche
    $correctNames = array_map("correctCase", $skynnyName);//l'arraymap adatta alla funzione correct case l'array explodename
    $finalresult = implode(" ", $correctNames);
    return $finalresult;
    
    //return $uppercaseName
}

function CorrectCase($name) {
    $nameLoweCase = strtolower($name);
    $uppercaseName = ucfirst($nameLoweCase);
    
    
    return $uppercaseName;
}


?>