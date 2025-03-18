<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sum</title>
</head>
<body>
    <?php 
        $num1 = $_GET['number'] ?? "0";
        $num2 = $_GET['number2'] ?? "0";
     
    ?>

    <h1>Seja bem vindo!</h1>    
    <section>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num1">First number:</label>
            <input type="number" name="number" id="number">
            <label for="num2">Second number:</label>
            <input type="number2" name="number2" id="number2">
            <input type="submit" value="Sum">
        </form>
    </section>
    <section>
        <h1>Soma
            <?php 
                $sum = (float) $num1 + (float) $num2;
                echo $sum;
            ?>
        </h1>
    </section>

</body>
</html>