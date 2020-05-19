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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/assets/css/main.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="navbar__top">
                <i class="navbar__top__hamburger fas fa-bars"></i>
                <img class="navbar__top__logo" src="src/img/googlelogo.png" alt="">
                <h2>Privacy e termini</h2>
                <h1>Domande frequenti</h1>
            </div>
            <div class="navbar__bottom">
                <ul>
                    <li><a href="#">Introduzione</a></li>
                    <li><a href="#">Norme sulla privacy</a></li>
                    <li><a href="#">Termini di servizio</a></li>
                    <li><a href="#">Tecnologie</a></li>
                    <li><a href="index.php" class="active">Domande frequenti</a></li>
                </ul>
                <div class="navbar__bottom__account">
                    <a href="#">Account Google</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <?php echo $html; ?>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__language-select">
                <img src="src/img/languages.png" alt="">
                <select name="language_choice" id="languages">
                    <option value="Italiano">Siciliano</option>
                    <option value="Italiano" selected>Italiano</option>
                    <option value="Italiano">Sardo</option>
                </select>
            </div>
            <div class="footer__menu">
                <ul>
                    <li><a href="#">Google</a></li>
                    <li><a href="#">Tutto su Google</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Termini</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>