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
 
        <br>

    <ul id="menu">
        <li class="botao"> <a href=""><b> lista </b> </a> </li>
        <li class="botao"> <a href="#"><b> Atividade </b> </a> </li>
        <li class="botao"> <a href=""><b> Turmas </b> </a></li> <br>
        <li class="botao"> <a href="#"><b> Nossas Redes </b> </a></li>
        <li class="botao"> <a href="https://calendar.google.com/calendar/u/1/r?pli=1"target="_blank" ><b> Calendário </b></a> </li>
        <li class="botao"> <a href="https://www.google.com/maps/place/Av.+Santo+Irineu,+459+-+Jardim+das+Oliveiras+(Nova+Veneza),+Sumar%C3%A9+-+SP,+13180-170/@-22.8350775,-47.1626773,17z/data=!3m1!4b1!4m6!3m5!1s0x94c8bf397ff7e6b7:0x4b00bff181f386ff!8m2!3d-22.8350775!4d-47.1604886!16s%2Fg%2F11gc9h0ch6" target="_blank" style="color: #ea272a; text-decoration: none;"><b> Endereço </b> </a></li>
    </ul>

</body>
    
     
 

            <div class="content">                                      

     <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h4 class="text-center text-light">Cadastro Geral.</h4>
                        </div>
                        <div class="card-body">
                            <form action="insert.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Nome</label>
                                            <input type="text" class="form-control" id="username" name="user_name" minlength="10"" maxlength="50" placeholder="Enter  Name"required="required" autocomplete="off"pattern="[a-zA-Z\s]+$" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="useremail" name="user_email" maxlength="50" placeholder="Enter Email" required="required"autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="usercontact" class="form-label">Telefone</label>
                                            <input type="tel"required="required"minlength="10" maxlength="12" class="form-control" id="usercontact" name="user_contact" placeholder="Enter telefone" autocomplete="off "pattern="[0-9]{2}[0-9]{5,6}[0-9]{4,5}$" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">      
                                            <label for="usercontact" class="form-label">Níveis de acesso</label>
                                            <input type="number"   min="0" max="2"class="form-control" maxlength="1" id="usercontact" name="user_adm" placeholder="Níveis 0, 1 e 2. " autocomplete="off"required="required" pattern="[0-9]+$" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Senha</label>
                                            <input type="password" class="form-control"  minlength="6"maxlength="10"id="userpassword" name="user_password" placeholder="senha" required="required" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Confirma senha</label>
                                            <input type="password" class="form-control"  minlength="6"maxlength="10"id="userpassword" name="confirm_user_password" placeholder="confirma senha"required="required" autocomplete="off">
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
            <h1>Lista Cadastro.</h1>
            
        </header>
        <?php
       
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
        <tbody>
        
        <?php
        include('conexao.php');
        $sqlSelect = "SELECT * FROM cadastro  ORDER BY id DESC";
        $result = mysqli_query($conexao,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['nome']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['data']; ?></td>
                <td><?php echo $data['adm']; ?></td>
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
    
    
    
    
</body>
</html>
        
</script>
</html>