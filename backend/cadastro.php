<?php

// Include da conexão com o banco de dados
require_once('conexao.php');

try {
    //Exibe as variáveis globais recebidas via POST
    $titulo = $_POST['titulo'];
    $local = $_POST['local'];
    $valor = $_POST['valor'];
    $desc = $_POST['desc'];

    $sql =  "INSERT INTO
                tb_viagens
            (titulo, `local`, valor, `desc`)
                VALUES
            ('$titulo', '$local', $valor, '$desc')";

    // Prepara a execução da query SQL acima
    $comando = $conn->prepare($sql);

    // Execute o comando com a query no Banco de Dados
    $comando->execute();

    // Exibe a mensagem de sucesso ao inserir
    echo "Cadastro realizado com sucesso!";

} catch (PDOException $e) {
    echo $e->getMessage();
}