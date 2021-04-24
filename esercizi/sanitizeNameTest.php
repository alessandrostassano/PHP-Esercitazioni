<?php
require 'C:\Users\Alessandro\OneDrive\Desktop\PHP\esercizi\esercitazione-php';

$dataset = [
   ['mario','Mario',__LINE__],
   ['mAriO','Mario',__LINE__],
   ['MARIO','Mario',__LINE__],
   ['De giovanni','De Giovanni',__LINE__],
   ['de giovanni','De Giovanni',__LINE__],
   ['de Giovanni','De Giovanni',__LINE__],
   ['de Giovanni      ','De Giovanni',__LINE__],
   ['de                     Giovanni      ','De Giovanni',__LINE__],
   ['de    Giovanni      ','De Giovanni',__LINE__],
   ['de 55 Giovanni','De Giovanni',__LINE__],
   ['Mario83','Mario',__LINE__],
   ['Mario@','Mario',__LINE__],
   ['Mario@     ','Mario',__LINE__],
   ['John Romita Sr.','John Romita Sr.',__LINE__],
   ['John Romita Jr.','John Romita Jr.',__LINE__],
   ['John Romita Jr.','John Romita Jr.',__LINE__],
   ['<h1>John123456789</h1>','John',__LINE__],
   ['<script>alert("ciccio")</script>','',__LINE__],
   ['    <h1>   John123456789   </h1>   ','John',__LINE__]

];

echo"cavallo";
foreach ($dataset as $key => $row) 
{
   $text=$row[0];
   $atteso=$row[1];
   $linea = $row[2];

   $result= sanitizeName($text);

   if($result==$atteso)
   {
      echo "PASS - tutto ok \n";
   }
   else
   {
       echo "FAIL - test fallito linea: $linea \n";
       var_dump($result);
       echo "xx".$result."xx"."\n";
   }

}

?>