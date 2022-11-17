<div class="modal fade-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="deleteRuido-{{$ruido->id}}">
    <form action="{{route('ruido.destroy',$ruido->id)}}" method="POST">
    {{csrf_field()}}
    <input name="_method" type="hidden" value="DELETE">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: red; color:white; font-size: 20px">
                    <button class="close" data-dismiss="modal" aria-label="close"> <span aria-hidden="true">x</span></button>
                    <h3 class="modal-title">Eliminar Ruido</h3>
                </div>
                <div class="modal-body">
                    <p>Confirma que desea eliminar al Ruido {{$ruido->cantidad}} </p>
                </div>
                <div class="modal-footer">
                <div class="btn btn-default" data-dismiss="modal">Cerrar <i class="fa fa-times" aria-hidden="true"></i></div>
                    <button type="submit" class="btn btn-danger">Confirmar <i class="fa fa-check" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </form>
