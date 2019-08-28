<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$db= "Sistemas";


$conexao = mysqli_connect($servidor, $usuario, $senha, $db) or die ('Não foi Possível Conectar');
?>