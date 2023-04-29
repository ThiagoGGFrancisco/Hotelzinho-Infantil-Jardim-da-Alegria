<?php
include('conexao.php');


if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string  ($_POST['senha']);

        $sql_code = "SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="pt-br"></html>
<head>
<meta charset="UTF-8">     
<link rel="shortcut icon" href="ico/logo.ico.ico">
<title> Hotelzinho Infantil Jardim da Alegria </title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style_login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
 <li><a href="contato.html"> Contato </a>  </li>
<li> <a href="login.html"> Login </a> </li>
</ul>
 
<div class="container" >
<a class="links" id="paracadastro"></a>
<a class="links" id="paralogin"></a>
                             
<div class="content">                                      
<div id="cadastro">
<form method="post" action="login1.php"> 
<img src="../hotelzinho/imagens/ico.png"  width="100" height="100"/>  
<h1>Login ADM</h1> 
      
<p> 
<label for="email_cad">Seu e-mail</label>
<input id="email_cad" name="email" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
</p>
<p> 
<label for="senha_cad">Sua senha</label>
<input id="senha_cad" name="senha" required="required" type="password" placeholder="1234"/>
</p>
      
<p> 
<input type="submit" value="Logar"/> 
</p>
      
</form>
</div>
<div id="login">    
<form action="" method="POST">
<img src="../hotelzinho/imagens/ico.png"  width="100" height="100"/>
<h1>Login</h1> 
<p> 
<label for="email_login">Seu e-mail:</label>
<input id="email_login" name="email" required="required" type="text" placeholder="contato@htmlecsspro.com"/>
</p>  
<p> 
<label for="senha_login">Sua senha:</label>
<input id="senha_login" name="senha" required="required" type="password" placeholder="1234" /> 
</p>
<p> 
<input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
<label for="manterlogado">Entrar</label>
</p>
<p> 
<input class="inputSubmit" type="submit" name="submit" value="Enviar">                       
</p>

    <p class="link">
        Recupera senha?
        <a href="">Esqueci Senha</a>     
    </p> <br>  <br><br>
<p class="link">
Login ADM.
<a href="#paracadastro">Logar ADM</a>
</p>
</form>
</div>                
</div>
</div> 
       
<title> Login de Usuário </title>
</body>
</html>