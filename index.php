<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExercícioPHP05</title>
</head>
<body>
<h2>Conversão de temperatura em graus Celsius para Fahrenheit. 
    A fórmula de conversão é: Fahrenheit = (Celsius * 9/5) + 32.</h2>
    <h3>Fahrenheit =</h3>

    <?php
    $celsius = 35;
    $Fahrenheit = ($celsius * 9/5) + 32;
    echo "$Fahrenheit";
    ?>
    
</body>
</html>