
<?php
session_start();
ob_start();

 include_once("conexao_login.php");
$result_cursos = "SELECT * FROM login where cod limit 1";
$resultado_cursos = mysqli_query($conn, $result_cursos);
?>


<!doctype html>

<head>
	<meta charset="utf-8">
	<title> TecSeg | Sobre </title>
<link rel="stylesheet" href="Estilo.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="shortcut icon" href="ts6.png">


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

    background-color: #333;

  }

  h2 {

  text-align: center;
color: #bfbfbf;
font-size: 25px;
font-family: arial;
font-weight: bold;
}

div.barra2 {

  height: 350px;
}

div.barraa2 {

 background-image: linear-gradient(to right,#161616,#242424,#333,#515151);

  height: 550px;
  margin-top: -13px;
}

div.barraaa2 {

 background-image: linear-gradient(to right,#161616,#242424,#333,#515151);

  height: 830px;
  margin-top: -13px;
}


hr {
 color: white;
}

div.media {
  margin-left: 100px;
}

h3 {

  text-align: center;
color: #e6e6e6;
font-size: 18px;
font-family: arial;
font-weight: normal;
}

h4 {

  text-align: center;
color: #e6e6e6;
font-size: 14px;
font-family: arial;
font-weight: normal;
}

div.claudio{

  border-radius: 50%;
  position: absolute;
  margin-left: 160px;

}

div.julio{

  border-radius: 50%;
  position: absolute;
  margin-left: 460px;
  margin-top: -540px;
}

div.ricardo{

  border-radius: 50%;
  position: absolute;
  margin-left: 460px;
  margin-top: -485px;
}



div.netz{

  border-radius: 100%;
  position: absolute;
  margin-left: 880px;
  margin-top: -540px;
}

div.william{

  border-radius: 100%;
  position: absolute;
  margin-left: 920px;
  margin-top: -485px;
}


div.desc {

  margin-left: 10px;

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
  margin-left: 1270px;
  margin-top: 50px;

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
  height: 50px;
} 

.dropdown-content3 {
  display: none;
  position: absolute;
  background-color: linear-gradient(to right,#161616,#242424,#333,#515151);;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left: 1450px;
  margin-top: 60px;

}

/* Links inside the dropdown */
.dropdown-content3 a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content3 a:hover {background-color: #ddd
  color: black;
  padding: 14px 28px;
}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}

img.usuario {

  border-radius: 50%;
  margin-left: -18px;
  margin-top: -5px;

}

.topnav a.align3 {
  padding-top: 14px;
  border-radius: 50%;
  height: 70px;
  width: 70px;
  margin-left: 10px;
}


  </style> 


	<body bgcolor="#333">
<div class="imagem">
<img src="TECSEGN2.png" height="30%" width="40%">
</div>

<div class="topnav">
  <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){  ?>
<a class="align3" href="#" onclick="myFunction2()"><img class="usuario" src="user.jpg" height="50px" width="50px"></a>
    <div id="myDropdown2" class="dropdown-content3">
    <center>
    <a class="activeee" href="editarusuario.php?id_curso=<?php echo $rows_cursos['cod']; ?>">Meu Perfil</a><br>
        <a href="solucoes.php" class="activeee">Sair⠀</a>
        <a href="carrinho.php" class="activeee">Carrinhos ⠀</a>
    </center>
 </div>
 <?php } ?>
  <a class="active" href="sobrelog.php">Sobre</a>
  <a class="align2" onclick="myFunction()" href="#">Soluções ⠀<i class="arrow down"></i></a>
  <div id="myDropdown" class="dropdown-content">
    <center>
          <a href="solucoeslogado.php" class="activee">Início</a><br>
    <a href="soprodutoslog.php" class="activee">Produtos</a><br>
        <a href="soservicoslog.php" class="activeee">Serviços⠀</a>
        
    </center>
 </div>
  <a class="align" href="iniciolog.php">Página Inicial</a>
<br>
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

function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.align3')) {
    var dropdowns = document.getElementsByClassName("dropdown-content1");
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
<center>
      <a target="_blank"><img src="quemsomos.jpg" class="d-block" alt="quemsomos" width="1580px" height="490px"></a>
    </div>
</div>
</div>
</center>

<div class="barra2">
  <h2>
  <br><br>
Nossa História
</h2>
<h3>
<hr>
<br>

Idealizada por dois professores da área de tecnologia que decidiram aplicar<br>
seus conhecimentos na prática, a empresa hoje oferece serviços inteligentes e inovadores<br>
para nossos clientes. Venha se juntar à nossa crescente base de clientes!<br>
<br>
<a class="clicke" onclick="openForm();">Entre em contato</a> para saber mais.<br>
</h3>
<br>
<hr>
<br>
<br><br>


<style type="text/css">
  

div.clei img {

  opacity: 0.3;

}

div.clei img:hover {
  opacity: 2;
}

div.barra3 {

  height: 630px;

}


</style>

<div class="barraa2">
  
  <h2>
    <br><br>
    <font color="white">Alguns dos nossos clientes:</font>
  </h2>
  <hr><br>
  <center>
    <div class="clei">
 <a target="_blank" class="mediadora" href="https://www.facebook.com/mediadoraimoveis">
  <img src="mediadora.png" height="120px" width="150px"></a>
  <a target="_blank" class="mirim" href="https://www.facebook.com/bardomirim">
  <img src="mirim.png" height="130px" width="150px"></a>
  <a target="_blank" class="taves" href="https://www.facebook.com/TavesMD">
  <img src="taves.png" height="100px" width="190px"></a>


    <a target="_blank" href="https://www.facebook.com/lojas.mv.moveis/">
  <img src="mv.png" height="50px" width="190px"></a>
    <a target="_blank" href="https://www.facebook.com/village.imobiliaria/">
  <img src="village.png" height="100px" width="130px"></a>
   <a target="_blank" href="https://www.facebook.com/CheiroeCharmeCosmeticos">
  <img src="cheiro.png" height="120px" width="180px"></a>
    

  <br><br>

  <a target="_blank" href="https://www.facebook.com/Solu%C3%A7%C3%A3o-Sistemas-520405931339666/">
    <img src="solucaosis.png" height="75px" width="150px"></a>
    <a target="_blank" href="https://www.facebook.com/cemevosvaldocruz/">
    <img src="cemev.png" height="70px" width="180px"></a>
<a target="_blank" href="https://www.facebook.com/agencianetzee">
  <img src="netzee.png" height="50px" width="180px"></a>
     <a target="_blank" href="https://www.facebook.com/casadopastelocz">
  <img src="pastel.png" height="100px" width="130px"></a>


    <a target="_blank" href="https://www.facebook.com/ciasteakburger/">
  <img src="burger.png" height="120px" width="180px"></a>
   <a target="_blank" href="https://www.facebook.com/AsconContabilidade/">
  <img src="ascon.png" height="120px" width="180px"></a>
  <br><br>
   <a target="_blank" href="https://www.facebook.com/benetherm">
  <img src="benetherm.png" height="70px" width="180px"></a>
</div>
</center>
</div>
<br>
<br>
<div class="barraaa2">
<br><br><br>
<h2> Veja o que dizem os nossos clientes: </h2>
<hr>
<h4>Nossa maior satisfação é ver você feliz com nossos resultados.</h4>
<br>
<br>

<div class="claudio">
<img src="claudinho.png" width="300px" height="300px">
<div class="desc">
Solicitamos o serviço da TecSeg<br> e fomos prontamente atendidos.<br>
Empresa com serviços de qualidade<br> com ótimo
atendimento e<br> profissionais capacitados.<br> 
<b>Recomendamos.</b>
<br>
<br>
<b><font size=5 color="white"><u>Cláudio Munhoz</b></font></u><br>
Proprietário do Cia Steak & Burger


<div class="julio">
<img src="julio.png" width="300px" height="300px">
<div class="desc">
Trabalhamos com a TecSeg desde a sua criação
e gostamos muito da qualidade e confiança. São<br>
profissionais em constante atualização, sempre indicando<br>
o que há de mais moderno, e no melhor custo benefício.<br>
Empresa voltada a <b>inovação.</b>
<br>
<br>
<b><font size=5 color="white"><u>Júlio Peixoto</b></font></u><br>
Proprietário da Mediadora Imóveis
</div>
</div>

<div class="netz">
<img src="netz.png" width="300px" height="180px">
<div class="desc">
A TecSeg sempre nos traz soluções e muita dedicação
para as necessidades que temos, outra característica
forte é a confiança que os profissionais nos passam,<br>
sempre com equipamentos de qualidade e
<b>garantia</b> nos serviços prestados.
<br>
<br>
<b><font size=5 color="white"><u>Guilherme</b></font></u><br>
Netzee
</div>
</div>
</div>
</div>
</div>
<br>
<br>

<div class="barraaa2">
  <br><br><br>
<h2> Nossa Equipe:</h2>
<hr>
<h4>Conheça quem trabalha todo dia em prol do seu sucesso.</h4>
<br>
<br><br>

<div class="claudio">
<img src="cesar.png" width="300px" height="300px">
<div class="desc">
  <b><font size=5 color="#0992ed"><u>César Vitor</b></font></u><br>
<br>
Atuando na área de Redes há<br> mais de 15 anos,
e como professor<br> na área de tecnologia,<br>
Entusiasta em rádiofrequência<br> e Infraestrutura de redes.

<div class="ricardo">
<img src="ricardo.png" width="300px" height="300px">
<div class="desc">
<b><font size=5 color="#0992ed"><u>Ricardo Maioli</b></font></u><br>
<br>
Atuando na área TI há mais de 15 anos,
traz em sua bagagem conhecimentos
adquiridos ao longo do tempo em empresas por
onde trabalhou e também em estudos.<br>
Professor pós graduado em redes de computadores.
</div>
</div>

<div class="william">
<img src="joao.png" width="300px" height="300px">
<div class="desc">
<b><font size=5 color="#0992ed"><u>João Pedro</b></font></u><br>
<br>

É o mais novo colaborador da TecSeg,
 possui cursos técnicos na área de informática,
sendo um técnico de competência ímpar, focado na área de manutenção de computadores

</div>
</div>
</div>
</div>

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

a.clicke {

  cursor: pointer;

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