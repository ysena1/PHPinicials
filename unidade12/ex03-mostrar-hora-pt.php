<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // determinado timezone
            date_default_timezone_set('Brazil/East');
            setlocale(LC_TIME,"portuguese");
            $_agora = getdate();
            
            // criar elementos
            $_segundo       = $_agora["seconds"];
            $_minuto        = $_agora["minutes"];
            $_hora          = $_agora["hours"];

            $_dia           = $_agora["mday"];
            $_mes           = strftime('%B');
            $_ano           = $_agora["year"];

            // mostrar na tela (str é para tranformar tudo em pt)
            echo   strftime('%A').", " . $_dia . " de " . $_mes . " de " . $_ano;
        ?>
    </body>
</html>