<?php
    if (!isset($_COOKIE['majoredat']) || !isset($_COOKIE['idioma']) || !isset($_COOKIE['moneda'])) {
        header("Location: bodega.php");
        exit;
    }
    $majoredat = $_COOKIE['majoredat'];
    $idioma = $_COOKIE['idioma'];
    $moneda = $_COOKIE['moneda'];
    $textos = array(
        "ca" => array(
            "menor" => "No et podem vendre alcohol si ets menor d'edat.",
            "vi"    => "T'oferim el vi \"Les Terrasses\" a un preu de %s",
            "cava"  => "T'oferim el cava \"Brut Nature\" a un preu de %s"
        ),
        "es" => array(
            "menor" => "No podemos venderte alcohol si eres menor de edad.",
            "vi"    => "Te ofrecemos el vino \"Les Terrasses\" a un precio de %s",
            "cava"  => "Te ofrecemos el cava \"Brut Nature\" a un precio de %s"
        ),
        "en" => array(
            "menor" => "We cannot sell you alcohol if you are under age.",
            "vi"    => "We offer you the wine \"Les Terrasses\" at a price of %s",
            "cava"  => "We offer you the cava \"Brut Nature\" at a price of %s"
        )
    );
    $preus = array(
        "euro"   => array("39 €", "15 €"),
        "lliura" => array("33 £", "13 £"),
        "dolar"  => array("43 $", "17 $")
    );
    if (!isset($textos[$idioma]) || !isset($preus[$moneda])) {
        header("Location: bodega.php");
        exit;
    }
?>
<html>
    <head>
        <title>Bodega</title>
    </head>
    <body>
        <?php
            if ($majoredat == "no") {
                echo "<p>" . $textos[$idioma]["menor"] . "</p>";
            } else {
                echo "<p>" . sprintf($textos[$idioma]["vi"], $preus[$moneda][0]) . "</p>";
                echo "<p>" . sprintf($textos[$idioma]["cava"], $preus[$moneda][1]) . "</p>";
            }
        ?>
        <p><a href="bodega.php">Tornar</a></p>
    </body>
</html>
