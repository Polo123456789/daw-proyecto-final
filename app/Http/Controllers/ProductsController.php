<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductsController extends Controller
{
    public function getIndex() {
        return view('productos/index', ['productos' => Producto::all()]);
    }

    public function getCrear() {
        return view('productos/create');
    }
}
