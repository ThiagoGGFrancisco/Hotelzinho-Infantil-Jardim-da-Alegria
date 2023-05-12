<?php
session_start();
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-br"></html>
    <head>
    <meta charset="utf-8">
        <link rel="shortcut icon" href="ico/logo.ico.ico">
        <title> Hotelzinho Infantil Jardim da Alegria </title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style_login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style type="text/css">
              @font-face {
        font-family: nicesugar;
        src: url(Nice\ Sugar.ttf)
    }
  
        </style>
    </head>
    
    
     <body>
       <h2> <ul id="menusuperior">
            <li class="vermelho"><a href=""> Início </a> </li>
            <li><a href="sobre.html"> Sobre </a> </li>
            <li><a href="sistema.php"> Volta </a>  </li>
            <li> <a href="sair.php">Sair</a>  </li>
            </ul></h2>

      <h1>Bem vindo <u> <?php echo $_SESSION['nome'] ?></u></h1>
 
        
  

<?php
 
 include_once("conexao.php");

 $id = $_GET['id'];
?>
<div class="content"> 
    <div class="col-12">
    <div class="card">
    <div class="card-header bg-info">
    <h4 class="text-center text-light">Consulta.</h4>
</div>
 
 <table border="1" style='width:100%' >
 <tr>
 <th>Id</th
 <th>Nome</th>
 <th>Nome</th>
 <th>Email</th>
 <th>Telefone</th>
 <th>Nível</th>
 </tr>

 <?php
 $sql = "SELECT * FROM cadastro WHERE id = '$id'";
 $resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");
 
 while ($registro = mysqli_fetch_array($resultado))
 {
    $id = $registro['id'];
   $nome = $registro['nome'];
   $email = $registro['email'];
   $telefone = $registro['telefone'];
   $adm = $registro['adm'];
   echo "<tr>";
   echo "<td>".$id."</td>";
   echo "<td>".$nome."</td>";
   echo "<td>".$email."</td>";
   echo "<td>".$telefone."</td>";
   echo "<td>".$adm."</td>";
   echo "</tr>";
 }
 mysqli_close($conexao);
 echo "</table>";
?></tbody>
        </table>
    </div>

   <?php
    include_once('conexao.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM cadastro WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $id = $user_data['id'];
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $adm = $user_data['adm'];
              
            }
        }
        else
        {
            header('Location:');
        }
    }
    else
    {
        header('Location: ');
    }
?>

<br>
     <div class="content"> 
        <form action="saveEdita.php" method="POST">
            <fieldset>
    <div class="col-12">
    <div class="card">
    <div class="card-header bg-warning">
    <h4 class="text-center text-light">Editar Cliente. </h4>

          </div>      
                <div class="inputBox">
                    <h3 class="text-center text-light"><label for="nome" class="labelInput">ID <?php echo $id;?></label></h3>
                </div>
               
                <div class="inputBox">
                    
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> Nome>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                
                <div class="inputBox">
                    <input enail="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> E-mail>
                    <label for="email" class="labelInput">Email</label>
                </div>
           
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?> Telefone>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="adm" id="adm" class="inputUser" value=<?php echo $adm;?> Nível>
                    <label for="cidade" class="labelInput">Nível</label>
                </div>
                
				<input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
    </div>
<br>


<div class="content"> 
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1 >Lista Cadastro.</h1>
            
        </header>
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        
        ?>
        
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Data</th>
                <th>ADM</th>
                <th>Seleção</th>
                
            </tr>
        </thead>
      
        
        
        <?php
        include('conexao.php');
        $sqlSelect = "SELECT * FROM cadastro ORDER BY id DESC";
        $result = mysqli_query($conexao,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $data['id']; ?>
                 <a href="model/delete.php?id=<?php echo $data['id']; ?>" class="botao btn-danger">Deleta</a></td>
                <td><?php echo $data['nome']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['data']; ?></td>
                <td><?php echo $data['adm']; ?>
                
                    <a href="?id=<?php echo $data['id']; ?>" class="botao btn-info">consulta</a></td>
               <td><a href="?id=<?php echo $data['id']; ?>" class="botao btn-warning">Edita</a></td>
                <>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
     </div>
    
  </script>  
</body>
</html>