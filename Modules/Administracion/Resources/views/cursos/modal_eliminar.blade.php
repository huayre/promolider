<div class="modal fade" id="modal-delete-{{$paquete->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-google">
                <h5 class="modal-title text-center mr-3">¿Desea eliminar el Paquete?</h5>
                <i class="fa fa-trash-o fa-2x"></i>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center text-uppercase font-weight-bold">
                <form action="{{route('paquete.destroy',$paquete->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <h4 class="text-center text-primary">{{$paquete->nombre}}</h4>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
