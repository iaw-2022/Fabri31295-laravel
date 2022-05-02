<div class="modal" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Eliminar registro</h5>
        </div>
        <div class="modal-body">
            {!! Form::model($item, [ 'method' => 'delete','route' => [$dir, $item->id] ]) !!}
                <h4 class="text-center">Estas seguro que deseas eliminar este registro?</h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>Cancelar</button>
            {{Form::button('<i class="fa fa-trash"></i> Eliminar', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
            {!! Form::close() !!}
        </div>
    </div>
  </div>
</div>
