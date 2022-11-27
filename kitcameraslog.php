<?php
session_start();
ob_start();

 include_once("conexao_login.php");
$result_cursos = "SELECT * FROM login";
$resultado_cursos = mysqli_query($conn, $result_cursos);
?>


<!doctype html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title> Kit 8 Câmeras de Segurança Full HD 1080p Lite 20 Metros Infravermelho + DVR Intelbras + Cabos e Acessórios </title>
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
  margin-left: 540px;

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
  height: 230px !important;
  margin-top: -220px !important;
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

  height: 6250px;
  margin-top: -13px;
}

.barrra2 {
 background-image: linear-gradient(to right,#161616,#242424,#333,#515151);

  height: 640px;
  margin-top: -13px;
}

div.barra2 {

     height: 970px;


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
  <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){  ?>
<a class="align3" href="#" onclick="myFunction2()"><img class="usuario" src="user.jpg" height="50px" width="50px"></a>
    <div id="myDropdown2" class="dropdown-content3">
    <center>
    <a class="activeee" href="editarusuario.php?id_curso=<?php echo $rows_cursos['cod']; ?>">Meu Perfil</a><br>
        <a href="solucoes.php" class="activeee">Sair⠀</a>
        <a href="carrinho.php" class="activeee">Carrinhos⠀</a>
    </center>
 </div>
 <?php } ?>
  <a class="align" href="sobrelog.php">Sobre</a>
  <a class="active" onclick="myFunction()" href="#">Soluções ⠀<i class="arrow down"></i></a>
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
    <form class="d-flex" method="post" action="procpesquisa.php">
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
  margin-left: 1100px;
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
       border-color: grey;


   }

   div.quant {
  border: 2px solid;
    width: 460px;
    height: 150px;
    position: absolute;
    margin-left: 910px;
    margin-top: -30px;
    border-color: grey;
}



   

</style>

<br>
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
      <div class="imgpqn1">
      <img src=".\cameras img\sistema1.jpg" height="150px" width="150px"></div></button>
    </button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2">
      <div class="imgpqn2">
      <img src=".\cameras img\sistema2.jpg" height="150px" width="150px"></div></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3">
       <div class="imgpqn3">
      <img src=".\cameras img\sistema3.jpg" height="150px" width="150px"></div></button>
    </button>
     <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4">
       <div class="imgpqn4">
      <img src=".\cameras img\sistema4.jpg" height="150px" width="150px"></div></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="99999999">
      <a href=".\cameras img\sistema1.jpg">
      <img src=".\cameras img\sistema1.jpg" class="imj" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="99999999">
      <a href=".\cameras img\sistema2.jpg">
      <img src=".\cameras img\sistema2.jpg" class="imj" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="99999999">
      <a href=".\cameras img\sistema3.jpg">
      <img src="./cameras img/sistema3.jpg" class="imj" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
     <div class="carousel-item" data-bs-interval="99999999">
      <a href=".\cameras img\sistema4.jpg">
      <img src="./cameras img/sistema4.jpg" class="imj" alt="..."></a>
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
KIT 8 CÂMERAS DE SEGURANÇA FULL HD <BR>1080p LITE 20 METROS INFRAVERMELHO<BR> + DVR INTELBRAS + CABOS E ACESSÓRIOS
</h7>
<br><br>
  <h9> <b><font color="white">R$ 1.733,31</b></h9>
    <h13> <font color="lightgrey">Em até</font><b><font color="#0992ed" size="4"> 12x</font> <font color="#0992ed">de<font color="#0992ed" size="4"> R$144,44</font> sem juros. </h13></b></font>

    <h10> ⠀Novo ⠀|⠀ 21 vendidos </h10>

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

    <h14> (12 disponíveis) </h14>
    <a href="checkout-form.php?codigo=<?php echo 3; ?>">
    <button type="button" class="btn btn-primary btn-lg">Comprar Agora</button></a>
        <a href="carrinho.php?acao=add&codigo=<?php echo 3; ?>" class="card-link">
    <button type="button" class="btn btn-outline-primary btn-lg">Adicionar ao Carrinho 🛒</button></a>
  </font>
     <div class="frete"></div>
    <h15>Calcule o Frete e o Prazo de Entrega:🚛</h15>

    <div class="mb-4">
      <input type="text" name="cep" id="cep" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxLength="9" placeholder="Digite seu CEP"> </div>

       <button type="button" class="btn btn-primary btn-sm" onclick="openPage2();" name="btnfrete" id="btnfrete">Calcular Frete</button>

       <script>
        function openPage2() {
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
       <h16><a target="_blank" class="clia" href="https://buscacepinter.correios.com.br/app/endereco/index.php"><font color="gray"> Não sei meu CEP</h16></a></font>


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
    height: 330px;
    margin-left: 15px;
    position: absolute;
    color: grey;
}

    h18 {

      color: floralwhite;
    font-weight: bold;
    font-size: 30px;

    }

    div.inf {

      border: 2px solid;
    width: 1560px;
    height: 5820px;
    margin-left: 15px;
    margin-top: 350px;
    position: absolute;
        color: grey;

    }

    a.clia {
      cursor: pointer;
    }

    a.clia:hover {

      opacity: 0.7;

    }



  </style>
  <div class="descric"><br><h18>⠀📄DESCRIÇÃO DO PRODUTO </h18>
