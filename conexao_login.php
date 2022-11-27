<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "cadastro";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	mysqli_set_charset($conn, "utf8")
	
?>