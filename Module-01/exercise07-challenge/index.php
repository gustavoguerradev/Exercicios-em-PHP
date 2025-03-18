<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 

        $salario = $_GET['salario'] ?? "";
        $salario_reajustado = (double) $salario;
    ?>

    <h1>Seja bem vindo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num1">Salario:</label>
        <input type="salario" name="salario" id="salario">
        <input type="submit" value="Calcular">
        <p>Considerando um salario minimo de 1.518</p>
    </form>

    <section>
        <h1>

exercise07-challenge copy            <?php
                $s = intdiv($salario_reajustado, 1518); 
                $r = $salario_reajustado - ($s * 1518);
                echo "Salario é equivalente a: " . $s . " salarios minimos e " . "R$" . $r . " reais"  
            ?>
        </h1>
    </section>
    
</body>
</html>