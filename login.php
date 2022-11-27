<?php
session_start();
?>

<!doctype html>
<?php 
        if(isset($_SESSION['msg52'])){
        echo $_SESSION['msg52'];
        unset($_SESSION['msg52']);
        }



if(isset($_SESSION['msg40'])){
  echo $_SESSION['msg40'];
  unset($_SESSION['msg40']);
}

?>
<head>
	<meta charset="utf-8">
	<title> TecSeg | Login </title>
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


div.topnav {
  height: 240px !important;
  margin-top: -238px !important;
}

input[type=email] {
  width: 250px;
}

button.btn-primary{

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
<img src="realizelogin.png" width="20%" height="8%">
<br>

</center>
 <form action="controle.php" method="POST">

 <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="email" class="col-form-label">Email:</label>
  </div>
  <div class="col-auto">
    <input type="email" id="email" name="email" class="form-control">
  </div>
  <div class="col-auto">
  </div>
</div>
<br>
  <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Senha:</label>
  </div>
  <div class="col-auto">
    <input type="password" id="senha" name="senha" class="form-control" placeholder="Max. de 11 caracteres." maxlength="11" >
  </div>

</div>
<center>


<br>

 <img src="encontresolucao.png" width="20%" height="5%">

 <br>
<?php 
       if(isset($_SESSION['msg2'])){
        echo $_SESSION['msg2'];
        unset($_SESSION['msg2']);
}
        else if(isset($_SESSION['loginErro'])){
echo $_SESSION['loginErro'];
unset($_SESSION['loginErro']);


        }
 

    ?>

<br>

 <br>

 <a href="cadastro.php">
<button type="button" class="btn btn-secondary">Cadastrar-se</button></a>
<a href="">
<button type="submit" class="btn btn-primary">Entrar</button><br><br></a>

<a href="esqueceu.php">Esqueceu a senha?</a>

</center>
</form>
</div>

<style type="text/css">

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #0A2C66;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  height: 60px;
  width: 70px;
  border-radius: 200px;
  align-items: center !important;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

div.balao {

  font-size: 55px;
  margin-top: -30px;
  margin-left: -23px;

}

</style>


<button class="open-button" onclick="openForm()"><div class="balao">💬</div></button>


<div class="chat-popup" id="myForm">
  <form class="form-container">
    <h1>Dúvidas?</h1>

    <label for="msg"><b>Deseja entrar em contato? Basta preencher o campo abaixo, em breve um dos nossos profissionais entrará em contato com você.</b></label>
    <textarea placeholder="Escreva sua mensagem..." name="msg"></textarea>

    <button type="submit" class="btn" onclick="mensagem();">Enviar</button> 
    <button type="button" class="btn cancel" onclick="closeForm()">Fechar</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function mensagem(){

         alert('Você precisa estar logado para enviar mensagens!')

    }

</script>


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
