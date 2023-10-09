<!-- 
    Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
index.php
script.php
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server tramite il form (occhio a quato detto stamattina sui form e gli attributi necessari).
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
 stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
 -->

<?php

$paragraph = $_POST['paragraph'];

$paragraph_leng = strlen($paragraph);

//var_dump($paragraph);

//var_dump($paragraph_leng);

echo "$paragraph $paragraph_leng";