<br>
<h17>⠀⠀⠀ Essa nova linha da marca líder em CFTV traz alta resolução em HD com melhor custo-benefício. A tecnologia HDCVI permite ainda configurar recursos pelo Menu OSD.<BR>
⠀⠀⠀ A câmera possui resolução HD 720p, que proporciona imagens mais nítidas graças à tecnologia HDCVI. O menu OSD permite a configuração e os<br> ⠀⠀⠀ ajustes finos das imagens na tela em qualquer cenário de instalação. A sua grande sensibilidade possibilita exibir as cores por mais tempo e<br> ⠀⠀⠀ ajustar o modo de luz de fundo. + Com a nova linha de gravadores Intelbras Multi HD, o seu projeto ganha multi-possibilidades.<br>

⠀⠀⠀ Além da tecnologia Intelbras HDCVI, já consagrada no mercado brasileiro, agora é possível utilizar as demais tecnologias disponíveis no<br> ⠀⠀⠀ mercado: AHD, HDTVI, analógica e IP. O novo codec de vídeo H.265 (também chamado de HEVC codificação de vídeo de alta eficiência, na sigla<br> ⠀⠀⠀ em inglês), é mais eficiente que o seu antecessor H.264. Essa função traz mais economia no armazenamento no disco rígido e na transmissão de<br> ⠀⠀⠀ informações via internet, pois os dados são compactados com uma taxa de eficiência até 70% superior que sua versão anterior.<br>

⠀⠀⠀ A alta taxa de compactação não prejudica a qualidade das imagens, garantindo a segurança e a confiabilidade do seu sistema de CFTV<br> ⠀⠀⠀ Intelbras.+ Este cabo e ideal para CFTV, com sua dupla blindagem e o melhor cabo para seu projeto, sendo fabricado em fio de cobre nu flexivel<br> ⠀⠀⠀ que garante uma melhor qualidade de sinal.

  </div>


  <div class="inf">
    <br><h18>⠀❗INFORMAÇÕES TÉCNICAS </h18>
<br><br>
<h17>⠀⠀⠀<b>Características:</b><br>

⠀⠀⠀- Marca: Intelbras<br>

⠀⠀⠀- Modelo: 7896637632423<br>
<br>
 

⠀⠀⠀Especificações:<br>

 

 

⠀⠀⠀Câmeras Infra VHD 720P 1120B:<br>
<br>
 

 

⠀⠀⠀Especificações:<br>

 

⠀⠀⠀Sensor: 1/2.8” 1 megapixel CMOS<br>

⠀⠀⠀Pixels efetivos:  1280 (H) x 720 (V)<br>

⠀⠀⠀Linhas horizontais: 1280H<br>

⠀⠀⠀Resolução real: HD (720p) – Analógico (600 TVL)<br>

⠀⠀⠀Lente: 2,8 mm<br>

⠀⠀⠀Ângulo de visão horizontal: 109°<br>

⠀⠀⠀Ângulo de visão vertical: 61°<br>

⠀⠀⠀Alcance IR: 20m<br>

⠀⠀⠀IR inteligente: Sim (Ajustável)<br>

⠀⠀⠀Quantidade de LEDs: 2<br>

⠀⠀⠀Comprimento de onda LED IR: 850nm<br>

