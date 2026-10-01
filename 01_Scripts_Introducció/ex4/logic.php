<?php
    $genere = $_POST['genere'];
    switch ($genere) {
        case 'rock':
            echo 'Rock solid';
            break;
        case 'pop':
            echo 'Que et creus un animal?';
            break;
        case 'jazz':
            echo 'Bufa la meva trompeta';
            break;
        case 'country':
            echo 'Visquen les vaques, vaquero';
            break;
        case 'reggeton':
            echo 'Mola Luis Fonsi';
            break;
        case 'trap':
            echo 'El Bad Bunny de 2019 da la vida';
            break;
        case 'other':
            echo 'Que raro ets';
            break;
    }
    echo '<br><form action="index.php" method="post">
        <input type="submit" value="Tornar al formulari">
    </form>';