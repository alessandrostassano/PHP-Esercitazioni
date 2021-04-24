<?php 


function Acronim_Generator($giocomoltodifficile) {
    $arrayparole = explode(" ", $giocomoltodifficile);//separa in array le parole dopo un punto
    $nomituttimaiuscoli = array_map("strtoupper", $arrayparole); //arraymap ha bisogno di come primo valore una funzione  , in questo caso string to upper, e poi l'array map fa un ciclo dell'array applicando a quell'array la funzione che gli ho indicato subito dopo, per ogni elemento dell'array, la funzione successiva SEMPRE tra apici per non si sa quale motivo
    $soloprimalettera = array_map("selezionaprimovalore", $nomituttimaiuscoli);//se la funzione ha valori più complessi creo un'altra funzione che poi richiamo , perchè in array map non possiamo scrivere i valori da prendere nelle parentesi, quindi controllo quella che ho appena fatto sotto cazo
    $acronimoimploso = implode(".", $soloprimalettera)."."; //quando voglio mettere un valore successivo all'implode, lo metto dopo la chiusura delle parentesi con il punto . che serve per concatenare, e dopo ci piazzo tra apici il valore che voglio, in questo caso "." 
    return $acronimoimploso;

}

function selezionaprimovalore($name) {
    $primalettera = substr($name, 0,1);
    return $primalettera;
}



?>