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
        <li class="botao"> <a href=""><b> Atividade </b> </a> </li>
        <li class="botao"> <a href=""><b> Turmas </b> </a></li> <br>
        <li class="botao"> <a href="#"><b> Nossas Redes </b> </a></li>
        <li class="botao"> <a href="https://calendar.google.com/calendar/u/1/r?pli=1"target="_blank" ><b> Calendário </b></a> </li>
        <li class="botao"> <a href="#"><b> Endereço </b> </a></li>
    </ul>

</body>
    
     
<div class="container">
        <h1 class="text-center">Formulário  de Arquivos</h1>
       
        <form method="POST" action="arquivo.php" enctype="multipart/form-data">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Nome completo"><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" placeholder="Melhor e-mail"><br><br>

        <label>Imagens</label>
        <input type="file" name="imagens[]" multiple="multiple"><br><br>

        <input type="submit" name="SendCadUser" value="Cadastrar"><br><br>
    </form>
    
</body>
</html>
        
</script>
</html>