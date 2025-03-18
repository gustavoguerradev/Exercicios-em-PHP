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
        $nota1 = (int)($_GET['nota1'] ?? "0");
        $nota2 = (int)($_GET['nota2'] ?? "0");
    ?>

    <h1>Seja bem vindo! Vericar Aprovação</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <!--Label Nota 1-->
        <label for="nota1">Nota 1:</label>
        <input type="nota1" name="nota1" id="nota1">

        <!--Label Nota 2 -->
        <label for="num2">Nota 2:</label>
        <input type="nota2" name="nota2" id="nota2">

        <input type="submit" value="Enviar">
    </form>

    <section>
        <h1>
            <?php
                $media = ($nota1 + $nota2) / 2;
                echo "A media do aluno foi: $media <br>";
                if($media > 6) {
                    echo "O aluno foi aprovado.";
                }
                else {
                    echo "O aluno foi reprovado";
                }
            ?>
        </h1>
    </section>
    
</body>
</html>