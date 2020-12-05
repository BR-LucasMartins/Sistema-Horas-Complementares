<?php 
include 'conexao.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sistemas</title>
        <meta charset="utf-8">

        <!-- Folha de estilo -->
        <link rel="stylesheet" href="css/estilo.css">

        <!-- Bootstrao -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/all.min.css">

        <!-- LocaStyle (fontes) -->
        <link href="http://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
        <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
        <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">

        <!-- data Tables -->
        <link rel="stylesheet" href="css/datatables.min.css">


    </head>
    <body>
        <header>
            <nav class="navbar navbar-dark ">
                <div class="container-fluid">
                <a class="navbar-brand" href="#"> <img id="logo" src="img/logo2.png"> </a>
                
                    <h1 id="titulo" class="mt-3 ml-10"> Sistemas de Informação</h1>
                    
                </div>
            </nav>
        </header>
        <br>
        <hr>

<!-- Conteudo do site -->
<div id="conteudo" class="container">

    <div class="row">
        <div class="col-12">
            <br>
            <ul><li><h3  aligin="center"> Controle de Horas Complementares </h3></ul></li>
            <a href="adiciona_horas.php" class="ls-btn ls-float-right (-xs, -sm)">ADD Horas Complementares</a><br>
        </div>
    </div>

    <!-- Mensagem de dados alterados -->
<?php if(isset($_GET['sucesso'])){ ?>

<div class="row">
<div class="col-3"></div>
<div class="col-6 mt-5">

<div class="alert alert-success alert-dismissible fade show" role="alert">
Dados alterados com sucesso!
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>

</div>
<div class="col-3"></div>
</div>

<?php  }  ?>

<!-- Mensagem de dados Cadastrados -->
<?php if(isset($_GET['sucesso3'])){ ?>

<div class="row">
<div class="col-3"></div>
<div class="col-6 mt-5">

<div class="alert alert-success alert-dismissible fade show" role="alert">
Dados cadastrados com sucesso!
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>

</div>
<div class="col-3"></div>
</div>

<?php  }  ?>


<!-- Mensagem de dados deletados -->
<?php if(isset($_GET['sucesso2'])){ ?>

<div class="row">
<div class="col-3"></div>
<div class="col-6 mt-5">

<div class="alert alert-danger alert-dismissible fade show" role="alert">
Dados excluidos com sucesso!
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>

</div>
<div class="col-3"></div>
</div>

<?php  }  ?>

<div class="container" style="margin-top:40px;">
    <div class="row">
        <div id="scroll">
        <table id="minhaTabela" class=" table table-striped table table-hover container">
            <thead id="thead">
            <tr>
            <th  class="text-center"> Nome Certificado </th>
            <th class="text-center"> Link </th>
            <th class="text-center" width="160px;"> N° de Horas </th>
            <th class="text-center"> Opções </th>
            </tr>
        </thead>
        <tbody id="tbody">
            
        <?php 

        $query = "SELECT * FROM horas_complementares";
        $resultado = mysqli_query($conexao, $query);

        while($linha = mysqli_fetch_array($resultado)){

            $id = $linha['Id_certificado'];
            $descricao = $linha['Descricao'];
            $link = $linha['Link_certificado'];
            $horas = $linha['horas']; ?>

        <tr><td style="color:green;" class="ls-txt-center"  width="350px;"> <?php echo $linha['Descricao'];?></td>
        <td class="ls-txt-center"> <a href="<?php echo $linha['Link_certificado'];?>"> <span> Gerar PDF</span> </a></td>
        <td class="ls-txt-center" width="120px;"> <?php echo $linha['horas'];?></td>

        <td class="ls-txt-center">  
            <a href="alterar_horas.php?editar=<?php echo $id ?>" class="ls-tooltip-bottom" 
                aria-label="Editar"><i class="ls-ico-edit-admin ls-text-xl"> </i> </a> &nbsp; &nbsp; 

            <a href="" data-ls-module="modal" class="ls-tooltip-bottom" aria-label="Excluir" 
            data-action="processa_horas.php?excluir=<?php echo $id ?>" 
            
            data-content="<h2> Deseja mesmo excluir está informação ? </h2> <br><p> Aviso , 
            está ação não pode ser revertida , ao clicar em aceitar os respectivos dados serão apagados permanentemente 
            da sua base de dados. </p>" data-title="Excluir" data-class="ls-btn-danger" data-save="Sim"
            data-close="Fechar"> <i class="ls-ico-remove ls-text-xl"></i></a></td>
        </td>

        </tr>

        <?php } ?>

        </tbody>
        <br><br>
        </table>
        </div>
    </div>
</div>




<!-- div das estatisicas do site -->
<div class="container" style="margin-top:100px;">
    <div class="row"> 
        
        <!-- card 1-->
        <div class="col-lg-3 col-md-6 col-12"> </div>

        <?php 
            $query = "SELECT SUM(horas) as total FROM horas_complementares";
            $total = mysqli_query($conexao, $query);
                while ($linha = mysqli_fetch_array($total))
                { 
                    $soma = $linha['total']; 
                }

            $restante = 248 - $soma;
        ?>
        
        <!-- card 2 -->
        <div class="col-lg-3 col-md-6 col-12">

            <div class="card">
            <img src="img/relogio1.jpg" alt="">
            <div class="card-body">
                    <h5 class="card-title text-center">
                        Horas Concluídas 
                        <br><br>
                    </h5>
                    <p class="text-center">
                        <span  style="color:darkgreen; font-size:22pt;"> <?php echo $soma;?> Horas </span>
                    </p>
                        
                    </div>
                    
        </div>
    </div>

        <!-- card 3 -->
        <div class="col-lg-3 col-md-6 col-12">

        <div class="card">
        <img src="img/relogio2.jpg" alt="">
        <div class="card-body">
                <h5 class="card-title text-center">
                    Horas Restantes
                    <br><br>
                </h5>
                <p class="text-center">
                <span style="color:brown; font-size:22pt;"><?php echo $restante;?> Horas </span>
                </p>
                    
                </div>
                
        </div>
    </div>

    <!-- card 4-->
    <div class="col-lg-3 col-md-6 col-12"> </div>
</div>

</div>  

</div>

</div>
<hr>

<?php

include 'footer.php';



