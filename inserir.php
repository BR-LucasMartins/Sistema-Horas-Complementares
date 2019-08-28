<?php

include 'conexao.php';


$descricao = $_POST['descricao'];
$certificado = $_POST['certificado'];
$horas = $_POST['horas'];


$query = "INSERT INTO horas_complementares (Descricao, Link_certificado, horas) 
                VALUES('$descricao', '$certificado', '$horas');";

        $resultado = mysqli_query($conexao,$query);

        header('Location: index.php?sucesso3');
        exit();




?>