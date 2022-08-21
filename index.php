<?php

require_once('backend/conexao.php');

try {
    $sql = "SELECT * FROM tb_viagens ORDER BY data_cadastro DESC";

    $comando = $con->prepare($sql);

    $comando->execute();

    $dados = $comando->fetchAll(PDO::FETCH_OBJ);

} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Title -->
    <title>Listagem de Viagens</title>

    <!-- Meta TAGs -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <id id="container">
        <h2>Listagem de Viagens</h2>

        <div id="grid-viagens">
            <?php foreach($dados as $dadosItem): ?>
                <figure>
                    <img src="images/upload/<?= $dadosItem->imagem ?>" alt="Banner da viagem">

                    <figcaption>
                        <h4><?= $dadosItem->titulo ?></h4>
                        <h5><?= $dadosItem->local ?></h5>
                        <h5>R$ <?= number_format($dadosItem->valor, 2, '.', ',') ?></h5>
                        <small><?= $dadosItem->desc ?></small>
                    </figcaption>

                <button class="button-buy">Comprar</button>
                </figure>
            <?php endforeach ?>
        </div>
    </id>
</body>
</html>