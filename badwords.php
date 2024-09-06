<?php
// Recupera il paragrafo e la parola da censurare dal form
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];

// Calcola la lunghezza del paragrafo originale
$original_length = strlen($paragraph);

// Sostituisce tutte le occorrenze della parola con ***
$censored_paragraph = str_replace($word, '***', $paragraph);

// Calcola la lunghezza del paragrafo censurato
$censored_length = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultato Censura</title>
    <style>
        /* Stile di base per il corpo della pagina */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        /* Contenitore centrale con stile */
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        /* Stile per i titoli */
        h2 {
            color: #333;
            font-size: 2em;
        }
        /* Stile per i paragrafi */
        p {
            font-size: 1.2em;
            color: #555;
            line-height: 1.6;
            text-align: center;
        }
        /* Evidenziatore per la lunghezza */
        .highlight {
            color: #007BFF;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Stampa il paragrafo originale e la sua lunghezza -->
    <h2>Paragrafo Originale</h2>
    <p><?php echo $paragraph; ?></p>
    <p><strong>Lunghezza:</strong> <span class="highlight"><?php echo $original_length; ?></span> caratteri</p>

    <!-- Stampa il paragrafo censurato e la sua lunghezza -->
    <h2>Paragrafo Censurato</h2>
    <p><?php echo $censored_paragraph; ?></p>
    <p><strong>Lunghezza:</strong> <span class="highlight"><?php echo $censored_length; ?></span> caratteri</p>
</div>

</body>
</html>