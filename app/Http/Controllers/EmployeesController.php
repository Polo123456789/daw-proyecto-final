<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmployeesController extends Controller
{
    public function index() {
        return view('empleados/index', ['empleados' => Empleado::all()]);
    }

    public function getCrear() {
        return view('empleados/create');
    }

    public function getModificar($id) {
        return view('empleados/modify', ['empleado' => Empleado::findOrFail($id)]);
    }

    public function getEliminar($id) {
        return view('empleados/delete', ['empleado' => Empleado::findOrFail($id)]);
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiCrear(Request $request) {
        $empleado = new Empleado;
        $empleado->nombre = $request->nombre;
        $empleado->correo = $request->correo;
        $empleado->telefono = $request->telefono;
        $empleado->direccion = $request->direccion;
        $empleado->turno = $request->turno;

        $empleado->save();

        return redirect('/empleados');
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiModificar(Request $request) {
        $empleado = Empleado::findOrFail($request->id);
        $empleado->nombre = $request->nombre;
        $empleado->correo = $request->correo;
        $empleado->telefono = $request->telefono;
        $empleado->direccion = $request->direccion;
        $empleado->turno = $request->turno;
    
        $empleado->save();
    
        return redirect('/empleados');
    }
    
    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiEliminar(Request $request) {
        $empleado = Empleado::findOrFail($request->id);
        $empleado->delete();
    
        return redirect('/empleados');
    }
}
