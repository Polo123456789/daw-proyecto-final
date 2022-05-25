<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Marca;
use App\Models\Proveedor;

class ProductsController extends Controller
{
    public function index() {
        return view('productos/index', ['productos' => Producto::all()]);
    }

    public function getCrear() {
        return view('productos/create',
                    [
                        'marcas' => Marca::all(),
                        'proveedores' => Proveedor::all()
                    ]);
    }

    /**
     * @param Integer $id
     */
    public function getModificar($id) {
        return view('productos/modify',
                    [
                        'producto' => Producto::findOrFail($id),
                        'marcas' => Marca::all(),
                        'proveedores' => Proveedor::all()
                    ]);
    }

    
    /**
     * @param Integer $id
     */
    public function getEliminar($id) {
        return view('productos/delete', ['producto' => Producto::findOrFail($id)]);
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiCrear(Request $request) {
        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->existencias = $request->existencias;
        $producto->marca_id = $request->marca_id;
        $producto->proveedor_id = $request->proveedor_id;

        $producto->save();

        return redirect('/productos');
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiModificar(Request $request) {
        $producto = Producto::findOrFail($request->id);
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->existencias = $request->existencias;
        $producto->marca_id = $request->marca_id;
        $producto->proveedor_id = $request->proveedor_id;

        $producto->save();

        return redirect('/productos');
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiEliminar(Request $request) {
        $producto = Producto::findOrFail($request->id);
        $producto->delete();

        return redirect('/productos');
    }
}
