<?php include_once("conexao_login.php");
$id_curso = $_GET['id_curso'];
$result_cursos = "SELECT * FROM login WHERE cod='$id_curso'";
$resultado_cursos = mysqli_query($conn, $result_cursos);
$row_cursos = mysqli_fetch_assoc($resultado_cursos);
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

</style>

	</head>
	<body bgcolor="#333">
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<br>
				<br>
				<font color="white">
				<font size=6><b>Informações do Perfil </font></b>
				<br><br>
				<img src="user.jpg" class="image">
				<div class="username">
				<h1><?php echo $row_cursos['nome']; ?></h1>
				</div>

			</div>
				<div class="borda"></div>
			<br>
			<font size=4><b>Dados da Conta </font></b>
			<br>
			<br>
						<fieldset disabled>
<div class="mb-3">
      <label for="disabledTextInput" class="form-label">E-mail:</label>
      <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $row_cursos['email']; ?>">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Senha:</label>
      <input type="password" id="disabledTextInput" class="form-control" value="<?php echo $row_cursos['senha']; ?>">
    </div>

			<font size=4><b>Dados Pessoais </font></b>
			<br>
			<br>
<div class="mb-3">
      <label for="disabledTextInput" class="form-label">Data de Nascimento:</label>
      <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $row_cursos['datanasc']; ?>">
    </div>

    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">*CPF:</label>
      <input type="password" id="disabledTextInput" class="form-control" value="<?php echo $row_cursos['cpf']; ?>">
    </div>

				<div class="mb-3">
      <label for="disabledTextInput" class="form-label">Telefone:</label>
      <input type="text" id="disabledTextInput" class="form-control" value="<?php echo $row_cursos['telefone']; ?>">
    </div>
</fieldset>

<a href="editarusuario.php?id_curso=<?php echo $row_cursos['cod']; ?>">
    <button type="button" class="btn btn-primary">Editar Dados</button>
</a>

    <a href="apagar.php?id_curso=<?php echo $row_cursos['cod']; ?>">
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