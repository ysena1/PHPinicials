<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo $salario * $meses . "</br>";
            echo $salario / 2 . "</br>";
            // Exponencial
            echo "Exponencial: " . pow(6,2) . "</br>";

            // Raiz Quadrada
            echo "Raiz quadrada: " . sqrt(36). "</br>";
            
            // Randômico Generica
            echo "Randomico: " . rand() . "</br>";

            // Randômico entre um intervalo
            echo "Randomico no intervalo " . rand(5,10) . "</br>";
            
            // Valor absoluto
            echo "numero absoluto: " . abs(-200)."</br>"
            
        ?>
    </body>
</html>