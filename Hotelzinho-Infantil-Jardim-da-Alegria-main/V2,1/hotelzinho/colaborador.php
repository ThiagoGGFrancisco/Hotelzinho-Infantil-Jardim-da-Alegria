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
            <li><a href=""> Contato </a>  </li>
            <li> <a href="sair.php">Sair</a>  </li>
            
            
             </ul></h2>

      <h1>Bem vindo <u> <?php echo $_SESSION['nome'] ?></u></h1>
 

       

    <br>
        <br>





    <ul id="menu">
        <li class="botao"> <a href=""><b> lista </b> </a> </li>
        <li class="botao"> <a href="#"><b> Atividade </b> </a> </li>
        <li class="botao"> <a href=""><b> Turmas </b> </a></li> <br>
        <li class="botao"> <a href="#"><b> Nossas Redes </b> </a></li>
        <li class="botao"> <a href="#"><b> Calendário </b></a> </li>
        <li class="botao"> <a href="#"><b> Endereço </b> </a></li>
    </ul>

</body>
    
     
    <?php

session_start();
?>



    
    
            <div class="content">                                      

     <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h4 class="text-center text-light">Cadastro funcionario.</h4>
                        </div>
                        <div class="card-body">
                            <form action="insert.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Nome</label>
                                            <input type="text" class="form-control" id="username" name="user_name" placeholder="Enter  Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="useremail" name="user_email" placeholder="Enter Email" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="usercontact" class="form-label">Telefone</label>
                                            <input type="text" class="form-control" id="usercontact" name="user_contact" placeholder="Enter telefone" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userprofile" class="form-label">Documento</label>
                                            <input type="file" class="form-control" id="userprofile" name="user_profile" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Senha</label>
                                            <input type="password" class="form-control" id="userpassword" name="user_password" placeholder="senha" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Confirma senha</label>
                                            <input type="password" class="form-control" id="userpassword" name="confirm_user_password" placeholder="confirma senha" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <button type="submit" name="submit_btn" class="btn bg-dark text-light submit_button"><b>Submit</b></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
            
        <style>
        table  td, table th{
        vertical-align:middle;
        text-align:right;
        padding:20px!important;
        }
    </style>
</head>


       
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Lista funcionario.</h1>
            
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
                <th>Seleção</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
        include('conexao.php');
        $sqlSelect = "SELECT * FROM professor";
        $result = mysqli_query($conexao,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['nome']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['data']; ?></td>
                <td>
                    
                    <a href="model/view.php?id=<?php echo $data['id']; ?>" class="btn btn-info">consulta</a>
                    <a href="model/edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edita</a>
                    <a href="model/delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Deleta</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
    
    
     <div class="content">

    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Adiciona</h1>
            
        </header>   
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="title" placeholder="Nome:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="author" placeholder="Email:">
            </div>
            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">nome:</option>
                    <option value="email">Email</option>
                    <option value="Crime">Telefone</option>
                    <option value="Fantasy">Data</option>
                    <option value="Horror">Horror</option>
                </select>
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Messagem:"></textarea>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Aluno" class="btn btn-primary">
            </div>
        </form>
        
         </div> 
    </div>
    
</body>
</html>
        
</script>
</html>