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
      

    <ul id="menu">
        
        <li class="botao"> <a href="#"><b> Atividade </b> </a> </li>
        <li class="botao"> <a href=""><b> Turmas </b> </a></li> 
        <li class="botao"> <a href="#"><b> Nossas Redes </b> </a></li><br>
        <li class="botao"> <a href="#"><b> Calendário </b></a> </li>
        <li class="botao"> <a href="lista.php"><b> Lista </b> </a> </li>
        <li class="botao"> <a href="lista.php"><b> Cadastro </b> </a></li>
    </ul>

</body>
    
     
    
           


       
    
</body>
</html>
        
</script>
</html>