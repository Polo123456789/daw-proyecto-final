<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Producto;

class Factura extends Model
{
    use HasFactory;

    public function productos() {
        return $this->belongsToMany(Producto::class, "factura_producto");
    }
}
