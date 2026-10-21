<?php
session_start();

// Eliminem les dades de la sessió i la destruïm
$_SESSION = array();
session_destroy();

header("Location: index.html");
exit;
?>
