<?php

session_start();
include_once './conexao2.php';
//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$SendCadImg = filter_input(INPUT_POST, 'SendCadImg', FILTER_SANITIZE_STRING);
if ($SendCadImg) {
    //Receber os dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $precodesc = filter_input(INPUT_POST, 'precodesc', FILTER_SANITIZE_STRING);
    $precovenda = filter_input(INPUT_POST, 'precovenda', FILTER_SANITIZE_STRING);
    $info = filter_input(INPUT_POST, 'info', FILTER_SANITIZE_STRING);
    $nome_imagem = $_FILES['imagem']['name'];
    $nome_imgprincipal = $_FILES['imgprincipal']['name'];
    $nome_imgpqn1 = $_FILES['imgpqn1']['name'];
    $nome_imgpqn2 = $_FILES['imgpqn2']['name'];
    $nome_imgpqn = $_FILES['imgpqn']['name'];
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $nometec = filter_input(INPUT_POST, 'nometec', FILTER_SANITIZE_STRING);
    //var_dump($_FILES['imagem']);
    //Inserir no BD
    $result_img = "INSERT INTO servico (nome, precodesc, precovenda, info, imagem, imgprincipal, imgpqn1, imgpqn2, imgpqn, descricao, nometec) VALUES (:nome, :precodesc, :precovenda, :info, :imagem, :imgprincipal, :imgpqn1, :imgpqn2, :imgpqn, :descricao, :nometec )";
    $insert_msg = $conn->prepare($result_img);
    $insert_msg->bindParam(':nome', $nome);
    $insert_msg->bindParam(':precodesc', $precodesc);
    $insert_msg->bindParam(':precovenda', $precovenda);
    $insert_msg->bindParam(':info', $info);
    $insert_msg->bindParam(':imagem', $nome_imagem);
    $insert_msg->bindParam(':imgprincipal', $nome_imgprincipal);
$insert_msg->bindParam(':imgpqn1', $nome_imgpqn1);
$insert_msg->bindParam(':imgpqn2', $nome_imgpqn2);
$insert_msg->bindParam(':imgpqn', $nome_imgpqn);
$insert_msg->bindParam(':descricao', $descricao);
$insert_msg->bindParam(':nometec', $nometec);


    //Verificar se os dados foram inseridos com sucesso
    if ($insert_msg->execute()) {
        //Recuperar último ID inserido no banco de dados
        $ultimo_id = $conn->lastInsertId();

        //Diretório onde o arquivo vai ser salvo
        $diretorio = 'imagens_servico/' . $ultimo_id.'/';

        //Criar a pasta de foto 
        mkdir($diretorio, 0755);
        
        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$nome_imagem) && 
            move_uploaded_file($_FILES['imgprincipal']['tmp_name'], $diretorio.$nome_imgprincipal) && 
            move_uploaded_file($_FILES['imgpqn1']['tmp_name'], $diretorio.$nome_imgpqn1) &&
            move_uploaded_file($_FILES['imgpqn2']['tmp_name'], $diretorio.$nome_imgpqn2) &&
        move_uploaded_file($_FILES['imgpqn']['tmp_name'], $diretorio.$nome_imgpqn)){
            $_SESSION['msg21'] = "<script> alert('Serviço cadastrado com sucesso!'); </script>";
            header("Location: admin.php");
        }else{
            $_SESSION['msg21'] = "<script> alert('Serviço cadastrado com sucesso!'); </script>";
            header("Location: admin.php");
        }        
    } else {
        $_SESSION['msg22'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
        header("Location: soservicosadm.php");
    }
} else {
    $_SESSION['msg23'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
    header("Location: admin.php");
}