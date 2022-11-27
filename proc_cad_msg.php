<?php
session_start();
include_once 'conexao.php';

//Verificar se o usuário clicou no botão,  acessar o IF e tentar cadastrar, caso contrario acessa o ELSE
$envia = filter_input(INPUT_POST, 'envia', FILTER_SANITIZE_STRING);
if($envia)
{
    //Receber os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $datanasc = filter_input(INPUT_POST, 'datanasc', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    
    //Inserir no BD
    $result_msg_cont = "INSERT INTO login (nome, email, senha, datanasc, cpf, telefone) VALUES (:nome, :email, :senha, :datanasc, :cpf, :telefone)";
    
    $insert_msg_cont = $conn->prepare($result_msg_cont);
    $insert_msg_cont->bindParam(':nome', $nome);
    $insert_msg_cont->bindParam(':email', $email);
    $insert_msg_cont->bindParam(':senha', $senha);
    $insert_msg_cont->bindParam(':datanasc', $datanasc);
    $insert_msg_cont->bindParam(':cpf', $cpf);
    $insert_msg_cont->bindParam(':telefone', $telefone);


    if($insert_msg_cont->execute())
    {
        $_SESSION['msg52'] = "<script>alert('Cadastro realizado com sucesso!');</script>";
        header("Location: login.php");
    }else
    {
        $_SESSION['msg51'] = "<p style='color:red;'>Cadastro não realizado!</p>";
        header("Location: cadastro.php");
    }    
}
else
{
    $_SESSION['msg51'] = "<p style='color:red;'>Cadastro não realizado!</p>";
    header("Location: cadastro.php");
}