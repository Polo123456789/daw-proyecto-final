<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientsController extends Controller
{
    public function index() {
        return view('clientes/index', ['clientes' => Cliente::all()]);
    }
}
