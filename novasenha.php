<?php
session_start();
?>

<!doctype html>

<head>
	<meta charset="utf-8">
	<title> TecSeg | Redefinir Senha </title>
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

  margin-left: 340px;
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


	<body bgcolor="#333">
<div class="imagem">
<img src="TECSEGN2.png" height="30%" width="40%">
</div>



 </div>
<br>
<div class="barra2"><br><br><br>
<center>
<br>
<br>

<h3><font color="gray"><b>Crie uma nova senha</b></font></h3>

</center>
 <form>
<br>
 <div class="row g-3 align-items-center">
  <div class="col-auto">
  </div>
  <div class="col-auto">
    <input type="password" id="email" class="form-control" placeholder="Crie uma nova senha.">
  </div>
  <div class="col-auto">
  </div>
</div>
<br>

 <div class="row g-3 align-items-center">
  <div class="col-auto">
  </div>
  <div class="col-auto">
    <input type="password" id="email" class="form-control" placeholder="Repita a nova senha.">
  </div>
  <div class="col-auto">
  </div>
</div>

<center>
<br><br>
  <script>

    function senha(){

      alert('Senha definida com sucesso!')

    }

  </script>

<a href="login.php">
<button type="button" value="Enviar Link" class="btn btn-primary" onclick="senha();">Redefinir Senha</button></a><br><br>




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
