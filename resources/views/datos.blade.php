@extends('layouts.app')

@section('title', 'Datos')

@section('head')

@endsection

@section('header')
Datos de Contaminantes <div class="hidden-md hidden-lg"> <small> Interfaz administrativa</small>
@endsection

@section('breadcrumb')
<i class="fa fa-database"></i> Datos
@endsection

@section('content')
    <div class="row">

        <div class="col-md-8 col-md-offset-2">   
        <div class="panel panel-default">
			<div class="panel-heading"><b> Tipos de Contaminantes </b> </div>
			<div class="panel-body">




<div class="panel-group" id="accordion">
@foreach($types as $id=>$type)
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">

      <div class="row">

						<div class="col-md-3 col-xs-3">
						 <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$id}}">
						 {{$type->name}}
						 </a>
						
						</div>
						<div class="col-md-2 col-xs-5 pull-right">
							<div class="btn-group btn-group-justified">							    
							    <div class="btn-group">
							      <button type="button" class="btn  btn-warning btn-editar-tipo" data-id="{{$type->id}}"  data-toggle="modal" data-target="#editModal">
							      	<span class="glyphicon glyphicon-pencil"></span>
							      </button>
							    </div>
							    <div class="btn-group">
							      <button type="button" class="btn  btn-danger btn-eliminar-tipo" data-id="{{$type->id}}" data-toggle="modal" data-target="#deleteModal">
							      	<span class="glyphicon glyphicon glyphicon-trash"></span>
							      </button>
							    </div>
							  </div>
						</div>
					</div>	
       
      </h4>
    </div>
    <div id="collapse{{$id}}" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div> 
 @endforeach 
</div>
<button type="button" class="btn-lg btn-primary col-md-2" data-toggle="modal" data-target="#addModal" >
					<span class="glyphicon glyphicon glyphicon-plus"></span>
				</button>

			</div>
		</div>      

        </div>
    </div>

    <!-- ModalAgregar -->
<div id="addModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

  <form method="post" action="/agregar-tipo">
  {{csrf_field()}}

    <!-- Modal content-->
    <div class="modal-content ">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Tipo de Contaminante</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
    <label for="name">Nombre:</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Tipo de contaminante">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" value="Submit">
        Agregar <span class="glyphicon glyphicon-ok"></span>			
        </button>
      </div>
    </div>
  </form>

  </div>
</div>

<!-- ModalEditar -->
<div id="editModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Editar</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- ModalEliminar -->
<div id="deleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Eliminar</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection