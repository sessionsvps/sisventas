<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = ['id'];

    public function cabeceraVenta()
    {
        return $this->belongsTo(CabeceraVenta::class, 'id', 'id_venta');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_producto', 'id');
    }
}
