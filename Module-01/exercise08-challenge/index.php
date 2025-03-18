<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $num = (int) $_GET['num'] ?? "0";
        $quadrada = pow($num, (1/2));
        $cubica = pow($num, (1/3));
    ?>

    <h1>Seja bem vindo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Numero:</label>
        <input type="num" name="num" id="num">
        <input type="submit" value="Calcular">
    </form>

    <section>
        <h1>
            <?php
                echo "A raiz quadrada de $num é igual a $quadrada <br>"; 
                echo "A raiz cúbica de $num é igual a $cubica <br>"; 
            ?>
        </h1>
    </section>
    
</body>
</html>