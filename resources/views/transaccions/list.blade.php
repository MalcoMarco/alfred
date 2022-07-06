@extends('dashboard.layout.appdash')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title mb-4"> Transacciones </h5>
        <div class="w-100 text-end mb-3">
            <a target="_blank" href="{{route('transaccion.export')}} " class="btn btn-success text-white">Exportar en .CSV</a>
        </div>
        <div class="w-100">
            @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" data-coreui-dismiss="alert">
                <strong>{{ Session::get('success') }}</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Número de Cuenta</th>
                            <th>Codigo de Banco</th>
                            <th>Nombre_Cliente</th>
                            <th>Tipo Cuenta</th>
                            <th>Tipo Movimiento</th>
                            <th>Valor Transacción</th>
                            <th>Referencia Transacción</th>
                            <th>Descripción Transascción</th>
                            <th>Email Beneficiario</th>
                            <th>Fax Beneficiario</th>
                            <th>Tipo Identificación</th>
                            <th>Número Idenficación</th>
                            <th>Created</th>
                            <th> Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaccions as $item)
                        <tr>
                            <td>{{$item->numero_cuenta}} </td>
                            <td>{{$item->codigo_banco}} </td>
                            <td>{{$item->nombre_cliente}} </td>
                            <td>{{$item->tipo_cuenta}} </td>
                            <td>{{$item->tipo_movimiento}} </td>
                            <td>{{$item->monto}} </td>
                            <td>{{$item->referencia}} </td>
                            <td>{{$item->descripcion}} </td>
                            <td>{{$item->emails_beneficiario}} </td>
                            <td>{{$item->fax_beneficiario}} </td>
                            <td>{{$item->tipo_id}} </td>
                            <td>{{$item->num_id}} </td>
                            <td>{{$item->created_at}} </td>
                            <td>
                                <form method="POST" action="{{route('transaccion.destroy',$item->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm text-white" onclick="return confirm('Desea eliminar el Registro?')">Eliminar</button> 
                                </form>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection