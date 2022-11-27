<?php
session_start();
ob_start();
include_once 'conexao2.php';

$codigo = filter_input(INPUT_GET, "codigo", FILTER_SANITIZE_NUMBER_INT);

if (empty($codigo)) {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Produto não encontrado!</p>";
    header("Location: editar.php");
    exit();
}

$query_usuario = "SELECT * FROM produto WHERE codigo = $codigo LIMIT 1";
$result_usuario = $conn->prepare($query_usuario);
$result_usuario->execute();

if (($result_usuario) AND ($result_usuario->rowCount() != 0)) {
    $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
    //var_dump($row_usuario);
} else {
    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Produto não encontrado!</p>";
    header("Location: editar.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edição <?php echo $row_usuario['nome']; ?></title>
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
                <font size=6><b>Informações do Produto </font></b>
                <br><br>
                <?php
echo '<img src="./imagens/'.$row_usuario['codigo'].'/'.$row_usuario['imagem'].'" class="image12"/>';
?>
                <div class="username">
                </div>

            </div>
                <div class="borda"></div>
            <br>
            <font size=4><b>Editar Produto </font></b>
            <br>
            <br>

        <?php
        //Receber os dados do formulário
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $dados['voltar'] = filter_input_array(INPUT_POST, FILTER_DEFAULT);
      
        if ($dados['voltar']) {
            header("Location: admin.php");
        }

        if (!empty($dados['EditUsuario'])) {
            $empty_input = false;
            $dados = array_map('trim', $dados);
            if (in_array($dados)) {
                $empty_input = true;
                echo "<p style='color: #f00;'>Erro: Necessário preencher todos campos!</p>";
            } elseif (!filter_var($dados['precodesc'])) {
                $empty_input = true;
                echo "<p style='color: #f00;'>Erro: Necessário preencher com e-mail válido!</p>";
            }

    
if (!$empty_input) {

     $nome_imagem = $_FILES['imagem']['name'];
    $nome_imgprincipal = $_FILES['imgprincipal']['name'];
    $nome_imgpqn1 = $_FILES['imgpqn1']['name'];
    $nome_imgpqn2 = $_FILES['imgpqn2']['name'];
    $nome_imgpqn = $_FILES['imgpqn']['name'];

                $query_up_usuario= "UPDATE produto SET nome=:nome, precocusto=:precocusto, precodesc=:precodesc, precovenda=:precovenda,
                qtd=:qtd, info=:info, imagem=:imagem, imgprincipal=:imgprincipal, imgpqn1=:imgpqn1, imgpqn2=:imgpqn2, imgpqn=:imgpqn, descricao=:descricao, nometec=:nometec
                WHERE codigo=:codigo";
                $edit_usuario = $conn->prepare($query_up_usuario);
                $edit_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':precocusto', $dados['precocusto'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':precodesc', $dados['precodesc'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':precovenda', $dados['precovenda'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':qtd', $dados['qtd'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':info', $dados['info'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':imagem', $nome_imagem, PDO::PARAM_STR);
                $edit_usuario->bindParam(':imgprincipal', $nome_imgprincipal, PDO::PARAM_STR);
                $edit_usuario->bindParam(':imgpqn1', $nome_imgpqn1, PDO::PARAM_STR);
                $edit_usuario->bindParam(':imgpqn2', $nome_imgpqn2, PDO::PARAM_STR);
                $edit_usuario->bindParam(':imgpqn', $nome_imgpqn, PDO::PARAM_STR);
                $edit_usuario->bindParam(':descricao', $dados['descricao'], PDO::PARAM_STR);
                $edit_usuario->bindParam(':nometec', $dados['nometec'], PDO::PARAM_STR);

                $edit_usuario->bindParam(':codigo', $codigo, PDO::PARAM_INT);
                if($edit_usuario->execute()){


        //Diretório onde o arquivo vai ser salvo
        $diretorio = 'imagens/' . $codigo.'/';

        //Criar a pasta de foto 
        mkdir($diretorio, 0755);

        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$nome_imagem) && 
            move_uploaded_file($_FILES['imgprincipal']['tmp_name'], $diretorio.$nome_imgprincipal) && 
            move_uploaded_file($_FILES['imgpqn1']['tmp_name'], $diretorio.$nome_imgpqn1) &&
            move_uploaded_file($_FILES['imgpqn2']['tmp_name'], $diretorio.$nome_imgpqn2) &&
        move_uploaded_file($_FILES['imgpqn']['tmp_name'], $diretorio.$nome_imgpqn)){
                    $_SESSION['skil'] = "<script>alert('Produto editado com sucesso')</script>";
                    header("Location: admin.php");
}

                
            }else {
                echo "<p style='color: #f00;'>Erro: Alterações não realizadas</p>";
                header("Location: admin.php");
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

#info {

height: 180px;
width: 350px;

}

#nome {

width: 450px;

}

#precocusto {

    width: 100px;

}

#precodesc {

    width: 100px;

}

#precovenda {

    width: 100px;

}

.btn-secondary {

  margin-left: 50px;

}

#qtd {

    width: 50px;

}

#imagem {

    width:360px;
}


#nometec {

    height: 130px;
    width: 450px;


}

#descricao {

    height: 300px;
    width: 500px;

}

