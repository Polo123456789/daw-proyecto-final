<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Producto;
use App\Models\Cliente;

class Factura extends Model
{
    use HasFactory;

    public function productos() {
        return $this->belongsToMany(Producto::class, "factura_producto")->withPivot("cantidad");
    }

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }
}
