<?php
session_start();

$usuari = $_POST["usuari"] ?? "";
$pwd = $_POST["pwd"] ?? "";

// Validació: l'usuari ha de ser igual a la contrasenya (p. ex. anna / anna)
if ($usuari !== "" && $usuari === $pwd) {
    $_SESSION["usuari"] = $usuari;
    header("Location: pagina1.php");
} else {
    header("Location: index.html");
}
exit;
?>
