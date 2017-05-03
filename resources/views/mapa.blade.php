@extends('layouts.app')

@section('title', 'Mapa')

@section('head')

<script type="text/javascript"
    src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script src="{{asset('js/mapa.js')}}"></script>

<script src="https://www.googleapis.com/fusiontables/v2/tables/1plsthco6Sv7BSk1BicPmZ3V6qtZvHQ_NbYSlCS9l/styles?callback=handler&key={{config('constants.maps_api_key')}}"></script>



@endsection

@section('header')
Mapa de la Ramada <div class="hidden-md hidden-lg"></div>  <small>Información de contaminantes</small>
@endsection

@section('breadcrumb')
<i class="fa fa-map-marker"></i> Mapa
@endsection

@section('content')
    <div class="row">
    	<div class="col-md-3">

    	<h3>Contaminantes</h3>

    	<ul class="nav nav-pills nav-stacked">
    		
    		<li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Farmacológicos
			    <span class="caret"></span></a>
			    <ul class="dropdown-menu" id="menuFarmacologicos">			      
			    </ul>
			</li>

			<li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Orgánicos
			    <span class="caret"></span></a>
			    <ul class="dropdown-menu">
			    </ul>
			</li>

			<li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Metales Pesados
			    <span class="caret"></span></a>
			    <ul class="dropdown-menu">
			    </ul>
			</li>

			<li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Microbiológicos
			    <span class="caret"></span></a>
			    <ul class="dropdown-menu">
			    </ul>
			</li>

		 </ul>


    	</div>
	    <div class="col-md-9">	   
	    	<div class="tab-content">	

	    		<div id="mapa-home" class="tab-pane fade in active">
			      <div class="panel panel-default">
					  <div class="panel-heading"><h3>Información <small>powered by Fusion Tables</small> </h3></div>
					  <div class="panel-body">
					  <div class="jumbotron">
					  	
					  <h2>Bienvenido, haga clic en un contaminante para mostrar su información</h2>
					  </div>
					  </div>
					</div>
			    </div>	

			    <div id="panel-mapa" class="tab-pane fade">
			      <div class="panel panel-default">
					  <div class="panel-heading"><h3>Información <small>powered by Fusion Tables</small> </h3></div>
					  <div class="panel-body"> 
					  	<div class="row">
					  		<div class="col-md-12">
					  			<div id="map-canvas"></div>
					  		</div>
					  	</div>
					  
					  </div>
					</div>
			    </div>
			    
			    
			  </div> 	
	    	
	    </div>
    </div>
@endsection