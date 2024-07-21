<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabeceraVenta extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'id_cliente','id');
    }

    public function detallesventas(){
        return $this->hasMany(DetalleVenta::class, 'id_venta', 'id');
    }

    public function tipo()
    {
        return $this->hasOne(TipoDocumento::class, 'id_tipo', 'id');
    }
}
