<?php
session_start();

// Inicializa a sessão se não existir
if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = []; //Crio o array de usuarios.
}

// Adicionar usuário
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome'])) {
    $_SESSION['usuarios'][] = $_POST['nome']; // Adiciona o nome ao array
}

// Remover usuário
if (isset($_GET['delete'])) {
    $index = $_GET['delete'];
    if (isset($_SESSION['usuarios'][$index])) {
        array_splice($_SESSION['usuarios'], $index, 1); // Remove pelo índice
    }
    header("Location: index.php"); // Redireciona para evitar reenvio do formulário
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Simples</title>
</head>
<body>
    <h2>Adicionar Usuário</h2>
    <form method="POST">
        <input type="text" name="nome" required>
        <button type="submit">Adicionar</button>
    </form>

    <h2>Lista de Usuários</h2>
    <ul>
        <?php foreach ($_SESSION['usuarios'] as $index => $usuario): ?>
            <li>
                <?php echo $usuario; ?>
                <a href="?delete=<?= $index ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[Deletar]</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
