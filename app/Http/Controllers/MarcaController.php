<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    public function index() {
        return view('marcas/index', ['marcas' => Marca::all()]);
    }

    public function getCrear() {
        return view('marcas/create');
    }

    /**
     * @param Integer $id
     */
    public function getModificar($id) {
        return view('marcas/modify', ['marca' => Marca::findOrFail($id)]);
    }

    /**
     * @param Integer $id
     */
    public function getEliminar($id) {
        return view('marcas/delete', ['marca' => Marca::findOrFail($id)]);
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiCrear(Request $request) {
        $marca = new Marca;
        $marca->nombre = $request->nombre;

        $marca->save();

        return redirect('/marcas');
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiModificar(Request $request) {
        $marca = Marca::findOrFail($request->id);
        $marca->nombre = $request->nombre;

        $marca->save();

        return redirect('/marcas');
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function apiEliminar(Request $request) {
        $marca = Marca::findOrFail($request->id);
        $marca->delete();

        return redirect('/marcas');
    }
}
