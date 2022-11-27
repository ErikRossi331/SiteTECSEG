<?php
session_start();
include_once 'conexao.php';

//Verificar se o usuário clicou no botão,  acessar o IF e tentar cadastrar, caso contrario acessa o ELSE
$envia = filter_input(INPUT_POST, 'envia', FILTER_SANITIZE_STRING);
$deletar = filter_input(INPUT_POST, 'deletar', FILTER_SANITIZE_STRING);

if($envia)
{
    //Receber os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    //Inserir no BD
    $result_msg_cont = "INSERT INTO admins (nome, email, senha) VALUES (:nome, :email, :senha)";
    
    $insert_msg_cont = $conn->prepare($result_msg_cont);
    $insert_msg_cont->bindParam(':nome', $nome);
    $insert_msg_cont->bindParam(':email', $email);
    $insert_msg_cont->bindParam(':senha', $senha);

    if($insert_msg_cont->execute())
    {
        $_SESSION['msg17'] = "<script>alert('Cadastro realizado com sucesso!');</script>";
        header("Location: cadastraradm.php");
    }else
    {
        $_SESSION['msg'] = "<p style='color:red;'>Cadastro não realizado!</p>";
        header("Location: cadastraradm.php");
    }    
}

else
{ 
 header ("Location: deleteadm.php");
}
