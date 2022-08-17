<?php

require_once('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

try {
    $sql = "SELECT * FROM tb_login WHERE email = '$email' AND senha = '$senha'";

    $comands = $con->prepare($sql);

    $comands->execute();

    $data = $comands->fetchAll(PDO::FETCH_ASSOC);

    var_dump($data);

    if ($comands->rowCount()) {
        echo 'Foi';
    } else {
        echo 'Não foi';
    }

} catch(PDOException $e) {
    echo $e->getMessage();
}