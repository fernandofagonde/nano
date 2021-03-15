@if ($errors->any())
    <div class="alert alert-dark-danger alert-dismissible fade show{{ isset($class) ? ' ' . $class : '' }}">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ $errors->first() }}
    </div>
@endif
