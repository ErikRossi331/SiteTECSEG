<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
<?php
session_start();
ob_start();

 include_once("conexaots.php");
$id_curso = $_GET['id_curso'];
$result_cursos = "SELECT * FROM produto WHERE codigo='$id_curso'";
$resultado_cursos = mysqli_query($conn, $result_cursos);
$row_cursos = mysqli_fetch_assoc($resultado_cursos);




 include_once("conexaoprodutos.php");
$result_cursos2 = "SELECT * FROM produto where codigo <> '$id_curso'";
$resultado_cursos2 = mysqli_query($conn, $result_cursos2);


 include_once("conexao_login.php");
$resulta_cursos = "SELECT * FROM login";
$resultado_cursoss = mysqli_query($conn, $resulta_cursos);
?>


<!DOCTYPE html>


<head>
	<meta charset="utf-8">
	<title> <?php echo $row_cursos['nome']; ?> </title>
<link rel="stylesheet" href="Estilo.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="shortcut icon" href="ts6.png">

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

  body { background: #333 !important;
}

  h4 {
    margin-left: 45px !important;
  }

  hr {
    color: white !important;
  }

  div.gallerys {
  border: 0px solid #ccc !important;
}

div.gallerys:hover {
  border: 0px solid #2E86C1 !important;
}

div.gallerys img {
  width: 100% !important;
  height: auto !important;
  opacity: 0.5 !important;
}

div.gallerys img:hover { 
  opacity: 2 !important; 
}

div.galleryss {
  border: 0px solid #ccc !important;
}

div.galleryss img {
  width: 100% !important;
  height: auto !important;
  opacity: 0.5 !important;
  height: 480px !important;
  width: 360px !important;
  position: absolute;
  margin-top: -522px;
  margin-left: 1320px;

}


div.galleryss:hover {
  border: 0px solid #2E86C1 !important;
}

  div.gallerry {
  border: 0px solid #ccc !important;
}

div.gallerry:hover {
  border: 0px solid #2E86C1 !important;
}

div.gallerry img {
  width: 100% !important;
  height: auto !important;
  opacity: 0.5 !important;
  margin-left: -150px;
}

div.gallerry img:hover { 
  opacity: 2 !important; 
}


  div.gallerry2 {
  border: 0px solid #ccc !important;
}

div.gallerry2:hover {
  border: 0px solid #2E86C1 !important;
}

div.gallerry2 img {
  width: 100% !important;
  height: auto !important;
  opacity: 0.5 !important;
  margin-left: -150px;
}

div.gallerry2 img:hover { 
  opacity: 2 !important; 
}


  div.gallerry3 {
  border: 0px solid #ccc !important;
}

div.gallerry3:hover {
  border: 0px solid #2E86C1 !important;
}

div.gallerry3 img {
  width: 100% !important;
  height: auto !important;
  opacity: 0.5 !important;
  margin-left: -150px;
}

div.gallerry3 img:hover { 
  opacity: 2 !important; 
}

div.galleryss {
  border: 0px solid #ccc !important;
}


div.galleryss img {
  width: 100% !important;
  height: auto !important;
  opacity: 0.5 !important;
  height: 480px !important;
  width: 360px !important;
  position: absolute;
  margin-top: -522px;
  margin-left: 1320px;

}

div.galleryss img:hover { 
  opacity: 2 !important; 
}

div.gallerysss img:hover { 
  opacity: 2 !important; 
}

div.gallerysss {
  border: 0px solid #ccc !important;
}

div.gallerysss:hover {
  border: 0px solid #2E86C1 !important;
}

div.gallerysss img {
  width: 100% !important;
  height: auto !important;
  opacity: 0.5 !important;
  height: 500px !important;
  width: 360px !important;
  position: absolute;
  margin-top: -500px;
  margin-left: 920px;

}

