<?php
if (isset($_GET['id'])) {
include("conexao.php");
$id = $_GET['id'];
$sql = "DELETE FROM professor WHERE id='$id'";
if(mysqli_query($conexao,$sql)){
    session_start();
    $_SESSION["delete"] = "Book Deleted Successfully!";
    header("Location:../hotelzinho/sistema.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Book does not exist";
}
?>