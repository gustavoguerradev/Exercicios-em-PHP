<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $numero = (int) ($_GET['num'] ?? "0");
    ?>


    <h1>Seja bem vindo! <br>Digite um numero para fazer um contador</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <!--Label numero-->
        <label for="num">Numero:</label>
        <input type="num" name="num" id="num">

        <input type="submit" value="Enviar">
    </form>

    <section>
        <h1>
            <?php 
                for($i= 1 ;$i <= $numero ;$i++) {
                    echo $i. "<br>";
                }
            ?>
        </h1>
    </section>
    
</body>
</html>