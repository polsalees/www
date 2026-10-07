<?php

    $fechahora = "éste es el primer acceso";
    $contador = 1;
    date_default_timezone_set('Europe/Paris');
    // si la variable está asignada quiere decir que existe la cookie
    if (isset($_COOKIE['fechahora'])){
        // fecha hora del último acceso
        $fechahora = $_COOKIE['fechahora'];
        $contador = $_COOKIE['contador'];
    }
    // actualización de la cookie: se debe hacer antes de
    // mandar cualquier cabecera a la salida
    setcookie("fechahora",date('d/m/Y h:i:s')); // actualiza la cookie
    setcookie("contador",$contador + 1); // actualiza la cookie

?>
