<div class="modal fade" id="editProductoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edición de producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editproductoForm">

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">Id:</label>

                            <div class="col-md-6">
                                <input readonly id="idedit" type="number"
                                       class="form-control{{ $errors->has('idedit') ? ' is-invalid' : '' }}"
                                       name="idedit" value="{{ old('idedit') }}" required autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">Codigo:</label>

                            <div class="col-md-6">
                                <input id="codigoedit" type="number"
                                       class="form-control{{ $errors->has('codigoedit') ? ' is-invalid' : '' }}"
                                       name="codigoedit" value="{{ old('codigoedit') }}" required autofocus>

                                @if ($errors->has('codigoedit'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('codigoedit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">Descripción</label>

                            <div class="col-md-6">
                                <input id="descripcionedit"
                                       class="form-control{{ $errors->has('descripcionedit') ? ' is-invalid' : '' }}"
                                       name="descripcionedit" value="{{ old('descripcionedit') }}" required autofocus>

                                @if ($errors->has('descripcionedit'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('descripcionedit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namee"
                                   class="col-md-4 col-form-label text-md-right">Precio</label>

                            <div class="col-md-6">
                                <input id="precioedit"
                                       class="form-control{{ $errors->has('precioedit') ? ' is-invalid' : '' }}"
                                       name="precioedit" value="{{ old('precioedit') }}" required autofocus>

                                @if ($errors->has('precioedit'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('precioedit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namee"
                                   class="col-md-4 col-form-label text-md-right">Valor</label>

                            <div class="col-md-6">
                                <input id="valoridEdit" type="number"
                                       class="form-control{{ $errors->has('valoridEdit') ? ' is-invalid' : '' }}"
                                       name="valoridEdit" value="{{ old('valoridEdit') }}" required autofocus>

                                @if ($errors->has('valoridEdit'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('valoridEdit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
                {{csrf_field()}}
            </form>

            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn">Cancelar
                </button>
                <button type="button" data-dismiss="modal" id="btnAddCommentOvalo" class="btn btn-primary">Aceptar
                </button>
            </div>
        </div>
    </div>

</div>
