@extends ('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">

                <h3>Lista de personal.</h3>
                <a class="btn btn-sm btn-primary" href="{{ route('empleados.agregar') }}">Agregar nuevo</a>

                <table class="table table-bordered table-strip">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nombre</td>
                            <td>&nbsp;</td>
                        </tr>
                    </thead>
                    <tbody>

                    @forelse($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->id }}</td>
                            <td>{{ $empleado->fullname() }}</td>
                            <td>
                                <form class="form-inline" action="{{ route('empleados.eliminar', [$empleado]) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                                <a href="{{ route('empleados.editar', [$empleado]) }}" class="btn btn-warning">Editar</a>
                                <a href="{{ route('domicilios.index', [$empleado]) }}" class="btn btn-info">Domicilios ({{ $empleado->domicilios->count() }})</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">
                                No existen registros, <a class="btn btn-sm btn-primary" href="{{ route('empleados.agregar') }}">Agregar nuevo</a>.
                            </td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection