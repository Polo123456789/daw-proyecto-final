<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacturaProducto extends Model
{
    use HasFactory;

    protected $table = "factura_producto";
    public $timestamps = false;
}
