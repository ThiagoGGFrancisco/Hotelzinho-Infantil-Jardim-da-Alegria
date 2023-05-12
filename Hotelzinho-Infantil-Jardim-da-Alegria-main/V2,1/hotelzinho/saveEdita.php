<?php
   
    include_once('conexao.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $adm = $_POST['adm'];
        
        
        $sqlInsert = "UPDATE cadastro
        SET nome='$nome',email='$email',telefone='$telefone',adm='$adm'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: lista.php');

?>