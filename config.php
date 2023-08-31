<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario';

$conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno)
{
    echo "erro";
}
else
{
    echo "Como sucesso";
}

?>
