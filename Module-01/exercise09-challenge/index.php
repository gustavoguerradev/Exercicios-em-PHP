<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $num1 = (double)($_GET['num'] ?? "0");
        $num2 = (double)($_GET['num2'] ?? "0");
        $peso1 = (double)($_GET['peso1'] ?? "0");
        $peso2 = (double)($_GET['peso2'] ?? "0");
    ?>

    <h1>Seja bem vindo! Calcule as medias</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Numero 1:</label>
        <input type="num" name="num" id="num">
        <label for="num">Numero 2:</label>
        <input type="num2" name="num2" id="num2">
        <label for="num">Peso 1:</label>
        <input type="peso1" name="peso1" id="peso1">
        <label for="num">Peso 2:</label>
        <input type="peso2" name="peso2" id="peso2">
        <input type="submit" value="Calcular">
    </form>

    <section>
        <h1>
            <?php 
                echo "A média entre $num1 e $num2 é igual a: " . ($num1 + $num2) / 2 . "<br>";
                echo "A média ponderada entre $num1 e $num2 é igual a: " . ($num1 + $num2) / ($peso1 + $peso2);
            ?>
        </h1>
    </section>
    
</body>
</html>