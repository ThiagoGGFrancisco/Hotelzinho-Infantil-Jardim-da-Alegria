<?php

include('protect.php');

?>

    



    
<!DOCTYPE html>
<html lang="pt-br"></html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <ul id="menusuperior">
        Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>.
            <li class="vermelho"><a href=""> Inicio </a> </li>
            <li><a href="#"> Sobre </a> </li>
            <li><a href="https://api.whatsapp.com/send?phone=5519987075090&app" target="_blank"> Contato </a>  </li>
            <li> <a href="sair.php">Sair</a>  </li>
        </ul>

    <br>
   
    <br>
    <ul id="menu">
        <li class="botao"> <a href="#"><b> Rematricula </b> </a> </li>
        <li class="botao"> <a href="#"><b> Atividade </b> </a> </li>
        <li class="botao"> <a href="#"><b> Turmas </b> </a></li> <br>
        <li class="botao"> <a href="https://www.facebook.com/Hotelzinho-Infantil-Jardim-da-Alegria-1785110238450229/" target="_blank"><b> Nossas Redes </b> </a></li>
        <li class="botao"> <a href="#"><b> Calendário </b></a> </li>
        <li class="botao"> <a href="https://www.google.com/maps/place/Av.+Santo+Irineu,+459+-+Jardim+das+Oliveiras+(Nova+Veneza),+Sumar%C3%A9+-+SP,+13180-170/@-22.8350775,-47.1626773,17z/data=!3m1!4b1!4m6!3m5!1s0x94c8bf397ff7e6b7:0x4b00bff181f386ff!8m2!3d-22.8350775!4d-47.1604886!16s%2Fg%2F11gc9h0ch6" target="_blank" style="color: #ea272a; text-decoration: none;"> Endereço </b> </a></li>
    
        
    </ul>

<body>
<div class="container" >
<div class="content"> 
        <h1>Cadastrar Atividade</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="proc_cad_img.php" enctype="multipart/form-data">
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Digitar o nome"><br><br>
            
            <label>Imagem</label>
            <input type="file" name="imagem"><br><br>
            
            <input name="SendCadImg" type="submit" value="Cadastrar">
        </form>
</div>
</div>

</body>
    
</script>
</html>


    
    
</body>
</html>