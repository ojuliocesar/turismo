<?php 

include ('conexao.php');

try {

    $id = $_GET['id'];
    $titulo = $_POST['titulo'];
    $local = $_POST['local'];
    $valor = $_POST['valor'];
    $desc = $_POST['desc'];
    $imagem = $_FILES['imagem']['name'];

    if ($imagem != null) {
        $extensao = pathinfo($imagem, PATHINFO_EXTENSION);

        if ($extensao != 'jpg' && $extensao && 'jpeg' && $extensao != 'png') {
            echo 'Formato de imagem inválido!';
            exit();
        }

        $hash = md5(uniqid(rand(), true));

        $imagemName = $hash . '.' . $extensao;
        $pasta = '../images/upload/';

        move_uploaded_file($_FILES['imagem']['tmp_name'], $pasta . $imagemName);

        $sql = "UPDATE tb_viagens SET `titulo` = '$titulo', `local` = '$local', `valor` = '$valor', `desc` = '$desc', `imagem` = '$imagemName' WHERE id = $id;";

    } else {
        $sql = "UPDATE tb_viagens SET `titulo` = '$titulo', `local` = '$local', `valor` = '$valor', `desc` = '$desc' WHERE id = $id;";
    }

    $comando = $con -> prepare($sql);

    $comando -> execute();

    header('location: ../admin/alterar_viagens.php?id='.$id);

} catch(PDOException $erro){
    echo $erro->getMessage();
}

?>