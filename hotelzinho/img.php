<?php

session_start(); // Iniciar a sessão

// Incluir a conexão com o banco de dados
include_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Celke - Upload multiplo e salvar no BD</title>
</head>

<body>
    <h1>Upload de Imagem</h1>

    <?php
    // Receber os dados do formulário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    // Acessa o IF quando o usuário clicar no botão
    if (!empty($dados['SendCadUser'])) {
        //var_dump($dados);

        // QUERY cadastrar usuário no banco de dados
        $query_usuario = "INSERT INTO imagem (nome, email) VALUES (:nome, :email)";

        // Preparar a QUERY
        $cad_usuario = $conn->prepare($query_usuario);

        // Substituir os links pelos valores do formulário
        $cad_usuario->bindParam(':nome', $dados['nome']);
        $cad_usuario->bindParam(':email', $dados['email']);

        // Executar a QUERY
        $cad_usuario->execute();

        // Acessa o IF quando cadastrar o usuário no BD
        if ($cad_usuario->rowCount()) {

            // Receber o id do registro cadastrado
            $usuario_id = $conn->lastInsertId();

            // Endereço do diretório
            $diretorio = "imagens/$usuario_id/";

            // Criar o diretório
            mkdir($diretorio, 0755);

            // Receber os arquivos do formulário
            $arquivo = $_FILES['imagens'];
            //var_dump($arquivo);

            // Ler o array de arquivos
            for ($cont = 0; $cont < count($arquivo['name']); $cont++) {

                // Receber nome da imagem
                $nome_arquivo = $arquivo['name'][$cont];

                // Criar o endereço de destino das imagens
                $destino = $diretorio . $arquivo['name'][$cont];

                // Acessa o IF quando realizar o upload corretamente
                if (move_uploaded_file($arquivo['tmp_name'][$cont], $destino)) {
                    $query_imagem = "INSERT INTO imagem (imagem, usuario_id) VALUES (:nome_imagem, :usuario_id)";
                    $cad_imagem = $conn->prepare($query_imagem);
                    $cad_imagem->bindParam(':nome_imagem', $nome_arquivo);
                    $cad_imagem->bindParam(':usuario_id', $usuario_id);

                    if ($cad_imagem->execute()) {
                        $_SESSION['msg'] = "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";
                        header("Location: painel.php");
                    } else {
                        $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Imagem não cadastrada com sucesso!</p>";
                        header("Location: painel.php"); header("Location: colaborador.php");
                    }
                } else {
                    $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Imagem não cadastrada com sucesso!</p>";
                    header("Location: painel.php");
                }
            }
        } else {
            $_SESSION['msg'] = "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>";
            header("Location: painel.php");
        }
    }

    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>