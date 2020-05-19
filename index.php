<?php 

/**
 * Descrizione
 * Riscrivere la pagina del sito  https://policies.google.com/faq
 * Gestire il “Database” (array) e la visualizzazione di queste domande e risposte con PHP.
 * Non preoccupatevi dei link presenti nel testo delle risposte
 */

// Include file with global content
include 'global.php';

foreach($page_content as $content) {
    foreach($content as $element) {
        $html .= $element;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domande frequenti - Privacy e termini - Google</title>
</head>
<body>
    <header></header>
    <main><?php echo $html; ?></main>
    <footer></footer>
</body>
</html>