<div class="container-fluid mb-4">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Crear nota</button>

</div>
{!! Form::open(['url' => url('notas/todas')]) !!}
{{ Form::token() }}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nueva nota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label" >Titulo:</label>
              <input type="text" class="form-control" name="titulo" id="recipient-name">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label" >Texto:</label>
              <textarea class="form-control" id="message-text" name="texto"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
{!! Form::close() !!}

