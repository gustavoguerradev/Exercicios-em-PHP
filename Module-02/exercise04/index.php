<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Seja bem vindo!</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <input type="text" name="email" id="email" placeholder="email">
        <input type="text" name="senha" id="senha" placeholder="senha">

        <hr>

        <input type="text" name="cadastroemail" id="cadastroemail" placeholder="cadastroemail">
        <input type="text" name="cadastrosenha" id="cadastrosenha" placeholder="cadastrosenha">

        <input type="submit" value="Enviar">
    </form>

    <section>
        <h4>
            <?php 
                session_start();
                $email = $_GET['email'] ?? "0";
                $senha = $_GET['senha'] ?? "0";

                $emailcadastrado = $_GET['cadastroemail'];
                if(!$emailcadastrado == "") {
                    $_SESSION['email'] = $emailcadastrado;
                }

                $senhacadastrado = $_GET['cadastrosenha'];
                if(!$senhacadastrado == "") {
                    $_SESSION['senha'] = $senhacadastrado;
                }
                if($email == $_SESSION['email'] && $senha == $_SESSION['senha']) {
                    echo "Logado com sucesso ";
                }

                if (isset($_SESSION["email"])) {
                    echo "Usuário: " . $_SESSION["email"];
                } else {
                    echo "Nenhum usuário logado!";
                }
            ?>
        </h4>
    </section>
    
</body>
</html>