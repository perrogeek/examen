@extends ('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">

                <a class="btn btn-sm btn-info" href="{{ route('empleados.index') }}">Regresar a lista de empleados</a>

                <h3>Domicilios de {{ $empleado->fullname() }}.</h3>
                <a class="btn btn-sm btn-primary" href="{{ route('domicilios.agregar', [$empleado]) }}">Agregar nuevo</a>

                <table class="table table-bordered table-strip">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Alias / Dirección</td>
                        <td>&nbsp;</td>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($empleado->domicilios as $domicilio)
                        <tr>
                            <td>{{ $domicilio->id }}</td>
                            <td><strong>{{ $domicilio->alias }}</strong><br>{{ $domicilio->direccion }}</td>
                            <td>
                                <form class="form-inline" action="{{ route('domicilios.eliminar', [$domicilio]) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                                <a href="{{ route('domicilios.editar', [$domicilio]) }}" class="btn btn-warning">Editar</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">
                                No existen registros, <a class="btn btn-sm btn-primary" href="{{ route('domicilios.agregar', [$empleado]) }}">Agregar nuevo</a>.
                            </td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection