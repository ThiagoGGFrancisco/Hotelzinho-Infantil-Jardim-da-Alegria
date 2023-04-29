
<?php


$name = $_POST['nome_cad'];
$email = $_POST['email_cad'];
$passwd  = $_POST['senha_cad'];
 
$conexao = mysqli_connect("127.0.0.1:3306","u849808817_escola","Escola10","u849808817_escola") or print (mysqli_error());

$query = "INSERT INTO cadastro (nome,email,senha) VALUES ('$name','$email', '$passwd')";

if (mysqli_query($conexao, $query)) {  
    header("Location: login.html?msg=OK");
} else {
    header("Location: login.html?msg=ERRO");
}

?>
