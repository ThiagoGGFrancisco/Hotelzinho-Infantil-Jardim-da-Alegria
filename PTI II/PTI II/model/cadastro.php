
<?php

include_once('conexao.php');
$name = $_POST['nome_cad'];
$email = $_POST['email_cad'];
$passwd  = md5($_POST['senha_cad']);
 
<//$conexao = mysqli_connect("localhost","root","","aluno") or print (mysqli_error());

$query = "INSERT INTO cadastro (nome,email,senha) VALUES ('$name','$email', '$passwd')";

if (mysqli_query($conexao, $query)) {  
    header("Location: login.html?msg=OK");
} else {
    header("Location: login.html?msg=ERRO");
}

?>

