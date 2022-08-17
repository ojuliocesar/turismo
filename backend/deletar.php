<?php 

include ('conexao.php');

try {
    // captura o id enviado via get e armazena em uma variável

    $id = $_GET['id'];

    $sql = "DELETE FROM tb_viagens WHERE id = $id;";

    $comando = $con -> prepare($sql);

    $comando -> execute();

    header('location: ../admin/gerenciar_viagens.php');

    $con = null;

} catch(PDOException $erro){
    echo $erro->getMessage();
}

?>