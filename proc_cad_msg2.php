<?php
session_start();
include_once 'conexao2.php';

//Verificar se o usuário clicou no botão,  acessar o IF e tentar cadastrar, caso contrario acessa o ELSE
$envia = filter_input(INPUT_POST, 'envia', FILTER_SANITIZE_STRING);
if($envia)
{
    //Receber os dados do formulário
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
    $nomeus = filter_input(INPUT_POST, 'nomeus', FILTER_SANITIZE_STRING);
    $emailus = filter_input(INPUT_POST, 'emailus', FILTER_SANITIZE_STRING);


    //Inserir no BD
    $result_msg_cont = "INSERT INTO mensagem (mensagem, nomeus, emailus) VALUES (:mensagem, :nomeus, :emailus)";
    
    $insert_msg_cont = $conn->prepare($result_msg_cont);
    $insert_msg_cont->bindParam(':mensagem', $mensagem);
    $insert_msg_cont->bindParam(':nomeus', $nomeus);
    $insert_msg_cont->bindParam(':emailus', $emailus);




    if($insert_msg_cont->execute())
    {
        $_SESSION['msg'] = "<script>alert('Mensagem enviada com sucesso!');</script>";
        header("Location: iniciolog.php");
    }else
    {
        $_SESSION['msg'] = "<p style='color:red;'>Mensagem não enviada!</p>";
        header("Location: iniciolog.php");
    }    
}
else
{
    $_SESSION['msg'] = "<p style='color:red;'>Mensagem não enviada!</p>";
    header("Location: iniciolog.php");
}