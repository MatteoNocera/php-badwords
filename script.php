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

//var_dump($_POST);

$paragraph = $_POST['paragraph'];
//var_dump($paragraph);

$bad_word = $_POST['bad_word'];

//utilizzo substr_replace per rimpiazzare le lettere finali dalla parola (uso il contatore negativo per partire dalla fine) ed utilizzo repeat, 3 per aggiungere i 3 asterischi
$hidden_bad_word = substr_replace($bad_word, str_repeat('*', 3), -3, null);

$censored_paragraph = str_replace($bad_word, $hidden_bad_word, $paragraph);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Word Result</title>
</head>

<body>

    <h2><?php echo $censored_paragraph ?></h2>

</body>

</html>