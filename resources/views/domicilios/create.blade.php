@extends ('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">

                <h3>Agregar domicilio</h3>

                <form action="{{ route('domicilios.guardar', [$empleado]) }}" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="empleado_id" value="{{ $empleado->id }}" />

                    <div class="form-group">
                        <label for="alias">Alias:</label>
                        <input type="text" class="form-control" id="alias" placeholder="alias..." name="alias">
                        @if ($errors->has('alias'))
                            <small class="text-danger">{{ $errors->first('alias') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="alias">Dirección:</label>
                        <textarea name="direccion" class="form-control"></textarea>
                        @if ($errors->has('alias'))
                            <small class="text-danger">{{ $errors->first('alias') }}</small>
                        @endif
                    </div>


                    <button class="btn btn-default">Guardar</button>

                </form>

            </div>
        </div>
    </div>

@endsection