div.gallerysss img:hover { 
  opacity: 2 !important; 
}


  div.galeria img {

    margin-left: -90px !important;
    margin-top: -10px !important;

  }

  div.gallery img {
  margin-left: 30px !important;
  width: 600px;
  height: 400px;


  }

  div.desci {
    padding-right: 150px;
  text-align: center;
  color: white;
  font-family: arial;
  margin-left: -150px;
  }

  div.descii {
    padding-right: 150px;
  text-align: center;
  color: white;
  font-family: arial;
  margin-left: -130px;
  }


.promocao{

  position: absolute !important;
  margin-top: -100px;
  margin-left: 220px;

}

mark{
color: #0992ed ;

}

div.topnav {
  height: 240px !important;
  margin-top: -238px !important;
}

h3 {

  text-align: center;
color: #e6e6e6;
font-size: 18px;
font-family: arial;
font-weight: normal;
}

.barraa2 {
 background-image: linear-gradient(to right,#161616,#242424,#333,#515151);

  height: 500px;
  margin-top: -13px;
}

.barrra2 {
 background-image: linear-gradient(to right,#161616,#242424,#333,#515151);

  height: 1050px;
  margin-top: -13px;
}

div.barra2 {

     height: 1060px;


}

input[type=search]{
    width:  500px;
    align-items: center !important;
    align-content: center !important;
    
}

img.tecseg {

  width: 100px;
  margin-left: 430px;
}

div.balao {

  font-size: 55px;
  margin-top: -30px;
  margin-left: -23px;

}

</style>

<style type="text/css"> 
  .padded img { 
    padding-left: 6em; 
    padding-right: 6em; 
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
  margin-left: 1275px;
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
.dropdown-content3 {
  display: none;
  position: absolute;
  background-color: linear-gradient(to right,#161616,#242424,#333,#515151);;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  margin-left: 1470px;
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

</style>

<style type="text/css"> 
  .padded img { 
    padding-left: 6em; 
    padding-right: 6em; 
  } 

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


</head>



  <body bgcolor="#333">
<div class="imagem">
<img src="TECSEGN2.png" height="30%" width="40%">
</div>


<div class="topnav">

  <a class="align" href="sobre.html">Sobre</a>
      <a class="align" href="login.php">Entrar</a>
  <a class="active" onclick="myFunction()" href="#">Soluções ⠀<i class="arrow down"></i></a>
  <div id="myDropdown" class="dropdown-content">
    <center>
       <a href="solucoes.php" class="activee">Início</a><br>
    <a href="soprodutos.php" class="activee">Produtos</a><br>
        <a href="soservicos.php" class="activeee">Serviços⠀</a>
        
    </center>
 </div>
  <a class="align" href="inicio.html">Página Inicial</a>
<br>
</div>



<script type="text/javascript">
  
  function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.active')) {
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


 <br>
 <div class="barra2">
  <br>
  <br>


<div class="container-fluid">
    <form class="d-flex" method="post" action="procpesquisano.php">
      <img src="ts.png" class="tecseg">
      <input class="form-control me-2" name="nome" id="nome" type="search" placeholder="Buscar serviços, produtos, marcas e muito mais...">
            <input type="submit" class="btn btn-outline-primary" name="SendPesqMsg" value="Pesquisar">
    </form>


    <script type="text/javascript">
      
      function pesquisar(){

        var x = document.getElementById("search").value;
    

        if (x === "sistema") {
               window.open("intrusao.php","_self");
            }

                     else if (x === "Sistema") {
               window.open("intrusao.php","_self");
            }

            else if (x === "intrusão") {
               window.open("intrusao.php","_self");
            }

             if (x === "intrusao") {
               window.open("intrusao.php","_self");
            }

              if (x === "detecção") {
               window.open("intrusao.php","_self");
            }

             if (x === "sistema de detecção") {
               window.open("intrusao.php","_self");
            }

             if (x === "Sistema de detecção") {
               window.open("intrusao.php","_self");
            }

             if (x === "sistema de intrusão") {
               window.open("intrusao.php","_self");
            }
              if (x === "Sistema de intrusão") {
               window.open("intrusao.php","_self");
            }

              if (x === "Roteador") {
               window.open("roteadores.php","_self");
            }

               if (x === "roteador") {
               window.open("roteadores.php","_self");
            }

               if (x === "roteadores") {
               window.open("roteadores.php","_self");
            }

               if (x === "Roteadores") {
               window.open("roteadores.php","_self");
            }

               if (x === "Mikrotik") {
               window.open("roteador.php","_self");
            }

              if (x === "mikrotik") {
               window.open("roteador.php","_self");
            }

              if (x === "roteador mikrotik") {
               window.open("roteador.php","_self");
            }

              if (x === "Roteador Mikrotik") {
               window.open("roteador.php","_self");
            }

              if (x === "Roteador mikrotik") {
               window.open("roteador.php","_self");
            }

              if (x === "formata") {
               window.open("formatar.php","_self");
            }

            if (x === "formatar") {
               window.open("formatar.php","_self");
            }

            if (x === "Formata") {
               window.open("formatar.php","_self");
            }

            if (x === "Formatar") {
               window.open("formatar.php","_self");
            }

            if (x === "Formatação") {
               window.open("formatar.php","_self");
            }

            if (x === "formatação") {
               window.open("formatar.php","_self");
            }

            if (x === "formatação de computadores") {
               window.open("formatar.php","_self");
            }

            if (x === "Formatação de computadores") {
               window.open("formatar.php","_self");
            }

            if (x === "formatar computadores") {
               window.open("formatar.php","_self");
            }

            if (x === "Formatar computadores") {
               window.open("formatar.php","_self");
            }

            if (x === "computadores") {
               window.open("formatares.php","_self");
            }

            if (x === "Computadores") {
               window.open("formatares.php","_self");
            }

            if (x === "Computador") {
               window.open("formatares.php","_self");
            }

            if (x === "computador") {
               window.open("formatares.php","_self");
            }

            if (x === "kit") {
               window.open("kitcamera.php","_self");
            }

             if (x === "kit cameras") {
               window.open("kitcamera.php","_self");
            }

             if (x === "kit camera") {
               window.open("kitcamera.php","_self");
            }

             if (x === "Kit camera") {
               window.open("kitcamera.php","_self");
            }

             if (x === "Kit Camera") {
               window.open("kitcamera.php","_self");
            }

             if (x === "kit cameras de segurança") {
               window.open("kitcamera.php","_self");
            }

             if (x === "KIT Cameras") {
               window.open("kitcamera.php","_self");
            }

             if (x === "KIT") {
               window.open("kitcamera.php","_self");
            }

             if (x === "Kit") {
               window.open("kitcamera.php","_self");
            }

             if (x === "Kits") {
               window.open("kitcamera.php","_self");
            }

             if (x === "kits") {
               window.open("kitcamera.php","_self");
            }

             if (x === "KITS") {
               window.open("kitcamera.php","_self");
            }
            
             if (x === "cameras") {
               window.open("kitcamera.php","_self");
            }

             if (x === "camera") {
               window.open("kitcamera.php","_self");
            }

            if (x === "Camera") {
               window.open("kitcamera.php","_self");
            }

            if (x === "Cameras") {
               window.open("kitcamera.php","_self");
            }

            if (x === "segurança") {
               window.open("kitcamera.php","_self");
            }

            if (x === "camera de segurança") {
               window.open("kitcamera.php","_self");
            }

            if (x === "cameras de segurança") {
               window.open("kitcamera.php","_self");
            }

            if (x === "Camera de segurança") {
               window.open("kitcamera.php","_self");
            }

            if (x === "Camera de Segurança") {
               window.open("kitcamera.php","_self");
            }

                if (x === "cabo") {
               window.open("cabo.php","_self");
            }

              else if (x === "Cabo") {
               window.open("cabo.php","_self");
            }

             else  if (x === "cabo coaxial") {
               window.open("cabo.php","_self");
            }

                else if (x === "Cabo Coaxial") {
               window.open("cabo.php","_self");
            }

                 if (x === "Cabo coaxial") {
               window.open("cabo.php","_self");
            }

                 if (x === "cabo blindado") {
               window.open("cabo.php","_self");
            }

             else if (x === "Cabo Blindado") {
               window.open("cabo.php","_self");
            }

                else if (x === "blindado") {
               window.open("cabo.php","_self");
            }

                else if (x === "Blindado") {
               window.open("cabo.php","_self");
            }

              else   if (x === "blindagem") {
               window.open("cabo.php","_self");
            }

              else   if (x === "Blindagem") {
               window.open("cabo.php","_self");
            }

                 if (x === "Intelbras") {
               window.open("cabo.php","_self");
            }

                 if (x === "intelbras") {
               window.open("cabo.php","_self");
            }

                 if (x === "cabo coaxial") {
               window.open("cabo.php","_self");
            }

                 if (x === "cabo coaxial bipolar") {
               window.open("cabo.php","_self");
            }

                else if (x === "cabo coaxial blindado") {
               window.open("cabo.php","_self");
            }

               else  if (x === "Cabo Coaxial Blindado") {
               window.open("cabo.php","_self");
            }

               else  if (x === "Cabo coaxial blindado") {
               window.open("cabo.php","_self");
            }


           if (x === "cabo coaxial bipolar") {
               window.open("cabo.php","_self");
            }

             if (x === "roteador corporativo") {
               window.open("roteadorcorp.php","_self");
            }

            if (x === "Roteador corporativo") {
               window.open("roteadorcorp.php","_self");
            }

             if (x === "Corporação") {
               window.open("roteadorcorp.php","_self");
            }

             if (x === "Corporativo") {
               window.open("roteadorcorp.php","_self");
            }

             if (x === "corporativo") {
               window.open("roteadorcorp.php","_self");
            }

             if (x === "corporação") {
               window.open("roteadorcorp.php","_self");
            }

             if (x === "TecSeg") {
               window.open("roteadorcorp.php","_self");
            }

             if (x === "tec") {
               window.open("roteadorcorp.php","_self");
            }

             if (x === "Tec") {
               window.open("roteadorcorp.php","_self");
            }

             if (x === "Tec Seg") {
               window.open("roteadorcorp.php","_self");
            }

             if (x === "tec seg") {
               window.open("roteadorcorp.php","_self");
            }

             if (x === "Teg seg") {
               window.open("roteadorcorp.php","_self");
            }

            if (x === "Tegseg") {
               window.open("roteadorcorp.php","_self");
            }

            if (x === "TegSeg") {
               window.open("roteadorcorp.php","_self");
            }

            if (x === "tegseg") {
               window.open("roteadorcorp.php","_self");
            }

              if (x === "arquitetura") {
               window.open("redes.php","_self");
            }

            if (x === "arquitetura de rede") {
               window.open("redes.php","_self");
            }

            if (x === "arquitetura de redes") {
               window.open("redes.php","_self");
            }

            if (x === "Arquiteturas") {
               window.open("redes.php","_self");
            }

            if (x === "Arquitetura") {
               window.open("redes.php","_self");
            }

            if (x === "Rede") {
               window.open("redes.php","_self");
            }

            if (x === "rede") {
               window.open("redes.php","_self");
            }

            if (x === "redes") {
               window.open("redes.php","_self");
            }

            if (x === "Redes") {
               window.open("redes.php","_self");
            }

            if (x === "arquitetura") {
               window.open("redes.php","_self");
            }

            if (x === "arquitetura de redes de computadores") {
               window.open("redes.php","_self");
            }

            if (x === "Arquitetura de redes de computadores") {
               window.open("redes.php","_self");
            }

            if (x === "redes de computadores") {
               window.open("redes.php","_self");
            }

              if (x === "Redes de computadores") {
               window.open("redes.php","_self");
            }

              if (x === "Redes de Computadores") {
               window.open("redes.php","_self");
            }

              if (x === "alarme") {
               window.open("alarme.php","_self");
            }

              if (x === "Alarme") {
               window.open("alarme.php","_self");
            }

              if (x === "alarme self") {
               window.open("alarme.php","_self");
            }

              if (x === "Alarme Self") {
               window.open("alarme.php","_self");
            }

              if (x === "Alarme self") {
               window.open("alarme.php","_self");
            }

              if (x === "alarme monitor") {
               window.open("alarme.php","_self");
            }

              if (x === "Alarme Monitor") {
               window.open("alarme.php","_self");
            }

              if (x === "Alarme self monitor") {
               window.open("alarme.php","_self");
            }

              if (x === "monitor") {
               window.open("alarme.php","_self");
            }

              if (x === "Monitor") {
               window.open("alarme.php","_self");
            }





             if (x === "") {
               window.open("solucoes.php","_self");
            }

            else {
              window.open("negapesquisa.php")
            }



          }

     var input = document.getElementById("search");

input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("btnpesquisar").click();
  }
});

    </script>


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
  
      alert('Mensagem enviada! Em breve um dos nossos profissionais entrará em contato.')

    }

</script>

<br><br>


<style type="text/css">
  
  img.imj {

    height: 550px;
    width: 600px;
    cursor: pointer;

  }

div.carousel {
  height: 600px;
  width: 600px;
  margin-left: 250px;
}

button.carousel-control-prev {

}

h7 {
  color: white;
  position: absolute;
  margin-left: 930px;
  margin-top: -510px;
  font-weight: bold;
  font-size: 25px;
}

h8 {

  color: white;
  position: absolute;
  margin-left: 930px;
  margin-top: -420px;
  font-size: 20px;

}

h9 {

  color: white;
  position: absolute;
  margin-left: 930px;
  margin-top: -400px;
  font-size: 35px;

}

h10 {

  color: lightgrey;
  position: absolute;
  margin-left: 930px;
  margin-top: -580px;
  font-size: 13px;

}

h11 {

  color: lightgrey;
  position: absolute;
  margin-left: 930px;
  margin-top: -290px;
  font-size: 15px;

}

h12 {

  color: #0992ed;
  position: absolute;
  margin-left: 1125px;
  margin-top: -384px;
  font-size: 15px; 
  font-weight: bold;

}

h13 {

  position: absolute;
  margin-left: 935px;
  margin-top: -350px;
  font-size: 15px;

}

h14 {

  color: gray;
  position: absolute;
  margin-left: 1110px;
  margin-top: -290px;
  font-size: 12px; 


}

h15 {

  color: gray;
  position: absolute;
  margin-left: 920px;
  margin-top: -140px;
  font-size: 15px; 


}

h16 {

  color: gray;
  position: absolute;
  margin-left: 1190px;
  margin-top: -100px;
  font-size: 15px; 


}

h17 {

  color: lightgrey;
  position: absolute;
  font-size: 15px;



}

button.next {

 margin-left: 580px !important;
    margin-top: -250px;

}

div.imgpqn1 {

  margin-left: 165px;
  margin-top: -570px;
  opacity: 0.7;
}


div.imgpqn2 {

  margin-left: 130px;
  margin-top: -400px;
  opacity: 0.7;

}

div.imgpqn3 {

  margin-left: 95px;
  margin-top: -230px;
  opacity: 0.7;

}

div.imgpqn4 {

  margin-left: 59px;
  margin-top: -58px;
  opacity: 0.7;

}

div.imgpqn5 {

  margin-left: 23px;
  margin-top: 115px;
  opacity: 0.7;

}


input[type=number] {

  width: 70px;

}

   div.mb-3 {

    position: absolute;
    margin-left: 1020px;
    margin-top: -300px;

   }

     div.mb-4 {

    position: absolute;
    margin-left: 920px;
    margin-top: -110px;

   }


   button.btn-primary {

      margin-left: 920px;
      margin-top: -230px;
      position: absolute;
   }

   button.btn-outline-primary {

      margin-left: 1100px;
      margin-top: -230px;
      position: absolute;
   }

   input[type=text] {
    width: 130px;
   }

   button.btn-sm {

    margin-top: -106px !important;
    margin-left: 1060px;

   }

   button.btn-ol {

    margin-top: -0px !important;
    margin-left: 1038px;

   }

   div.frete {

    border: 2px solid;
    width: 450px;
    height: 100px;
    position: absolute;
    margin-left: 910px;
    margin-top: -150px;


   }

   div.quant {
  border: 2px solid;
    width: 460px;
    height: 150px;
    position: absolute;
    margin-left: 910px;
    margin-top: -30px;
}

img.image12 {
        height: 285px;
        opacity: 0.5;

      }

      img.image12:hover {

        opacity: 2;
      }

</style>

   

</style>

<br>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
      <div class="imgpqn1">
             <?php
                echo '<img src="./imagens/'.$row_cursos['codigo'].'/'.$row_cursos['imgprincipal'].'"height="150px" width="150px "/>';
                ?></div></button>
    </button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2">
      <div class="imgpqn2">
      <?php
                echo '<img src="./imagens/'.$row_cursos['codigo'].'/'.$row_cursos['imgpqn1'].'"height="150px" width="150px "/>';
                ?></div></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3">
       <div class="imgpqn3">
      <?php
                echo '<img src="./imagens/'.$row_cursos['codigo'].'/'.$row_cursos['imgpqn2'].'"height="150px" width="150px "/>';
                ?></div></button>
    </button>
     <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4">
       <div class="imgpqn4">
      <<?php
                echo '<img src="./imagens/'.$row_cursos['codigo'].'/'.$row_cursos['imgpqn'].'"height="150px" width="150px "/>';
                ?></div></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="99999999">
      <?php
                echo '<img src="./imagens/'.$row_cursos['codigo'].'/'.$row_cursos['imgprincipal'].'"class="imj"/>';
                ?>';?>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="99999999">
      <?php
                echo '<img src="./imagens/'.$row_cursos['codigo'].'/'.$row_cursos['imgpqn1'].'"class="imj"/>';
                ?>';?>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="99999999">
      <?php
                echo '<img src="./imagens/'.$row_cursos['codigo'].'/'.$row_cursos['imgpqn2'].'"class="imj"/>';
                ?>';?>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
     <div class="carousel-item" data-bs-interval="99999999">
            <?php
                echo '<img src="./imagens/'.$row_cursos['codigo'].'/'.$row_cursos['imgpqn'].'"class="imj"/>';
                ?>';?>
      <div class="carousel-caption d-none d-md-block">
         </div>
         </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
 
  </button>
</div>
<h7>
<?php echo $row_cursos['nometec']; ?>
</h7>
<br><br>
<h8> <font color="6B6B6E"><s><?php echo $row_cursos['precodesc']; ?></s></h8>
  <h9> <b><font color="white"><?php echo 'R$ ' . $row_cursos['precovenda']; ?></b></h9>
    
   <h11> Quantidade: </h11>
   <div class="mb-3">
  <input type="number" class="form-control" id="exampleFormControlInput1" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxLength="2"> </div>

  <script type="text/javascript">
    function al() {


    alert('Você preisa estar logado para efetuar a compra deste serviço ou produto!')
    }

    function al2() {


    alert('Você preisa estar logado para adicionar este produto ao carrinho de compras!')
    }
  </script>

    <h14> (<?php echo $row_cursos['qtd']; ?> disponíveis) </h14>
    <a href="login.php">
    <button type="button" class="btn btn-primary btn-lg" onclick="al();">Comprar Agora</button></a>
          <a href="login.php">
    <button type="button" class="btn btn-outline-primary btn-lg" onclick="al2();">Adicionar ao Carrinho 🛒</button></a>
  </font>
     <div class="frete"></div>
    <h15>Calcule o Frete e o Prazo de Entrega:🚛</h15>

    <div class="mb-4">
      <input type="text" name="cep" id="cep" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxLength="9" placeholder="Digite seu CEP"> </div>

       <h16><a target="_blank" class="clia" href="https://buscacepinter.correios.com.br/app/endereco/index.php"><font color="gray"> Não sei meu CEP</h16></a></font>

       <button type="button" class="btn btn-primary btn-sm" onclick="openPage1();" name="btnfrete" id="btnfrete">Calcular Frete</button>

       <script>
        function openPage1() {
            var x = document.getElementById("cep").value;

            if (x === "17700-000") {
               alert('Cidade: Osvaldo Cruz, Frete Gratis');
            }

            if (x === "19015-010") {
               alert('Cidade: Presidente Prudente - Centro, Frete: R$ 109,90');
            }

            if (x === "17800-000") {
               alert('Cidade: Adamantina, Frete: R$ 39,90');
            }

            if (x === "17780-000") {
               alert('Cidade: Lucélia, Frete: R$ 42,30');
            }

            if (x === "17710-000") {
               alert('Cidade: Ságres, Frete: R$ 41,00');
            }

            if (x === "17720-000") {
               alert('Cidade: Salmourão, Frete: R$ 35,90');
            }

            if (x === "17760-000") {
               alert('Cidade: Inúbia Paulista, Frete: R$ 43,90');
            }

             if (x === "17730-000") {
               alert('Cidade: Parapuã, Frete: R$ 41,50');
            }

            if (x === "17740-000") {
               alert('Cidade: Rinópolis, Frete: R$ 37,50');
            }

           if (x === "") {
               alert('Por favor, insira o CEP.');
            }

          }
         var input = document.getElementById("cep");

input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("btnfrete").click();
  }
});


    </script>

       

          <div class="quant"><h17><br>⠀↩️<font color="#0992ed"><u>Devolução Grátis.</u></font> Você tem 7 Dias a Partir da Data de ⠀⠀Recebimento.<br><br>
          ⠀🏅<font color="#0992ed"><u><a class="clia" onclick="openForm();">Ajuda de Especialista.</a></u></font> Tire Suas Dúvidas Sobre o Produto ou ⠀⠀Instalação.</h17></div>

