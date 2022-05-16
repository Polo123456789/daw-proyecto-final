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
}
