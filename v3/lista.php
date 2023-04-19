<?php
// session_start inicia a sessão
session_start();
?>
// session_start inicia a sessão


<?php
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
    <meta charset="utf-8">
        <link rel="shortcut icon" href="ico/logo.ico.ico">
        <title> Hotelzinho Infantil Jardim da Alegria </title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <li><a href="#"> Contato </a>  </li>
            <li> <a href="sair.php">Sair</a>  </li>
        </ul>

    <br>


<div class="container my-4">
        
            <h1>Lista matricula.</h1>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
        include('conexao.php');
        $sqlSelect = "SELECT * FROM inscricao";
        $result = mysqli_query($conexao,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['nome']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['telefone']; ?></td>
                <td><?php echo $data['convernio']; ?></td>
                
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>