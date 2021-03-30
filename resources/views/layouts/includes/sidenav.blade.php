<div id="layout-sidenav"
     class="{{ !config('app.horizontal_sidenav') ? 'layout-sidenav sidenav sidenav-vertical bg-dark' : 'layout-sidenav-horizontal sidenav sidenav-horizontal flex-grow-0 bg-dark container-p-x' }}">

    <ul class="sidenav-inner{{ !config('app.horizontal_sidenav') ? ' py-1' : '' }}">

        <li class="sidenav-item{{ set_active_path('pessoas') }}">
            <a href="{{ route('pessoas.index') }}" class="sidenav-link">
                <i class="sidenav-icon ion ion-md-people"></i>
                <div>Pessoas</div>
            </a>
        </li>

        <li class="sidenav-item{{ set_active_path('papeis') }}">
            <a href="{{ route('papeis.index') }}" class="sidenav-link">
                <i class="sidenav-icon ion ion-md-paper"></i>
                <div>Papéis</div>
            </a>
        </li>

        <li class="sidenav-item{{ set_active_path('grupos') }}">
            <a href="{{ route('grupos.index') }}" class="sidenav-link">
                <i class="sidenav-icon ion ion-md-paper"></i>
                <div>Grupos</div>
            </a>
        </li>

    </ul>
</div>
