<?php
session_start();
?>

<!doctype html>

<head>
	<meta charset="utf-8">
	<title> TecSeg | Recuperar Senha </title>
<link rel="stylesheet" href="Estilo.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="shortcut icon" href="ts6.png">

<style>

</style>
</head>

<style type="text/css"> 
  .padded img { 
    padding-left: 6em; 
    padding-right: 6em; 
  } 

div.topnav {
  height: 240px !important;
  margin-top: -238px !important;
}

body {
  background-color: #333 !important;
}

div.col-auto {

  margin-left: 325px;
} 

.col-form-label{
  margin-left: 250px;
  position: absolute;
  color: white;
  margin-top: -20px;
}


  .topnav {
 background-image: linear-gradient(to right,#161616,#242424,#333,#515151);
  overflow: hidden;
  margin-top: -13%;
}


.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 160px 28px;
  text-decoration: none;
  font-size: 15px;
  font-family: arial;

}


.topnav a:hover {
  background-color: #ddd;
  color: black;
  padding: 14px 28px;
}


.topnav a.active {
  background-color: #2E86C1;
  color: white;
  padding: 14px 28px;
}

.topnav a.align {
  padding-top: 14px;
}

input[type=email] {
  width: 250px;
}

button.btn-primary {

margin-left: 15px;
}


h2 {

  text-align: center;
color: #bfbfbf;
font-size: 25px;
font-family: arial;
font-weight: bold;
}

h3 {

  text-align: center;
color: #e6e6e6;
font-size: 18px;
font-family: arial;
font-weight: normal;
}

</style>

<style type="text/css">
/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: linear-gradient(to right,#161616,#242424,#333,#515151);;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left: 1250px;
  margin-top: 25px;

}

/* Links inside the dropdown */
.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd
  color: black;
  padding: 14px 28px;
}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}

</style>

<style>
.arrow {
  border: solid white;
  border-width: 0 5px 6px 0;
  display: inline-block;
  padding: 4px;

}

.right {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

.left {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}

.up {
  transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
}

.down {
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
}

.topnav a.align2 {
  padding-top: 14px;
}

.topnav a.align {
  padding-top: 14px;
  height: 48px;
}

.topnav a.active {
  background-color: #2E86C1;
  color: white;
  padding: 14px 28px;
  cursor: pointer;
  height: 48px;
} 


  </style> 


	<body bgcolor="#333">
<div class="imagem">
<img src="TECSEGN2.png" height="30%" width="40%">
</div>

<div class="topnav">
  <a class="align" href="sobre.html">Sobre</a>
  <a class="active" href="login.php">Entrar</a>
  <a class="align2" onclick="myFunction()" href="#">Soluções ⠀<i class="arrow down"></i></a>
  <a class="align" href="inicio.html">Página Inicial</a>
<br>
<div id="myDropdown" class="dropdown-content">
    <center>
                <a href="solucoes.php" class="activeee">⠀Todos⠀⠀</a><br>
    <a href="soprodutos.php" class="activee">Produtos</a><br>
        <a href="soservicos.php" class="activeee">Serviços⠀</a>

    </center>
  </div>
</div>

<script type="text/javascript">
  
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.align2')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

</script>
<br>
<div class="barra2"><br><br><br>
<center>
<img src="cadeado.png" width="6%" height="15%">
<br>
<br>

<h3><font color="gray"><b>Está com problemas para entrar?</b></font></h3>
<font size="3" color="white">Insira o seu E-mail.<br> Enviaremos um link para você voltar a acessar a sua conta. </font>

</center>
 <form action="controle2.php" method="post">
<br>
 <div class="row g-3 align-items-center">
  <div class="col-auto">
  </div>
  <div class="col-auto">
    <input type="email" id="email" name="email" class="form-control" placeholder="Insira seu E-mail.">
  </div>
  <div class="col-auto">
  </div>
</div>
<center>
  <?php 
       if(isset($_SESSION['loginErro'])){
        echo $_SESSION['loginErro'];
        unset($_SESSION['loginErro']);
        }
    ?>
    
      <?php 
      if(isset($_SESSION['logindeslogado'])){
        echo $_SESSION['logindeslogado'];
        unset($_SESSION['logindeslogado']);
      }
      ?>
      <br>
  <br>




 <a href="login.php">
<button type="button" class="btn btn-secondary">Voltar ao Login</button></a>


<button type="submit" value="Enviar Link" name="envia" class="btn btn-primary">Enviar Link</button><br><br>

<a href="cadastro.php">
<button type="button" class="btn btn-warning"><font color="white">Criar Nova Conta</button></font></a>




</center>
</form>
</div>

<div class="barra3">
<br>
<br> <center>
<h2> <font size="6"> Entre Em Contato! </h2>
<img src="telefone.png">
<br>
<br>
<h3>ricardo.maioli@tecsegsolucoes.com.br<br>
cesar.vitor@tecsegsolucoes.com.br<br>
joao.pedro@tecsegsolucoes.com.br<br>
<br>
<a target="_blank" href="https://www.facebook.com/tecsegsolucoestecnologia/">
<img src="facebook.png">
</a>
</h3>
<br><br>
<font color="white" face="times new roman" size=2> AV. Pres. Roosevelt, 1237
<br><br><br>
TecSeg Soluções em Tecnologia </font>
</div>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
