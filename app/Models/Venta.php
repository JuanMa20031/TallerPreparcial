<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas';

    protected $fillable = [
        'producto',
        'cantidad',
        'precio_unitario',
        'fecha_venta',
        'cliente',
        'pagado',
        'observaciones',
    ];
}
