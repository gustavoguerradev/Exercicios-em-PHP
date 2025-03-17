<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcões Aritmeticas</title>
</head>
<body>
    <?php 
     $number1 = abs(-5000); //Modulo da matematica, retorna 5000;
     echo $number1;
     $number2 = base_convert(124, 10 ,2); // CONVERTE 124 DA BASE 10 PARA BASE 2
     echo $number2;
     $number3 = intdiv(5,2); // RETORNA A DIVISÃO INTEIRA ENTRE 5 e 2
     echo $number3;
     $number4 = min(5,2); // RETORNA 2
     echo $number4;
     $number5 = pi(); // RETORNA O NUMERO DE PI
     echo $number5;
     $number6 = pow(5,2); // RETORNA 25; 5 elevado a 2
     echo $number6;
     $number7 = sqrt(25); // RAIZ QUADRADA DE 25, RETORNA 5
     echo $number7;
    ?>
</body>
</html>