<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form di Censura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-top: 50px;
            font-size: 2.5em;
        }
        form {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-size: 1.2em;
            color: #333;
        }
        textarea, input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1em;
        }
        button {
            padding: 12px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1.2em;
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Inserisci il paragrafo e la parola da censurare</h1>
    <form action="censorship.php" method="GET">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea name="paragraph" id="paragraph" rows="5" cols="40" required></textarea><br><br>
        
        <label for="word">Parola da censurare:</label><br>
        <input type="text" name="word" id="word" required><br><br>
        
        <button type="submit">Invia</button>
    </form>
</body>
</html>