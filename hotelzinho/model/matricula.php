<?php

if(isset($_POST['submit']))
{

include_once('conexao.php');

$nome = $_POST['nome'];
$nasc = $_POST['nascimento'];
$end = $_POST['endereco'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro= $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$tel = $_POST['telefone'];
$resp = $_POST['responsave'];
$emali = $_POST['email'];
$conv = $_POST['convenio'];

$result = mysqli_query($conexao, "INSERT INTO matricula_aluno ( nome,nasc,endereco,cep,rua,bairro,cidade,uf,tel,res,conv) 
VALUES ( '$nome','$nasc','$end','$cep','$rua','$bairro','$cidade ','$uf','$tel','$res ','$email','$cov')");

        
header('Location: inicio.html');
}
?>