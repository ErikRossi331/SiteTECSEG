<?php
session_start();
include_once 'conexao2.php';
$codigo = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);

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


        $query_produto = "SELECT * FROM produto where codigo = $codigo LIMIT $inicio, $limite_resultado";
        $result_produto = $conn->prepare($query_produto);
        $result_produto->execute();

        if (($result_produto) AND ($result_produto->rowCount() != 0)) {
            while ($row_produto = $result_produto->fetch(PDO::FETCH_ASSOC)) {
                //var_dump($row_usuario);
                extract($row_produto);
                //echo "ID: " . $row_usuario['id'] . "<br>";

                

            }

            //Contar a quantidade de registros no BD
            $query_qnt_registros = "SELECT COUNT(codigo) AS num_result FROM produto";
            $result_qnt_registros = $conn->prepare($query_qnt_registros);
            $result_qnt_registros->execute();
            $row_qnt_registros = $result_qnt_registros->fetch(PDO::FETCH_ASSOC);

            //Quantidade de página
            $qnt_pagina = ceil($row_qnt_registros['num_result'] / $limite_resultado);

            // Maximo de link
            $maximo_link = 2;


            for ($pagina_anterior = $pagina - $maximo_link; $pagina_anterior <= $pagina - 1; $pagina_anterior++) {
                if ($pagina_anterior >= 1) {

                }
            }



            for ($proxima_pagina = $pagina + 1; $proxima_pagina <= $pagina + $maximo_link; $proxima_pagina++) {
                if ($proxima_pagina <= $qnt_pagina) {

                }
            }

        } else {
            echo "<p style='color: #f00;'>Erro: Nenhum usuário encontrado!</p>";
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

h1 {

margin-left: 100px;

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
                <font size=6><b>Informações do Produto </font></b>
                <br><br>
<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($imagem).'" class="image12"/>';?>
                <div class="username">
                <h1><?php echo $nome; ?></h1>
                </div>

            </div>
                <div class="borda"></div>
            <br>
            <font size=4><b>Dados da Conta </font></b>
            <br>
            <br>
            <fieldset disabled>
<div class="mb-3">
      <label for="disabledTextInput" class="form-label">Preço de Custo:</label>
      <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $precocusto; ?>">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Preço sem Desconto:</label>
      <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $precodesc; ?>">
    </div>

            <font size=4><b>Dados Pessoais </font></b>
            <br>
            <br>
<div class="mb-3">
      <label for="disabledTextInput" class="form-label">Preço de venda:</label>
      <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $precovenda; ?>">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">*Quantidade no estoque:</label>
      <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $qtd; ?>">
    </div>

                <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Informações:</label>
      <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $info; ?>">
    </div>
</fieldset>

<a href="editar.php?codigo=<?php $codigo; ?>">
    <button type="button" class="btn btn-primary">Editar Dados</button>
</a>

    <a href="confirmareditproduto.php?=codigo<?php echo $codigo; ?>">
        <button type="button" class="btn btn-secondary">Deletar Conta</button>
</a>

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
