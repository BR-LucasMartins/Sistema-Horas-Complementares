<?php

include 'conexao.php';

if(isset($_GET['alterar'])){

    $id = $_POST['id_certificado'];
    $descricao = $_POST['descricao'];
    $link = $_POST['certificado'];
    $horas = $_POST['horas'];



    $query = "UPDATE horas_complementares SET Descricao = '$descricao', Link_certificado = '$link', horas = '$horas'
    WHERE Id_certificado = '$id' ";

    mysqli_query($conexao, $query);


    header('Location: index.php?sucesso');
    exit();
}


// ------------------------------------------------------------------------------------------------------ //

// Exckuir 

if(isset($_GET['excluir'])){

    $query = "SELECT * FROM horas_complementares";
    $resultado = mysqli_query($conexao, $query);

    while($linha = mysqli_fetch_array($resultado)){

        if($linha['Id_certificado'] == $_GET['excluir']){

            $id_certificado = $linha['Id_certificado'];

        }
    }

    $query = "DELETE FROM horas_complementares WHERE Id_certificado = '$id_certificado' ";
    mysqli_query($conexao, $query);

    header('Location: index.php?sucesso2');

    exit();
}


?>