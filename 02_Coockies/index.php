<HTML>
    <HEAD> <TITLE>Uso de cookies en PHP</TITLE> </HEAD>
    <BODY>
        <H3>Fecha y hora actual:
        <?php
                echo date('d/m/Y h:i:s') ;
        ?>
        </H3><BR><B> Contenido de la superglobal $_COOKIE</B><BR>
        <?php
            echo "Elemento fechahora: ".$_COOKIE['fechahora']."<BR>";
            echo "Elemento contador: ".$_COOKIE['contador'] . "<BR><BR>" ;
            echo "<BR>La última vez que accedió a la página: $fechahora <BR>";
            echo "<BR>Cantidad de accesos a esta página : $contador <BR>";
        ?>
    </BODY>
</HTML>