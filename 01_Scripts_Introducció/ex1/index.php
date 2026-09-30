<!DOCTYPE html>
<html lang="ca">
    <head>
        <title>Exercici 1</title>
    </head>
    <body>
        <h1>Formulari de contacte</h1>
        <form action="logic.php" method="get">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
            <br><br>

            <label for="cognoms">Cognoms:</label>
            <input type="text" id="cognoms" name="cognoms" required>
            <br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br><br>

            <label for="missatge">Missatge:</label><br>
            <textarea id="missatge" name="missatge" rows="5" cols="40" required></textarea>
            <br><br>

            <input type="submit" value="Envia-ho!">
        </form>
    </body>
</html>