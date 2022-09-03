<?php

require_once('../backend/user_controller.php');

include '../backend/conexao.php';

$id = $_GET['id'];

try {

    $sql = "SELECT * FROM tb_viagens WHERE id = $id;";

    $comando = $con->prepare($sql);

    $comando->execute();

    $dados = $comando->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $erro) {
    echo $erro->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Viagens</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <id id="container">
        <h2>Cadastro de Viagens</h2>
        <a href="gerenciar_viagens.php">Gerenciar Viagens</a>
        <form class="form-update" action="../backend/atualizar.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
            <div class="input-wrapper">
                <div>
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" id="titulo" value="<?php echo $dados['titulo'] ?>">
                </div>
    
                <div>
                    <label for="local">local</label>
                    <input type="text" name="local" id="local" value="<?php echo $dados['local'] ?>">
                </div>

                <div>
                    <label for="local">Imagem</label>

                    <img src="../images/upload/<?= $dados['imagem'] ?>" alt="">
                    <input type="file" name="imagem" id="imagem">
                </div>
    
                <div>
                    <label for="valor">Valor</label>
                    <input type="text" name="valor" id="valor" value="<?php echo $dados['valor'] ?>">
                </div>

                <div>
                    <label for="desc">Descrição</label>
                    <textarea name="desc" id="desc"><?= $dados['desc'] ?></textarea>
                </div>
    
            </div>

            <input class="button" type="submit" value="Enviar">
        </form>
    </id>
</body>

</html>