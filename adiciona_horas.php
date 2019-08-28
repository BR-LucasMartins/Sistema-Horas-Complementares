
<?php 

include 'conexao.php';
include 'header.php';

?>

<div class="conatiner mt-5 ">

    <p class="text-center" style="font-size:18pt; color:darkred;"> Adicionar Horas Complementares ! </p>

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

    <form action="inserir.php" method="post">
            <div class="row ">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="" > <mark> Descrição </mark> </label>
                        <input type="text" class="form-control" name="descricao" placeholder="Preencha a descrição do certificado"
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
                        <input type="text" class="form-control" name="certificado" placeholder="cole aqui o link do seu certificado"
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
                <div class="col-6 mt-5">
                    <input type="submit" class="btn btn-success btn-block" name="enviar" value="Salvar">
                </div>
                <div class="col-3"></div>
            </div>
            </div>
    

        </form> <hr><br><br>
    </div>
</div>

<?php include 'footer.php'; ?>

