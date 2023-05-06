<?php
if (isset($_GET['id'])) {
include("conexao.php");
$id = $_GET['id'];
$sql = "DELETE FROM cadastro WHERE id='$id'";
if(mysqli_query($conexao,$sql)){
    session_start();
    $_SESSION["delete"] = "OK Deletado com  Sucesso!";
    header("Location:/hotelzinho/lista.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Book does not exist";
}
?>