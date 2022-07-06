<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaccion;
use App\Exports\TransaccionsExport;
use Maatwebsite\Excel\Facades\Excel;

class TransaccionController extends Controller
{

    public function index()
    {
        $tipo_cuentas = [   
            'CC'=>'Cuenta Corriente', 
            'CA'=>'Cuenta de Ahorros',
            'TJ'=>'Tarjeta',
            'PR'=>'Préstamo'
        ];
        $tipo_movimientos = [
            'D'=>'Débito',
            'C'=>'Crédito'
        ];
        $tipo_identificacions=[
            'C'=>"Cédula",
            'R'=>'RNC',
            'P'=>'Pasaporte'
        ];
        return view('transaccions.form',compact('tipo_cuentas','tipo_movimientos','tipo_identificacions'));
    }

    public function list()
    {
        $transaccions = Transaccion::paginate();
        //return $transaccions;
        return view('transaccions.list',['transaccions'=>$transaccions]);
    }

    public function store(Request $request)
    {

        if(isset($request['emails_beneficiario'])) {
            // put keywords into array
            $emails = explode(';', $request['emails_beneficiario']);
            $test = [];
            $i = 0;
            foreach($emails as $keyword)
            {
                $test[$i] = trim($keyword);
                $i++;
            }
            $request['emails'] = $test;
        }

        $request->validate([
            'numero_cuenta' => 'required|string|max:34',
            'codigo_banco' => 'required|string|max:17',
            'tipo_cuenta' => 'required|in:CC,CA,TJ,PR',
            'nombre_cliente' => 'required|string|max:22',
            'tipo_movimiento' => 'required|in:D,C',
            'monto' => 'required|numeric|between:0,9999999999999.99',
            'referencia' => 'max:10|nullable',
            'descripcion' => 'max:80|nullable',
            'fax_beneficiario' => 'max:30|nullable',
            'emails_beneficiario' => 'max:1000|nullable',
            'emails' => 'nullable',
            'emails.*' => 'email',
            'tipo_identificacion' => 'required|in:C,R,P',
            'numero_identificacion' => 'required|string|max:30',
        ]);

        $transaccion = Transaccion::create([
            'numero_cuenta' => trim($request->numero_cuenta),
            'codigo_banco' => $request->codigo_banco,
            'tipo_cuenta' => $request->tipo_cuenta,
            'nombre_cliente' => $request->nombre_cliente,
            'tipo_movimiento' => $request->tipo_movimiento,
            'monto' => $request->monto,
            'referencia' => $request->referencia,
            'descripcion' => $request->descripcion,
            'fax_beneficiario' => $request->fax_beneficiario,
            'emails_beneficiario' => $request->emails_beneficiario,
            'tipo_id' => $request->tipo_identificacion,
            'num_id' => $request->numero_identificacion,
        ]);

        return back()->with('success','Nuevo registro guardado');
        //return response()->json(['message'=>'Transascción guardada correctamente.'], 200);
    }

    public function export() 
    {
        return Excel::download(
            new TransaccionsExport, 
            'transacciones.csv', 
            \Maatwebsite\Excel\Excel::CSV, [
                'Content-Type' => 'text/csv',
            ]
        );      
    }

    public function destroy(Transaccion $transaccion)
    {
        $transaccion->delete();
        return back()->with('success','Registro eliminado');
    }

}
