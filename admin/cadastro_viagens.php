<?php

require_once('../backend/user_controller.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Title -->
    <title>Cadastro de Viagens</title>

    <!-- Meta TAGs -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <id id="container">
        <h2>Cadastro de Viagens</h2>
        <a href="gerenciar_viagens.php">Gerenciar Viagens</a>
        <form action="../backend/cadastro.php" method="POST" enctype="multipart/form-data">
            <div class="input-wrapper">
                <div>
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" id="titulo" required>
                </div>
    
                <div>
                    <label for="local">local</label>
                    <input type="text" name="local" id="local" required>
                </div>
    
                <div>
                    <label for="valor">Valor</label>
                    <input type="number" name="valor" id="valor" required>
                </div>

                <div>
                    <label for="desc">Imagem</label>
                    <input type="file" name="imagem" id="imagem" required>
                </div>
    
                <div>
                    <label for="desc">Descrição</label>
                    <textarea name="desc" id="desc"></textarea>
                </div>
            </div>

            <input class="button" type="submit" value="Enviar">
        </form>
    </id>
</body>
</html>