<?php

if (
    isset($_POST['nom']) &&
    isset($_POST['cognoms']) &&
    isset($_POST['email']) &&
    isset($_POST['missatge'])
) {
    $nom = $_POST['nom'];
    $cognoms = $_POST['cognoms'];
    $email = $_POST['email'];
    $missatge = $_POST['missatge'];
    echo "Missatge rebut, $nom $cognoms. Gràcies per contactar. Et respondrem a $email";
    echo '<br><form action="index.php" method="get">
        <input type="submit" value="Tornar al formulari">
    </form>';
} else {
    echo "Error: cal omplir tots els camps amb dades vàlides.";
    echo '<br><form action="index.php" method="get">
        <input type="submit" value="Tornar al formulari">
    </form>';
}
?>