⠀⠀⠀Formato do vídeo: NTSC<br>

⠀⠀⠀Protocolos de vídeo: HDCVI / AHD-M / HDTVI (v2.0) Analógico (CVBS)<br>

⠀⠀⠀Sensibilidade: 0.05 lux / F2.0 (AGC ON), 0 lux IR on<br>

⠀⠀⠀Velocidade do obturador: 1/30s~1/100,000s<br>

⠀⠀⠀Sincronismo: Interno<br>

⠀⠀⠀Íris: Eletrônica<br>

⠀⠀⠀Day & Night:  Automático (Ajustável), Colorido, P&B<br>

⠀⠀⠀Troca Automática do Filtro (ICR): Sim<br>

 <br>

⠀⠀⠀Características Complementares:<br>

⠀⠀⠀Controle Automático de Ganho (AGC): ON<br>

⠀⠀⠀Compensação de Luz de Fundo (BLC): ON / OFF<br>

⠀⠀⠀Wide Dynamic Range (WDR): Ajustável (DWDR)<br>

⠀⠀⠀Balanço de branco: Automático / Ajustável<br>

⠀⠀⠀Modo de imagem: Padrão / Suave / Vivo<br>

⠀⠀⠀Ajuste de imagem: Nitidez / Brilho / Contraste / Saturação / Croma / Gamma / 2DNR<br>

⠀⠀⠀Idiomas do menu OSD: Português / Inglês<br>

⠀⠀⠀Redução Digital de Ruído (DNR): 2D - Ajustável<br>

 <br>

⠀⠀⠀Conexões:<br>

⠀⠀⠀Saída de vídeo: 75 Ω BNC fêmea<br>

⠀⠀⠀Alimentação: Conector P4 fêmea<br>

⠀⠀⠀Característicasw Elétricas<br>

⠀⠀⠀Consumo máximwo de corrente: 190 mA<br>

⠀⠀⠀Consumo máximo de potência: 2,3W<br>

⠀⠀⠀Tensão: 12Vdc<br>

⠀⠀⠀Range de tensão: 30% (8,4 ~ 15,6Vdc)<br>

⠀⠀⠀Proteção antissurto: 15 KV (Vídeo e alimentação)<br>

 <br>

⠀⠀⠀Características Mecânicas<br>

⠀⠀⠀Dimensões (L x A x P) (A x ?):  54 x 154 x 54 mm<br>

⠀⠀⠀Peso: 150g<br>

⠀⠀⠀Cor case: Branca<br>

⠀⠀⠀Tipo case / material Bullet / Plástica<br>

⠀⠀⠀Grau de proteção: IP67<br>

 

 <br>

⠀⠀⠀DVR 1208:<br>

 <br>

 

 

 

⠀⠀⠀Sistema:<br>

⠀⠀⠀- Processador principal Integrado de alta performance<br>

⠀⠀⠀- Sistema operacional Linux embarcado<br>
<br>
 

⠀⠀⠀Vídeo:<br>

⠀⠀⠀- Entradas 8 canais BNC + 2 canais IP ou 10 canais IP no modo NVR¹<br>

⠀⠀⠀Intelbras Multi HD:<br><br>

⠀⠀⠀Compatibilidade:<br>

⠀⠀⠀- Analógica: NTSC / PAL<br>

⠀⠀⠀- HDCVI: 1080p / 720p<br>

⠀⠀⠀- HDTVI: 1080p / 720p<br>

⠀⠀⠀- AHD: 1080p / 720p<br>

 
<br>
⠀⠀⠀IP:<br>

⠀⠀⠀-  6 MP / 5MP / 4 MP / 3 MP / 1080p / 720p<br>

 
<br>
⠀⠀⠀Áudio:<br>

⠀⠀⠀- Áudio no protocolo HDCVI: Todos os canais BNC configurados no protocolo HDCVI são compatíveis com câmeras<br>

⠀⠀⠀que possuem microfones embutidos ou entradas de áudio. Consulte o manual para

mais informações.<br>

⠀⠀⠀- Entrada de áudio: 1 canal com conector do tipo RCA (15K Ω)<br>
⠀⠀⠀- Saída de áudio: 1 canal com conector do tipo RCA (15K Ω)<br>

⠀⠀⠀- Áudio bidirecional: Disponível no canal 1<br>

 
<br>
⠀⠀⠀Display:<br>

⠀⠀⠀- Saída de vídeo (monitores): 1 HDMI, 1 VGA e 1 saída analógica BNC<br>

⠀⠀⠀- Resoluções de saída (em pixels): 1920×1080, 1280×1024, 1280×720 (HDMI / VGA), 800×600 (BNC)<br>

⠀⠀⠀- Divisão do mosaico da tela: 1/4/6<br>

⠀⠀⠀- Máscara de privacidade: 4 zonas configuráveis por canal<br>

⠀⠀⠀- Informações em tela: Nome do canal, Hora, Perda de vídeo, Bloqueio de câmera, Detecção de movimento, Gravação<br>

 <br>

⠀⠀⠀Gravação:<br>

⠀⠀⠀- Compressão de vídeo/áudio: H.265+, H.265, H.264+, H.264H, H.264, H.264B / G.711a, G.711u, PCM, AAC<br>

 

⠀⠀⠀Resoluções de gravação:<br>

 
<br>
 

 

 

⠀⠀⠀Stream principal:<br>

⠀⠀⠀- HDCVI, AHD, HDTVI: 4 canais em 1080p Lite / 720p / 960H / D1 / CIF (30 FPS)<br>

⠀⠀⠀- IP: 1080p / 720p / 960H / D1 / CIF (30 FPS)<br>

⠀⠀⠀- Analógico: 960H / D1 / CIF (30 FPS)<br>

 <br>

⠀⠀⠀Stream extra:<br>

⠀⠀⠀- HDCVI, AHD, HDTVI: CIF (15 FPS)<br>

⠀⠀⠀- IP: CIF (15 FPS)<br>

⠀⠀⠀- Analógico: CIF (15 FPS)<br>

⠀⠀⠀- Bit rate: 4 Mbps por canal (HDCVI, HDTVI, AHD, IP) / 3 Mbps para canal analógico<br>

⠀⠀⠀- Modo de gravação: Manual, contínua, contínua com condição de sobrescrever, agendada, detecção de movimento, mascaramento de câmera, perda de vídeo<br>

⠀⠀⠀- Intervalos de gravação: 1 ~ 60 min (padrão: 30 min), pré-gravação: 1 ~ 4 seg, pós-alarme: 1 ~ 300 seg.<br>
<br>
 

⠀⠀⠀Detecção de vídeo:<br>

⠀⠀⠀- Eventos Gravação, PTZ, Tour, Notificações push, E-mail, Foto, Buzzer, Pop-up em tela e alarme sonoro<br>

⠀⠀⠀- Detecção de vídeo Detecção de movimento, 4 zonas configuráveis por canal, Perda de vídeo e mascaramento<br>

 <br>

⠀⠀⠀Reprodução e backup:<br>

⠀⠀⠀- Reprodução síncrona: 1/4<br>

⠀⠀⠀- Modo de busca: Hora/data com precisão de segundos e busca inteligente por detecção de movimento.<br>

⠀⠀⠀- Funções de reprodução: Reproduzir, Pausar, Parar, Retrocesso, Reprodução rápida, Reprodução lenta, Próximo arquivo, Arquivo anterior, Próxima câmera, Câmera anterior, Tela cheia, Seleção de ⠀⠀⠀backup, Zoom digital.<br>

⠀⠀⠀- Modo de backup: Dispositivo USB (com formatação FAT 32), download por rede, disco rígido<br>

 
<br>
⠀⠀⠀Rede:<br>

⠀⠀⠀- Fast Ethernet / Gigabit Ethernet: RJ45 (10/100Mbps)<br>

⠀⠀⠀- Throughput: 20 Mbps<br>

⠀⠀⠀- Funções e protocolos: HTTP, IPv4/IPv6, TCP/IP, UPNP, RTSP, SMTP, NTP, DHCP, DNS, DDNS, Filtro IP, Intelbras DDNS, Intelbras Cloud, Onvif, PPPoE, Multicast, FTP, RTMP<br>

⠀⠀⠀- Conexões simultâneas: 128 conexões<br>

⠀⠀⠀- Aplicativo para smartphones (Intelbras iSIC): iOS (iPhone, iPad) e dispositivos Android<br>

 <br>

⠀⠀⠀Armazenamento:<br>

⠀⠀⠀- Disco rígido interno: 1 porta padrão SATA<br>

 <br>

⠀⠀⠀Interfaces auxiliares:<br>

⠀⠀⠀- USB: 2 portas USB 2.0<br>

⠀⠀⠀- RS485: 1 porta para controle PTZ e/ou conexão do acessório Multi-box<br>

 <br>

⠀⠀⠀Energia:<br>

⠀⠀⠀- Fonte de alimentação: 12 Vdc / 1,5A <br>

⠀⠀⠀- Potência: 10 W (sem disco rígido)<br>

 <br>

⠀⠀⠀Ambiente de funcionamento: <br>

⠀⠀⠀- 0 °C~+55 °C / 10%~90% RH / 86~106 kpa<br>

 <br>

⠀⠀⠀Dimensões (L × A × P): <br>

⠀⠀⠀- Compact 1U, 260 × 238 × 48 mm<br>

 <br>

⠀⠀⠀Adaptador USB Wireless (Wi-Fi):<br>

⠀⠀⠀- Não é compatível<br>
<br>
 

⠀⠀⠀Proteção contra surtos de tensão:<br>

⠀⠀⠀- Entradas de vídeo BNC: Até 30 kV injetado<br>

⠀⠀⠀- Saída de vídeo VGA: Até 20 kV injetado<br>

⠀⠀⠀- Saída de vídeo HDMI: Até 15 kV injetado<br>

⠀⠀⠀- Interface de rede Ethernet: Até 30 kV injetado<br>

⠀⠀⠀- Fonte de alimentação: Até 15 kV injetado<br>

⠀⠀⠀- Saída de vídeo analógica BNC (CVBS): Até 30 kV injetado<br>

 
<br>
 

 

⠀⠀⠀Cabo Coaxial RF:<br>

 
<br>
 

 

 

⠀⠀⠀Geral:<br>

⠀⠀⠀- 100 metros<br>

⠀⠀⠀- Condutor central: Fios flexiveis de cobre nu 7x0.144mm<br>

⠀⠀⠀- Dieletrico:Polietileno expansao a GAS<br>

⠀⠀⠀- Blindagem: Tranca de fios de liga/cobre nu<br>

⠀⠀⠀- Malha: 80% | DUPLA BLINDAGEM (fita+malha)<br>

⠀⠀⠀- Capa externa: PVC 75ºC Classe CM branco<br>

⠀⠀⠀- Impedancia: 75O<br>

⠀⠀⠀- Resistencia eletrica do condutor: 155O/km<br>

⠀⠀⠀- Bipolar flexivel: Cobre nu 26 ou 24 AWG isolados com polietileno<br>

 
<br>
 

⠀⠀⠀HD Seagate 1TB:<br>

 

 

 <br>

 

⠀⠀⠀Geral: <br>

⠀⠀⠀- Capacidade: 1 TB (1.000GB)<br>

⠀⠀⠀- Interface: SATA de 6 Gb/s<br>

⠀⠀⠀- Tecnologia de gravacao: CMR<br>

⠀⠀⠀- Drive Design: Ar<br>

 <br>

⠀⠀⠀Recursos e desempenho:<br>

⠀⠀⠀- Baias de disco compativeis: Ate 8<br>

⠀⠀⠀- Cameras compativeis: Ate 64<br>

⠀⠀⠀- Sensores de VR: NAO<br>

⠀⠀⠀- Taxa max. sustentada de transferencia OD (MB/s): 180 MB/s<br>

⠀⠀⠀- Cache (MB): 64<br>

 <br>

⠀⠀⠀Confiabilidade/integridade de dados:<br>

⠀⠀⠀- Resistente a corrosao: Sim<br>

⠀⠀⠀- Ciclos de carga/descarga: Não<br>

⠀⠀⠀- Taxa de erros de leitura irrecuperaveis, max.: 1 por 10E14<br>

⠀⠀⠀- Horas em atividade por ano: 8.760<br>

⠀⠀⠀- Taxa limite de carga de trabalho (WRL): 180<br>

⠀⠀⠀- Tempo medio entre falhas (MTBF) (horas):1.000.000 hr<br>

⠀⠀⠀- Warranty, Limited (years): 3<br>

⠀⠀⠀- Servicos de recuperacao de dados Rescue (anos): Não<br>

 <br>

⠀⠀⠀Energia:<br>

⠀⠀⠀- Corrente de inicializacao, tipica (12 V, A): 1,8<br>

⠀⠀⠀- Potencia media, em operacao (W): 5,6 W<br>

⠀⠀⠀- Media, ocioso (W): 4 W<br>

⠀⠀⠀- Modo de espera//hibernacao, tipico (W): 0,5/0,5<br>

⠀⠀⠀- Tolerancia de tensao (5 V): ±5%<br>

⠀⠀⠀- Tolerancia de tensao (12 V): ±10%<br>

 <br>

⠀⠀⠀Ambiente/temperatura:<br>

⠀⠀⠀- Em operacao (ambiente, min. °C): 0<br>

⠀⠀⠀- Em operacao (gabinete do disco, max. °C): 70<br>

⠀⠀⠀- Fora de operacao (ambiente, min. °C): -40<br>

 <br>

⠀⠀⠀Dimensoes (A x L x P):<br>

⠀⠀⠀- 20,2 x 101,85 x 146,99 mm<br>

 
<br>
 

⠀⠀⠀Fonte Gradeada FS-308:<br>

 

 
<br>
 

 

 

⠀⠀⠀Geral: <br>

⠀⠀⠀- Estabilizada com proteção contra curso e sobrecarga. <br>

⠀⠀⠀- Ideal para CFTV, Alarmes, Lâmpada de LED e outros.<br>

⠀⠀⠀- Modelo: Fonte 12v/10A<br>

 <br>

⠀⠀⠀Energia:<br>

⠀⠀⠀- Tensão de entrada: 90 ~ 260 VAC<br>

⠀⠀⠀- Tensão de saída: 12Vdc <br>

⠀⠀⠀- Corrente de saída: 5A (60 Watts)<br>

⠀⠀⠀- Proteções: PSI (Protetor contra surto e interferência);<br>

⠀⠀⠀- Smart Chip (Chip inteligente contra sobrecarga).<br>

 
<br>
 

⠀⠀⠀Plug P4 Macho com Borne C/ 05 Unidades (cada pacote):<br>

 

 <br>

 

 

⠀⠀⠀Geral:<br>

⠀⠀⠀- FS-278<br>

⠀⠀⠀- Conector de alta qualidade que não necessita de solda. <br>

⠀⠀⠀- Dá melhor fixação ao cabo, garantindo seu conforto na instalação e sua segurança. <br>

⠀⠀⠀- Toda tecnologia necessária em suas mãos.<br>

 
<br>
 

⠀⠀⠀Conectores Bnc Parafuso Mola 6mm:<br>

 

 

 <br>

 

⠀⠀⠀Características / Especificações:<br>

⠀⠀⠀- Acabamento simples e profissional<br>

⠀⠀⠀- Resistente com alta qualidade<br>

⠀⠀⠀- Material em metal<br>

⠀⠀⠀- Não necessita do uso de soldador elétrico<br>

⠀⠀⠀- Conector utilizado para conectar a câmera de segurança ao Gravador de Imagem (DVR Stand Alone).<br>

 <br>

⠀⠀⠀Dimensões: <br>

⠀⠀⠀- 6x 1,5cm<br>

 

 
<br>
 

 

⠀⠀⠀Conteúdo da embalagem:<br>

⠀⠀⠀- 8x Câmeras Infra VHD 720P 1120B<br>

⠀⠀⠀- 1x Gravador digital de vídeo 4 canais DVR 1208<br>

⠀⠀⠀- 1x Cabo Coaxial RF<br>

⠀⠀⠀- 1x HD Seagate 1TB<br>

⠀⠀⠀- 1x Pacote de Plug P4 Macho com 5 unidades cada (5 und)<br>

⠀⠀⠀- 8x Conectores Bnc Parafuso Mola 6mm<br>

⠀⠀⠀- 1x Fonte Gradeada FS-308<br>

<br>
⠀⠀⠀Garantia:<br>
⠀⠀⠀1 ano de garantia (9 meses de garantia contratual junto ao fabricante + 3 meses referentes à garantia legal, nos termos do artigo 26, II, do Código de Defesa do Consumidor)<br>
<br>
⠀⠀⠀Peso:<br>
⠀⠀⠀9626 gramas (bruto com embalagem)</h17>

