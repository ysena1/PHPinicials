<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function retornarDiaria($_sal,$_dias) {
            return number_format($_sal/$_dias, 2);
        }

        echo retornarDiaria(2500,15) . "<br>";
        echo retornarDiaria(5000,10) . "<br>";
    ?>
</body>
</html>