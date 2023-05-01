<?php


$email = $_POST['email'];
$senha = $_POST['senha_login'];
$passwd  = md5($_POST['senha']);
 

 public function alterar_senha( $email, $senha, $confirma){
 include_once('conexao.php');
   
    
  	$pegacod_trecho = mysqli_query($conexao, "SELECT * FROM cadastro WHERE email= '$email'");

         if(mysqli_num_rows($pegacod_trecho) == 0){

	    	echo "<script language='javascript' type='text/javascript'>alert('Este Código NÃO esta cadastrado em nossos registros');window.location.href='../View/senha.html'</script>";

	      }else{		

		
          $result_livro = "UPDATE cadastro_geral SET  senha='$senha', confirma='$confirma' WHERE email = '$email'";

         mysqli_query($conn,$result_livro);

             if(mysqli_affected_rows($conn) != 0){
            echo "

                 <script language='javascript' type='text/javascript'>alert('Cadastro alterado com sucesso!');window.location.href='../View/login.html'</script>";
                 
            
             }else{
                  echo " 
                   <script language='javascript' type='text/javascript'>alert('Nao foi possivel alterar este trecho');window.location.href='../View/senha.html'</script>";
                     
                  
                     
              }


        }


        
  
    }

?>