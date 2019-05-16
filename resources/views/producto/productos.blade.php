@extends('layouts.app')

@section('content')
@include('producto.modal_edit_producto')

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
                                    <form method="POST" action="/productos/create">
                                        @csrf

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
                                                       name="descripcion" value="{{ old('descripcion') }}" required
                                                       autofocus>

                                                @if ($errors->has('descripcion'))
                                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
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
                                                <td>{{$producto->precio}}</td>


                                                <td>
                                                    <button
                                                        data-productoid="{{$producto->id}}"
                                                        data-productocodigo="{{$producto->codigo}}"
                                                        data-productodesc="{{$producto->descripcion}}"
                                                        data-productoprecio="{{$producto->precio}}"
                                                        data-toggle="modal"
                                                        data-target="#editProductoModal"
                                                        title="Editar producto"
                                                        class="btn btn-success"><i class="fa fa-edit"></i></button>

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
        $('#tablaUsers').DataTable({
            responsive: true,
            iDisplayLength: '20',
            order: [[0, 'asc']],
            dom: 'Bfrtip',
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json'
            },
            buttons: [
                'copy', 'excelHtml5', {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'A4'
                }
            ]

        });

        $('#editProductoModal').on('show.bs.modal', function (e) {

            idproducto = $(e.relatedTarget).data('productoid');
            codigo = $(e.relatedTarget).data('productocodigo');
            descripcion = $(e.relatedTarget).data('productodesc');
            precio = $(e.relatedTarget).data('productoprecio');

            $('#idedit').attr('value', idproducto);
            $('#codigoedit').attr('value', codigo);
            $('#descripcionedit').attr('value', descripcion);
            $('#precioedit').attr('value', precio);



        });
        $('#btnAddCommentOvalo')
            .on('click', function (e) {
                console.log('clickBtnDevolucion');
                e.preventDefault();
                $.ajax({
                    url: '/gestoria/carpeta/devolucion',
                    type: 'POST',
                    data: $('#devolucionForm').serialize(),
                    success: function (data) {
                        toastr.info('La carpeta regreso al estado asignadas');
                        setTimeout(function () {
                            location.reload();
                        }, 500);

                    },
                    error: function (error) {
                        toastr.error('Error');
                    }
                });

            });
    </script>
@endsection

