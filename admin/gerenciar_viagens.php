<?php

require_once('../backend/user_controller.php');

include '../backend/conexao.php';

try {

    $sql = "SELECT * FROM tb_viagens";

    $comando = $con -> prepare($sql);

    $comando -> execute();

    $dados = $comando -> fetchAll(PDO::FETCH_ASSOC);

} catch(PDOException $erro){

    echo $erro->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <div id="container-form">
        <h2>Gerenciar Viagens</h2>

        <div id="tabela">
            <table class="tabela-viagens">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Local</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Alterar</th>
                    <th>Deletar</th>
                </tr>
                <?php foreach($dados as $d): ?>
                    
                <tr>
                    <td><?php echo $d['id']?></td>
                    <td><?php echo $d['titulo']?></td>
                    <td><?php echo $d['local']?></td>
                    <td><?php echo $d['valor']?></td>
                    <td><?php echo $d['desc']?></td>
                    <td>
                        <a class="table-action update" href="../admin/alterar_viagens.php?id=<?php echo $d['id']?>">
                            Alterar
                        </a>
                    </td>
                    <td>
                        <a class="table-action delete" href="../backend/deletar.php?id=<?php echo $d['id']?>">
                            Deletar
                        </a>
                    </td>
                </tr>

                <?php endforeach;?>

            </table>
        </div>
        <a class="nav-button" href="cadastro_viagens.php">Cadastrar Viagens</a>
        <a class="nav-loggout" href="../backend/loggout.php">Sair</a>
    </div>
</body>
</html>