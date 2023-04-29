

<html lang="pt-br"></html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="../PTI II/css/style_login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
@font-face {
font-family: nicesugar;
src: url(Nice\ Sugar.ttf)
}
</style>
<ul id="menusuperior">
<li class="vermelho"><a href="inicio.html"> Inicio </a> </li>
<li><a href="sobre.html"> Sobre </a> </li>
<li><a href="#"> Contato </a>  </li>
<li> <a href="login.html"> Login </a> </li>
</ul>

<a class="links" id="paralogin"></a>
                             
<div class="content">                                      
<br>

<div id="login">    
<form action="recupera.php" method="POST">
<img src="../PTI II/imagens/ico.png"  width="100" height="100"/>
<h1>Recupera senha</h1> 
<p> 
<form action="recupera.php" method="post"> 
  <p>Email de Usuário: <input type="email" id="inputNome" name="nome" size="20" maxlength="16" required='true'/></p> 
  <p>Senha: <input type="password" name="senha" id="inputSenha" size="20" maxlength="16" required='true'/></p> 
  <p>Confirmar senha: <input type="password" name="senha2" id="inputSenha2" size="20" maxlength="16" required='true'/></p> 
  <p><input type="submit" id="inputSubmit"/></p> 
  <p><input type="submit" value="Alterar" name="acao"></p>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
  $(function(){
	$("#inputSubmit").click(function(){
      var senha = $("#inputSenha").val();
      var senha2 = $("#inputSenha2").val();
      if(senha != senha2){
        event.preventDefault();
      	alert("As senhas não são iguais!");
      }
    });
  });
</script>

   
</p>
</form>
</div>                
</div>
</div> 
       
<title> Login de Usuário </title>
</body>
</html>