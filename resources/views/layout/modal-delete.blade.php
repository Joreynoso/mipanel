<div class="modal fade" tabindex="-1" role="dialog" id="modal-delete">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding-bottom: 0">
                <p class="fs-16 fw-700">Eliminar Registro</p>
                <p class="fs-16 fw-400">Estas seguro de eliminar este registro ?</p>


                {!! Form::open(['id' => 'form-delete','method'=>'DELETE']) !!}
                {!! Form::close() !!}

            </div>
            <div class="modal-footer py-0" style="border-top: none;">
                <button type="button" class="fs-14 btn btn-light shadow-sm mb-3 rounded-pill text-black-50"
                    data-dismiss="modal">Cancelar</button>
                <button id="yes-delete" type="button" class="fs-14 btn btn-danger shadow-sm mb-3 rounded-pill">Si, estoy
                    seguro</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="pleaseWait" data-backdrop="static">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <span class="glyphicon glyphicon-time"></span>
                    Por favor espere...
                </h4>
            </div>
            <div class="modal-body">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-info active" style="width: 100%"></div>
                </div>
            </div>
        </div>
    </div>
</div>