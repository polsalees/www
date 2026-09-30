<?php
$apiKey = '1aed6075854ebe4421730cff';

$monedesPermeses = ['USD', 'EUR'];

$quant  = $_GET['quant'] ?? '';
$desti  = strtoupper($_GET['moneda'] ?? '');

if (!is_numeric($quant) || $quant <= 0) {
    die('Error: la quantitat ha de ser un número positiu. <a href="index.php">Tornar</a>');
}
if (!in_array($desti, $monedesPermeses)) {
    die('Error: moneda no vàlida. <a href="index.php">Tornar</a>');
}

$origen = ($desti === 'USD') ? 'EUR' : 'USD';

$url = "https://v6.exchangerate-api.com/v6/$apiKey/pair/$origen/$desti/$quant";
$response = file_get_contents($url);

if ($response === false) {
    die('Error: no s\'ha pogut connectar amb l\'API. <a href="index.php">Tornar</a>');
}

$data = json_decode($response, true);

if (!isset($data['result']) || $data['result'] !== 'success') {
    die('Error: l\'API ha retornat un error. <a href="index.php">Tornar</a>');
}

$canvi    = $data['conversion_rate'];
$resultat = $data['conversion_result'];

echo "<h1>Resultat</h1>";
echo "<p>" . number_format($quant, 2) . " $origen = "
     . number_format($resultat, 2) . " $desti</p>";
echo "<p>Canvi aplicat: 1 $origen = $canvi $desti</p>";
echo '<a href="index.php">Fer una altra conversió</a>';