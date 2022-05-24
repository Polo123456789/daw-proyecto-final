<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Proveedor;
use App\Models\Marca;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre",
        "precio",
        "existencias",
        "marca_id",
        "proveedor_id"
    ];

    public function proveedor() {
        return $this->belongsTo(Proveedor::class);
    }

    public function marca() {
        return $this->belongsTo(Marca::class);
    }
}
