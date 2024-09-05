<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form di Censura</title>
</head>
<body>
    <h1>Inserisci il paragrafo e la parola da censurare</h1>
    <form action="censorship.php" method="POST">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea name="paragraph" id="paragraph" rows="5" cols="40" required></textarea><br><br>
        
        <label for="word">Parola da censurare:</label><br>
        <input type="text" name="word" id="word" required><br><br>
        
        <button type="submit">Invia</button>
    </form>
</body>
</html>