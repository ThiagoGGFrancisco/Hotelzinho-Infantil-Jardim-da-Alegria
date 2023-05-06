<?php
include('conexao.php');
if (isset($_POST["create"])) {
    $title = mysqli_real_escape_string($conexao, $_POST["title"]);
    $type = mysqli_real_escape_string($conexao, $_POST["type"]);
   
    $description = mysqli_real_escape_string($conexao, $_POST["description"]);
    $sqlInsert = "INSERT INTO books(title , author , type , description) VALUES ('$title','$author','$type', '$description')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Book Added Successfully!";
        header("Location:../hotelzinho/sistema.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $title = mysqli_real_escape_string($conexao, $_POST["id"]);
    $type = mysqli_real_escape_string($conexao, $_POST["author"]);
   
    $description = mysqli_real_escape_string($conexao, $_POST["description"]);
    $id = mysqli_real_escape_string($conexao, $_POST["id"]);
    $sqlUpdate = "UPDATE cadastro SET id = '$title', type = '$type', email = '$author', description = '$description' WHERE id='$id'";
    if(mysqli_query($conexao,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Book Updated Successfully!";
        header("Location:../hotelzinho/sistema.php");
    }else{
        die("Something went wrong");
    }
}
?>
include_once('conexao.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
     
        $sqlInsert = "UPDATE cadastro 
        SET nome='$nome',senha='$senha',email='$email',telefone='$telefone'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>