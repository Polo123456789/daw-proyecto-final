<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\FacturaProducto;
use App\Models\Producto;
use App\Models\Cliente;
use Illuminate\Support\Facades\Log;

class FacturaController extends Controller
{
    public function index() {
        return view('facturas/index', ['facturas' => Factura::all()]);
    }

    public function getCrear() {
        return view('facturas/create',
                    [
                        'productos' => Producto::all(),
                        'clientes' => Cliente::all()
                    ]);
    }

    public function getGestionar($id) {
        return view('facturas/manage-products',
                    [
                        'factura' => Factura::findOrFail($id),
                        'productos' => Producto::all()->whereNotIn("id",
                                                                   FacturaProducto::all()
                                                                       ->where("factura_id", $id)
                                                                       ->pluck("producto_id"))
                    ]);
    }

    public function getEliminar($id) {
        return view('facturas/delete', ['factura' => Factura::findOrFail($id)]);
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiCrear(Request $request) {
        $factura = new Factura;
        $factura->cliente_id = $request->cliente_id;

        $factura->save();
        return redirect('/facturas/gestionar/'.$factura->id);
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiGestionar(Request $request) {
        $content = $request->all();

        Log::debug($content);

        $factura = Factura::find($content['factura_id']);

        if (!$factura) {
            return response()->json([
                "error" => "La factura que se trata de editar no existe"
            ]);
        }

        FacturaProducto::where('factura_id', $factura->id)->delete();

        foreach ($content['productos'] as $p) {
            $fp = new FacturaProducto;
            $fp->factura_id = $factura->id;
            $fp->producto_id = $p['id'];
            $fp->cantidad = $p['cantidad'];

            $fp->save();
        }

        return response()->json();
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiEliminar(Request $request) {
        $factura = Factura::findOrFail($request->id);

        FacturaProducto::where('factura_id', $factura->id)->delete();

        $factura->delete();

        return redirect('/facturas');
    }
}
