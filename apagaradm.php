<?php

session_start();
ob_start();
include_once 'conexao_login.php';
$cod_adm = filter_input(INPUT_GET, "cod_adm", FILTER_SANITIZE_NUMBER_INT);
var_dump($codigo);


$query_usuario = "DELETE FROM admins WHERE cod_adm = '$cod_adm'";
$result_usuario = $conn->prepare($query_usuario);
$result_usuario->execute();

    if ($result_usuario->execute()) {
        $_SESSION['skal'] = "<script>alert('Administrador deletado com sucesso');</script>";
        header("Location: deleteadm.php");
    }
