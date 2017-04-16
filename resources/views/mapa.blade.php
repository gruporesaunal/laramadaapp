@extends('layouts.app')

@section('title', 'Mapa')

@section('head')

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
			    <ul class="dropdown-menu">
			      <li><a data-toggle="pill" href="#mapa-acetaminofen">Acetaminofen</a></li>
			      <li><a data-toggle="pill" href="#mapa-ciprofloxacin">Ciprofloxacin</a></li>
			    </ul>
			</li>

			<li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Orgánicos
			    <span class="caret"></span></a>
			    <ul class="dropdown-menu">
			      <li><a href="#">Submenu 1-1</a></li>
			      <li><a href="#">Submenu 1-2</a></li>
			      <li><a href="#">Submenu 1-3</a></li> 
			    </ul>
			</li>

			<li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Metales Pesados
			    <span class="caret"></span></a>
			    <ul class="dropdown-menu">
			      <li><a href="#">Submenu 1-1</a></li>
			      <li><a href="#">Submenu 1-2</a></li>
			      <li><a href="#">Submenu 1-3</a></li> 
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

			    <div id="mapa-acetaminofen" class="tab-pane fade">
			      <div class="panel panel-default">
					  <div class="panel-heading"><h3>Información <small>powered by Fusion Tables</small> </h3></div>
					  <div class="panel-body">
					  @include('mapas.acetaminofen')
					  </div>
					</div>
			    </div>

			    <div id="mapa-ciprofloxacin" class="tab-pane fade">
			      <div class="panel panel-default">
					  <div class="panel-heading"><h3>Información <small>powered by Fusion Tables</small> </h3></div>
					  <div class="panel-body">
					  @include('mapas.ciprofloxacin')
					  </div>
					</div>
			    </div>
			    
			  </div> 	
	    	
	    </div>
    </div>
@endsection