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

    // Armazena o nome original da imagem
    $nomeImagem = $_FILES['imagem']['name'];

    // Extensão da imagem
    // Aceitamos apenas png/jpeg/jpg
    $extensao = pathinfo($nomeImagem, PATHINFO_EXTENSION);

    if ($extensao != 'jpg' && $extensao != 'jpeg' && $extensao != 'png') {
        echo 'Formato inválido!';
        exit();
    }

    // Cria um hash pro nome da imagem
    $hash = md5(uniqid(rand(), true));

    // Define o novo nome da imagem para upload
    $imagem = $hash. '.' .$extensao;

    // Pasta da imagem
    $pasta = '../images/upload/';

   // Função PHP que faz o upload da imagem
    move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta.$imagem);

    $sql =  "INSERT INTO
                tb_viagens
            (titulo, `local`, valor, `desc`, imagem)
                VALUES
            ('$titulo', '$local', $valor, '$desc', '$imagem')";

    // Prepara a execução da query SQL acima
    $comando = $con->prepare($sql);

    // Execute o comando com a query no Banco de Dados
    $comando->execute();

    $con = null;

    // Exibe a mensagem de sucesso ao inserir
    header("Location: ../listagem.php");

} catch (PDOException $e) {
    echo $e->getMessage();
}