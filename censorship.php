<?php
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];

$original_length = strlen($paragraph);
echo "<h2>Paragrafo Originale</h2>";
echo "<p>$paragraph</p>";
echo "<p>Lunghezza: $original_length caratteri</p>";

$censored_paragraph = str_replace($word, '***', $paragraph);
$censored_length = strlen($censored_paragraph);

echo "<h2>Paragrafo Censurato</h2>";
echo "<p>$censored_paragraph</p>";
echo "<p>Lunghezza: $censored_length caratteri</p>";
?>