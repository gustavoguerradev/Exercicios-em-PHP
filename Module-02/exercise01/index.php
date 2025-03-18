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
        $idade = (int)($_GET['idade'] ?? "0");    
    ?>

    <h1>Seja bem vindo! Verificador de idade</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <!--Label idade-->
        <label for="num">Idade:</label>
        <input type="idade" name="idade" id="idade">

        <input type="submit" value="Enviar">
    </form>

    <section>
        <h1>
            <?php 
                if($idade > 18)  {
                    echo "Você é maior de idade";
                }
                elseif($idade > 0) {
                    echo "Você é menor de idade";
                }
            ?>
        </h1>
    </section>
    
</body>
</html>