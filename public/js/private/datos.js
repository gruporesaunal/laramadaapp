$(document).on('focus',".date-year", function(){
    $(this).datepicker( {
	    format: " yyyy", // Notice the Extra space at the beginning
	    viewMode: "years", 
	    minViewMode: "years"
	});
});


$(document).ready(function(){

	var mapaInputClone=  $(".mapa-input").clone();	

	$( "#form-add-pollutant" ).submit(function( event ) {

		$('#inputDespripcionPollutant').val($('#descripcion').summernote('code'));		

	});

	$(".buttonAddMap").click(function() {

		var selector="#"+$(this).data('div');
		var div=$(selector);			
		div.append(mapaInputClone.clone());	

		var inputs=div.find('.mapa-input');

		$("#inputMapasAddPollutant").val(inputs.length);				

	});

	$(".buttonDeleteMap").click(function() {

		var selector="#"+$(this).data('div');
		var div=$(selector);	
		var inputs=div.find('.mapa-input')
		if(inputs.length==1){
			alert("El contaminante debe tener al menos un mapa")
		}else{			
			inputs.last().remove();
		}	

	});

	$(".buttonAddPollutant").click(function() {

		var nombre=$(this).data('nombre')
		var id=$(this).data('id')

		$("#tituloAddPollutant").text(nombre);
		$("#inputIdAddPollutant").val(id);

	});	

	$(".buttonDeletePollutant").click(function() {

		var nombre=$(this).data('nombre')
		var id=$(this).data('id')

		$("#spanEliminarContaminante").text(nombre);
		$("#inputIdEliminarContaminante").val(id);

	});	

   	
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

	
	

	$('.summernote').summernote();

	

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