</div>
</div>
</div>
</div>
<br>
<div class="barraa2">
  
  <br>
  <br>
  <style type="text/css">
    
    div.descric {
      border: 2px solid;
    width: 1560px;
    height: 430px;
    margin-left: 15px;
    position: absolute;
}

    h18 {

      color: floralwhite;
    font-weight: bold;
    font-size: 30px;

    }

    div.inf {

      border: 2px solid;
    width: 1560px;
    height: 1330px;
    margin-left: 15px;
    margin-top: 180px;
    position: absolute;

    }

    a.clia {
      cursor: pointer;
    }

     a.clia:hover {

      opacity: 0.7;

    }

div.barra3 {


  height: 650px;

}

  </style>
  <div class="descric"><br><h18>⠀📄DESCRIÇÃO DO PRODUTO </h18>
<br>
<div style = "position:relative; left:20px; top:2px; background-color:yellow;">
<h17><?php echo $row_cursos['descricao']; ?></h17>
</div>
  </div>




</div>
<br>
<div class="barrra2">
  <br>
  <br>

  <h4><b><font color="white" face="Arial" size="6px">Outros Produtos disponíveis</font></b></h4>
  <b><hr></b>

<div class="container theme-showcase" role="main">
      <div class="page-header">
      </div>
      <div class="row">
        <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos2)){ ?>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <a href="detalhesproduto.php?id_curso=<?php echo $rows_cursos['codigo']; ?>">
               <?php
                echo '<img src="./imagens/'.$rows_cursos['codigo'].'/'.$rows_cursos['imagem'].'" class="image12"/>';
                ?>
      </a>
              <div class="caption text-center">
                <?php  ?><h3><?php echo "<b> <font size=3 color='white'>" . $rows_cursos['nome'] . "</b></font>"; ?></h3></a>
                <?php  ?><h3><?php echo "<font size=3 color='white'>"  .  $rows_cursos['info'] . "</font>"; ?></h3></a>
                <?php  ?><h3><?php echo "<b><font size=5 color='#0992ed'> R$ "  .  $rows_cursos['precovenda'] . "</font></b>"; ?></h3></a>
                
              

              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
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
<font color="white" face="times new roman" size=3> AV. Pres. Roosevelt, 1237
<br><br><br>
TecSeg Soluções em Tecnologia </font>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
</html>