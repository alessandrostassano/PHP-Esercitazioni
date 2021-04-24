<?php
require './acronimGenerator.php';

$dataset = [
    ['gioco molto difficile','G.M.D.',__LINE__],
    ['General Motors','G.M.',__LINE__],
    ['Federal Bureau Investigation','F.B.I.',__LINE__],
 
];
foreach ($dataset as $row) {
    $text = $row[0];
    $atteso = $row[1];
    $linea = $row[2];

    $result = Acronim_Generator($text);
        
    if ($result == $atteso){
            echo "PASS - tutto ok\n";
        }
        else{
            echo "FAIL - test fallito line: $linea \n";
            echo "xx".$result."xx\n";
        }
    }

