</div>

<footer>

	<div class="container">
		&copy; Sistemas de Informações Pitágoras - Lucas Vinicios - 2019.
</div>


<script src="js/jquery-2.1.0.min.js" type="text/javascript"></script>
<script src="js/locastyle.js" type="text/javascript"></script>
<script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/datatables.min.js"></script>

<script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"></script>

<!-- Script para tradução da tabela p/ portugues -->
<script>
        $(document).ready( function () {
    $('#minhaTabela').DataTable({
        "language": {
    "sEmptyTable": "Nenhum registro encontrado",
    "sInfo": "<strong> Mostrando de _START_ até _END_ de _TOTAL_ registros </strong>",
    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
    "sInfoPostFix": "",
    "sInfoThousands": ".",
    "sLengthMenu": "<b>Resultados por Página</b> _MENU_ ",
    "sLoadingRecords": "Carregando...",
    "sProcessing": "Processando...",
    "sZeroRecords": "Nenhum registro encontrado",
    "sSearch": "<strong> Pesquisar <strong>",
    "oPaginate": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
    },
    "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
    }
}
    });
} );
    </script>
	
</body>
</html>
