// Call the dataTables jQuery plugin
$(document).ready(function() {

	const DATATABLE_PT = {
		"emptyTable": "Não foi encontrado nenhum registo",
		"loadingRecords": "A carregar...",
		"processing": "A processar...",
		"lengthMenu": "Mostrar _MENU_ registos",
		"zeroRecords": "Não foram encontrados resultados",
		"info": "Mostrando de _START_ até _END_ de _TOTAL_ registos",
		"infoEmpty": "Mostrando de 0 até 0 de 0 registos",
		"infoFiltered": "(filtrado de _MAX_ registos no total)",
		"search": "Procurar:",
		"paginate": {
			"first": "Primeiro",
			"previous": "Anterior",
			"next": "Seguinte",
			"last": "Último"
		},
		"aria": {
			"sortAscending": ": Ordenar colunas de forma ascendente",
			"sortDescending": ": Ordenar colunas de forma descendente"
		},
		"autoFill": {
			"cancel": "cancelar",
			"fill": "preencher",
			"fillHorizontal": "preencher células na horizontal",
			"fillVertical": "preencher células na vertical",
			"info": "Exemplo de Auto Preenchimento"
		}
	}

	$('.dataTable').DataTable({

/*
		language : DATATABLE_PT,
*/
		responsive : true,
		"aoColumnDefs": [
			{ "bSortable": false, "aTargets": ["no-sort"] }
		]

	});
});
