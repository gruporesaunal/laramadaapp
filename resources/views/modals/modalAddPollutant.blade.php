<div id="modalAddPollutant" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <form method="post" action="{{route('add-pollutant')}}" id="form-add-pollutant">
    {{csrf_field()}}
    <input type="hidden" name="typeId" id="inputIdAddPollutant">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Añadir a Contaminantes <span id="tituloAddPollutant"></span> </b></h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="name">Nombre:</label>
            <input required type="text" class="form-control" name="name" placeholder="Nombre del contaminante">
          </div>          
          <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control summernote" rows="5" id="descripcion"></textarea>          
          </div>
          <input type="hidden" name="descripcion" id="inputDespripcionPollutant">
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