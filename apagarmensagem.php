<?php

session_start();
ob_start();
include_once 'conexao2.php';
$codigo = filter_input(INPUT_GET, "codigo", FILTER_SANITIZE_NUMBER_INT);
var_dump($id_curso);


$query_usuario = "DELETE FROM mensagem WHERE codigo = '$codigo'";
$result_usuario = $conn->prepare($query_usuario);
$result_usuario->execute();

    if ($result_usuario->execute()) {
        $_SESSION['msg2'] = "<script>alert('Mensagem deletada com sucesso');</script>";
        header("Location: vermensagemadm.php");
    }
