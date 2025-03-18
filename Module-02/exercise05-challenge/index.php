<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        session_start();

        if (!isset($_SESSION['arr'])) { //VERIFICA SE O ARRAY JA EXISTE, SENAO VAI CRIAR
            $_SESSION['arr'] = [];
        }

        if (isset($_POST['salvar'])) {
            $text = $_POST['item'];
            $_SESSION['arr'][] = $text; // Adiciona o texto ao array
        }
        $listar = isset($_POST['listar']);
        $apagar = isset($_POST['apagar']);

    ?>

    <h1>Seja bem vindo!</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <!--Label -->
        <label for="item">Item:</label>
        <input type="item" name="item" id="item">

        <input type="submit" value="Enviar" name="salvar" >
        <button type="submit" name="listar">Listar</button>
        <button type="submit" name="apagar">Apagar array</button>
    </form>

    <section>
        <?php 
            if($listar) {
                foreach ($_SESSION['arr'] as $textoGuardado) {
                    echo " - " . $textoGuardado . "<br>";
                }
            }
            if($apagar) {
                unset($_SESSION['arr']);
            }
        ?>
    </section>
    
</body>
</html>