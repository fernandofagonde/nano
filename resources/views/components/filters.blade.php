<form action="{{ route($route, $route_params??[]) }}" method="get" class="form-filters">
    <div class="ui-bordered px-4 pt-4 mb-0">
        <div class="form-row align-items-center">
            {{ $slot }}

            <div class="col-lg-3 mb-4">
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="w-50" style="padding-right: 5px">
                        <label class="form-label d-none d-lg-block">&nbsp;</label>
                        <button type="submit" class="btn btn-secondary btn-block">Filtrar</button>
                    </div>

                    <div class="w-50" style="padding-left: 5px">
                        <label class="form-label d-none d-lg-block">&nbsp;</label>
                        <a href="{{ route($route, $route_params??[]) }}" class="btn btn-secondary btn-block">Limpar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
