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

        
header('Location: login.php');
}


    session_start();
    include_once('conexao.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM cadastro WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM cadastro ORDER BY id DESC";
    }
    $result = $conexao->query($sql);

?>


<!DOCTYPE html>
<html lang="pt-br"></html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="ico/logo.ico.ico">
<title> Hotelzinho Infantil Jardim da Alegria </title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="../PTI II/css/style_login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
@font-face {
font-family: nicesugar;
src: url(Nice\ Sugar.ttf)
}

</style>
</head>

<body>
<ul id="menusuperior">
<li class="vermelho"><a href="inicio.html"> Inicio </a> </li>
<li><a href="sobre.html"> Sobre </a> </li>
<li><a href="sistema.php"> Volta </a>  </li>
<li> <a href="sair.php">Sair</a>  </li>
</ul>
<br><br>

<div class="content">   
        
<br>
<div class="alert alert-primary" role="alert">
<div class="inputBox">

<div class="box">
<img src="../PTI II/imagens/ico.png"  width="100" height="100"/>
<form action="rematricula.php" method="POST">
<fieldset>
            
<legend><b>Rematrícula</b></legend>
<input type="text" name="turma" id="turma" class="inputUser" required>
<label for="turma" class="labelInput">Turma:</label>
</div>
<br>

<div class="alert alert-primary" role="alert">
<div class="inputBox">
<input type="text" name="nome" id="nome" class="inputUser" required>
<label for="nome" class="labelInput">Nome do responsável:</label>
</div>

                
<div class="inputBox">
<input type="email" name="email" id="email" class="inputUser" required>
<label for="email" class="labelInput">E-mail:</label>
</div>
                

<div class="inputBox">
<input type="text" name="crianca" id="crianca" class="inputUser" required>
<label for="crianca" class="labelInput">Nome do aluno:</label>
</div>

<div class="inputBox">
<input type="text" name="van" id="van" class="inputUser" required>
<label for="van" class="labelInput">Van escolar:</label>
</div>

<div class="inputBox">
<input type="tel" name="telefone" id="telefone" class="inputUser" required>
<label for="telefone" class="labelInput">Telefone</label>
</div>
<div class="inputBox">
<input type="endereco" name="endereco" id="endereco" class="inputUser" required>
<label for="endereco" class="labelInput">Endereço:</label>
</div>

<div class="inputBox">
<input type="date" name="data" id="data" class="inputUser" required>
<label for="data" class="labelInput">Nascimento da criança:</label>
</div>

<div class="inputBox">
<input type="text" name="convenio" id="convenio" class="inputUser" required>
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



