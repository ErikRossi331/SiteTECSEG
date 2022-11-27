<?php
session_start();
ob_start();
 include_once("conexao2.php");
$codigo = filter_input(INPUT_GET, "id_curso", FILTER_SANITIZE_NUMBER_INT);


//Verificar se o usuário clicou no botão,  acessar o IF e tentar cadastrar, caso contrario acessa o ELSE
$envia = filter_input(INPUT_POST, 'envia', FILTER_SANITIZE_STRING);

if($envia)
{
    //Receber os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $sobnome = filter_input(INPUT_POST, 'sobnome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

        


    //Inserir no BD
    $result_msg_cont = "INSERT INTO compra (nome, sobnome, cpf, tel, email) VALUES (:nome, :sobnome, :cpf, :tel, :email)";
    
    $insert_msg_cont = $conn->prepare($result_msg_cont);
    $insert_msg_cont->bindParam(':nome', $nome);
    $insert_msg_cont->bindParam(':sobnome', $sobnome);
    $insert_msg_cont->bindParam(':cpf', $cpf);
    $insert_msg_cont->bindParam(':tel', $tel);
    $insert_msg_cont->bindParam(':email', $email);


    if($insert_msg_cont->execute())
    {
        $_SESSION['msg17'] = "<script>alert('Cadastro realizado com sucesso!');</script>";
        header("Location: pdfcompra2.php?id_curso=".$codigo);
    }

    else
    {
        $_SESSION['msg'] = "<p style='color:red;'>Cadastro não realizado!</p>";
    }    
}
