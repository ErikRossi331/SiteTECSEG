<?php
session_start();
?>

<!doctype html>

<head>
	<meta charset="utf-8">
	<title> TecSeg | Cadastro </title>
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
  height: 200px !important;
  margin-top: -180px !important;
}

body {
  background-color: #333 !important;
}

div.col-auto {

  margin-left: 350px;
} 

.col-form-label{
  margin-left: 300px;
  position: absolute;
  color: white;
  margin-top: -20px;
}

.col-form-label2{
  margin-left: 290px;
  position: absolute;
  color: white;
  margin-top: -10px;
}


.col-form-labell{
  margin-left: 218px;
  position: absolute;
  color: white;
  margin-top: -20px;
}


.col-form-labelll{
  margin-left: 200px;
  position: absolute;
  color: white;
  margin-top: -15px;
}



  .topnav {
 background-image: linear-gradient(to right,#161616,#242424,#333,#515151);
  overflow: hidden;
  margin-top: -13%;
}


div.topnav {
  height: 240px !important;
  margin-top: -238px !important;
}

input[type=email] {
  width: 250px;
}

button.btn-secondary{


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

input[type=submit] {

 margin-left: 15px !important;

}

input[type=checkbox] {

 margin-left: px !important;
 position: absolute;

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

#inlineRadio2 {

 margin-left: 848px !important;
 position: absolute;
 margin-top: -5px;

}

label.form-check-label2
{

color: white;
  margin-left: 680px;
  margin-top: -10px;
position: absolute;
}

label.form-check-labell
{

color: white;
  margin-left: 770px;
  margin-top: -10px;
position: absolute;
}

label.col-form-labellll {

  color: white;
  margin-left: 775px;
font-weight: bold;
position: absolute;
margin-top: -5px;
font-size: 20px;
}

#inlineRadio1 {

margin-left: 750px;
 position: absolute;
 margin-top: -5px;

}
  


  div.barra2{

    height: 800px;

  }

  div.barra3 {

    height: 650px;

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
<img src="cadastrese.png" width="28%" height="10%">


<br>
        </center>
 <form method="POST" action="proc_cad_msg.php">
 <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="nome" class="col-form-labell">Nome de Usuário:</label>
  </div>
  <div class="col-auto">
    <input type="text" name="nome" class="form-control">
  </div>
  <div class="col-auto">
  </div>
</div>
<br>
<label for="genero" class="col-form-labellll">Gênero:</label>
  <br>
  <br>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label2" for="inlineRadio1">Feminino</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-labell" for="inlineRadio2">Masculino</label>
</div>

  <br>
 <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="email" class="col-form-label">Email:</label>
  </div>
  <div class="col-auto">
    <input type="email" name="email" class="form-control">
  </div>
  <div class="col-auto">
  </div>
</div>

<br>
<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="senha" class="col-form-label">Senha:</label>
  </div>
  <div class="col-auto">
    <input type="password" name="senha" class="form-control" placeholder="Max. de 11 caracteres." maxlength="11" >
  </div>
</div>
<center>
  <br>

<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="datanasc" class="col-form-labelll">Data de Nascimento:</label>
  </div>
  <div class="col-auto">
    <input type="date" name="datanasc" class="form-control" >
  </div>
</div>
<center>
  <br>

  <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="cpf" class="col-form-label">CPF:</label>
  </div>
  <div class="col-auto">
    <input type="text" name="cpf" class="form-control"  placeholder="___.___.___-__">
  </div>
</div>
<center>
  <br>


    <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="telefone" class="col-form-label2">Telefone:</label>
  </div>
  <div class="col-auto">
    <input type="text" name="telefone" class="form-control" placeholder="(__)_____-____" >
  </div>
</div>
<center>
  <br>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    <font color="lightgray">
    Desejo receber notificações personalizadas de produtos e serviços.
  </font>
  </label>
</div>



<br>
<?php 
        if(isset($_SESSION['msg51'])){
        echo $_SESSION['msg51'];
        unset($_SESSION['msg51']);
        }
        ?>
 <img src="seguranca.png" width="25%" height="6%">



 <br>
 <br>

<a href="login.php">
<button type="button" class="btn btn-secondary">Realizar Login</button></a>

<input type="submit" name="envia" class="btn btn-primary"></button><br><br>



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
