<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Parametro extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    public static function ActualizarNumero($id_tipo, $numeracion)
    {
        try {
            DB::table('parametros')
            ->where('id_tipo', $id_tipo)
                ->update([
                    'numeracion' => $numeracion
                ]);
            return true;
        } catch (Exception $ex) {
            return false;
        }
    }    

    public function tipodocumento()
    {
        return $this->hasOne(TipoDocumento::class);
    }
}
