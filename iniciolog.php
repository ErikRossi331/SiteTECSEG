
<?php
session_start();
ob_start();

 include_once("conexao_login.php");
$result_cursos = "SELECT * FROM login order by cod desc limit 1";
$resultado_cursos = mysqli_query($conn, $result_cursos);

?>


<!doctype html>

<head>
	<meta charset="utf-8">
	<title> TecSeg | Página Inicial </title>
<link rel="stylesheet" href="Estilo.css">
<link rel="shortcut icon" href="ts6.png">



</head>

<style type="text/css"> 
  .padded img { 
    padding-left: 6em; 
    padding-right: 6em; 
  } 

.barra3 {
background-image: linear-gradient(to top,#515151,#333,#242424,#161616);


  height: 580px;
  margin-top: 40px;

}

div.gallery2 {
  border: 0px solid #ccc;
}

div.gallery2:hover {
  border: 0px solid #2E86C1;
}

div.gallery2 img {
  width: 100%;
  height: auto;
opacity: 0.8;
}

div.gallery2 img:hover
{
  opacity: 1;
}


div.desc2 {
  padding: 15px;
  text-align: center;
  color: white;
  font-family: arial;
}


div.desccere {
  padding: 15px;
  text-align: center;
  margin-right: 55px;
  margin-top: -40px;
  color: white;
  font-family: arial;
}

.responsive2  {
  padding: 0 6px !important;
  float: left !important;
  margin-left: 110px !important;
  width: 24.99999% !important;
}

@media only screen and (max-width: 700px) {
  .responsive2 {
    width: 49.99999% !important;
    margin: 6px 0 !important;
  }
}

@media only screen and (max-width: 500px) {
  .responsive2 {
    width: 100%;
  }
}


div.topnav {
  height: 240px !important;
  margin-top: -247px !important;
}

div.barra2 {

  height: 1125px;

}

  mark.sin {

    background-color: #0992ed;
    color: white;

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
  margin-left: 1260px;
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
  height: 48px;
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
}


  </style> 

<body>
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
        <a href="carrinho.php" class="activeee">Carrinhos⠀</a>
    </center>
 </div>

  <a class="align" href="sobrelog.php">Sobre</a>

  <a class="align2" onclick="myFunction()" href="#">Soluções ⠀<i class="arrow down"></i></a>
  <div id="myDropdown" class="dropdown-content">
    <center>
          <a href="solucoeslogado.php" class="activee">Início</a><br>
    <a href="soprodutoslog.php" class="activee">Produtos</a><br>
        <a href="soservicoslog.php" class="activeee">Serviços⠀</a>
        
    </center>
 </div>
  <a class="active" href="iniciolog.php">Página Inicial</a>
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


<div class="container">
  <img src="pcs.jpg" alt="Snow" style="width:1568px; height: 700px">

  <div class="centered">
  	<b><font face="Arial" font size="10" > Nosso Negócio </b>
  	</font>
<br>

  		<b><font face="Arial" font size="5"> A TecSeg Soluções em Tecnologia é uma empresa que traz no seu portfólio<br>
  			soluções para os mais variados tipos de negócios e serviços. Serviços<br>
  			ponta, oferecendo soluções adaptáveis para todo tipo de necessidade.</font></b>

</b></div></div>


<div class="barra">
	<h2>
	<br>
TECNOLOGIA INOVADORA
</h2>
<h3>
<hr>
<br>

Na TecSeg Soluções em Tecnologia, nossa gama de soluções tecnológicas ajuda indivíduos e<br>
empresas líderes em seu segmento, alcançarem o sucesso que desejam. Nosso portifólio de soluções<br>
oferece diversas opções, que foram criadas com o intuito de ajudar as pessoas e empresas no seu dia-a-dia<br>
a utilizar a tecnologia a seu favor.<br>
<br>
Trabalhamos com marcas renomadas no Brasil e no mundo para oferecer o melhor a nossos clientes.
<br>
<br>
<br>
<br>

<br>
<hr>
<br>

<div class="responsive2">
  <div class="gallery2">
      <img src="laptop.png" alt="laptop" width="600" height="400">
    </a>
    <div class="desc2"><b>PRODUTOS<br></b>
 <br>
Trabalhamos com as melhores marcas do setor, sempre prezando pela qualidade acima de tudo.
<br><br>
    </div>
  </div>
</div>


<div class="responsive2">
  <div class="gallery2">
      <img src="aperto.png" alt="aperto" width="600" height="400">
    </a>
    <div class="desc2"><b>SERVIÇOS<br></b>
 <br>
Planejamento e execução dentro das normas, se traduz em serviços de qualidade e satisfação do cliente.
<br><br>
    </div>
  </div>
</div>


<div class="responsive2">
  <div class="gallery2">
      <img src="cere1.png" alt="cerebro" width="600" height="400">
    </a>
    <div class="desccere"><b>CONHECIMENTO<br></b>
 <br>
Sempre adquirindo e reciclando conhecimento é que poderemos oferecer o melhor em soluções.
<br><br>
    </div>
  </div>
</div>

<br>

<br>
</h3>

</div>

<hr>
<br>


<div class="barra2">
	<br>
	<br>
	<CENTER>
		<h3> Abaixo, está uma amostra dos nossos serviços e produtos mais vendidos: </h3>
	</CENTER>
	<br>
	
	<br>
<div class="responsive">
  <div class="gallery">
    <a href="estruturalog.php">
      <img src="rede.jpg" alt="rede" width="600" height="400">
    </a>
    <div class="desc"><b>INFRAESTRUTURA EM REDES DE COMPUTADORES<br></b>
    	<br>
Instalações e adequações de redes seguindo as normas ABNT NBR 14565 para uma infraestrutura funcional e de qualidade.
<br><br>
<b><font size=5 color="#0992ed">R$ 850,00</b></font>
    </div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="alarmeselflog.php">
      <img src="alarme.jpg" alt="alarme" width="600" height="400">
    </a>
    <div class="desc"><b>ALARME SELF MONITOR<br></b>
 <br>
Sistema de alarme com monitoramento em seu celular, instalação pensando na proteção de seu patrimônio.
<br><br><br>
<b><font size=5 color="#0992ed">R$ 1.998,99</b></font>
    </div>
  </div>
</div>



<div class="responsive">
  <div class="gallery">
    <a href="kitcameraslog.php">
      <img src="kitcamera.jpg" alt="kitcamera" width="600" height="400">
    </a>
    <div class="desc"><b>KIT 8 CÂMERAS DE SEGURANÇA FULL HD<br></b>
 <br>
Esse Kit é recomendado para sua residência, comércio ou indústria. são ideais para instalação externa ou interna, feita com material de alta qualidade.
<br><br>
<b><font size=5 color="#0992ed">R$ 1.733,31</b></font>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="cabocoaxiallog.php">
      <img src="cabo.jpg" alt="cabo" width="600" height="400">
    </a>
    <div class="desc"><b>CABO COAXIAL BIPOLAR BLINDADO INTELBRAS FC67CBR<br></b>
 <br>
Capa de isolação externa em PVC 70 °C que garante maior proteção e segurança, garante integridade da transmissão de imagem das câmeras para os gravadores de vídeo.
<br><br>
<b><font size=5 color="#0992ed">R$ 140,51</b></font>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="sistemadedeteccaolog.php">
      <img src="deteccao.jpg" alt="sistemadedeteccao" width="600" height="400"></a>
    <div class="desc"><b>SISTEMA DE DETECÇÃO DE INTRUSÃO<br></b>
 <br>
Sistema que monitora uma rede em busca de eventos que possam violar as regras de segurança dessa rede.
<br><br>

<b><font size=5 color="#393838"><s>R$ 1.689,99</s></b></font><br>
<b><font size=5 color="#0992ed"><mark class="sin">R$ 1.252,13</b></mark></font>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="formatarcomplog.php">
      <img src="manutencao.jpg" alt="cabo" width="600" height="400">
    </a>
    <div class="desc"><b>FORMATAÇÃO DE COMPUTADORES<br></b>
 <br>
Aqui a formatação é real, drivers sempre atualizados, apenas com os softwares necessários, sem inutilidades que deixam seu computador lento.
<br>
<b><font size=5 color="#393838"><s>R$ 120,00</s></b></font><br>
<b><font size=5 color="#0992ed"><mark class="sin">R$ 78,00</mark></b></font></a>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="roteadormiklog.php">
      <img src="mikrotik.png" alt="cabo" width="600" height="400">
    </a>
    <div class="desc"><b>ROTEADOR MIKROTIK hEX RB750GR3<br><br></b>
Roteador Ethernet de cinco portas gigabit excelente para o gerenciamento de redes locais. Muito eficiente para uso residencial ou empresarial.
<br>
<b><font size=5 color="#4B4949"><s>R$ 574,90</s></b></font><br>
<b><font size=5 color="#393838"><mark class="sin">R$ 287,45</mark></b></font>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="corporativolog.php">
      <img src="roteador1.jpg" alt="cabo" width="600" height="400">
    </a>
    <div class="desc"><b>ROTEADOR CORPORATIVO TECSEG<br></b>
 <br>
Componentes valioso para valorizar a infraestrutura de tecnologia do seu negócio. Sendo responsável pela transmissão otimizada do sinal de internet, com um bom alcance para todas as pessoas da organização
<br>
<b><font size=5 color="#0992ed">R$ 1.799,81</b></font>
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
  margin-top: -25px;
  margin-left: -23px;

}

