<?php

if(isset($_POST['submit']))
{

include_once('conexao.php');

$turma = $_POST['turma'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$crianca = $_POST['crianca'];
$van = $_POST['van'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$data_nasc = $_POST['data'];
$convernio = $_POST['convenio'];
$result = mysqli_query($conexao, "INSERT INTO inscricao ( turma,nome,email,crianca,van,telefone,endereco,data_nascimento,convernio) 
VALUES ( '$turma','$nome','$email','$crianca','$van','$telefone','$endereco ','$data_nasc','$convernio')");

        
header('Location: inicio.html');
}
?>


<!DOCTYPE html>
<html lang="pt-br"></html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="ico/logo.ico.ico">
<title> Hotelzinho Infantil Jardim da Alegria </title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="../hotelzinho/css/style_login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
@font-face {
font-family: nicesugar;
src: url(Nice\ Sugar.ttf)
}

</style>
</head>
   <a class="navbar-brand" href="#">
          <img src="../hotelzinho/imagens/ico.png" width="100" height="100" class="d-inline-block align-top" alt="">
     Hotelzinho Infantil
     
        </a>
     
<body>
<h1><ul id="menusuperior">
<li class="vermelho"><a href="inicio.html"> Inicio </a> </li>
<li><a href="sobre.html"> Sobre </a> </li>
<li><a href="#"> Contato </a>  </li>
<li> <a href="login.html"> Login </a> </li>
</ul></h1>
   
                             
<div class="content">   
        
<div class="alert alert-primary" role="alert">
<div class="inputBox">

<div class="box">
    <center>
            

<form action="" method="POST">
<fieldset>
    
            
<legend><b>Cadastrar Alunos</b></legend>

<select name="Turma" type="text" name="turma" id="turma" class="inputUser" required >
                <option value="">Selecione</option>
                <option value="1"> bebês (zero a 1 ano e 6 meses)</option>
                <option value="2"> crianças pequenas (4 anos a 5 anos e 11 meses)</option>
                <option value="2">crianças pequenas (4 anos a 5 anos e 11 meses)</option>
                
            </select><br />

<label for="turma" class="labelInput">Turma:</label>
</div>


<div class="alert alert-primary" role="alert">
<div class="inputBox">
<input type="text" name="nome" id="nome" class="inputUser" required placeholder="Nome do responsável."/>
<label for="nome" class="labelInput">Nome do responsável:</label>
</div>

                
<div class="inputBox">
<input type="email" name="email" id="email" class="inputUser" required placeholder="contato@htmlecsspro.com"/>
<label for="email" class="labelInput">E-mail:</label>
</div>
                

<div class="inputBox">
<input type="text" name="crianca" id="crianca" class="inputUser" required placeholder="Nome da criança."/>
<label for="crianca" class="labelInput">Nome do aluno:</label>
</div>

<div class="inputBox">
<input type="text" name="van" id="van" class="inputUser" required placeholder="Forma ao qual vai na escola."/>
<label for="van" class="labelInput">Van escolar:</label>
</div>

<div class="inputBox">
<input type="tel" name="telefone" id="telefone" class="inputUser" required placeholder="(00)00000-0000"/>
<label for="telefone" class="labelInput">Telefone</label>
</div>
<div class="inputBox">
<input type="endereco" name="endereco" id="endereco" class="inputUser" required placeholder="Endereço do responável"/>
<label for="endereco" class="labelInput">Endereço:</label>
</div>

<div class="inputBox">
<input type="date" name="data" id="data" class="inputUser" required placeholder="Data de nascimento da criança"/>
<label for="data" class="labelInput">Nascimento da criança:</label>
</div>

<div class="inputBox">
<input type="text" name="convenio" id="convenio" class="inputUser" required placeholder=" Forma convenio."/>
<label for="convenio" class="labelInput">Convenio:</label>

</div>
<br>

<input type="submit" name="submit" id="submit">
</fieldset>
</form>
</div>
</
</div>
</div>
</body>
</html>