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
    		@foreach($types as $type)
    		<li class="dropdown">
			    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{$type->name}}
			    <span class="caret"></span></a>
			    <ul class="dropdown-menu">
			      
			      @foreach($type->pollutants as $pollutant)
			       <li><a data-toggle="pill" href="#{{$pollutant->name}}">{{$pollutant->name}}</a></li>	   
                   @endforeach 
			    </ul>
			</li>
    		
			@endforeach
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


			    @foreach($types as $type)
			    
			        @foreach($type->pollutants as $pollutant)
			        

			        <div id="{{$pollutant->name}}" class="tab-pane fade">
			        	<div class="panel panel-default">
			        		<div class="panel-heading"><h3>Información <small>powered by Fusion Tables</small> </h3></div>
			        		<div class="panel-body">
			        			{!!$pollutant->iframe!!}
			        		</div>
			        	</div>
			        </div>
			        
			        @endforeach
			    @endforeach  

			  </div> 	
	    	
	    </div>
    </div>
    <script type="text/javascript">
    	var iframes = document.getElementsByTagName("iframe");

    	for(var i = 0; i < iframes.length; i++){
    		iframes[i].setAttribute("width", "100%");
    		iframes[i].setAttribute("height", "60%");
    	}

    </script>
@endsection