<?php
if (isset($_POST['enviar'])) {
    setcookie("majoredat", $_POST['majoredat']);
    setcookie("idioma", $_POST['idioma']);
    setcookie("moneda", $_POST['moneda']);
    header("Location: informacio.php");
    exit;
}
?>
<html>
<head>
    <title>Bodega</title>
</head>
<body>
    <h2>Benvingut a la bodega</h2>
    <form method="post" action="bodega.php">
        <p>Ets major d'edat?
            <input type="radio" name="majoredat" value="si" checked> Sí
            <input type="radio" name="majoredat" value="no"> No
        </p>
        <p>Idioma:
            <select name="idioma">
                <option value="ca">Català</option>
                <option value="es">Español</option>
                <option value="en">English</option>
            </select>
        </p>
        <p>Moneda:
            <select name="moneda">
                <option value="euro">Euros (€)</option>
                <option value="lliura">Lliures (£)</option>
                <option value="dolar">Dòlars ($)</option>
            </select>
        </p>
        <input type="submit" name="enviar" value="Entrar">
    </form>
</body>
</html>
