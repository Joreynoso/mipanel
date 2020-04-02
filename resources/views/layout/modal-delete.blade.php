<div class="modal fade" tabindex="-1" role="dialog" id="modal-delete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding-bottom: 0;">
                <p class="fw-700 fs-16 ml-1">Eliminar registro</p>
                <p>¿Estás seguro de eliminar éste registro?</p>
                {!! Form::open(['id' => 'form-delete', 'method' => 'DELETE']) !!}
                {!! Form::close() !!}
            </div>
            <div class="modal-footer" style="border-top: none; padding-top: 0">
                <button type="button" class="fs-14 btn btn-light shadow-sm mb-3 rounded-pill text-black-50"
                    data-dismiss="modal">Cancelar</button>
                <button id="yes-delete" type="button" class="fs-14 btn btn-primary shadow-sm mb-3 rounded-pill"
                    data-dismiss="modal">Sí, estoy seguro</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->