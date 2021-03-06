<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientsController extends Controller
{
    public function index() {
        return view('clientes/index', ['clientes' => Cliente::all()]);
    }

    public function getCrear() {
        return view('clientes/create');
    }

    public function getModificar($id) {
        return view('clientes/modify', ['cliente' => Cliente::findOrFail($id)]);
    }

    public function getEliminar($id) {
        return view('clientes/delete', ['cliente' => Cliente::findOrFail($id)]);
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiCrear(Request $request) {
        $cliente = new Cliente;
        $cliente->nombre = $request->nombre;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->nit = $request->nit;

        $cliente->save();

        return redirect('/clientes');
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiModificar(Request $request) {
        $cliente = Cliente::findOrFail($request->id);
        $cliente->nombre = $request->nombre;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->nit = $request->nit;
    
        $cliente->save();
    
        return redirect('/clientes');
    }
    
    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiEliminar(Request $request) {
        $cliente = Cliente::findOrFail($request->id);
        $cliente->delete();
    
        return redirect('/clientes');
    }
}
