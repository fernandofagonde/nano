@if(session()->has('notice'))
    <div class="alert alert-dark-{{ session('notice.type') }} alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('notice.message') }}
    </div>
@endif
