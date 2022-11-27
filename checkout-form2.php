<?php
$codigo = filter_input(INPUT_GET, "codigo", FILTER_SANITIZE_NUMBER_INT);

include_once 'conexao2.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="shortcut icon" href="ts6.png" >
        <style type="text/css">
            
            body {

                background-color: #333 !important;

            }

            div{

                color: white

            }

            button.btn-secondary {

                margin-left: 1025px;
                margin-top: -40px;
                position: absolute;
            }


            .image12 {

                border: 2px solid lightgray

            }

            .mb-1 {

                position: absolute;
                margin-top: 70px;
                margin-left: -180px; 

            }


        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="images/icon/favicon.ico" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        
    </head>
    <body>        

        <?php
        
        $query_products = "SELECT codigo, nome, precovenda, nometec, imagem FROM servico WHERE codigo =:codigo LIMIT 1";
        $result_products = $conn->prepare($query_products);
        $result_products->bindParam(':codigo', $codigo, PDO::PARAM_INT);
        $result_products->execute();
        $row_product = $result_products->fetch(PDO::FETCH_ASSOC);
        extract($row_product);
        ?>

        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="TECSEGN2.png" alt="" width="480" height="180">
                <hr>
                <h2>Efetuar Pagamento</h2>
                <p class="lead">Insira seus dados nos campos abaixo.</p>
            </div>

            <div class="row mb-5">
                <div class="col-md-8">
                    <?php
                  echo '<img src="./imagens_servico/'.$codigo.'/'.$row_product['imagem'].'" class="image12"/>';

                  ?>
                  <br><br><br>
                    <h3><?php echo $nometec; ?></h3>
                    <title>Compra | <?php echo $nometec; ?></title>
                </div>
                <div class="col-md-4">
                    <div class="mb-1 text-muted"> <b><font size="7" color="#0992ed">R$<?php echo number_format($precovenda, 2, ",", "."); ?></b></div></font>
                </div>
            </div>

            <hr>

            <div class="row mb-5">
                <div class="col-md-12">
                    <h4 class="mb-3">Informações Pessoais</h4>

                    <form action="cadastracompra2.php?id_curso=<?php echo $row_product['codigo']; ?>" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name">Primeiro Nome</label>
                                <input type="text" name="nome" id="first_name" class="form-control" placeholder="Primeiro nome" autofocus required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="last_name">Último Nome</label>
                                <input type="text" name="sobnome" id="last_name" class="form-control" placeholder="Último nome" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Somente número do CPF" oninput="maskCPF(this)" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="phone">Telefone</label>
                                <input type="text" name="tel" id="phone" class="form-control" placeholder="Telefone com o DDD" oninput="maskPhone(this)" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite o seu melhor e-mail">
                        </div>

                        <input type="submit" name="envia" class="btn btn-primary">
                    </form>
                        <a href="detalhesservicolog.php?id_curso=<?php echo $row_product['codigo']; ?>">
                        <button class="btn btn-secondary">Cancelar</button>
                        </a>
                    </form>

                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="js/custom.js"></script>

    </body>
</html>