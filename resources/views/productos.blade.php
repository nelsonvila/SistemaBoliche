@extends('layouts.app')

@section('content')

    <div class="container">
        {{--    <div class="row justify-content-center">--}}
        {{--        <div class="col-md-8">--}}
        {{--            <div class="card">--}}
        {{--                <div class="card-header">Dashboard</div>--}}

        {{--                <div class="card-body">--}}
        {{--                    @if (session('status'))--}}
        {{--                        <div class="alert alert-success" role="alert">--}}
        {{--                            {{ session('status') }}--}}
        {{--                        </div>--}}
        {{--                    @endif--}}

        {{--                    You are logged in!--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header">
                            <a class="btn btn-primary" href="/home">Volver</a><br>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3>Productos</h3>
                                    <h4>Se encontraron {{count($productos)}} productos</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="POST" action="/gestoria/carpetas/new">
                                        @csrf
{{--                                        <div class="form-group row">--}}
{{--                                            <label for="operacion"--}}
{{--                                                   class="col-md-4 col-form-label text-md-right">Unidad de--}}
{{--                                                Negocio</label>--}}

{{--                                            <div class="col-md-6">--}}

{{--                                                --}}{{--<select class="form-control" name="selectUnidadNegocio" id="selectUnidadNegocio" onchange="getval(this);">--}}
{{--                                                --}}{{--<option value=""> Seleccione la unidad de negocio</option>--}}
{{--                                                --}}{{--<option value="1">Ford</option>--}}
{{--                                                --}}{{--<option value="2">Chery</option>--}}

{{--                                                --}}{{--</select>--}}
{{--                                                <select class="form-control" name="selectUnidadNegocio"--}}
{{--                                                        id="selectUnidadNegocio" onchange="getval(this);">--}}
{{--                                                    @foreach($unidades as $unidad)--}}
{{--                                                        <option--}}
{{--                                                            value="{{$unidad->id}}">{{$unidad->descripcion}}</option>--}}
{{--                                                    @endforeach--}}
{{--                                                </select>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
                                        {{--<div class="form-group row">--}}
                                        {{--<label for="operacion"--}}
                                        {{--class="col-md-4 col-form-label text-md-right">Operación</label>--}}

                                        {{--<div class="col-md-6">--}}
                                        {{--<select class="form-control">--}}
                                        {{--@foreach($clientes as $cliente)--}}
                                        {{--<option value="{{$cliente->codigo}}">{{$cliente->razonsocial}}</option>--}}
                                        {{--@endforeach--}}
                                        {{--</select>--}}
                                        {{--<select class="form-control" name="selectOperacion" id="selectOperacion" required>--}}
                                        {{--<option value=""> Seleccione el tipo de operación</option>--}}
                                        {{--<option value="1">Tradicional</option>--}}
                                        {{--<option value="2">Plan Ovalo</option>--}}

                                        {{--</select>--}}

                                        {{--</div>--}}
                                        {{--</div>--}}

                                        <div class="form-group row">
                                            <label for="namelbl"
                                                   class="col-md-4 col-form-label text-md-right">Codigo</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                       class="form-control{{ $errors->has('codigo') ? ' is-invalid' : '' }}"
                                                       name="codigo" value="{{ old('codigo') }}" required autofocus>

                                                @if ($errors->has('codigo'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('codigo') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="namelbl"
                                                   class="col-md-4 col-form-label text-md-right">Descripcion</label>

                                            <div class="col-md-6">
                                                <input id="descripcion" type="text"
                                                       class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}"
                                                       name="descripcion" value="{{ old('descripcion') }}" required autofocus>

                                                @if ($errors->has('descripcion'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="namelbl"
                                                   class="col-md-4 col-form-label text-md-right">Stock</label>

                                            <div class="col-md-6">
                                                <input id="stock" type="text"
                                                       class="form-control{{ $errors->has('stock') ? ' is-invalid' : '' }}"
                                                       name="stock" value="{{ old('stock') }}" required autofocus>

                                                @if ($errors->has('stock'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('stock') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="namelbl"
                                                   class="col-md-4 col-form-label text-md-right">Costo</label>

                                            <div class="col-md-6">
                                                <input id="costo" type="text"
                                                       class="form-control{{ $errors->has('costo') ? ' is-invalid' : '' }}"
                                                       name="costo" value="{{ old('costo') }}" required autofocus>

                                                @if ($errors->has('costo'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('costo') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="namelbl"
                                                   class="col-md-4 col-form-label text-md-right">Precio</label>

                                            <div class="col-md-6">
                                                <input id="precio" type="text"
                                                       class="form-control{{ $errors->has('precio') ? ' is-invalid' : '' }}"
                                                       name="precio" value="{{ old('precio') }}" required autofocus>

                                                @if ($errors->has('precio'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('precio') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        {{--<div class="form-group row">--}}
                                        {{--<label for="cliente"--}}
                                        {{--class="col-md-4 col-form-label text-md-right">Reserva</label>--}}

                                        {{--<div class="col-md-6">--}}
                                        {{--<select class="form-control">--}}
                                        {{--@foreach($reservas as $cliente)--}}
                                        {{--<option value="{{$cliente->reservas_id}}">{{$cliente->reservas_id}}</option>--}}
                                        {{--@endforeach--}}
                                        {{--</select>--}}
                                        {{--<input type="hidden" class="js-data-example-ajax form-control" />--}}
                                        {{--<select class="js-example-data-ajax form-control" id="selectreserva" name="selectreserva">--}}
                                        {{--<option value="3620194" selected="selected">select2/select2</option>--}}
                                        {{--</select>--}}
                                        {{--</select>--}}
                                        {{--<input class='form-control col-lg-5 itemSearch' type='text' placeholder='select item' id="profiles-thread" />--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group row">--}}
                                        {{--<label for="estado"--}}
                                        {{--class="col-md-4 col-form-label text-md-right">Estado</label>--}}

                                        {{--<div class="col-md-6">--}}
                                        {{--<select class="form-control">--}}
                                        {{--@foreach($clientes as $cliente)--}}
                                        {{--<option value="{{$cliente->codigo}}">{{$cliente->razonsocial}}</option>--}}
                                        {{--@endforeach--}}
                                        {{--</select>--}}
                                        {{--<select class="form-control">--}}
                                        {{--<option value=""> Seleccione el estado de la carpeta</option>--}}
                                        {{--<option value="1">Asiganada</option>--}}
                                        {{--<option value="2">Plan Ovalo</option>--}}
                                        {{--<option value="3">Recibidas</option>--}}
                                        {{--<option value="4">Administracion Gestoria</option>--}}
                                        {{--<option value="5">Registro</option>--}}
                                        {{--<option value="6">Patentada</option>--}}
                                        {{--<option value="7">Transferido</option>--}}
                                        {{--<option value="8">Facturada</option>--}}


                                        {{--</select>--}}

                                        {{--</div>--}}
                                        {{--</div>--}}


                                        {{-- <div class="form-group row">
                                             <label for="password"
                                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                             <div class="col-md-6">
                                                 <input id="password" type="password"
                                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                        name="password" required>

                                                 @if ($errors->has('password'))
                                                     <span class="invalid-feedback">
                                             <strong>{{ $errors->first('password') }}</strong>
                                         </span>
                                                 @endif
                                             </div>
                                         </div>--}}

                                        {{--   <div class="form-group row">
                                               <label for="password-confirm"
                                                      class="col-md-4 col-form-label text-md-right">Confirmar Password</label>

                                               <div class="col-md-6">
                                                   <input id="password-confirm" type="password" class="form-control"
                                                          name="password_confirmation" required>
                                               </div>
                                           </div>--}}

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary btn-block">
                                                    Registrar nuevo producto
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 2em">
                                <div class="col-lg-12">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                        <tr>
                                            <td>ID</td>
                                            <td>CODIGO</td>
                                            <td>DESCRIPCION</td>
                                            <td>STOCK</td>
                                            <td>COSTO</td>
                                            <td>PRECIO</td>

                                            {{-- <td>Roles</td>
                                             <td>Nivel</td>--}}
                                            <td>Acciones</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($productos as $producto)
                                            <tr>
                                                <td>{{$producto->id}}</td>
                                                <td>{{$producto->codigo}}</td>
                                                <td>{{$producto->descripcion}}</td>
                                                <td>{{$producto->stock}}</td>
                                                <td>{{$producto->costo}}</td>
                                                <td>{{$producto->precio}}</td>


                                                <td>
                                                    {{--<button--}}
                                                    {{--data-userid="{{$gestor->id}}"--}}
                                                    {{--data-username="{{$gestor->descripcion}}"--}}
                                                    {{--data-toggle="modal"--}}
                                                    {{--data-target="#editRolModal"--}}
                                                    {{--class="btn btn-primary">ROL <i class="fa fa-lock"></i></button>--}}
                                                    {{--<button class="btn btn-warning"><i class="fa fa-edit"></i></button>--}}
                                                    {{--<button class="btn btn-warning"--}}
                                                    {{--data-toggle="modal"--}}
                                                    {{--data-target="#editGestorModal"--}}
                                                    {{--data-gestoridedit="{{$producto->id}}"--}}
                                                    {{--data-gestoremailedit="{{$producto->email}}"--}}
                                                    {{--data-gestornameedit="{{$producto->numreserva}}"><i class="fa fa-edit"></i>--}}
                                                    {{--</button>--}}
                                                    {{--                                                <a class="btn btn-primary" role="button"--}}
                                                    {{--                                                   href="/gestoria/carpeta/detalle/{{$producto->id}}">Detalle</a>--}}
                                                    {{--                                                <button class="btn btn-danger"--}}
                                                    {{--                                                        --}}{{--data-toggle="modal"--}}
                                                    {{--                                                        --}}{{--data-target="#deleteGestorModal"--}}
                                                    {{--                                                        onclick="EmitirTost()"--}}
                                                    {{--                                                    --}}{{--data-gestorid="{{$producto->id}}"--}}
                                                    {{--                                                    --}}{{--data-gestoremail="{{$gestor->email}}"--}}
                                                    {{--                                                    --}}{{--data-gestorname="{{$producto->numreserva}}"--}}
                                                    {{--                                                ><i class="fa fa-trash"></i>--}}
                                                    {{--                                                </button>--}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        // $('#tablaUsers').DataTable({
        //     responsive: true,
        //     iDisplayLength: '20',
        //     order: [[0, 'asc']],
        //     dom: 'Bfrtip',
        //     language: {
        //         url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'
        //     },
        //     buttons: [
        //         'copy', 'excelHtml5', {
        //             extend: 'pdfHtml5',
        //             orientation: 'landscape',
        //             pageSize: 'A4'
        //         }
        //     ]
        //
        // });
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection

