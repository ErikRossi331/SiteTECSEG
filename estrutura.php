<!doctype html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title> Serviço - Infraestrutura em Redes de Computadores, Normas ABNT NBR 14565 e ANSI EIA/TIA. </title>
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

  height: 760px;
  margin-top: -13px;
}

.barrra2 {
 background-image: linear-gradient(to right,#161616,#242424,#333,#515151);

  height: 640px;
  margin-top: -13px;
}

div.barra2 {

     height: 980px;


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

</head>



	<body bgcolor="#333">
<div class="imagem">
<img src="TECSEGN2.png" height="30%" width="40%">
</div>


<div class="topnav">
  <a class="align" href="sobre.html">Sobre</a>
  <a class="align" href="login.php">Entrar</a>
  <a class="active" onclick="myFunction()" href="#">Soluções ⠀<i class="arrow down"></i></a>
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

</script>

 <br>
 <div class="barra2">
  <br>
  <br>


  <div class="container-fluid">
    <form class="d-flex">
      <img src="ts.png" class="tecseg">
      <input class="form-control me-2" name="search" id="search" type="search" placeholder="Buscar serviços, produtos, marcas e muito mais..." onchange="pesquisar();">
      <button class="btn btn-outline-primary btn-ol" type="button" onkeyup="pesquisar();" name="btnpesquisar" id="btnpesquisar" onclick="pesquisar();"> Pesquisar</button>
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

      alert('Você precisa estar logado para enviar mensagens!')

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
  margin-top: -530px;
  font-weight: bold;
  font-size: 25px;
}

h8 {

  color: white;
  position: absolute;
  margin-left: 930px;
  margin-top: -440px;
  font-size: 20px;

}

h9 {

  color: white;
  position: absolute;
  margin-left: 930px;
  margin-top: -420px;
  font-size: 35px;

}

h10 {

  color: lightgrey;
  position: absolute;
  margin-left: 930px;
  margin-top: -600px;
  font-size: 13px;

}

h11 {

  color: lightgrey;
  position: absolute;
  margin-left: 930px;
  margin-top: -310px;
  font-size: 15px;

}

h12 {

  color: #0992ed;
  position: absolute;
  margin-left: 1100px;
  margin-top: -404px;
  font-size: 15px; 
  font-weight: bold;

}

h13 {

  position: absolute;
  margin-left: 935px;
  margin-top: -370px;
  font-size: 15px;

}

h14 {

  color: gray;
  position: absolute;
  margin-left: 1110px;
  margin-top: -310px;
  font-size: 12px; 


}

h15 {

  color: gray;
  position: absolute;
  margin-left: 920px;
  margin-top: -200px;
  font-size: 15px; 


}

h16 {

  color: gray;
  position: absolute;
  margin-left: 1190px;
  margin-top: -160px;
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

  margin-left: 135px;
  margin-top: -570px;
  opacity: 0.7;

}


div.imgpqn2 {

  margin-left: 100px;
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
    margin-top: -320px;

   }

     div.mb-4 {

    position: absolute;
    margin-left: 920px;
    margin-top: -170px;

   }


   button.btn-primary {

      margin-left: 920px;
      margin-top: -310px;
      position: absolute;
   }

   button.btn-outline-primary {

      margin-left: 1100px;
      margin-top: -310px;
      position: absolute;
   }

   input[type=text] {
    width: 130px;
   }

   button.btn-sm {

    margin-top: -166px !important;
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
    margin-top: -220px;
    color: gray;


   }

   div.quant {
  border: 2px solid;
    width: 460px;
    height: 240px;
    position: absolute;
    margin-left: 910px;
    margin-top: -100px;
        color: gray;
}

   

</style>

<br>
<div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
      <div class="imgpqn1">
      <img src=".\rede img\sistema1.jpeg" height="150px" width="150px"></div></button>
    </button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2">
      <div class="imgpqn2">
      <img src=".\rede img\sistema2.jpg" height="150px" width="150px"></div></button>
  

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="99999999">
      <a href=".\rede img\sistema1.jpeg">
      <img src=".\rede img\sistema1.jpeg" class="imj" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="99999999">
      <a href=".\rede img\sistema2.jpg">
      <img src=".\rede img\sistema2.jpg" class="imj" alt="..."></a>
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
SERVIÇO - INFRAESTRUTURA DE REDES DE COMPUTADORES ABNT NBR 14565
</h7>
<br><br>

  <h9> <b><font color="#0992ed">A partir de</font>  <font color="white">R$ 850,00</font></b></h9>
    <h13> <font color="lightgrey"> Em até</font><b><font color="#0992ed" size="4"> 12x</font> <font color="#0992ed"><font color="#0992ed" size="4"> </font> sem juros. </h13></b></font>


  

  <script type="text/javascript">
    function al() {


    alert('Você preisa estar logado para efetuar a compra deste serviço ou produto!')
    }

    function al2() {


    alert('Você preisa estar logado para adicionar este produto ao carrinho de compras!')
    }
  </script>

    <a href="login.php">
    <button type="button" class="btn btn-primary btn-lg" onclick="al();">Comprar Agora</button></a>
          <a href="login.php">
    <button type="button" class="btn btn-outline-primary btn-lg" onclick="al2();">Adicionar ao Carrinho 🛒</button></a>
  </font>

  <div class="frete"></div>
  <h15>Calcule o Frete e o Prazo de Instalação:🚛</h15>

    <div class="mb-4">
      <input type="text" name="cep" id="cep" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxLength="9" placeholder="Digite seu CEP"> </div>

       <button type="button" class="btn btn-primary btn-sm" onclick="openPage2();" name="btnfrete" id="btnfrete">Calcular Frete</button>
<h16><a class="clia" target="_blank" href="https://buscacepinter.correios.com.br/app/endereco/index.php"><font color="gray"> Não sei meu CEP</h16></a></font>
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


          <div class="quant"><h17><br>
          ⠀🏅<font color="#0992ed"><u><a class="clia" onclick="openForm();">Ajuda de Especialista.</a></u></font> Tire Suas Dúvidas Sobre o Produto ou ⠀⠀Instalação.<br><br>
        ⠀🔧<font color="#0992ed"><u>Serviço de Instalação.</u></font> Nossos profissionais serão enviados   ⠀⠀para realizar o serviço. <br><br>
                 ⠀⚠️<font color="#0992ed"><u>Serviço de Reparos</u></font> Em caso de defeitos ou falhas no sistema     ⠀⠀instalado, você pode agendar uma data para que um dos nossos    ⠀⠀profissionais efetue os devidos reparos presencialmente.
      </h17></</div>

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
    height: 180px;
    margin-left: 15px;
    position: absolute;
        color: gray;
}

    h18 {

      color: floralwhite;
    font-weight: bold;
    font-size: 30px;

    }

    div.inf {

      border: 2px solid;
    width: 1560px;
    height: 490px;
    margin-left: 15px;
    margin-top: 200px;
    position: absolute;
        color: gray;

    }

    a.clia {
      cursor: pointer;
    }

    a.clia:hover {

      opacity: 0.7;

    }


  </style>
  <div class="descric"><br><h18>⠀📄DESCRIÇÃO DO SERVIÇO </h18>
