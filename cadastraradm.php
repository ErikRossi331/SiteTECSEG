<?php
session_start();
ob_start();

 include_once("conexao_login.php");
$result_cursos = "SELECT * FROM admins where cod_adm limit 1";
$resultado_cursos = mysqli_query($conn, $result_cursos);

$cod_adm = "1";
?>

<!DOCTYPE html>
<html lang="pt-br">


<head>
  <title> TecSeg | Cadastro de Adm's </title>
<link rel="stylesheet" href="Estilo.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href=".css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="ts6.png">


<style type="text/css">

  @media only screen and (max-width: 700px) {
  .responsive2 {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive2 {
    width: 100%;
  }
}


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

div.galleryss2 {
  border: 0px solid #ccc !important;
}

div.galleryss2:hover {
  border: 0px solid #2E86C1 !important;
}

div.galleryss2 img {
  width: 100% !important;
  height: auto !important;
  opacity: 0.5 !important;
  height: 480px !important;
  width: 360px !important;
  position: absolute;
  margin-top: -522px;
  margin-left: 1320px;

}

div.galleryss2 img:hover { 
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
  margin-left: -150px !important;

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

  height: 460px;
  margin-top: -13px;
}

.barrra2 {
 background-image: linear-gradient(to right,#161616,#242424,#333,#515151);

  height: 640px;
  margin-top: -13px;
}

div.barra2 {

     height: 520px;


}

input[type=search]{
    width:  500px;
    align-items: center !important;
    align-content: center !important;
    
}

img.tecseg {

  width: 100px;
  margin-left: 410px;
}

div.balao {

  font-size: 55px;
  margin-top: -30px;
  margin-left: -23px;

}


div.borda {

  border: 1px solid transparent;
  width: 350px;
 height: 500px;
 position: absolute;
 margin-left: 50px;
 margin-top: -200px;

}


div.borda:hover {

border: 1px solid;
color: #0992ed;
width: 350px;
height: 500px;




}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown3 {
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

div.barra3 {

  height: 650px;

}

button.btn-secondary {

  margin-top: -px;
  margin-left: 30px;

}

img.image12 {

        opacity: 0.5;

      }

      img.image12:hover {

        opacity: 2;
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
  </style> 


</head>



	<body bgcolor="#333">
<div class="imagem">
<img src="TECSEGN2.png" height="30%" width="40%">
</div>


<div class="topnav">
  <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){  ?>
<a class="align3" href="#" onclick="myFunction2()"><img class="usuario" src="admin.png" height="50px" width="50px"></a>
    <div id="myDropdown2" class="dropdown-content3">
    <center>
    <a class="activeee" href="editaradmin.php?id_curso=<?php echo $rows_cursos['cod_adm']; ?>">Meu Perfil</a><br>
        <a href="solucoes.php" class="activeee">Sair???</a>
    </center>
 </div>
 <?php } ?>
  <a class="align" href="vermensagemadm.php">Mensagens</a>
  <a class="align" onclick="myFunction()" href="#">Mercadorias ???<i class="arrow down"></i></a>
  <div id="myDropdown" class="dropdown-content">
    <center>
      <a href="admin.php" class="activeee">Edi????o???</a><br>
    <a href="soprodutosadm.php" class="activee">Cadastrar Produtos</a><br>
        <a href="soservicosadm.php" class="activeee">Cadastrar Servi??os???</a><br>
                <a href="apagarmercadorias.php" class="activeee">Deletar???</a>
    </center>
 </div>
  <a class="active" href="cadastraradm.php">Cadastrar Administradores</a>
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
<br><br>
<font color="white">
<div class="barra2"><br><br><br>
<center>
<img src="cadastreadm.png" width="28%" height="10%">


<br>
        </center>
 <form method="POST" action="proc_cad_adm.php">
 <div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="nome" class="col-form-labell">Nome de Usu??rio:</label>
  </div>
  <div class="col-auto">
    <input type="text" name="nome" class="form-control">
  </div>
  <div class="col-auto">
  </div>
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
<?php 
       if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
}

       if(isset($_SESSION['msg17'])){
        echo $_SESSION['msg17'];
        unset($_SESSION['msg17']);
}
    ?>

<input type="submit" name="envia" value="Cadastrar Administrador" class="btn btn-primary">


<a href="deleteadm.php?cod_adm=<?php echo $cod_adm; ?>">
<button class="btn btn-secondary" name="deletar">
  Remover Administradores
</button>
</a>
</font>
<br>
</center>




 <br>
 <br>
