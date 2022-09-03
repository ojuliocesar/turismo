<?php

// Inicia a sessão
session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: ./gerenciar_viagens.php");
}
 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div id="container">
        <form action="../backend/login.php" method="POST">
            <h2>Admin</h2>

            <div class="input-wrapper">
                <label class="form-label" for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite seu E-mail" required>
            </div>

            <div class="input-wrapper">
                <label class="form-label" for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Digite sua Senha" required>
            </div>

            <button class="main-button">Login</button>
        </form>
    </div>
</body>
</html>