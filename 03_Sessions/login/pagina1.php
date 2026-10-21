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
    <title>Pàgina 1</title>
</head>
<body>
    <p><strong>Usuari: <?php echo htmlspecialchars($_SESSION["usuari"]); ?></strong></p>
    <hr>
    <h1>Pàgina d'informació 1</h1>
    <p>Aquest és el contingut de la primera pàgina.</p>
    <p><a href="pagina2.php">Anar a la pàgina 2</a></p>
</body>
</html>
