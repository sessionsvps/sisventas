<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Param;

class TipoDocumento extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['descripcion'];

    public function cabeceraVenta()
    {
        return $this->belongsTo(CabeceraVenta::class, 'id', 'id_tipo');
    }

    public function parametro()
    {
        return $this->belongsTo(Parametro::class, 'id', 'id_tipo');
    }
}
