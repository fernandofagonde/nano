<div class="card grid-card">
    <div class="table-responsive">
        {{ $slot }}

        @if(isset($pagination) && strlen($pagination) > 0)
            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-md-center w-100 flex-column flex-md-row">
                    {{ $pagination }}
                </div>
            </div>
        @endif
    </div>
</div>
