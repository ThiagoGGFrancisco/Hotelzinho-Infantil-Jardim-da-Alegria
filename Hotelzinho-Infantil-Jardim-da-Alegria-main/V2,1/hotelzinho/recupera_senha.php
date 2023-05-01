
<!DOCTYPE html>
<html lang="pt-br"></html>
<head>
<meta charset="UTF-8">     
<link rel="shortcut icon" href="ico/logo.ico.ico">
<title> Hotelzinho Infantil Jardim da Alegria </title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="../hotelzinho/css/style_login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
@font-face {
font-family: nicesugar;
src: url(Nice\ Sugar.ttf)
}
</style>
 
</head>
   <a class="navbar-brand" href="#">
          <img src="../hotelzinho/imagens/ico.png" width="100" height="100" class="d-inline-block align-top" alt="">
     Hotelzinho Infantil
     
        </a>
     
<body>
  
<h1><ul id="menusuperior">
<li class="vermelho"><a href="inicio.html"> Inicio </a> </li>
<li><a href="sobre.html"> Sobre </a> </li>
<li><a href="#"> Contato </a>  </li>
<li> <a href="login.php"> Login </a> </li>
</ul></h1>


<div class="container" >
<a class="links" id="paracadastro"></a>

                            
<div class="content">                                      



<div id="login">    
<form action="model/altera.php" method="POST">

<h1>Altera senha</h1> 
<p> 

<label for="email_login">Seu e-mail:</label>
<input id="email_login" name="email" required="required" type="text" placeholder="contato@htmlecsspro.com"/>
</p>  
<p> 
<label for="senha_login">Nova Senha:</label>
<input id="senha_login" name="senha" required="required" type="password" placeholder="1234" /> 
</p>
<p> 
<label for="senha_login">Confimar senha:</label>
<input id="senha" name="senha" required="required" type="password" placeholder="1234" /> 
</p>

<p> 
<input class="inputSubmit" type="submit" name="submit" value="Enviar">                       
</p>
</form>
</div>                
</div>
</div> 
       

</body>
</html>

