<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('index', compact('empleados'));
    }

    public function create()
    {
        return view('create');
    }

    public function edit(Empleado $empleado)
    {
        return view('edit', compact('empleado'));
    }

    public function store()
    {
        $data = request()->validate([
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'birthday' => 'required|date'
        ]);

        Empleado::create($data);

        return redirect()->route('empleados.index');
    }

    public function update(Empleado $empleado)
    {
        $data = request()->validate([
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'birthday' => 'required|date'
        ]);

        $empleado->fill($data);
        $empleado->save();

        return redirect()->route('empleados.index');
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleados.index');
    }
}
