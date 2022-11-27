<?php

session_start();
ob_start();
include_once 'conexaoprodutos.php';
$codigo = filter_input(INPUT_GET, "codigo", FILTER_SANITIZE_NUMBER_INT);
var_dump($codigo);


$query_usuario = "DELETE FROM produto WHERE codigo = '$codigo'";
$result_usuario = $conn->prepare($query_usuario);
$result_usuario->execute();

    if ($result_usuario->execute()) {
        $_SESSION['msg28'] = "<script>alert('Usuário deletado com sucesso');</script>";
        header("Location: apagarmercadorias.php");
    }
