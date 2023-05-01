
<?php

$dbHost = '127.0.0.1:3306';
$dbUsername = 'u849808817_escola';
$dbPassword = 'Escola10';
$dbName = 'u849808817_escola';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
  if($conexao->connect_errno)
     {
        echo "Erro";
     }
     else
     {
       // echo "Conexão efetuada com sucesso";
     }

     
    ?>