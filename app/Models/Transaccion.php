<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Transaccion extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'numero_cuenta',
        'codigo_banco',
        'tipo_cuenta',
        'nombre_cliente',
        'tipo_movimiento',
        'monto',
        'referencia',
        'descripcion',
        'emails_beneficiario',
        'fax_beneficiario',
        'tipo_id',
        'num_id',
    ];


}
