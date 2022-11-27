<?php
session_start();
ob_start();

include_once 'conexao2.php';

$codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);

if (empty($codigo)) {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    header("Location: index2.php");
    exit();
}

$query_usuario = "SELECT * FROM produto WHERE codigo = $codigo";
$result_usuario = $conn->prepare($query_usuario);
$result_usuario->execute();

if (($result_usuario) AND ($result_usuario->rowCount() != 0)) {
    $rows_cursos = $result_usuario->fetch(PDO::FETCH_ASSOC);
    //var_dump($row_usuario);
} else {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="ts6.png">
    </head>
    <body>

<div class="container theme-showcase" role="main">
            <div class="page-header">
                <br>
                <br>
                <font color="white">
                <font size=6><b>Informações do Perfil </font></b>
                <br><br>
                <img src="user.jpg" class="image">
                <div class="username">
                </div>

            </div>
                <div class="borda"></div>
            <br>
            <font size=4><b>Editar Perfil </font></b>
            <br>
            <br>

        <?php
        //Receber os dados do formulário
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        //Verificar se o usuário clicou no botão
        if (!empty($dados['EditUsuario'])) {
            $empty_input = false;
            $dados = array_map('trim', $dados);
            if (in_array("", $dados)) {
                $empty_input = true;
                echo "<p style='color: #f00;'>Erro: Necessário preencher todos campos!</p>";
            } elseif (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
                $empty_input = true;
                echo "<p style='color: #f00;'>Erro: Necessário preencher com e-mail válido!</p>";
            }

            if (!$empty_input) {
                $query_up_usuario= "UPDATE login SET nome=:nome, email=:email, senha=:senha, datanasc=:datanasc, telefone=:telefone 
                WHERE cod=:cod";
                $edit_usuario = $conn->prepare($query_up_usuario);
                $edit_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':datanasc', $dados['datanasc'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':telefone', $dados['telefone'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':cod', $cod, PDO::PARAM_INT);
                if($edit_usuario->execute()){
                    $_SESSION['msg'] = "<script>alert('Perfil alterado com sucesso!');</script>";
        header("Location: solucoeslogado.php");
                }else{
                    echo "<p style='color: #f00;'>Erro: Usuário não editado com sucesso!</p>";
                }
            }
        }
        ?>



<head>
      <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Meu Perfil | TecSeg</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <link rel="shortcut icon" href="ts6.png">

                <style>
body {

    background-color: #333 !important;

}

#disabledTextInput {


    width: 300px;

}

img.image {


    height: 300px;
    width: 300px;
    border-radius: 50%;

}

div.mb-3 {

    margin-left: 10px;

}

div.username {

    position: absolute;
    margin-left: 330px;
    margin-top: -100px;

}

div.barra {

    height: 100px;

}

button.btn-primary {

    margin-left: 15px;
}

button.btn-secondary {

    margin-left: 30px;
}

</style>
    
</head>
<body>
        <font color="white">
        <form id="edit-usuario" method="POST" action="">

 <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nome de Usuário:</label>

                       <input type="text" name="nome" id="disabledTextInput" class="form-control" value="<?php
            if (isset($dados['nome'])) {
                echo $dados['nome'];
            } elseif (isset($row_usuario['nome'])) {
                echo $row_usuario['nome'];
            }
            ?>" ><br>

           <label for="disabledTextInput" class="form-label">E-mail:</label>

                       <input type="text" id="disabledTextInput" name="email" class="form-control" value="<?php
            if (isset($dados['email'])) {
                echo $dados['email'];
            } elseif (isset($row_usuario['email'])) {
                echo $row_usuario['email'];
            }
            ?>" ><br>

<label for="disabledTextInput" class="form-label">Senha:</label>
                      <input type="password" id="disabledTextInput" name="senha" class="form-control" value="<?php
            if (isset($dados['senha'])) {
                echo $dados['senha'];
            } elseif (isset($row_usuario['senha'])) {
                echo $row_usuario['senha'];
            }
            ?>" ><br>

            <label for="disabledTextInput" class="form-label">Data de Nascimento:</label>
                      <input type="date" id="disabledTextInput" name="datanasc" class="form-control" value="<?php
            if (isset($dados['datanasc'])) {
                echo $dados['datanasc'];
            } elseif (isset($row_usuario['datanasc'])) {
                echo $row_usuario['datanasc'];
            }
            ?>" ><br>
  

            <label for="disabledTextInput" class="form-label">*Telefone:</label>
                      <input type="text" id="disabledTextInput" name="telefone" class="form-control" value="<?php
            if (isset($dados['telefone'])) {
                echo $dados['telefone'];
            } elseif (isset($row_usuario['telefone'])) {
                echo $row_usuario['telefone'];
            }
            ?>" ><br><br>

            <input type="submit" class="btn btn-primary" value="Confirmar Alterações" name="EditUsuario">

                <a href="user.php?id_curso=<?php echo $cod; ?>">
        <button type="button" class="btn btn-secondary">Cancelar</button>

        </form>
    </body>
</html>
