<?php

session_start();
include_once './conexao.php';
?>
<!DOCTYPE html>
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="ts6.png">
    </head>
    <body>

        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        
        //Receber o número da página
        $pagina_atual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
        //var_dump($pagina);

        //Setar a quantidade de registros por página
        $limite_resultado = 40;

        // Calcular o inicio da visualização
        $inicio = ($limite_resultado * $pagina) - $limite_resultado;


        $query_produto = "SELECT * FROM login ORDER BY cod asc LIMIT $inicio, $limite_resultado";
        $result_produto = $conn->prepare($query_produto);
        $result_produto->execute();

        if (($result_produto) AND ($result_produto->rowCount() != 0)) {
            while ($row_produto = $result_produto->fetch(PDO::FETCH_ASSOC)) {
                //var_dump($row_usuario);
                extract($row_produto);
                //echo "ID: " . $row_usuario['id'] . "<br>";

                

            }

            //Contar a quantidade de registros no BD


        }
        ?>

<!DOCTYPE html>
<html lang="pt-br">
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
    margin-top: -180px;

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

#corr {

    color: #333;

}

button.btn-warning {

        margin-left: 110px;

}

</style>

    </head>
    <body bgcolor="#333">
        <font color="white">
        <div class="container theme-showcase" role="main">
            <div class="page-header">
                <br>
                <br>
                <font color="white">
                <font size=6><b> </font></b>
                <br><br>
                <img src="user.jpg" class="image">
                <div class="username">
                <h1> Tem certeza que deseja deletar seu perfil <?php echo $nome; ?>?<br>
                    Todos os seus dados cadastrados no website serão<br> deletados para sempre.<br><br>
                    <a id="corr" href="apagarusuario.php?cod=<?php echo $cod; ?>">
                    <button class="btn btn-danger">Deletar o Perfil</button>
</a>
<a href="solucoeslogado.php">
                    <button class="btn btn-secondary">Cancelar</button>
</a>

                </h1>
                </div>

            </div>
                <div class="borda"></div>
            <br>
            <font size=4><b> </font></b>
            <br>
            <br>
            <fieldset disabled>


<div class="barra"></div>
                </div>

                </div>
            </div>
        </div>

        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

    </body>
</html>
