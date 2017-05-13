$(document).ready(function(){
   	
   	$(".buttonEditType").click(function() {
   		var nombre=$(this).data('nombre')
		var id=$(this).data('id')

		$("#tituloEditarTipo").text(nombre);
		$("#inputNombreEditarTipo").val(nombre);
		$("#inputIdEditarTipo").val(id);
   		
	  
	});

	$(".buttonDeleteType").click(function() {

		var nombre=$(this).data('nombre')
		var id=$(this).data('id')

		$("#spanEliminarTipo").text(nombre);
		$("#inputIdEliminarTipo").val(id);

	});

	$(".buttonAddPollutant").click(function() {

		var nombre=$(this).data('nombre')
		var id=$(this).data('id')

		$("#tituloAddPollutant").text(nombre);
		$("#inputIdAddPollutant").val(id);

	});

	$('.summernote').summernote();

	$( "#form-add-pollutant" ).submit(function( event ) {

		$('#inputDespripcionPollutant').val($('#descripcion').summernote('code'));		

	});

	$('.datatable').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        },
        responsive: true ,
	    columnDefs: [
	        { responsivePriority: 1, targets: 0 },
	        { responsivePriority: 2, targets: -1 }
	    ]   
    } );
})