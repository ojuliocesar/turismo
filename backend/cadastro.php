<?php

// Include da conexão com o banco de dados
require_once('conexao.php');

try {
    //Exibe as variáveis globais recebidas via POST
    $titulo = $_POST['titulo'];
    $local = $_POST['local'];
    $valor = $_POST['valor'];
    $desc = $_POST['desc'];

    // Upload da imagem
    $pasta = '../images/upload/';

    // Define o novo nome da imagem para upload
    $imagem = 'imagem.jpg';

    // Função PHP que faz o upload da imagem
    move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta.$imagem);

    exit();

    $sql =  "INSERT INTO
                tb_viagens
            (titulo, `local`, valor, `desc`)
                VALUES
            ('$titulo', '$local', $valor, '$desc')";

    // Prepara a execução da query SQL acima
    $comando = $con->prepare($sql);

    // Execute o comando com a query no Banco de Dados
    $comando->execute();

    $con = null;

    // Exibe a mensagem de sucesso ao inserir
    header("Location: ../admin/gerenciar_viagens.php");

} catch (PDOException $e) {
    echo $e->getMessage();
}