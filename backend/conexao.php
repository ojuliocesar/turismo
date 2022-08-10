<?php

try {
    // Dados da conexão copm o Banco de Dados
    DEFINE('SERVER', 'localhost');
    DEFINE('DATABASE', 'db_turismo');
    DEFINE('USER', 'root');
    DEFINE('PASSWORD', '');

    // Conexão com o Banco de Dados
    $conn = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE . "", USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $conn = null;

} catch (PDOException $e) {
    echo 'Connection failed: ' .  $e->getMessage();
    die();
}