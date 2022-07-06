<?php

namespace App\Exports;

use App\Models\Transaccion;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransaccionsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transaccion::select(
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
        )->get();
    }


    public function headings(): array
    {
        return [
            'Número de Cuenta',
            'Código de Banco',
            'Tipo de Cuenta',
            'Nombre de Cliente',
            'Tipo de Movimiento',
            'Valor Transacción',
            'Referencia de Transacción',
            'Descripción de Transacción',
            'Emails de Beneficiario',
            'Fax de Beneficiario',
            'Tipo de Identificación',
            'Número de Identificación',
        ];
    }
}
