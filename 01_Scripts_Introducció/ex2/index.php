<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Exercici 2</title>
    </head>
    <body>
        <h1>Conversor de monedes versàtil</h1>
        <form action="logic.php" method="get">
            <label for="quant">Quantitat a convertir:</label>
            <input type="number" id="quant" name="quant" min="0.01" step="0.01" required>
            <br><br>

            <label for="moneda">Convertir a:</label>
            <select id="moneda" name="moneda" required>
                <option value="USD">USD - Dòlar americà</option>
                <option value="EUR">EUR - Euro</option>
            </select>
            <br><br>

            <input type="submit" value="Converteix">
        </form>
    </body>
</html>