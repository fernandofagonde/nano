<div id="layout-sidenav"
     class="{{ !config('app.horizontal_sidenav') ? 'layout-sidenav sidenav sidenav-vertical bg-dark' : 'layout-sidenav-horizontal sidenav sidenav-horizontal flex-grow-0 bg-dark container-p-x' }}">

    <ul class="sidenav-inner{{ !config('app.horizontal_sidenav') ? ' py-1' : '' }}">        
        <li class="sidenav-item{{ set_active_path('clientes') }}">
            <a href="{{ route('clientes.index') }}" class="sidenav-link">
                <i class="sidenav-icon ion ion-md-business"></i>
                <div>Clientes</div>
            </a>
        </li>        
    </ul>
</div>
