<?php
$comptador = 1;
if (isset($_COOKIE['comptador'])) {
    $comptador = $_COOKIE['comptador'] + 1;
}
setcookie("comptador", $comptador);
?>
<html>
<head>
    <title>Botiga</title>
</head>
<body>
    <h2>Botiga</h2>
    <p>Nombre de visites: <?php echo $comptador; ?></p>
    <?php
    if ($comptador >= 10) {
        echo "<p>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga</p>";
    } elseif ($comptador >= 5) {
        echo "<p>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga</p>";
    }
    ?>
    <input type="text" placeholder="Codi de descompte">
    <button>Comprar</button>
</body>
</html>
