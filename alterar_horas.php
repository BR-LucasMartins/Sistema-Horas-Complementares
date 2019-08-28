<?php 

include 'conexao.php';
include 'header.php';


$id = $_GET['editar'];

$query = "SELECT * FROM horas_complementares";
$resultado = mysqli_query($conexao, $query);

    while($linha = mysqli_fetch_array($resultado)){

        if($linha['Id_certificado'] == $id){

            $id_certificado = $linha['Id_certificado'];
            $descricao = $linha['Descricao'];
            $link = $linha['Link_certificado'];
            $horas = $linha['horas'];

        }
    }

?>

<div class="conatiner mt-5 ">

    <p class="text-center" style="font-size:18pt; color:darkred;"> Alterar Horas Complementares ! </p>

    <!-- Mensagem de dados cadastrados -->
    <?php if(isset($_GET['sucesso'])){ ?>

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


    <div  class="container mt-3 formulario">

    <form action="processa_horas.php?alterar" method="post">
            <div class="row ">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="form-group">
                    <input type="hidden" name="id_certificado" value="<?php echo $id_certificado ?>">
                    
                        <label for="" > <mark> Descrição </mark> </label>
                        <input type="text" class="form-control" name="descricao" value="<?php echo $descricao ?>"
                            autocomplete="off">
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row">
            <div class="col-3"></div>
                <div class="col-6 mt-4">
                    <div class="form-group">
                        <label for=""> <mark> Link do certificado  </mark> </label>
                        <input type="text" class="form-control" name="certificado" value="<?php echo $link ?>"
                            autocomplete="off">
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row">
            <div class="col-3"></div>
                <div class="col-3 mt-4">
                    <div class="form-group">
                        <label for=""> <mark> Número de horas </mark> </label>
                        <input type="number" class="form-control" name="horas">
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
            
    
            <div align="center" class="submit">

            <div class="row">
            <div class="col-3"></div>
                <div class="col-6 mt-4">
                    <input type="submit" class="btn btn-success btn-block" name="enviar" value="Salvar">
                    <br>
                    <a href="index.php" class="btn btn-secondary btn-block"> Cancelar </a>
                </div>
                <div class="col-3"></div>
            </div>

            </div>
    

        </form> <hr><br><br>
    </div>
</div>

<?php include 'footer.php'; ?>