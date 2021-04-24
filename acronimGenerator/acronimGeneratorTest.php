<?php

$correctResult = array();
$correctAtteso = array();
$correctLine = array();
$failResult = array();
$failAtteso = array();
$failLine = array();

//require 'case_study/acronimGenerator/acronimGenerator.php';
require './acronimGenerator.php';
$dataset = array(
    ['gioco molto difficile','G.M.D.',__LINE__],
    ['General Motors','G.M.',__LINE__],
    ['Federal Bureau Investigation','F.B.I.',__LINE__],
    ['esempioSbagliato','popo',__LINE__],
    ['esempioSbagliato2','buh',__LINE__]
);

foreach ($dataset as $row) {
    $text = $row[0];
    $atteso = $row[1];
    $linea = $row[2];

    $result = AcronimGenerator($text);

    if($result == $atteso){
        //echo "$result:  è tutto ok\n";
        array_push($correctResult,$result);
        array_push($correctLine,$linea);
        array_push($correctAtteso,$atteso);
    }
    else {
        //echo "$result  test fallito in linea: $linea\n";
        array_push($failResult,$result);
        array_push($failLine,$linea);
        array_push($failAtteso,$atteso);
    }
}
//var_dump($correctResult);
?>
<div class="container" style="display:flex;justify-content:center;align-items:baseline;">
    <div class="card_correct" style="color:#396f07;background-color:#bff172;border:10px solid #396f07;text-align: center;padding: 10px;">
        <h3>CORRETTI</h3>
        <?php for($i=0;$i<count($correctResult);$i++){ ?>
            NOME FINALE: <?php echo $correctResult[$i]." (".gettype($correctResult[$i]).")" ?><br>
            NOME ATTESO: <?php echo $correctAtteso[$i]." (".gettype($correctAtteso[$i]).")" ?><br>
            LINEA: <?php echo $correctLine[$i] ?><br>
            -----------------------------------------<br>
        <?php } ?>
    </div>
    <div class="card_fail" style="color:#9a0318;background-color:#fd5050;border:10px solid #9a0318;text-align:center;padding: 10px;">
        <h3>ERRATI</h3>
        <?php for($i=0;$i<count($failResult);$i++){ ?>
            NOME FINALE: <?php echo $failResult[$i]." (".gettype($failResult[$i]).")" ?><br>
            NOME ATTESO: <?php echo $failAtteso[$i]." (".gettype($failAtteso[$i]).")" ?><br>
            LINEA: <?php echo $failLine[$i] ?><br>
            -----------------------------------------<br>
        <?php } ?>
    </div>
</div>
