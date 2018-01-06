<?php

namespace App\Http\Controllers;

use App\Domicilio;
use App\Empleado;
use Illuminate\Http\Request;

class DomiciliosController extends Controller
{
    public function index(Empleado $empleado)
    {
        return view('domicilios.index', compact('empleado'));
    }

    public function create(Empleado $empleado)
    {
        return view('domicilios.create', compact('empleado'));
    }

    public function edit(Domicilio $domicilio)
    {
        return view('domicilios.edit', compact('domicilio'));
    }

    public function store()
    {
        $data = request()->validate([
            'alias' => 'required',
            'direccion' => 'required|min:6',
            'empleado_id' => 'required|exists:empleados,id'
        ]);

        $domicilio = Domicilio::create($data);
        return redirect('/domicilios/'. $domicilio->empleado->id);
    }

    public function destroy(Domicilio $domicilio)
    {
        $id = $domicilio->empleado->id;
        $domicilio->delete();
        return redirect('/domicilios/'. $id);
    }
}
