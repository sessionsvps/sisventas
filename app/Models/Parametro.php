<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['id_tipo', 'numeracion','serie'];

    public function tipodocumento()
    {
        return $this->hasOne(TipoDocumento::class, 'id_tipo', 'id');
    }
}