</div>
</div>
<br>
<div class="barrra2">
  <br>
  <br>

  <h4><b><font color="white" face="Arial" size="6px">Outros Produtos e Serviços disponíveis</font></b></h4>
  <b><hr></b>

<div class="responsive">
  <div class="gallerys">
    <div class="galeria">
    <a href="">
      <img src="flechaesquerda.png" alt="flechaesquerda" width="600" height="400">
    </a>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallerry2">
    <a href="roteadormiklog.php">
      <img src="mikrotik.png" alt="cabo" width="600" height="400">
    </a>
    <div class="descii"><b>ROTEADOR MIKROTIK hEX RB750GR3<br><br></b>
Roteador Ethernet de cinco portas gigabit excelente para o gerenciamento de redes locais. Muito eficiente para uso residencial ou empresarial.
<br>
<b><font size=5 color="#393838"><s>R$ 574,90</s></b></font><br>
<b><font size=5 color="#393838"><mark>R$ 287,45</mark></b></font>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallerry2">
    <a href="cabocoaxiallog.php">
      <img src="cabo.jpg" alt="cabo" width="600" height="400">
    </a>
    <div class="descii"><b>CABO COAXIAL BIPOLAR BLINDADO INTELBRAS FC67CBR<br></b>
 <br>
Capa de isolação externa em PVC 70 °C que garante maior proteção e segurança, garante integridade da transmissão de imagem das câmeras para os gravadores de vídeo.
<br>
<b><font size=5 color="#0992ed">R$ 140,51</b></font>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallerry3">
    <a href="corporativolog.php">
      <img src="roteador1.jpg" alt="cabo" width="600" height="400">
    </a>
    <div class="descii"><b>ROTEADOR CORPORATIVO TECSEG<br></b>
 <br>
Componentes valioso para valorizar a infraestrutura de tecnologia do seu negócio. Sendo responsável pela transmissão otimizada do sinal de internet, com um bom alcance para todas as pessoas da organização
<br>
<b><font size=5 color="#0992ed">R$ 1.799,81</b></font>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallerysss">
    <a href>
      <img src="flechadireita.png" alt="flechadireita" width="600" height="400">
    </a>
  </div>
</div>
</div>
</div>

<br>
 <div class="barrra2">
  <br>
  <br>

<div class="responsive">
  <div class="gallerys">
    <div class="galeria">
    <a href="">
      <img src="flechaesquerda.png" alt="flechaesquerda" width="600" height="400">
    </a>
  </div>
</div>
</div>


<div class="responsive">
  <div class="gallerry">
        <a href="estruturalog.php">
      <img src="rede.jpg" alt="rede" width="600" height="400">
    </a>
    <div class="descii"><b>INFRAESTRUTURA EM REDES DE COMPUTADORES<br></b>
      <br>
Instalações e adequações de redes seguindo as normas ABNT NBR 14565 para uma infraestrutura funcional e de qualidade.
<br><br>
<b><font size=5 color="#0992ed">R$ 850,00</b></font>
    </div>
  </div>
</div>


<div class="responsive">
  <div class="gallerry2">
    <a href="alarmeselflog.php">
      <img src="alarme.jpg" alt="alarme" width="600" height="400">
    </a>
    <div class="descii"><b>ALARME SELF MONITOR<br></b>
 <br><br>
Sistema de alarme com monitoramento em seu celular, instalação pensando na proteção de seu patrimônio.
<br><br><br>
<b><font size=5 color="#0992ed">R$ 1.998,99</b></font>
    </div>
  </div>
</div>



<div class="responsive">
  <div class="gallerry2">
    <a href="formatarcomplog.php">
      <img src="manutencao.jpg" alt="manutenção" width="600" height="400">
    </a>
    <div class="descii"><b>FORMATAÇÃO DE COMPUTADORES<br></b>
 <br>
Aqui a formatação é real, drivers sempre atualizados, apenas com os softwares necessários, sem inutilidades que deixam seu computador lento.
<br><br>
<b><font size=5 color="2C2B2B"><s>R$ 120,00</s></b></font><br>
<b><font size=5 color="#393838"><mark>R$ 78,00</mark></b></font></a>
    </div>
  </div>

</div>
<div class="responsive">
  <div class="galleryss">
    <a href>
      <img src="flechadireita.png" alt="flechadireita" width="600" height="400">
    </a>
  </div>
</div>
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