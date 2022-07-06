<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <x-application-logo class="sidebar-brand-full" width="118" height="46" />
        <x-application-logo class="sidebar-brand-narrow" width="46" height="46" />
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
            <a class="nav-link" href="{{route('transaccion.list')}}">
                <i class="fas fa-circle nav-icon"></i> Transacciones
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('transaccion.form')}}">
                <i class="fas fa-circle nav-icon"></i> Nueva Transaccion
            </a>
        </li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>