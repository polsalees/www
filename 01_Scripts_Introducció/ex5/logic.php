<?php
    if (
        isset($_POST['preu']) && isset($_POST['IVA'])
    ) {
        $preu = $_POST['preu'];
        $iva = $_POST['IVA'];
        $preu_calculat = $preu - ($preu * ($iva / 100));
        echo "El preu d'un producte de $preu €, amb un IVA de $iva% és de $preu_calculat €";
    } else {
        echo "Error introduint les dades";
    }
    echo '<br><form action="index.php" method="post">
        <input type="submit" value="Tornar al formulari">
    </form>';
?>