<br>
<h17>⠀⠀⠀Qualidade na integração dos serviços de voz, tráfego de dados, imagem, vídeo, controle e sinalização são esenciais para qualquer negócio. A TecSeg está pronta para implementar esses recursos garantindo a melhor <br>  ⠀⠀⠀performancedos equipamentos e tecnologias envolvidas, sempre seguindo as normas de segurança ANSI e a EIA/TIA e as normas ABNT e NBR 14565.

  </div>


  <div class="inf">
    <br><h18>⠀❗INFORMAÇÕES DO SERVIÇO </h18>
<br><br>
<h17>⠀⠀⠀<B>Serviço: </B><br>
⠀⠀⠀Infraestrutura em Redes de Computadores, Normas ABNT NBR 14565 e ANSI EIA/TIA
<br><br>
<B>⠀⠀⠀Tempo de atendimento:</B><br>
 ⠀⠀⠀Em até 72 horas com agendamento feito após a confirmação do pagamento da compra.
<br><br>
<B>⠀⠀⠀Região de atendimento:</B><br>
 ⠀⠀⠀Osvaldo Cruz - SP
<br><br>
<B>⠀⠀⠀Frete:</B><br>
⠀⠀⠀A combinar.
<br><br>

<B>⠀⠀⠀Instalação:</B><br>
⠀⠀⠀A combinar.
<br><br>

<B>⠀⠀⠀Garantia do Serviço:</B> <br>
⠀⠀⠀12 meses de garantia.</h17>

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
  <div class="gallerry">
    <a href="kitcameras.php">
      <img src="kitcamera.jpg" alt="kitcamera" width="600" height="400">
    </a>
    <div class="desci"><b>KIT 8 CÂMERAS DE SEGURANÇA FULL HD<br></b>
 <br>
Esse Kit é recomendado para sua residência, comércio ou indústria. são ideais para instalação externa ou interna, feita com material de alta qualidade.
<br><br>
<b><font size=5 color="#0992ed">R$ 1.733,31</b></font>
    </div>
  </div>
</div>

<div class="responsive">
  <div class="gallerry2">
        <a href="cabocoaxial.php">
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
    <a href="corporativo.php">
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
    <a href="sistemadedeteccao.php">
      <img src="deteccao.jpg" alt="sistemadedeteccao" width="600" height="400"></a>
    <div class="desci"><b>SISTEMA DE DETECÇÃO DE INTRUSÃO<br></b>
 <br>
Sistema que monitora uma rede em busca de eventos que possam violar as regras de segurança dessa rede.
<br><br>

<b><font size=5 color="#393838"><s>R$ 1.689,99</s></b></font><br>
<b><font size=5 color="#393838"><mark>R$ 1.252,13</mark></b></font>
    </div>
  </div>
</div>



<div class="responsive">
  <div class="gallerry2">
    <a href="alarmeself.php">
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
  <div class="gallerry">
    <a href="formatarcomp.php">
      <img src="manutencao.jpg" alt="cabo" width="600" height="400">
    </a>
    <div class="descii"><b>FORMATAÇÃO DE COMPUTADORES<br></b>
 <br>
Aqui a formatação é real, drivers sempre atualizados, apenas com os softwares necessários, sem inutilidades que deixam seu computador lento.
<br>
<b><font size=5 color="2C2B2B"><s>R$ 120,00</s></b></font><br>
<b><font size=5 color="#393838"><mark>R$ 78,00</mark></b></font></a>
    </div>
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