#nomeusuario {

  border: none;
  resize: none;
  outline: none;
}

</style>


<button class="open-button" onclick="openForm()"><div class="balao">💬</div></button>


<div class="chat-popup" id="myForm">
  <form class="form-container" method="post" action="proc_cad_msg2.php">
    <h1>Dúvidas?</h1>

    <label for="msg"><b>Deseja entrar em contato? Basta preencher o campo abaixo, em breve um dos nossos profissionais entrará em contato com você.</b></label>
    <input type="text" name="nomeus" id="nomeusuario" readonly hidden value="<?php echo $rows_cursos['nome']; ?>">
    <input type="text" name="emailus" id="nomeusuario" readonly hidden value="<?php echo $rows_cursos['email']; ?>">
    <textarea placeholder="Escreva sua mensagem..." name="mensagem"></textarea>
<?php 
        if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        }
        ?>
    <input type="submit" class="btn" name="envia"></button> 
    <button type="button" class="btn cancel" onclick="closeForm()">Fechar</button>
  </form>
</div>

 <?php } ?>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function mensagem(){

      alert('Mensagem enviada! Em breve um dos nossos profissionais entrará em contato.')

    }

</script>



</div>
<hr>
<br>
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
<br>
<font color="white" family="arial" size=3> AV. Pres. Roosevelt, 1237
<br><br><br>
TecSeg Soluções em Tecnologia </font>

</div>
</body>
</html>
