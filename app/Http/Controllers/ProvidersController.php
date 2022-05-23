<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProvidersController extends Controller
{
    public function index() {
        return view('proveedores/index', ['proveedores' => Proveedor::all()]);
    }

    public function getCrear() {
        return view('proveedores/create');
    }

    /**
     * @param Integer $id
     */
    public function getModificar($id) {
        return view('proveedores/modify', ['proveedores' => Proveedor::findOrFail($id)]);
    }

    /**
     * @param Integer $id
     */
    public function getEliminar($id) {
        return view('proveedores/delete', ['proveedores' => Proveedor::findOrFail($id)]);
    }

/**
     * @param  Request  $request
     * @return Response
     */
    public function apiCrear(Request $request) {
        $proveedor = new Proveedor;
        $proveedor->nombre = $request->nombre;
        $proveedor->contacto = $request->contacto;

        $proveedor->save();

        return redirect('/proveedores');
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiModificar(Request $request) {
        $proveedor = Proveedor::findOrFail($request->id);
        $proveedor->nombre = $request->nombre;
        $proveedor->contacto = $request->contacto;

        $proveedor->save();

        return redirect('/proveedores');
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiEliminar(Request $request) {
        $proveedor = Proveedor::findOrFail($request->id);
        $proveedor->delete();

        return redirect('/proveedores');
    }
}
