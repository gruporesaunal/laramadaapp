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
			<ul class="list-group">
				@foreach($types as $id=>$type)
				<li class="list-group-item">
						
					<div class="row">

						<div class="col-md-3">
						<a href="">{{$type->name}}</a>	
						</div>
						<div class="col-md-2 pull-right">
							<div class="btn-group btn-group-justified">							    
							    <div class="btn-group">
							      <button type="button" class="btn  btn-warning">
							      	<span class="glyphicon glyphicon-pencil"></span>
							      </button>
							    </div>
							    <div class="btn-group">
							      <button type="button" class="btn  btn-danger">
							      	<span class="glyphicon glyphicon glyphicon-trash"></span>
							      </button>
							    </div>
							  </div>
						</div>
					</div>	
				</li>
				@endforeach
				<button type="button" class="btn-lg btn-primary col-md-2" style="margin-top: 10px">
					<span class="glyphicon glyphicon glyphicon-plus"></span>
				</button>
			
			</ul>
			</div>
		</div>      

        </div>
    </div>
@endsection