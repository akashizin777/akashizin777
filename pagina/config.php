<?php
$dbhost = 'localhost';
$dbUsername = 'root';
$dbPassword = '1234';
$dbName= 'formulario';

$conexao = new mysqli($dbhost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno)
{
    echo "erro";
}
else
{
    echo "conexao efetuada com sucesso";
}
?>