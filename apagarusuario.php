<?php

session_start();
ob_start();
include_once 'conexao_login.php';
$cod = filter_input(INPUT_GET, "cod", FILTER_SANITIZE_NUMBER_INT);
var_dump($codigo);


$query_usuario = "DELETE FROM login WHERE cod = '$cod'";
$result_usuario = $conn->prepare($query_usuario);
$result_usuario->execute();

    if ($result_usuario->execute()) {
        $_SESSION['msg40'] = "<script>alert('Usuário deletado com sucesso');</script>";
        header("Location: login.php");
    }
