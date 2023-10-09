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

$bad_word = $_POST['bad_word'];

// Utilizzo count per determinare la lunghezza della parola
$count = strlen($bad_word) - 1;

//utilizzo substr_replace per rimpiazzare le lettere finali dalla parola (uso il contatore negativo per partire dalla fine) ed utilizzo repeat, 3 per aggiungere i 3 asterischi
$hidden_bad_word = substr_replace($bad_word, str_repeat('*', 3), -3, null);

//var_dump($_POST);

//var_dump($paragraph);

//var_dump($paragraph_leng);

//echo `$paragraph ha una lunghezza di $paragraph_leng caratteri`;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Word Result</title>
</head>

<body>
    <h1>Hai scritto <?php echo $paragraph ?></h1>
    <h3>che ha una lunghezza di <?php echo $paragraph_leng ?> caratteri</h3>

    <h3>La parolaccia nascosta è <?php echo $hidden_bad_word ?></h3>

    <h2><?php echo "$paragraph $hidden_bad_word" ?></h2>

</body>

</html>