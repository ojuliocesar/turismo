<?php

require_once('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

try {
    $sql = "SELECT * FROM tb_login WHERE email = '$email' AND BINARY senha = '$senha' AND ativo = 1";

    $comands = $con->prepare($sql);

    $comands->execute();

    $data = $comands->fetchAll(PDO::FETCH_ASSOC);

    // Verifica se existem registros dentro da variável data

    // if ($comands->rowCount()) {
    //     echo 'Foi';
    // } else {
    //     echo 'Não foi';
    // }

    if ($data != null) {
        session_start();

        $_SESSION['usuario'] = $email;

        header("Location: ../admin/gerenciar_viagens.php");
        
    } else {
        echo 'Usuário ou Senha inválido!';
    }

} catch(PDOException $e) {
    echo $e->getMessage();
}