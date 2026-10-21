<?php
session_start();

// Catàleg de la botiga (només dos productes)
$productes = array(
    "portatil" => array("nom" => "Portàtil", "preu" => 599.99),
    "ratoli"   => array("nom" => "Ratolí sense fil", "preu" => 19.95)
);

if (!isset($_SESSION["cistella"])) {
    $_SESSION["cistella"] = array();
}

$accio = $_POST["accio"] ?? $_GET["accio"] ?? "";

// 1) Afegir un producte a la cistella i tornar a la botiga
if ($accio === "afegir") {
    $codi = $_POST["producte"] ?? "";
    $quantitat = (int) ($_POST["quantitat"] ?? 0);

    if (isset($productes[$codi]) && $quantitat > 0) {
        if (isset($_SESSION["cistella"][$codi])) {
            $_SESSION["cistella"][$codi] += $quantitat;
        } else {
            $_SESSION["cistella"][$codi] = $quantitat;
        }
    }
    header("Location: index.html");
    exit;
}

// 2) Confirmar la compra: simulem el pagament i esborrem la informació guardada
if ($accio === "confirmar") {
    $_SESSION = array();
    session_destroy();
    ?>
    <!DOCTYPE html>
    <html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Compra confirmada</title>
    </head>
    <body>
        <h1>Gràcies per la teva compra!</h1>
        <p>El pagament s'ha realitzat correctament i la cistella s'ha buidat.</p>
        <p><a href="index.html">Tornar a la botiga</a></p>
    </body>
    </html>
    <?php
    exit;
}

// 3) Resum de la compra
if ($accio === "resum") {
    $total = 0;
    ?>
    <!DOCTYPE html>
    <html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Resum de la compra</title>
    </head>
    <body>
        <h1>Resum de la compra</h1>
        <?php if (empty($_SESSION["cistella"])) { ?>
            <p>La cistella està buida.</p>
            <p><a href="index.html">Tornar a la botiga</a></p>
        <?php } else { ?>
            <table border="1" cellpadding="6">
                <tr>
                    <th>Producte</th>
                    <th>Preu unitari</th>
                    <th>Quantitat</th>
                    <th>Subtotal</th>
                </tr>
                <?php foreach ($_SESSION["cistella"] as $codi => $quantitat) {
                    $subtotal = $productes[$codi]["preu"] * $quantitat;
                    $total += $subtotal;
                ?>
                <tr>
                    <td><?php echo $productes[$codi]["nom"]; ?></td>
                    <td><?php echo number_format($productes[$codi]["preu"], 2); ?> &euro;</td>
                    <td><?php echo $quantitat; ?></td>
                    <td><?php echo number_format($subtotal, 2); ?> &euro;</td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="3"><strong>Total</strong></td>
                    <td><strong><?php echo number_format($total, 2); ?> &euro;</strong></td>
                </tr>
            </table>
            <form action="cistella_compra.php" method="post">
                <input type="hidden" name="accio" value="confirmar">
                <p><input type="submit" value="Confirmar compra"></p>
            </form>
            <p><a href="index.html">Seguir comprant</a></p>
        <?php } ?>
    </body>
    </html>
    <?php
    exit;
}

// Per defecte, tornem a la botiga
header("Location: index.html");
exit;
?>
