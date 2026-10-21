<?php
session_start();
if (empty($_SESSION["usuari"])) {
    header("Location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pàgina 2</title>
</head>
<body>
    <p><strong>Usuari: <?php echo htmlspecialchars($_SESSION["usuari"]); ?></strong></p>
    <hr>
    <h1>Pàgina d'informació 2</h1>
    <p>Aquest és el contingut de la segona pàgina.</p>
    <p><a href="pagina1.php">Anar a la pàgina 1</a></p>
</body>
</html>
