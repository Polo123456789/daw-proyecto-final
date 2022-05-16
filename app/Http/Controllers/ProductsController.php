<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductsController extends Controller
{
    public function index() {
        return view('productos/index', ['productos' => Producto::all()]);
    }

    public function getCrear() {
        return view('productos/create');
    }

    public function getModificar($id) {
        
    }

    /**
     * Crear un nuevo producto
     *
     * @param  Request  $request
     * @return Response
     */
    public function apiCrear(Request $request) {
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->existencias = $request->existencias;

        $producto->save();

        return redirect('/productos');
    }
}
