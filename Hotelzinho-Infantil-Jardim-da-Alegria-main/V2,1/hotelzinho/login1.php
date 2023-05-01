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
         $adm = $conexao->real_escape_string  ($_POST['adm']);

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
            $_SESSION['adm'] = $usuario['adm'];
            


			if($_SESSION['adm'] == "1"){
				header("Location: colaborador.php");
			}elseif($_SESSION['adm'] == "2"){
				header("Location: sistema.php");
			}else{
				header("Location: painel.php");
			}


        } else {
            echo "Falha ao logar! E-mail ou senha incorretos" ;
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: login.html");

        }

    }

}
?>


