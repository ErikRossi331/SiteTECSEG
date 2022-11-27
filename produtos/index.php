<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
<?php include_once("conexao.php");
$result_cursos = "SELECT * FROM produto";
$resultado_cursos = mysqli_query($conn, $result_cursos);



?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>

		<style type="text/css">
			
			*{

				background-color: #333 !important;
				border-color: #333 !important;



			}

			a.btn-primary {

				background-color: #0992ed !important;

			}

			img {

				opacity: 0.5;

			}

			img:hover {

				opacity: 2;
			}

		</style>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Produtos</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1><font color="white">Produtos</h1></font>
			</div>
			<div class="row">
				<?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<a href="">
				<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($rows_cursos['imagem']).'"/>';?>
			</a>
							<div class="caption text-center">
								<?php  ?><h3><?php echo "<b> <font size=3 color='white'>" . $rows_cursos['nome'] . "</b></font>"; ?></h3></a>
								<?php  ?><h3><?php echo "<font size=3 color='white'>"  .  $rows_cursos['info'] . "</font>"; ?></h3></a>
								<?php  ?><h3><?php echo "<b><font size=5 color='#0992ed'> R$ "  .  $rows_cursos['precovenda'] . "</font></b>"; ?></h3></a>
								
								?>

								<p><a href="#" class="btn btn-primary" role="button">Comprar</a> </p>

							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>