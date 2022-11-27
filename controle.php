<?php
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("conexao_login.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['email'])) && (isset($_POST['senha'])))
	{
		$usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		//$senha = md5($senha);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM admins WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);


		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_log = "SELECT * FROM login WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_log = mysqli_query($conn, $result_log);
		$resultadolog = mysqli_fetch_assoc($resultado_log);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário

		if(isset($resultado))
		{
		//	$_SESSION['usuarioId'] = $resultado['id'];
		//	$_SESSION['usuarioNome'] = $resultado['nome'];
		//	$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
		//	$_SESSION['usuarioEmail'] = $resultado['email'];
		//	if($_SESSION['usuarioNiveisAcessoId'] == "1"){
		//		header("Location: administrativo.php");
		//	}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
		//		header("Location: colaborador.php");
		//	}else{
				header("Location: admin.php");
			}



else if(isset($resultadolog))
		{
		//	$_SESSION['usuarioId'] = $resultado['id'];
		//	$_SESSION['usuarioNome'] = $resultado['nome'];
		//	$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
		//	$_SESSION['usuarioEmail'] = $resultado['email'];
		//	if($_SESSION['usuarioNiveisAcessoId'] == "1"){
		//		header("Location: administrativo.php");
		//	}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
		//		header("Location: colaborador.php");
		//	}else{
				header("Location: solucoeslogado.php");
			}
			
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		else
		{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "<font color='red'>Usuário ou senha inválido!";
			header("Location: login.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}
	else
	{
		$_SESSION['loginErro'] = "<font color='red'>Usuário ou senha inválido!";
		header("Location: login.php");
	}
?>