</style>

        <form id="edit-usuario" method="POST" enctype="multipart/form-data" action="">
            <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nome:</label>

                       <input type="text" name="nome" id="nome" class="form-control" value="<?php
            if (isset($dados['nome'])) {
                echo $dados['nome'];
            } elseif (isset($row_usuario['nome'])) {
                echo $row_usuario['nome'];
            }
            ?>" ><br>

             <label for="disabledTextInput" class="form-label">Preço de Custo:</label>

                       <input type="text" name="precocusto" id="precocusto" class="form-control" value="<?php
            if (isset($dados['precocusto'])) {
                echo $dados['precocusto'];
            } elseif (isset($row_usuario['precocusto'])) {
                echo $row_usuario['precocusto'];
            }
            ?>" ><br>

            <label for="disabledTextInput" class="form-label">Preço original do produto em caso de desconto:<br>
                <font color="gray" size="2">(Caso o produto não tenha desconto de preço, deixe nulo)</font>
            </label>
                       <input type="text" name="precodesc" id="precodesc" class="form-control" value="<?php
            if (isset($dados['precodesc'])) {
                echo $dados['precodesc'];
            } elseif (isset($row_usuario['precodesc'])) {
                echo $row_usuario['precodesc'];
            }
            ?>" ><br>

<label for="disabledTextInput" class="form-label">Preço de Venda:</label>

                       <input type="text" name="precovenda" id="precovenda" class="form-control" value="<?php
            if (isset($dados['precovenda'])) {
                echo $dados['precovenda'];
            } elseif (isset($row_usuario['precovenda'])) {
                echo $row_usuario['precovenda'];
            }
            ?>" ><br>

            <label for="disabledTextInput" class="form-label">Quantidade no estoque:</label>

                       <input type="text" name="qtd" id="qtd" class="form-control" value="<?php
            if (isset($dados['qtd'])) {
                echo $dados['qtd'];
            } elseif (isset($row_usuario['qtd'])) {
                echo $row_usuario['qtd'];
            }
            ?>" ><br>

            <label for="disabledTextInput" class="form-label">Informações Breves:</label>

                       <textarea name="info" id="info" class="form-control"> <?php
            if (isset($dados['info'])) {
                echo $dados['info'];
            } elseif (isset($row_usuario['info'])) {
                echo $row_usuario['info'];
            }
            ?></textarea> <br><br>

            <label for="disabledTextInput" class="form-label">Descrição do Produto: <font color="gray" size="2">(Página de vendas)</font></label>
            <textarea name="descricao" id="descricao" class="form-control"> <?php
            if (isset($dados['descricao'])) {
                echo $dados['descricao'];
            } elseif (isset($row_usuario['descricao'])) {
                echo $row_usuario['descricao'];
            }
            ?>
        </textarea><br>

<label for="disabledTextInput" class="form-label">Nome Técnico do Produto: <font color="gray" size="2">(Título na página de vendas)</font></label>
        <textarea name="nometec" id="nometec" class="form-control"> <?php
            if (isset($dados['nometec'])) {
                echo $dados['nometec'];
            } elseif (isset($row_usuario['nometec'])) {
                echo $row_usuario['nometec'];
            }
            ?>
        </textarea><br><br>

  <label for="imagem" class="form-label">Foto do Produto: <font color="gray" size="2"> (Vitrine)</font></label>
 <input type="file" name="imagem" id="imagem" class="form-control" value="<?php
            if (isset($nome_imagem)) {
                echo $nome_imagem;
            } elseif (isset($row_usuario['imagem'])) {
                echo $row_usuario['imagem'];
            }
            ?>"><br>
            <label for="imgprincipal" class="form-label">Foto do Produto: <font color="gray" size="2"> (Imagem primária de venda)</font></label>
 <input type="file" name="imgprincipal" id="imagem" class="form-control" value="<?php
            if (isset($nome_imgprincipal)) {
                echo $nome_imgprincipal;
            } elseif (isset($row_usuario['imgprincipal'])) {
                echo $row_usuario['imgprincipal'];
            }
            ?>"><br>

              <label for="imagem" class="form-label">Foto do Produto: <font color="gray" size="2"> (Imagem pequena 1)</font></label>
 <input type="file" name="imgpqn1" id="imagem" class="form-control" value="<?php
            if (isset($nome_imgpqn1)) {
                echo $nome_imgpqn1;
            } elseif (isset($row_usuario['imgpqn1'])) {
                echo $row_usuario['imgpqn1'];
            }
            ?>" ><br>

                          <label for="imagem" class="form-label">Foto do Produto: <font color="gray" size="2"> (Imagem pequena 2)</font></label>
 <input type="file" name="imgpqn2" id="imagem" class="form-control" value="<?php
            if (isset($nome_imgpqn2)) {
                echo $nome_imgpqn2;
            } elseif (isset($row_usuario['imgpqn2'])) {
                echo $row_usuario['imgpqn2'];
            }
            ?>" ><br>

                          <label for="imagem" class="form-label">Foto do Produto: <font color="gray" size="2"> (Imagem pequena 3)</font></label>
 <input type="file" name="imgpqn" id="imagem" class="form-control" value="<?php
            if (isset($nome_imgpqn)) {
                echo $nome_imgpqn;
            } elseif (isset($row_usuario['imgpqn'])) {
                echo $row_usuario['imgpqn'];
            }
            ?>" ><br><br>


<br>

            <input type="submit" class="btn btn-primary" value="Salvar" name="EditUsuario">
<a href="admin.php">
         <input type="submit" name="voltar" class="btn btn-secondary" value="Cancelar Edição">
        </a>
        </form>
    </body>
</html>
