@extends ('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">

                <h3>Editar personal</h3>

                <form action="{{ route('empleados.actualizar', [$empleado]) }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="exampleInputFirstname">First name:</label>
                        <input type="text" class="form-control" id="exampleInputFirstname" placeholder="First name" name="first_name" value="{{ old('first_name', $empleado->first_name) }}">
                        @if ($errors->has('first_name'))
                            <small class="text-danger">{{ $errors->first('first_name') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputLastname">Last name:</label>
                        <input type="text" class="form-control" id="exampleInputLastname" placeholder="Last name" name="last_name" value="{{ old('last_name', $empleado->last_name) }}">
                        @if ($errors->has('last_name'))
                            <small class="text-danger">{{ $errors->first('last_name') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="{{ old('email', $empleado->email) }}">
                        @if ($errors->has('email'))
                            <small class="text-danger">{{ $errors->first('email') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="birthday">Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday', $empleado->birthday) }}">
                        @if ($errors->has('birthday'))
                            <small class="text-danger">{{ $errors->first('birthday') }}</small>
                        @endif
                    </div>


                    <button class="btn btn-default">Guardar</button>

                </form>

            </div>
        </div>
    </div>

@endsection