<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>

<body>
    <h1>The Bad Word</h1>
    <form action="script.php" method="POST">


        <label for="paragraph">Scrivi il tuo paragrafo</label>
        <input type="text" name="paragraph" id="paragraph" placeholder="insert your text">

        <label for="bad_word">Inserisci la parola da censurare</label>
        <input type="text" name="bad_word" id="bad_word" placeholder="insert word to censored">




        <button type="submit">Send</button>
    </form>
</body>

</html>