<?php
include('conexao.php');
if (isset($_POST["create"])) {
    $title = mysqli_real_escape_string($conexao, $_POST["title"]);
    $type = mysqli_real_escape_string($conexao, $_POST["type"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
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
    $title = mysqli_real_escape_string($conexao, $_POST["title"]);
    $type = mysqli_real_escape_string($conexao, $_POST["type"]);
    $author = mysqli_real_escape_string($conexao, $_POST["author"]);
    $description = mysqli_real_escape_string($conexao, $_POST["description"]);
    $id = mysqli_real_escape_string($conexao, $_POST["id"]);
    $sqlUpdate = "UPDATE books SET title = '$title', type = '$type', author = '$author', description = '$description' WHERE id='$id'";
    if(mysqli_query($conexao,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Book Updated Successfully!";
        header("Location:../hotelzinho/sistema.php");
    }else{
        die("Something went wrong");
    }
}
?>