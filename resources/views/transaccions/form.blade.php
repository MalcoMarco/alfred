@extends('dashboard.layout.appdash')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title mb-4">{{__("Nueva Transaccion")}} </h5>
        @if($errors->any())
            <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
            </ul>
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" data-coreui-dismiss="alert">
                <strong>{{ Session::get('success') }}</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form method="POST" action="{{route('transaccion.store')}}" id="myFormId">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="numero_cuenta">Número de Cuenta*</label>
                    <input class="form-control" name="numero_cuenta" id="numero_cuenta" type="text" maxlength="34"
                        required value="{{ old('numero_cuenta') }}" />
                </div>
    
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="codigo_banco">Codigo de Banco*</label>
                    <input class="form-control" name="codigo_banco" id="codigo_banco" type="text" maxlength="17" required value="{{ old('codigo_banco') }}" />
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label" for="nombre_cliente">Nombre del Cliente*</label>
                    <input class="form-control" name="nombre_cliente" id="nombre_cliente" type="text" maxlength="22"
                        required value="{{ old('nombre_cliente') }}"/>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="tipo_cuenta">Tipo de Cuenta*</label>
                    <select class="form-select" name="tipo_cuenta" id="tipo_cuenta" required>
                        <option value="" disabled>
                            --Seleccione--
                        </option>
                        @foreach ( $tipo_cuentas as $key=>$item )
                        <option value="{{$key}}" {{ (old("tipo_cuenta") == $key ? "selected":"") }} >{{$item}} </option>                            
                        @endforeach
                    </select>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="tipo_movimiento">Tipo de Movimiento*</label>
                    <select class="form-select" name="tipo_movimiento" id="tipo_movimiento" required>
                        <option value="" disabled>
                            --Seleccione--
                        </option>
                        @foreach ( $tipo_movimientos as $key=>$item )
                        <option value="{{$key}}" {{ (old("tipo_movimiento") == $key ? "selected":"") }} >{{$item}} </option>                            
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="valor_transaccion">Valor de Transacción*</label>
                    <input class="form-control" name="monto" id="monto" type="number" step=".01" maxlength="15"
                        required value="{{ old('monto') }}"/>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label" for="referencia">Referencia de Transacción</label>
                    <input class="form-control" name="referencia" id="referencia" type="text" maxlength="10" value="{{ old('referencia') }}"/>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label" for="descripcion">Descripción de Transascción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" maxlength="80" >{{ old('descripcion') }}</textarea> 
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="emails_beneficiario">Email Beneficiario</label>
                    <input class="form-control" name="emails_beneficiario" id="emails_beneficiario" type="text" value="{{ old('emails_beneficiario') }}"/>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label" for="fax_beneficiario">Fax Beneficiario</label>
                    <input class="form-control" name="fax_beneficiario" id="fax_beneficiario" type="text" maxlength="30" value="{{ old('fax_beneficiario') }}"/>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label" for="tipo_identificacion">Tipo de Identificación*</label>
                    <select class="form-select" name="tipo_identificacion" id="tipo_identificacion" required>
                        <option value="" disabled>
                            --Seleccione--
                        </option>
                        @foreach ( $tipo_identificacions as $key=>$item )
                        <option value="{{$key}}" {{ (old("tipo_identificacion") == $key ? "selected":"") }} >{{$item}} </option>                            
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label" for="numero_identificacion">Número de Idenficación*</label>
                    <input class="form-control" name="numero_identificacion" id="numero_identificacion" type="text"
                        required maxlength="30" value="{{ old('numero_identificacion') }}"/>
                </div>
            </div>

            <div class="w-100 text-center mt-3"><button class="btn btn-primary" type="submit" class="">GUARDAR</button></div>
        </form>
    </div>
</div>
@endsection