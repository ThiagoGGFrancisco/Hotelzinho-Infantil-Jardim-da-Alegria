

<?php
    include_once('conexao.php');
    $name = $_POST['nome_cad'];
    $email = $_POST['email_cad'];
    $passwd  = md5($_POST['senha_cad']);
    
    $result_usuario = "INSERT INTO cadastro(nome, email,senha) VALUES ('$nome','$email','$passwd')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
                    <script type="text/javascript">
                        alert("Usuario cadastrado com Sucesso.");
                    </script>
                ";    
            }else{
                echo "
                    <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/aula/cadastro.php'>
                    <script type="text/javascript">
                        alert("O Usuario não foi cadastrado com Sucesso.");
                    </script>
                ";    
            }
?>